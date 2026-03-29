<?php

namespace App\Services\Friend;

use App\Models\PartnerList;
use App\Repositories\Common\BaseRepository;
use App\Repositories\Common\SanmuRepository;

/**
 *
 * Class FriendPartnerManageService
 * @package App\Services\Friend
 */
class FriendPartnerManageService
{
    protected $baseRepository;
    protected $sanmuRepository;

    public function __construct(
        BaseRepository $baseRepository,
        SanmuRepository $sanmuRepository
    )
    {
        $this->baseRepository = $baseRepository;
        $this->sanmuRepository = $sanmuRepository;
    }

    /* 获取合作伙伴数据列表 */
    public function getLinksList()
    {
        $filter = [];
        $filter['sort_by'] = empty($_REQUEST['sort_by']) ? 'link_id' : trim($_REQUEST['sort_by']);
        $filter['sort_order'] = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);

        /* 获得总记录数据 */
        $filter['record_count'] = PartnerList::count();

        $filter = page_and_size($filter);

        /* 获取数据 */
        $res = PartnerList::orderBy($filter['sort_by'], $filter['sort_order'])->offset($filter['start'])->limit($filter['page_size']);
        $res = $this->baseRepository->getToArrayGet($res);

        $list = [];
        if ($res) {
            foreach ($res as $rows) {
                if (empty($rows['link_logo'])) {
                    $rows['link_logo'] = '';
                } else {
                    if ((strpos($rows['link_logo'], 'http://') === false) && (strpos($rows['link_logo'], 'https://') === false)) {
                        $rows['link_logo'] = $this->sanmuRepository->getImagePath($rows['link_logo']);
                    }
                }

                $list[] = $rows;
            }
        }

        return ['list' => $list, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']];
    }
}
