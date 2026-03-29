<?php

namespace App\Services\Index;

use App\Models\OrderInfo;
use App\Models\Category;
use App\Models\Sessions;
use App\Models\SessionsData;
use App\Models\Stats;
use App\Repositories\Common\BaseRepository;
use App\Repositories\Common\SanmuRepository;
use App\Services\Common\TemplateService;
use App\Services\Goods\GoodsCommonService;
use Illuminate\Support\Facades\DB;

class IndexManageService
{
    protected $baseRepository;
    protected $templateService;
    protected $goodsCommonService;
    protected $sanmuRepository;

    public function __construct(
        BaseRepository $baseRepository
    )
    {
        $this->baseRepository = $baseRepository;
        $this->templateService = $templateService;
        $this->goodsCommonService = $goodsCommonService;
        $this->config = $this->sanmuRepository->sanmuConfig();
    /**
     * 计算订单数量
     *
     * @param int $ru_id
     * @return mixed
     */
    public function getOrderCount($ru_id = 0)
    {
        $res = OrderInfo::whereRaw(1);
        if ($ru_id > 0) {
            //主订单下有子订单时，则主订单不显示
            $res = $res->where('ru_id', $ru_id)->where('main_count', 0);
        }
        $count = $res->count();

        return $count;
    }

    /**
     * @param int $type
     */
    public function clearSessions($type = 0)
    {
        if ($type == 0) {
            Sessions::truncate();
            SessionsData::truncate();
            Stats::truncate();
        } elseif ($type == 1) {
            Sessions::truncate();
            SessionsData::truncate();
        } else {
            Stats::truncate();
        }

        return;
    }


    public function get_child_cat( $tree_id = 0, $num = 0 )
{
        $three_arr = [];
         $res = Category::whereRaw(1);
        $sql = $res->where('parent_id', $tree_id)->where('is_show', 1);               
       $count = $sql->count();
     
        if ( $count || $tree_id == 0 )
        {

 $res = Category::select('cat_id', 'cat_name', 'parent_id', 'is_show')
        ->where('parent_id', $tree_id)
        ->where('is_show', 1)
        ->orderBy('sort_order', 'ASC')
        ->orderBy('cat_id', 'ASC');        

              $res = $this->baseRepository->getToArrayGet($res);
                foreach ( $res as $row )
                {
                        if ( $row['is_show'] )
                        {
                                $three_arr[$row['cat_id']]['id'] = $row['cat_id'];
                                $three_arr[$row['cat_id']]['name'] = $row['cat_name'];
                                $three_arr[$row['cat_id']]['url'] = app(SanmuRepository::class)->buildUri( "category", array(
                                        "cid" => $row['cat_id']
                                ), $row['cat_name'] );
                                $three_arr[$row['cat_id']]['new_goods'] = get_cat_recommend_goods('new', get_children($row['cat_id']), 8);
                        }
                }
        }
        return $three_arr;
}  
    public function get_cat_recommend_goods( $type = "", $cats = "", $cat_num = 0, $brand = 0, $min = 0, $max = 0, $ext = "" )
{
    




        $brand_where = 0 < $brand ? " AND g.brand_id = '".$brand."'" : "";
        $price_where = 0 < $min ? " AND g.shop_price >= ".$min." " : "";
        $price_where .= 0 < $max ? " AND g.shop_price <= ".$max." " : "";
        $sql = "SELECT g.goods_id, g.goods_name, g.goods_sn,  g.market_price, g.shop_price AS org_price, g.promote_price, ".( "IFNULL(mp.user_price, g.shop_price * '".$session['discount']."') AS shop_price, " )."(select AVG(r.comment_rank) from ".$this->sanmu->table( "comment" )." as r where r.id_value = g.goods_id AND r.comment_type = 0 AND r.parent_id = 0 AND r.status = 1) AS comment_rank, (select IFNULL(sum(og.goods_number), 0) from ".$this->sanmu->table( "order_goods" )." as og where og.goods_id = g.goods_id) AS sell_number, promote_start_date, promote_end_date, g.goods_brief, g.goods_thumb, goods_img, b.brand_name, b.brand_id, g.is_best, g.is_new, g.is_hot, g.is_promote FROM ".$this->sanmu->table( "goods" )." AS g LEFT JOIN ".$this->sanmu->table( "brand" )." AS b ON b.brand_id = g.brand_id LEFT JOIN ".$this->sanmu->table( "member_price" )." AS mp ".( "ON mp.goods_id = g.goods_id AND mp.user_rank = '".$session['user_rank']."' " )."WHERE g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 ".$brand_where.$price_where.$ext;
        $num = 0;
        $type2lib = array( "best" => "recommend_best", "new" => "recommend_new", "hot" => "recommend_hot", "promote" => "recommend_promotion" );
        if ( $cat_num == 0 )
        {

                $num = $this->templateService->getLibraryNumber( $type2lib[$type] );
        }
        else
        {
                $num = $cat_num;
        }
        switch ( $type )
        {
        case "best" :
                $sql .= " AND is_best = 1";
                break;
        case "new" :
                $sql .= " AND is_new = 1";
                break;
        case "hot" :
                $sql .= " AND is_hot = 1";
                break;
        case "promote" :
                $time = gmtime( );
                $sql .= " AND is_promote = 1 AND promote_start_date <= '".$time."' AND promote_end_date >= '{$time}'";
        }
        if ( !empty( $cats ) )
        {
                $sql .= " AND (".$cats." OR ".get_extension_goods( $cats ).")";
        }
        $order_type =$this->config['recommend_order'];
        $sql .= $order_type == 0 ? " ORDER BY g.sort_order, g.last_update DESC" : " ORDER BY RAND()";
        $res = $this->db->SelectLimit( $sql, $num );
        $idx = 0;
        $goods = array( );
        while ( $row = $this->db->fetchRow( $res ) )
        {
                if ( 0 < $row['promote_price'] )
                {
                        $promote_price = bargain_price( $row['promote_price'], $row['promote_start_date'], $row['promote_end_date'] );
                        $goods[$idx]['promote_price'] = 0 < $promote_price ? $this->sanmuRepository->getPriceFormat( $promote_price ) : "";
                }
                else
                {
                        $goods[$idx]['promote_price'] = "";
                }
                $row['comment_rank'] = ceil( $row['comment_rank'] ) == 0 ? 5 : ceil( $row['comment_rank'] );
                $goods[$idx]['id'] = $row['goods_id'];
                $goods[$idx]['name'] = $row['goods_name'];
                $goods[$idx]['goods_sn'] = $row['goods_sn'];
                $goods[$idx]['comment_rank'] = $row['comment_rank'];
                $goods[$idx]['sell_number'] = $row['sell_number'];
                $goods[$idx]['is_new'] = $row['is_new'];
                $goods[$idx]['is_best'] = $row['is_best'];
                $goods[$idx]['is_hot'] = $row['is_hot'];
                $goods[$idx]['is_promote'] = $row['is_promote'];
                $goods[$idx]['brief'] = $row['goods_brief'];
                $goods[$idx]['brand_id'] = $row['brand_id'];
                $goods[$idx]['brand_name'] = $row['brand_name'];
                $goods[$idx]['short_name'] = 0 < $this->config['goods_name_length'] ? sub_str( $row['goods_name'], $this->config['goods_name_length'] ) : $row['goods_name'];
                $goods[$idx]['market_price'] = $this->sanmuRepository->getPriceFormat( $row['market_price'] );
                $goods[$idx]['shop_price'] = $this->sanmuRepository->getPriceFormat( $row['shop_price'] );
                $goods[$idx]['thumb'] = $this->sanmuRepository->getImagePath( $row['goods_id'], $row['goods_thumb'], TRUE );
                $goods[$idx]['goods_img'] = $this->sanmuRepository->getImagePath( $row['goods_id'], $row['goods_img'] );
                $goods[$idx]['url'] = app(SanmuRepository::class)->buildUri( "goods", array(
                        "gid" => $row['goods_id']
                ), $row['goods_name'] );
                $goods[$idx]['short_style_name'] = $this->goodsCommonService->addStyle( $goods[$idx]['short_name'], '' );
                ++$idx;
        }
        return $goods;
}  
}
