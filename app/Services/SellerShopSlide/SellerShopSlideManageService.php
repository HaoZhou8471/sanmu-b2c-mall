<?php

namespace App\Services\SellerShopSlide;

use App\Models\SellerShopslide;
use App\Repositories\Common\BaseRepository;
use App\Repositories\Common\SanmuRepository;
use App\Services\Common\CommonManageService;
use App\Services\Merchant\MerchantCommonService;

class SellerShopSlideManageService
{

    protected $baseRepository;
    protected $commonManageService;
    protected $merchantCommonService;
    protected $sanmuRepository;

    public function __construct(
        BaseRepository $baseRepository,
        CommonManageService $commonManageService,
        MerchantCommonService $merchantCommonService,
        SanmuRepository $sanmuRepository
    )
    {
        $this->baseRepository = $baseRepository;
        $this->commonManageService = $commonManageService;
        $this->merchantCommonService = $merchantCommonService;
        $this->sanmuRepository = $sanmuRepository;
    }


    /**
     * 获取幻灯片列表
     *
     * @access  public
     * @return  array
     */
    public function getSellerSlide($seller_theme = '')
    {
        $adminru = get_admin_ru_id();

        $res = SellerShopslide::where('ru_id', $adminru['ru_id'])->where('seller_theme', $seller_theme);
        $slide_list = $this->baseRepository->getToArrayGet($res);

        foreach ($slide_list as $key => $val) {
            $slide_list[$key]['slide_type'] = $val['slide_type'] == 'roll' ? '滚动' : ($val['slide_type'] == 'shade' ? '渐变' : '');
            $slide_list[$key]['img_url'] = $this->sanmuRepository->getImagePath($val['img_url']);
        }

        return $slide_list;
    }
}
