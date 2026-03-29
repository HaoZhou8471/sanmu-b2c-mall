<?php

namespace App\Api\Fourth\Controllers;

use App\Api\Foundation\Controllers\Controller;
use App\Models\Region;
use App\Repositories\Common\SanmuRepository;
use App\Services\Common\AreaService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class PositionController
 * @package App\Api\Fourth\Controllers
 */
class PositionController extends Controller
{
    private $config;
    private $areaService;
    private $sanmuRepository;

    public function __construct(
        SanmuRepository $sanmuRepository,
        AreaService $areaService
    )
    {
        $this->sanmuRepository = $sanmuRepository;
        $this->config = $this->sanmuRepository->sanmuConfig();
        $this->areaService = $areaService;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws Exception
     */
    public function index(Request $request)
    {
        $lat = $request->get('lat', '31.22928');
        $lng = $request->get('lng', '121.40966');

        $key = $this->config['tengxun_key'] ? $this->config['tengxun_key'] : 'XSYBZ-P2G34-3K7UB-XPFZS-TBGHT-CXB4U';

        $data = geocoder($lat, $lng, $key);

        /**
         * 查询区县地区ID
         */
        $region = Region::where('region_name', $data['district'])->first();
        $region = is_null($region) ? [] : $region->toArray();

        /**
         * 组装地区ID
         */
        if ($region) {
            $data['province_id'] = Region::where('region_id', $region['parent_id'])->value('parent_id');
            $data['city_id'] = $region['parent_id'];
            $data['district_id'] = $region['region_id'];
        }

        return $this->succeed($data);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @throws Exception
     */
    public function ip(Request $request)
    {
        $ip = $request->get('ip', $request->getClientIp()); // 默认上海地区

        $data = $this->areaService->ipAreaName($ip);

        /**
         * 查询区县地区ID
         */
        $region = Region::where('region_name', $data['city'])->first();
        $region = is_null($region) ? [] : $region->toArray();

        /**
         * 组装地区ID
         */
        if ($region) {
            $data['province_id'] = Region::where('region_id', $region['parent_id'])->value('parent_id');
            $data['city_id'] = $region['parent_id'];
            $data['district_id'] = $region['region_id'];
        }

        return $this->succeed($data);
    }
}
