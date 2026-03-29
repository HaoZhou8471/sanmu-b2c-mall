<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="Sanmumall v3.1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link rel="stylesheet" type="text/css" href="themes/sanmubuy/css/goods.css" />
<script type="text/javascript" src="themes/sanmubuy/js/jquery-1.9.1.min.js" ></script>
<script type="text/javascript" src="themes/sanmubuy/js/magiczoom.js" ></script>
<script type="text/javascript" src="themes/sanmubuy/js/magiczoom_plus.js" ></script>
<script type="text/javascript" src="themes/sanmubuy/js/scrollpic.js"></script>
<script type="text/javascript" src="themes/sanmubuy/js/gw_totop.js" ></script>
<link rel="stylesheet" type="text/css" href="themes/sanmubuy/css/style-option.css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.4.2.min.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport.org.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>

</head>
<body><?php 
$k = array (
  'name' => 'add_url_uid',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
<div id="bg" class="bg" style="display:none;"></div>
<?php echo $this->fetch('library/pricecut_notice.lbi'); ?>
<?php echo $this->fetch('library/arrive_notice.lbi'); ?>

        <?php if ($this->_var['goods']['supplier_id']): ?> 
        <?php echo $this->fetch('library/page_header2.lbi'); ?> 
        <?php else: ?> 
        <?php echo $this->fetch('library/page_header.lbi'); ?> 
        <?php endif; ?> 
<div class="margin-w1210 clearfix">
  	<?php echo $this->fetch('library/ur_here.lbi'); ?>
	<div id="product-intro" class="goods-info"> 
      <div id="preview">
        <div class="goods-img" id="li_<?php echo $this->_var['goods']['goods_id']; ?>" style="position:relative; z-index:3;">
        	<a href="<?php if ($this->_var['pictures']['0']['img_original']): ?><?php echo $this->_var['pictures']['0']['img_original']; ?><?php else: ?><?php echo $this->_var['goods']['original_img']; ?><?php endif; ?>" class="MagicZoom" id="zoom" rel="zoom-position: right;"> 
                <?php if ($this->_var['pictures']): ?> 
                <img  src="<?php echo 'https://www.hi-sm.com/'.$this->_var['pictures']['0']['img_url']; ?>" class="goodsimg pic_img_<?php echo $this->_var['goods']['goods_id']; ?>" id="goods_bimg" width="400" height="400" /> 
                <?php else: ?> 
                <img src="<?php echo $this->_var['goods']['goods_img']; ?>" class="goodsimg pic_img_<?php echo $this->_var['goods']['goods_id']; ?>" id="goods_bimg" width="400" height="400" /> 
                <?php endif; ?> 
          	</a> 
        </div>
        <div style="height:10px; line-height:10px; clear:both;"></div>
         
        <?php echo $this->fetch('library/goods_gallery.lbi'); ?> 
        
        <div class="goods-gallery-bottom">
        	<?php if ($this->_var['cfg']['show_goodssn']): ?>
        	<div class="goods-sn fl">
            	<span class="goods-sn-color">商品编号</span>
                <span><?php echo $this->_var['goods']['goods_sn']; ?></span>
            </div>
            <?php endif; ?> 
            
            
  
            <div class="bdsharebuttonbox fr">
        		<a class="bds_more" href="#" data-cmd="more" style="background: transparent url(themes/sanmubuy/images/goods-icon.png) no-repeat -110px -166px;color: #666;line-height: 25px;height: 25px; margin: 0px 10px; padding-left:20px; display: block;">分享</a>
            </div>
        </div>
	
      </div>
      <div class="goods-detail-info">
          <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >       
               <div class="goods-name">
                  <h1><?php echo $this->_var['goods']['goods_style_name']; ?></h1>
               </div>
               <?php if ($this->_var['goods']['goods_brief']): ?>
               <div class="goods-brief"><span><?php echo $this->_var['goods']['goods_brief']; ?></span></div>
               <?php endif; ?>
               <div id="goods-price">
                 <div class="mar-l">
                      <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?> 
                      <span class="price">促销价</span><strong class="p-price" id="ECS_GOODS_AMOUNT"><?php echo $this->_var['goods']['promote_price']; ?></strong> 
                      <?php else: ?> 
                      <span class="price">售价</span><strong class="p-price" id="ECS_GOODS_AMOUNT">￥<?php echo $this->_var['goods']['shop_price']; ?></strong> 
                      <?php endif; ?> 
                      
                 </div>

                </div>
               <ul id="summary1">
                  <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
                  <li class="padd">
                    <div class="dt">商品品牌</div>
                    <div class="dd"> <a href="<?php echo 'https://www.hi-sm.com/'.$this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a></div>
                  </li>
                  <?php endif; ?> 
                  <?php if ($this->_var['cfg']['use_integral']): ?>
                  <li class="padd">
                    <div class="dt">可使积分</div>
                    <div class="dd"><?php echo $this->_var['goods']['integral']; ?> <?php echo $this->_var['points_name']; ?></div>
                  </li>
                  <?php endif; ?> 


                </ul>
               <div id="summary-qita">
                  <ul class="qita">
                    <li>
                      <p>累积评价<span><a href="<?php echo $this->_var['url']; ?>#os_pinglun"><?php echo $this->_var['review_count']; ?>人评价</a></span></p>
                    </li>
                    <li>
                      <p>累计销量<span><?php echo $this->_var['goods']['count']; ?></span></p>
                    </li>
                    <?php if ($this->_var['goods']['give_integral_2'] == '-1'): ?>
                    <li style="border:none">
                      <p>赠送积分<span><font id="ECS_GOODS_AMOUNT_jf"><?php echo $this->_var['goods']['give_integral']; ?></font></span></p>
                      <?php elseif ($this->_var['goods']['give_integral_2'] > 0): ?>
                    <li style="border:none">
                      <p>赠送积分<span><?php echo $this->_var['goods']['give_integral']; ?></span></p>
                    </li>
                    <?php else: ?>
                    <li style="border:none">
                      <p>赠送积分<span>0</span></p>
                    </li>
                    <?php endif; ?>
                  </ul>
               </div>
               <ul id="summary">
                  <?php if ($this->_var['promotion']): ?>
                  <li class="padd padd-promotion clearfix"> 
                    <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); };$this->push_vars('key', 'item');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['name']['iteration']++;
?> 
                    <?php if (($this->_foreach['name']['iteration'] <= 1)): ?>
                    <div class="dt">促销信息</div>
                    <?php else: ?>
                    <div class="dt">&nbsp;</div>
                    <?php endif; ?> 
                    <?php if ($this->_var['item']['type'] == "snatch"): ?>
                    <div class="dd"> 
                    	<a class="activity-68 activity_4" href="snatch.php" title="<?php echo $this->_var['lang']['snatch']; ?>" style="font-weight:100; color:#fff; text-decoration:none;"><?php echo $this->_var['lang']['snatch']; ?></a> 
                        <a href="snatch.php" title="<?php echo $this->_var['item']['act_name']; ?>" class="activity_con"><?php echo sub_str($this->_var['item']['act_name'],30); ?></a> 
                    </div>

                    <?php elseif ($this->_var['item']['type'] == "auction"): ?>
                    <div class="dd"> 
                    	<a class="activity-68 activity_4" href="auction.php" title="<?php echo $this->_var['lang']['auction']; ?>" style="font-weight:100; color:#fff; text-decoration:none;"><?php echo $this->_var['lang']['auction']; ?></a> 
                        <a href="auction.php" title="<?php echo $this->_var['item']['act_name']; ?>" class="activity_con"><?php echo sub_str($this->_var['item']['act_name'],30); ?></a> 
                    </div>
                    <?php elseif ($this->_var['item']['type'] == "favourable"): ?>
                    <div id="manzeng" class="dd <?php if ($this->_var['item']['gift'] == array ( )): ?><?php else: ?>J_MenuItem<?php endif; ?>" style="position:relative;"> 
                    	<a class="activity-68 <?php if ($this->_var['item']['gift'] == array ( )): ?>activity_1<?php else: ?>activity_2<?php endif; ?>" href="activity.php" title="<?php echo $this->_var['lang']['favourable']; ?>"><?php echo $this->_var['item']['act_type']; ?></a> 
                        <a id="zeng" href="activity.php" title="<?php echo $this->_var['lang']['favourable']; ?>" class="activity_con"><?php echo $this->_var['item']['act_name']; ?><?php if ($this->_var['item']['gift'] == array ( )): ?><?php else: ?><i></i><?php endif; ?></a> 
                        <?php if ($this->_var['item']['gift'] !== array ( )): ?>
                      	<div id="aa" class="zengpin" style="display:none;">
                        	<b class="tip_flag"></b> 
                        	<?php if ($this->_var['item']['act_range'] == 0): ?>
                            <h3>优惠范围：全部商品</h3>
                            <?php elseif ($this->_var['item']['act_range'] == 1): ?>
                            <h3>优惠范围：全部分类</h3>
                            <?php elseif ($this->_var['item']['act_range'] == 2): ?>
                            <h3>优惠范围：品牌</h3>
                            <?php elseif ($this->_var['item']['act_range'] == 3): ?>
                            <h3>优惠范围：商品</h3>
                            <?php endif; ?>
                            <ul>
                              <?php $_from = $this->_var['item']['gift']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); };$this->push_vars('', 'gift');if (count($_from)):
    foreach ($_from AS $this->_var['gift']):
?>
                              <li> <a href="goods.php?id=<?php echo $this->_var['gift']['id']; ?>" target="_blank" rel="noopener noreferrer" style="display:block;"> <img src="<?php echo $this->_var['gift']['thumb']; ?>" title="<?php echo $this->_var['gift']['name']; ?>" alt="<?php echo sub_str($this->_var['gift']['name'],6); ?>" /> </a>
                                <p><?php echo $this->_var['gift']['price']; ?>元</p>
                              </li>
                              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                      	</div>
                      	<?php endif; ?> 
                      </div>
                    <?php endif; ?> 
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                    <script type="text/javascript">
    				$(document).ready(function(){
						var a = $("#summary").children("li");
					  	var b = $("#summary"); 
					  	if($(a).length > 0){ 
							b.css({"display":"inline-block"});
					
						} 
						else{ 
							b.css({"display":"none"});
						} 
						$( ".J_MenuItem" ).each( function( index ){
							var zindex = $(this).css("z-index");    
							$(this).mouseover( function(){	
								$(this).css("z-index", ""+(zindex+2) );		
								$( ".zengpin" ).eq( index ).show();			 
								
							});
							$(this).mouseleave( function(){
								$(this).css("z-index", ""+(zindex-2) );
								$( ".zengpin" ).eq( index ).hide();    
								
							});
						});
					});
					</script> 
                    <?php if ($this->_var['goods']['bonus_money']): ?>
                    <div class="dt">&nbsp;</div>
                    <div class="dd"> 
                    	<a class="activity-68 activity_3" href="user.php?act=bonus" >红包</a> 
                        <a href="user.php?act=bonus" title="" class="activity_con">购买此商品可获得红包&nbsp;<font style="color:#f52648"><?php echo $this->_var['goods']['bonus_money']; ?></font></a> 
                    </div>
                    <?php endif; ?> 
                  </li>
                  <?php endif; ?> 
                  <?php if ($this->_var['volume_price_list']): ?>
                  <li class="padd"> 
                  	<font class="volume-price f1"><?php echo $this->_var['lang']['volume_price']; ?>：</font>
                    <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#eeeeee">
                      <tr>
                        <td align="center" bgcolor="#FFFFFF"><strong><?php echo $this->_var['lang']['number_to']; ?></strong></td>
                        <td align="center" bgcolor="#FFFFFF"><strong><?php if ($_SESSION['user_id'] > 0): ?><?php echo $this->_var['lang']['preferences_price']; ?><?php else: ?>会员登录可见<?php endif; ?></strong></td>
                      </tr>
                      <?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); };$this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>
                      <tr>
                        <td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['number']; ?></td>
                        <td align="center" bgcolor="#FFFFFF" class="shop"><?php if ($_SESSION['user_id'] > 0): ?><?php echo $this->_var['price_list']['format_price']; ?><?php else: ?>会员登录可见<?php endif; ?></td>
                      </tr>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </table>
                  </li>
                  <?php endif; ?>
                  
                  <?php if ($_SESSION['user_rank'] > 3): ?>
                  <li class="padd padd-spe"><?php echo $this->_var['lang']['goods_free_shipping']; ?></li>
                  <?php endif; ?>
                </ul>
				<style>
				.cat_attr_on_box_list_table td, .list_table td{text-align:center; border-bottom:1px #ececee dotted;}
				.cat_attr_on_box_list_table th, .list_table th{text-align:center;}
				.goods_attr_color{border:1px #CDCDCD solid;}
				.goods_attr_color th{background-color:#F4F4F4; height:30px;}
				.goods_attr_color td{height:30px;}
				.pad_top{margin:-20px  0 0; padding-top:20px ;}
				.sum_price{line-height: 35px;vertical-align: top;color: #e4393c;font-size: 20px;margin-left: 15px;}
				.pop_wrap{border:2px solid #fc883b;color:#404040;font:12px 宋体;overflow:hidden;width:371px}
				.pop_wrap h3{background:none repeat scroll 0 0 #fdf2e3;border-bottom:1px solid #fc883b;font:bold 12px/27px 宋体;height:27px;padding-left:19px;position:relative}
				.pop_wrap h3 a{background:url("data/images/sprite_pop.png") no-repeat scroll 0 -72px transparent;cursor:pointer;display:inline-block;height:9px;overflow:hidden;position:absolute;right:5px;top:5px;width:9px}
				.pop_cont{padding:3px 0 5px;width:371px}
				.pop_cont p{font-size:14px;font-weight:bold;line-height:22px;text-align:center;margin-top:8px}
				.pop_cont p img{padding-right:9px;vertical-align:top}
				.pop_btn{overflow:hidden;padding-bottom:15px;text-align:center;width:371px}
				.pop_btn span{background:url("data/images/sprite_pop.png") no-repeat scroll 0 0 transparent;cursor:pointer;display:inline-block;height:23px;line-height:24px;margin-right:14px;text-align:center;width:68px}
				.pop_btn .pop_btn_orange{background-position:0 -46px;color:#fff;font-weight:bold;height:26px;line-height:24px;text-align:center;width:101px}
				.pop_wrap a{color:#1a66b3;text-decoration:none}
				.pop_wrap a:hover{color:#1a66b3;text-decoration:none}
				</style>
				<div class="blank20"></div>
					<table width="100%" border="0" cellspacing="1" cellpadding="3" class="cat_attr_on_box_list_table goods_attr_color">
					<tr>
					<th>商品货号</th>
					<th>属性</th>
					<th>单位</th>
					<?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
					<th>库存</th>
					<?php endif; ?>
					<th>价格</th>
					<th>购买数量</th>
					</tr>
					<?php $_from = $this->_var['product_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); };$this->push_vars('', 'product');if (count($_from)):
    foreach ($_from AS $this->_var['product']):
?>
					<tr class="product_row" rel="<?php echo $this->_var['product']['product_id']; ?>" id="product_row_<?php echo $this->_var['product']['product_id']; ?>" >
					<td><?php echo $this->_var['product']['product_sn']; ?></td>

					<td>
					<?php $_from = $this->_var['product']['goods_attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); };$this->push_vars('', 'goods_attr');$this->_foreach['pro'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pro']['total'] > 0):
    foreach ($_from AS $this->_var['goods_attr']):
        $this->_foreach['pro']['iteration']++;
?> <?php echo $this->_var['goods_attr']; ?>
					<?php if ($this->_foreach['pro']['iteration'] != $this->_foreach['pro']['total']): ?> | <?php endif; ?>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</td>
					<td><?php echo $this->_var['product']['unit']; ?></td>
					<?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
					<td><?php if ($this->_var['product']['product_number'] > 10): ?>有货<?php else: ?><?php echo $this->_var['goods']['goods_number']; ?><?php endif; ?></td>
					<?php endif; ?>
					<td><?php echo $this->_var['product']['product_price']; ?></td>
					<td>
					<span id="tishi_<?php echo $this->_var['product']['product_id']; ?>" style="color:#f00;"></span>
					<a href="javascript:;" onclick="javascript:downQty(<?php echo $this->_var['product']['product_id']; ?>,<?php echo $this->_var['goods']['goods_id']; ?>);"><img src="http://smsm.hi-sm.com/themes/sanmubuy/images/cat_on_r4_c8.jpg" /></a>
					<input name="buy_qty" class="input_box" id="buy_qty_<?php echo $this->_var['product']['product_id']; ?>" size="2" value="1" onchange=javascript:updateSumPrice(<?php echo $this->_var['goods']['goods_id']; ?>); onBlur="if(isNaN(this.value)){$('#tishi_<?php echo $this->_var['product']['product_id']; ?>').html('请输入数字')}else{$('#tishi_<?php echo $this->_var['product']['product_id']; ?>').html('');if(this.value !=0 && (!/(^[1-9]\d*$)/.test(this.value/$('#zeng_number').attr('value')))){$('#tishi_<?php echo $this->_var['product']['product_id']; ?>').html('请输入'+$('#zeng_number').attr('value')+'的倍数');}}" onKeyUp="value=value.replace(/[^\d]/g,'')"/>
					<a href="javascript:;" onclick="javascript:upQty(<?php echo $this->_var['product']['product_id']; ?>,<?php echo $this->_var['goods']['goods_id']; ?>);"><img src="http://smsm.hi-sm.com/themes/sanmubuy/images/cat_on_r4_c10.jpg" /></a>
					<input type="hidden" name="product_number" id="product_number_<?php echo $this->_var['product']['product_id']; ?>" value="<?php echo $this->_var['product']['product_number']; ?>" >
					<input type="hidden" name="product_id" class="product_id" id="product_id_<?php echo $this->_var['product']['product_id']; ?>" value="<?php echo $this->_var['product']['product_id']; ?>" >
					</td>
					</tr>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</table>
						<div style="padding-top:10px; padding-bottom:5px; width:490px;">
						<input type="hidden" name="zeng_number" class="zeng_number" id="zeng_number" value="1" >
						<input type="hidden" name="ding_number" class="ding_number" id="ding_number" value="1" >
						<input type="hidden" name="limit_max_sale" class="limit_max_sale" id="limit_max_sale" value="0" >
						<div class="blank10"></div>
						<a href="javascript:;" onclick="javascript:addProductsToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><input type="button" class="goods_buy_bt" style="width:135px; height:36px; background-image:url(http://smsm.hi-sm.com/themes/sanmubuy/images/add_cart_over.png); border:medium none; margin-left:10px; cursor:pointer;" /></a>
						<div class="blank10"></div>
						</div>
						<span id="ECS_GOODS_MORE_AMOUNT" class="sum_price"></span>
						
				<div class="blank10"></div>
			
          </form>
      </div>
      <div id="supp_info"> 
        <?php if ($this->_var['goods']['supplier_id']): ?> 
        <?php echo $this->fetch('library/ghs_info.lbi'); ?> 
        <?php else: ?> 
        <?php echo $this->fetch('library/ziying_info.lbi'); ?> 
        <?php endif; ?> 
      </div>
    </div>
  	<?php echo $this->fetch('library/goods_best.lbi'); ?>
    <div class="left-con">
    	<?php echo $this->fetch('library/goods_related_category.lbi'); ?>
        <?php echo $this->fetch('library/goods_similar_brand.lbi'); ?>
        <?php echo $this->fetch('library/goods_new.lbi'); ?>
        <?php echo $this->fetch('library/goods_related.lbi'); ?> 
		<?php echo $this->fetch('library/goods_fittings.lbi'); ?> 
		<?php echo $this->fetch('library/bought_goods.lbi'); ?>
        
 

      	<div class="blank"></div>
      	
 
 
    </div>
    <div class="right-con">
    	<?php echo $this->fetch('library/goods_package_ecshop68.lbi'); ?>
        <div id="wrapper">
        <div class="mt" id="main-nav-holder">
          <ul class="tab" id="nav">
            <li class="boldtit-list h-list" onclick="change_widget(1, this);"><a href="<?php echo $this->_var['url']; ?>#os_canshu">规格参数</a></li>
            <li class="boldtit-list" onclick="change_widget(1, this);"><a href="<?php echo $this->_var['url']; ?>#os_jieshao" >商品介绍</a></li>
            <li class="boldtit-list" onclick="change_widget(1, this);"><a href="<?php echo $this->_var['url']; ?>#os_pinglun" >商品评价(<?php echo $this->_var['review_count']; ?>)</a></li>
            <li class="boldtit-list" onclick="change_widget(1, this);"><a href="<?php echo $this->_var['url']; ?>#os_shouhou" >售后保障</a></li>
          </ul>
          <div class="goods-ce-right"> 
          	
            <div class="ce-right">
              <ul class="abs-ul">
                <li class="abs-active"><i></i><span>规格参数</span></li>
                <li><i></i><span>产品介绍</span></li>
                <li><i></i><span>商品评价</span></li>
                <li><i></i><span>价格说明</span></li>
                <li><i></i><span>售后服务</span></li>
                <li><i></i><span>常见问题</span></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="main_widget_1">
          <div class="mc" id="os_canshu">
            <ul class="detail-list">
              <li>商品名称：<?php echo $this->_var['goods']['goods_style_name']; ?></li>
              <li>商品编号：<?php echo $this->_var['goods']['goods_sn']; ?></li>
              <li>品牌：<a href="<?php echo 'https://www.hi-sm.com/'.$this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a></li>
             
   
              <?php if ($this->_var['properties']): ?> 
              <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); };$this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?> 
              <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); };$this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
              <li ><?php echo htmlspecialchars($this->_var['property']['name']); ?>：<?php echo $this->_var['property']['value']; ?></li>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              <?php endif; ?>
            </ul>
          </div>
          <div class="mc" id="os_jieshao">
            <div class="blank20"></div>
            <div class="detail-content"> <?php echo $this->_var['goods']['goods_desc']; ?> </div>
          </div>
          <div class="mc" id="os_pinglun">
            <div class="blank20"></div>
            <?php echo $this->fetch('library/my_comments.lbi'); ?> </div>
		
          <div class="mc" id="os_advantage">
		 	<?php if ($this->_var['goods']['energyFile']): ?> 
            <div class="blank20"></div>
			<p><img src=" http://www.hi-sm.com/<?php echo $this->_var['goods']['energyFile']; ?>" height="600" width="420"  /></p>
            <div class="detail-content"> </div>
				<?php endif; ?>
			</div>
		
          <div class="mc" id="os_shouhou">
            <div class="blank20"></div>
            <?php echo $this->fetch('library/baozhang.lbi'); ?> </div>
          <div class="mc" id="os_changjian">
            <div class="blank20"></div>
            <?php echo $this->fetch('library/common_problem.lbi'); ?> </div>
        </div>
      </div>
		<script type="text/javascript">
			$(".ce-right").height($("#main_widget_1").height());
            var obj11 = document.getElementById("main-nav-holder");
			var top11 = getTop(obj11);
			var isIE6 = /msie 6/i.test(navigator.userAgent);
			function getTop(e){
				var offset = e.offsetTop;
				if(e.offsetParent != null) offset += getTop(e.offsetParent);
				return offset;
			}
	    </script> 
    </div>
</div>

<script type="text/javascript" src="<?php echo $this->_var['option']['static_path']; ?>js/compare.js"></script>
<script type="text/javascript" src="<?php echo $this->_var['option']['static_path']; ?>js/json2.js"></script>
<div id="compareBox">
  <div class="menu">
    <ul>
      <li class="current" data-value='compare'>对比栏</li>
      <li data-value='history'>最近浏览</li>
    </ul>
    <a class="hide-compare" href="javascript:;" title="隐藏"></a>
    <div style="clear:both"></div>
  </div>
  <div id="compareList"></div>
  <div id="historyList" style="display:none;"> <span id="sc-prev" class="sc-prev scroll-btn"></span> <span id="sc-next" class="sc-next scroll-btn"></span>
    <div class="scroll_wrap"> <?php 
$k = array (
  'name' => 'history_list',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </div>
  </div>
</div>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); };$this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;
var suppid = <?php echo $this->_var['goods']['supplier_id']; ?>;
</script>



<div class="site-footer">
		<div id="d-top">
		<a href="#" onclick="javascript:document.body.scrollTop=0;document.documentElement.scrollTop=0;this.blur();return false;" title="回到顶部">
		<img src="themes/sanmubuy/images/top_icon.png" alt="顶部" /></a>
		</div>
    <div class="footer-related">
  		
  		<?php echo $this->fetch('library/page_footer.lbi'); ?>
  </div>
</div>
</body>
<script type="text/javascript" src="themes/sanmubuy/js/compare.js"></script>

<script type=”text/javascript”>
var jj = jQuery.noConflict(true);
</script>

<script>
<?php if (! $_SESSION['user_id'] > 0): ?>
$(function(){
	$('.goods-col').click(function(){
		$('.pop-login,.pop-mask').show();	
	})
})<?php endif; ?>
</script>

</html>