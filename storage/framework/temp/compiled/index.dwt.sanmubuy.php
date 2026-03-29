<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="Sanmumall v3.1" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta name="renderer" content="webkit" />
<meta name="360-site-verification" content="1795e82c9e2228c5f13339e1b489ec94" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />
<link rel="stylesheet" type="text/css" href="themes/sanmubuy/css/index.css" />
<link rel="stylesheet" type="text/css" href="themes/sanmubuy/css/zz.css" />
<script type="text/javascript" src="themes/sanmubuy/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="themes/sanmubuy/js/jump.js"></script>
<script type="text/javascript" src="themes/sanmubuy/js/tab.js"></script>






</head>

<body><?php 
$k = array (
  'name' => 'add_url_uid',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>



<div class="izl-rmenu">
    <a class="consult" target="_blank" rel="noopener noreferrer"><div class="phone" style="display:none;">4008298329</div></a>    
    <a class="cart"><div class="pic"></div></a>   
    <a href="javascript:scrollTo(0,0)" class="btn_top" style="display: block;"></a>
</div>
<a target="_blank" rel="noopener noreferrer"  href="http://wpa.qq.com/msgrd?v=3&uin=305857658&site=qq&menu=yes" id="udesk-feedback-tab" class="udesk-feedback-tab-left" style="display: block; background-color: black;"></a>
	<?php echo $this->fetch('library/page_header_index.lbi'); ?>
	
    
    
	
    <div class="banner">
     		<?php echo $this->fetch('library/index_ad.lbi'); ?>
           
        <div class="right-sidebar">
			<?php echo $this->fetch('library/recommend_right_promotion.lbi'); ?>	
            <div class="proclamation">
					<ul class="tabs-nav">
                    	<li class="tabs-selected">
							<h3>商城公告</h3>
						</li>
					  <li>
							<h3>第三方店铺入驻</h3>
						</li>
					</ul>
                    <div class="tabs-panel">
  					<ul class="mall-news"> 
    				
					<li><a href="article.php?id=171" target="_blank" rel="noopener noreferrer" title="我们常称的办公用品有哪些种类？">我们常称的办公用品有哪些种类？</a> </li>
					<li><a href="article.php?id=163" target="_blank" rel="noopener noreferrer" title="注册成为三目商城的会员">注册成为三目商城的会员有哪些好处？</a></li>
				
    				</ul>
					</div>

					<div class="tabs-panel tabs-hide">
						<a href="apply_index.php" title="申请商家入驻；已提交申请，可查看当前审核状态。" class="store-join-btn" target="_blank" rel="noopener noreferrer">&nbsp;</a>
						<a href="supplier" target="_blank" rel="noopener noreferrer" class="store-join-help">
							<i class="icon-cog"></i>
							登录商家管理中心
						</a>
					</div>
			</div>
        </div>
    </div>
    
 
   
<div class="blank10"></div>
    <div class="w1210 floor-list">
<div class="floor"></div>

<?php $this->assign('cat_goods',$this->_var['cat_goods_967']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_967']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_966']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_967']); ?><?php echo $this->fetch('library/cat_goods2.lbi'); ?> 

</div>

    <script type="text/javascript" src="themes/sanmubuy/js/indexPrivate.min.js"></script>
 
    <?php echo $this->fetch('library/page_footer_index.lbi'); ?>
    <?php echo $this->fetch('library/arrive_notice.lbi'); ?>
    <?php echo $this->fetch('library/left_sidebar.lbi'); ?>
</body>
<script type="text/javascript" src="themes/sanmubuy/js/home_index.js"></script>



<script type="text/javascript">
	 $(".brand-con").hover(function(){
		var num = $(this).find("li").length;
		if(num > 10){
			$(this).find(".brand-btn").fadeTo('fast',0.4);	
		}
	},
	function(){
		$(this).find(".brand-btn").fadeTo('fast',0);	
	})
</script>
<script src="http://chat.hi-sm.com/assets/front/cgwl_1.js?v=1636619131"></script>

</html>