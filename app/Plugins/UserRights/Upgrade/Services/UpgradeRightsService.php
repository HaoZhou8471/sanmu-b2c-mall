<?php

namespace App\Plugins\UserRights\Upgrade\Services;

use App\Repositories\Common\BaseRepository;
use App\Repositories\Common\SanmuRepository;
use App\Repositories\Common\TimeRepository;
use App\Services\UserRights\UserRightsService;


class UpgradeRightsService
{
    protected $baseRepository;
    protected $timeRepository;
    protected $sanmuRepository;
    protected $userRightsService;

    public function __construct(
        BaseRepository $baseRepository,
        TimeRepository $timeRepository,
        SanmuRepository $sanmuRepository,
        UserRightsService $userRightsService
    )
    {
        $this->baseRepository = $baseRepository;
        $this->timeRepository = $timeRepository;
        $this->sanmuRepository = $sanmuRepository;
        $this->userRightsService = $userRightsService;
    }


}