<?php

namespace App\Services\SellerDomain;

use App\Models\SellerDomain;
use App\Repositories\Common\BaseRepository;
use App\Repositories\Common\SanmuRepository;
use App\Repositories\Common\TimeRepository;
use App\Services\Common\CommonManageService;
use App\Services\Merchant\MerchantCommonService;

class SellerDomainManageService
{

    protected $baseRepository;
    protected $commonManageService;
    protected $merchantCommonService;
    protected $timeRepository;
    protected $sanmuRepository;

    public function __construct(
        BaseRepository $baseRepository,
        CommonManageService $commonManageService,
        MerchantCommonService $merchantCommonService,
        TimeRepository $timeRepository,
        SanmuRepository $sanmuRepository
    )
    {
        $this->baseRepository = $baseRepository;
        $this->commonManageService = $commonManageService;
        $this->merchantCommonService = $merchantCommonService;
        $this->timeRepository = $timeRepository;
        $this->sanmuRepository = $sanmuRepository;
    }

    /*分页*/
    public function sellerDomainList()
    {

        $adminru = get_admin_ru_id();

        $res = SellerDomain::whereRaw(1);
        if ($adminru['ru_id'] > 0) {
            $res = $res->where('ru_id', $adminru['ru_id']);
        }

        $filter['record_count'] = $res->count();
        $filter = page_and_size($filter);
        /* 获活动数据 */

        $filter['keywords'] = isset($filter['keywords']) ? stripslashes($filter['keywords']) : '';

        $res = $res->orderBy('id')
            ->offset($filter['start'])
            ->limit($filter['page_size']);
        $res = $this->baseRepository->getToArrayGet($res);

        if ($res) {
            foreach ($res as $key => $row) {
                $res[$key]['domain_name'] = $row['domain_name'] ? $row['domain_name'] . '.' . $this->sanmuRepository->hostDomain() : lang('common.temporary_no');
                $res[$key]['shop_name'] = $this->merchantCommonService->getShopName($row['ru_id'], 1);
                $res[$key]['validity_time'] = $this->timeRepository->getLocalDate($GLOBALS['_CFG']['time_format'], $row['validity_time']);
            }
        }

        $arr = ['domain_list' => $res, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']];
        return $arr;
    }
}
