<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SellerShopinfo
 */
class SellerShopinfo extends Model
{
    protected $table = 'supplier';

    public $timestamps = false;

    protected $fillable = [
        'supplier_id',
        'type_id',
        'supplier_name',
        'company_name',
        'company_type',
        'supplier_desc',
        'supplier_tags',
        'logo',
        'is_groom',
        'is_show',
        'sort_order',
        'supplier_notice',
        'status',
        'add_time'
    ];

    protected $guarded = [];


    /**
     * @return mixed
     */
    public function getSupplierId()
    {
        return $this->supplier_id;
    }

    /**
     * @return mixed
     */
    public function getShopName()
    {
        return $this->supplier_name;
    }

    /**
     * @return mixed
     */
    public function getShopTitle()
    {
        return $this->company_name;
    }

    /**
     * @return mixed
     */
    public function getShopKeyword()
    {
        return $this->company_type;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return mixed
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @return mixed
     */
    public function getShopAddress()
    {
        return $this->shop_address;
    }

    /**
     * @return mixed
     */
    public function getSellerEmail()
    {
        return $this->seller_email;
    }

    /**
     * @return mixed
     */
    public function getKfQq()
    {
        return $this->kf_qq;
    }

    /**
     * @return mixed
     */
    public function getKfWw()
    {
        return $this->kf_ww;
    }

    /**
     * @return mixed
     */
    public function getMeiqia()
    {
        return $this->meiqia;
    }

    /**
     * @return mixed
     */
    public function getKfType()
    {
        return $this->kf_type;
    }

    /**
     * @return mixed
     */
    public function getKfTel()
    {
        return $this->kf_tel;
    }

    /**
     * @return mixed
     */
    public function getSiteHead()
    {
        return $this->site_head;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @return mixed
     */
    public function getShopLogo()
    {
        return $this->shop_logo;
    }

    /**
     * @return mixed
     */
    public function getLogoThumb()
    {
        return $this->logo_thumb;
    }

    /**
     * @return mixed
     */
    public function getStreetThumb()
    {
        return $this->street_thumb;
    }

    /**
     * @return mixed
     */
    public function getBrandThumb()
    {
        return $this->brand_thumb;
    }

    /**
     * @return mixed
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * @return mixed
     */
    public function getStreetDesc()
    {
        return $this->supplier_desc;
    }

    /**
     * @return mixed
     */
    public function getShopHeader()
    {
        return $this->shop_header;
    }

    /**
     * @return mixed
     */
    public function getShopColor()
    {
        return $this->shop_color;
    }

    /**
     * @return mixed
     */
    public function getShopStyle()
    {
        return $this->shop_style;
    }

    /**
     * @return mixed
     */
    public function getShopClose()
    {
        return $this->shop_close;
    }

    /**
     * @return mixed
     */
    public function getApply()
    {
        return $this->apply;
    }

    /**
     * @return mixed
     */
    public function getIsStreet()
    {
        return $this->is_street;
    }

    /**
     * @return mixed
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @return mixed
     */
    public function getSellerTheme()
    {
        return $this->seller_theme;
    }

    /**
     * @return mixed
     */
    public function getWinGoodsType()
    {
        return $this->win_goods_type;
    }

    /**
     * @return mixed
     */
    public function getStoreStyle()
    {
        return $this->store_style;
    }

    /**
     * @return mixed
     */
    public function getCheckSellername()
    {
        return $this->check_sellername;
    }

    /**
     * @return mixed
     */
    public function getShopnameAudit()
    {
        return $this->shopname_audit;
    }

    /**
     * @return mixed
     */
    public function getShippingId()
    {
        return $this->shipping_id;
    }

    /**
     * @return mixed
     */
    public function getShippingDate()
    {
        return $this->shipping_date;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @return mixed
     */
    public function getTengxunKey()
    {
        return $this->tengxun_key;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @return mixed
     */
    public function getKfAppkey()
    {
        return $this->kf_appkey;
    }

    /**
     * @return mixed
     */
    public function getKfTouid()
    {
        return $this->kf_touid;
    }

    /**
     * @return mixed
     */
    public function getKfLogo()
    {
        return $this->kf_logo;
    }

    /**
     * @return mixed
     */
    public function getKfWelcomeMsg()
    {
        return $this->supplier_tags;
    }

    /**
     * @return mixed
     */
    public function getKfSecretkey()
    {
        return $this->logo;
    }

    /**
     * @return mixed
     */
    public function getUserMenu()
    {
        return $this->is_groom;
    }

    /**
     * @return mixed
     */
    public function getKfImSwitch()
    {
        return $this->is_show;
    }

    /**
     * @return mixed
     */
    public function getSellerMoney()
    {
        return $this->sort_order;
    }

    /**
     * @return mixed
     */
    public function getFrozenMoney()
    {
        return $this->supplier_notice;
    }

    /**
     * @return mixed
     */
    public function getCreditMoney()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getSellerTemplates()
    {
        return $this->seller_templates;
    }

    /**
     * @return mixed
     */
    public function getTemplatesMode()
    {
        return $this->templates_mode;
    }

    /**
     * @return mixed
     */
    public function getJsAppkey()
    {
        return $this->js_appkey;
    }

    /**
     * @return mixed
     */
    public function getJsAppsecret()
    {
        return $this->js_appsecret;
    }

    /**
     * @return mixed
     */
    public function getPrintType()
    {
        return $this->print_type;
    }

    /**
     * @return mixed
     */
    public function getKdniaoPrinter()
    {
        return $this->kdniao_printer;
    }

    /**
     * @return mixed
     */
    public function getBusinessPractice()
    {
        return $this->business_practice;
    }

    /**
     * @return mixed
     */
    public function getReviewStatus()
    {
        return $this->review_status;
    }

    /**
     * @return mixed
     */
    public function getReviewContent()
    {
        return $this->add_time;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setSupplierId($value)
    {
        $this->supplier_id = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setShopName($value)
    {
        $this->supplier_name = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setShopTitle($value)
    {
        $this->company_name = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setShopKeyword($value)
    {
        $this->company_type = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setCountry($value)
    {
        $this->country = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setProvince($value)
    {
        $this->province = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setCity($value)
    {
        $this->city = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setDistrict($value)
    {
        $this->district = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setShopAddress($value)
    {
        $this->shop_address = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setSellerEmail($value)
    {
        $this->seller_email = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setKfQq($value)
    {
        $this->kf_qq = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setKfWw($value)
    {
        $this->kf_ww = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setMeiqia($value)
    {
        $this->meiqia = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setKfType($value)
    {
        $this->kf_type = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setKfTel($value)
    {
        $this->kf_tel = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setSiteHead($value)
    {
        $this->site_head = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setMobile($value)
    {
        $this->mobile = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setShopLogo($value)
    {
        $this->shop_logo = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setLogoThumb($value)
    {
        $this->logo_thumb = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setStreetThumb($value)
    {
        $this->street_thumb = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setBrandThumb($value)
    {
        $this->brand_thumb = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setNotice($value)
    {
        $this->notice = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setStreetDesc($value)
    {
        $this->supplier_desc = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setShopHeader($value)
    {
        $this->shop_header = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setShopColor($value)
    {
        $this->shop_color = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setShopStyle($value)
    {
        $this->shop_style = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setShopClose($value)
    {
        $this->shop_close = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setApply($value)
    {
        $this->apply = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setIsStreet($value)
    {
        $this->is_street = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setRemark($value)
    {
        $this->remark = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setSellerTheme($value)
    {
        $this->seller_theme = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setWinGoodsType($value)
    {
        $this->win_goods_type = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setStoreStyle($value)
    {
        $this->store_style = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setCheckSellername($value)
    {
        $this->check_sellername = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setShopnameAudit($value)
    {
        $this->shopname_audit = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setShippingId($value)
    {
        $this->shipping_id = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setShippingDate($value)
    {
        $this->shipping_date = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setLongitude($value)
    {
        $this->longitude = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setTengxunKey($value)
    {
        $this->tengxun_key = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setLatitude($value)
    {
        $this->latitude = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setKfAppkey($value)
    {
        $this->kf_appkey = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setKfTouid($value)
    {
        $this->kf_touid = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setKfLogo($value)
    {
        $this->kf_logo = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setKfWelcomeMsg($value)
    {
        $this->supplier_tags = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setKfSecretkey($value)
    {
        $this->logo = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setUserMenu($value)
    {
        $this->is_groom = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setKfImSwitch($value)
    {
        $this->is_show = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setSellerMoney($value)
    {
        $this->sort_order = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setFrozenMoney($value)
    {
        $this->supplier_notice = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setCreditMoney($value)
    {
        $this->status = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setSellerTemplates($value)
    {
        $this->seller_templates = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setTemplatesMode($value)
    {
        $this->templates_mode = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setJsAppkey($value)
    {
        $this->js_appkey = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setJsAppsecret($value)
    {
        $this->js_appsecret = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPrintType($value)
    {
        $this->print_type = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setKdniaoPrinter($value)
    {
        $this->kdniao_printer = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setBusinessPractice($value)
    {
        $this->business_practice = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setReviewStatus($value)
    {
        $this->review_status = $value;
        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function setReviewContent($value)
    {
        $this->add_time = $value;
        return $this;
    }
}
