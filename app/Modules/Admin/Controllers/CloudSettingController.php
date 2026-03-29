<?php

namespace App\Modules\Admin\Controllers;

use App\Repositories\Common\SanmuRepository;
use App\Services\Common\ConfigManageService;

/**
 * 会员管理程序
 */
class CloudSettingController extends InitController
{
    protected $configManageService;
    protected $sanmuRepository;

    public function __construct(
        ConfigManageService $configManageService,
        SanmuRepository $sanmuRepository
    )
    {
        $this->configManageService = $configManageService;
        $this->sanmuRepository = $sanmuRepository;
    }

    public function index()
    {

        /* 检查权限 */
        admin_priv('cloud_setting');

        /* ------------------------------------------------------ */
        //-- 店铺设置
        /* ------------------------------------------------------ */
        if ($_REQUEST['act'] == 'step_up') {

            $this->sanmuRepository->helpersLang('shop_config', 'admin');

            $this->smarty->assign('ur_here', $GLOBALS['_LANG']['01_cloud_setting']);

            $this->smarty->assign('menu_select', ['action' => '25_file', 'current' => '01_cloud_setting']);

            $group_list = $this->configManageService->getUpSettings('cloud');
            $this->smarty->assign('group_list', $group_list);

            return $this->smarty->display('cloud_step_up.dwt');
        }
    }
}
