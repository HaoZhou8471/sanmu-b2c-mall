//顶部伸展广告
//if ($("#js_ads_banner_top_slide").length){
//	var $slidebannertop = $("#js_ads_banner_top_slide"),$bannertop = $("#js_ads_banner_top");
//	setTimeout(function(){$bannertop.slideUp(1000);$slidebannertop.slideDown(1000);},2000);
//	setTimeout(function(){$slidebannertop.slideUp(1000,function (){$bannertop.slideDown(1000);});},6000);
//}

if (sessionStorage.getItem("bannershow")!="1"){
    var $slidebannertop = $("#js_ads_banner_top_slide"),$bannertop = $("#js_ads_banner_top");
    setTimeout(function(){$bannertop.slideUp(1000);$slidebannertop.slideDown(1000);},2000);
    setTimeout(function(){
          $slidebannertop.slideUp(1000, function (){
          $bannertop.slideDown(1000);
      });
      sessionStorage.setItem("bannershow", "1");
    },5000);
}