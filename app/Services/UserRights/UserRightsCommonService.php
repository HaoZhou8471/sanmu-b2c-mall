<?php

namespace App\Services\UserRights;

use App\Models\UserMembershipRights;
use App\Repositories\Common\BaseRepository;
use App\Repositories\Common\SanmuRepository;
use App\Repositories\Common\TimeRepository;


class UserRightsCommonService
{
    protected $config;

    protected $baseRepository;
    protected $timeRepository;
    protected $sanmuRepository;

    public function __construct(
        BaseRepository $baseRepository,
        TimeRepository $timeRepository,
        SanmuRepository $sanmuRepository
    )
    {
        $this->baseRepository = $baseRepository;
        $this->timeRepository = $timeRepository;
        $this->sanmuRepository = $sanmuRepository;
    }


    /**
     * 查询信息
     * @param string $code
     * @return array|mixed
     */
    public function userRightsInfo($code = '')
    {
        if (empty($code)) {
            return false;
        }

        $info = UserMembershipRights::query()->where('code', $code)->first();

        $info = $info ? $info->toArray() : [];

        if (!empty($info)) {
            $info['install'] = 1;
            $info['rights_configure'] = empty($info['rights_configure']) ? '' : unserialize($info['rights_configure']);
            $info['icon'] = empty($info['icon']) ? '' : ((stripos($info['icon'], 'assets') !== false) ? asset($info['icon']) : $this->sanmuRepository->getImagePath($info['icon']));
        }

        return $info;
    }

}