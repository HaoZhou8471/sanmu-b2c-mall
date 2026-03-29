<div id="site-nav">
  <div class="sn-container w1210"> 
    <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js,common.min.js')); ?> 
    <font id="login-info" class="sn-login-info"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></font>
    <ul class="sn-quick-menu">
      <li class="sn-mytaobao menu-item">
        <div class="sn-menu"> 
          <a class="menu-hd" href="user.php" target="_top" rel="nofollow">我的信息<b></b></a>
          <div id="menu-2" class="menu-bd">
            <div class="menu-bd-panel"> 

            	<a href="user.php?act=order_list" target="_top" rel="nofollow">已买宝贝</a> 
				<a href="user.php?act=address_list" target="_top" rel="nofollow">地址管理</a> 
                <a href="user.php?act=collection_list" target="_top" rel="nofollow">商品收藏</a> 
				<a href="user.php?act=my_comment" target="_top" rel="nofollow">评价晒单</a>
				<a href="user.php?act=bonus" target="_top" rel="nofollow">我的红包</a>
            </div>
          </div>
        </div>
      </li>
 
      <li class="sn-cart mini-cart menu"> 
        <a id="mc-menu-hd" class="sn-cart header-icon main-color" href="flow.php" target="_top" rel="nofollow"><i></i>购物车&nbsp;<?php 
$k = array (
  'name' => 'cart_mes_num',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>&nbsp;件</a> 
		
      </li>
      <li class="sn-favorite menu-item">
        <div class="sn-menu"> 
          <a class="menu-hd" href="user.php?act=collection_list" target="_top" rel="nofollow">收藏夹<b></b></a>
          <div id="menu-4" class="menu-bd">
            <div class="menu-bd-panel"> 
            	<a href="user.php?act=collection_list" target="_top" rel="nofollow">收藏宝贝</a> 
               
            </div>
          </div>
        </div>
      </li>

      <script type="text/javascript">
		function show_qcord(){
			var qs=document.getElementById('sn-qrcode');
			qs.style.display="block";
		}
		function hide_qcord(){
			var qs=document.getElementById('sn-qrcode');
			qs.style.display="none";
		}
	  </script>


          </ul>
        </div>
        </div>
      </li>
    </ul>
  </div>
</div>
<script>
header_login();
function header_login()
{	
	
      $.ajax({
          type:'GET',
          url:'login_act_ajax.php',
          dataType:'json',     //接受数据格式
          data:'',
          success:loginactResponse
          });  
}
function loginactResponse(result)
{
	var MEMBERZONE =document.getElementById('login-info');
	MEMBERZONE.innerHTML= result.memberinfo;
}
</script>