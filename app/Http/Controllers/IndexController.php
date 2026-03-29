<?php

namespace App\Http\Controllers;

use App\Models\HomeTemplates;
use App\Models\RsRegion;
use App\Repositories\Common\BaseRepository;
use App\Repositories\Common\SanmuRepository;
use App\Modules\Stores\Controllers\InitService;
use App\Repositories\Common\FileSystemsRepository;
use App\Services\Article\ArticleCommonService;
use App\Services\Common\TemplateService;
use App\Services\Goods\GoodsGuessService;
 

/**
 * 首页文件
 */
class IndexController extends InitController
{
    protected $goodsGuessService;
    protected $templateService;
    protected $fileSystemsRepository;
    protected $sanmuRepository;
    protected $baseRepository;
    protected $homeindex;
    protected $config;
    protected $initService;
    protected $articleCommonService;

    public function __construct(
        GoodsGuessService $goodsGuessService,
        InitService $initService,
        TemplateService $templateService,
        FileSystemsRepository $fileSystemsRepository,
        SanmuRepository $sanmuRepository,
        BaseRepository $baseRepository,
        ArticleCommonService $articleCommonService
    )
    {
        $this->goodsGuessService = $goodsGuessService;
        $this->initService = $initService;
        $this->templateService = $templateService;
        $this->fileSystemsRepository = $fileSystemsRepository;
        $this->sanmuRepository = $sanmuRepository;
        $this->baseRepository = $baseRepository;
        $this->config = $this->config();
        $this->articleCommonService = $articleCommonService;
    }

    public function index()
    {
        /**
         * Start
         *
         * @param $warehouse_id 仓库ID
         * @param $area_id 省份ID
         * @param $area_city 城市ID
         */
      
        /* End */

        load_helper('visual');

        $user_id = session('user_id', 0);

        /* 跳转H5 start */
        $Loaction = 'mobile/';
        $uachar = $this->sanmuRepository->getReturnMobile($Loaction);

        if ($uachar) {
            return $uachar;
        }
        /* 跳转H5 end */

        //判断可视化模板
        //预览传值
        $suffix = addslashes(request()->input('suffix', ''));
        

        $defalut_template = $this->config['template'] ?? 'sanmubuy';

  

        $dir = storage_public(DATA_DIR . '/home_templates/' . $defalut_template . '/' . $suffix);
    
        $this->smarty->assign('cfg_bonus_adv', $this->config['bonus_adv'] ?? 0);

        /* 缓存编号 */
        $cache_id = sprintf('%X', crc32(session('user_rank') . '-' . $this->config['lang']));

        /* ------------------------------------------------------ */
        //-- 判断是否存在缓存，如果存在则调用缓存，反之读取相应内        容
        /* ------------------------------------------------------ */
        if (!empty($suffix) && $this->fileSystemsRepository->dirExists($dir)) {

            /**
             * 首页可视化
             * 下载OSS模板文件
             */
            get_down_hometemplates($suffix);

            $this->homeindex = app(HomeindexController::class);

            $this->homeindex->suffix = $suffix;
            $this->homeindex->preview = $preview;
            $this->homeindex->dir = $dir;
           
           
            $this->homeindex->config = $this->config;
            $this->homeindex->articleCommonService = $this->articleCommonService;
            $this->homeindex->sanmuRepository = $this->sanmuRepository;

            $home = $this->homeindex;

            $content = cache()->remember('index.home.' . $cache_id, $this->config['cache_time'], function () use ($home) {
                return $home->index();
            });
        } else {
            $content = cache()->remember('index.dwt' . $cache_id, $this->config['cache_time'], function () use ( $user_id, $cache_id) {
                assign_template();

                $position = assign_ur_here();
                $this->smarty->assign('ur_here', $position['ur_here']);  // 当前位置

                //获取seo start
                $seo = get_seo_words('index');

                if ($seo) {
                    foreach ($seo as $key => $value) {
                        $seo[$key] = str_replace(['{sitename}', '{key}', '{description}'], [$position['title'], $this->config['shop_keywords'], $this->config['shop_desc']], $value);
                    }
                }

                if (isset($seo['keywords']) && !empty($seo['keywords'])) {
                    $this->smarty->assign('keywords', htmlspecialchars($seo['keywords']));
                } else {
                    $this->smarty->assign('keywords', htmlspecialchars($this->config['shop_keywords']));
                }

                if (isset($seo['description']) && !empty($seo['description'])) {
                    $this->smarty->assign('description', htmlspecialchars($seo['description']));
                } else {
                    $this->smarty->assign('description', htmlspecialchars($this->config['shop_desc']));
                }

                if (isset($seo['title']) && !empty($seo['title'])) {
                    $this->smarty->assign('page_title', htmlspecialchars($seo['title']));
                } else {
                    $this->smarty->assign('page_title', $position['title']);
                }
                //获取seo end

                /* meta information */
                $this->smarty->assign('flash_theme', $this->config['flash_theme']);  // Flash轮播图片模板

                $this->smarty->assign('feed_url', ($this->config['rewrite'] == 1) ? 'feed.xml' : 'feed.php'); // RSS URL

                $this->smarty->assign('index_ad', $index_ad);

                $this->smarty->assign('rec_cat', $recommend_category);
                $this->smarty->assign('expert_field', $index_expert_field);
                $this->smarty->assign('recommend_merchants', $recommend_merchants);

                $this->smarty->assign('cat_goods_banner', $cat_goods_banner);
                $this->smarty->assign('cat_goods_hot', $cat_goods_hot);
            
                $this->smarty->assign('index_banner_group', $index_banner_group);
           
                $this->smarty->assign('top_banner', 'top_banner');
                //$this->smarty->assign('cat_recommend_type',$this->initService->get_cat_recommend_type(967));
               

   $get_categories_tree = get_categories_tree();
     $this->smarty->assign('get_categories_tree', $get_categories_tree); 
$get_flash_xml =  $this->get_flash_xml();

     $this->smarty->assign("flash",$get_flash_xml);
 

                $this->smarty->assign('helps', $this->articleCommonService->getShopHelp());       // 网店帮助

                $bonushome = '';
                for ($i = 1; $i <= $this->config['auction_ad']; $i++) {
                    $bonushome .= "'bonushome" . $i . ","; //首页楼层左侧广告图
                }
                $this->smarty->assign('bonushome', $bonushome);

                $floor_data = $this->templateService->getFloorData('index');
                $this->smarty->assign('floor_data', $floor_data);

                /**
                 * Start
                 *
                 * 猜你喜欢商品
                 */

                /* End */

                /* 页面中的动态内容 */
                assign_dynamic('index');

                return $this->smarty->display('index.dwt', $cache_id);
            });
        }

        return $content;
    }
	
	function get_flash_xml()
    {
        $flashdb = [];
        if (file_exists(storage_public(DATA_DIR . '/flash_data.xml'))) {
            $flash_data = read_static_flie_cache('flash_data', 'xml', storage_public(DATA_DIR . '/'));
            // 兼容v2.7.0及以前版本
            if (!preg_match_all('/item_url="([^"]+)"\slink="([^"]+)"\stext="([^"]*)"\ssort="([^"]*)"/', $flash_data, $t, PREG_SET_ORDER)) {
                preg_match_all('/item_url="([^"]+)"\slink="([^"]+)"\stext="([^"]*)"/', $flash_data, $t, PREG_SET_ORDER);
            }

            if (!empty($t)) {
                foreach ($t as $key => $val) {
                    $val[4] = isset($val[4]) ? $val[4] : 0;
                    $flashdb[] = ['src' => $val[1], 'url' => $val[2], 'text' => $val[3], 'sort' => $val[4]];
                }
            }
        }
        return $flashdb;
    }
}
