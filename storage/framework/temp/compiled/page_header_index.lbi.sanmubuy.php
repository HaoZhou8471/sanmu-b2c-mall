<link rel="stylesheet" type="text/css" href="themes/sanmubuy/css/sanmu_basic.css" />
<script language="javascript"> 
<!--
/*屏蔽所有的js错误*/
function killerrors() { 
return true; 
} 
window.onerror = killerrors; 
//-->
</script>
<script type="text/javascript" src="themes/sanmubuy/js/page.js"></script>
<script type="text/javascript" src="themes/sanmubuy/js/bubbleup.js"></script>
<?php echo $this->fetch('library/user_header.lbi'); ?>
<div class="header">
	<div class="w1210">
		<div class="mall-logo"> <a href="./"><img src="http://smsm.hi-sm.com/themes/sanmubuy/images/logo.png" width="80" alt="三目商城logo"/></a> </div>
		<div class="mall-logo-right"> <a href="#" target="_blank" rel="noopener noreferrer"></a> </div>
		<div class="mall-search">
    <div id="search-tips" style="display:none;"></div>
    <form class="mallSearch-form" method="get" name="searchForm" id="searchForm" action="search.php" onSubmit="return checkSearchForm()">
      <input type='hidden' name='type' id="searchtype" value="<?php echo empty($_REQUEST['type']) ? '0' : $_REQUEST['type']; ?>">
      <div class="mallSearch-input">

        <div class="s-combobox">
          <div class="s-combobox-input-wrap">
            <input aria-haspopup="true" role="combobox" class="s-combobox-input" name="keywords" id="keyword" tabindex="9" accesskey="s" onkeyup="STip(this.value, event);" autocomplete="off"  value="<?php if ($this->_var['search_keywords'] ?? null): ?><?php echo htmlspecialchars($this->_var['search_keywords'] ?? null); ?><?php else: ?>请输入关键词<?php endif; ?>" onFocus="if(this.value=='请输入关键词'){this.value='';}else{this.value=this.value;}" onBlur="if(this.value=='')this.value='请输入关键词'" type="text">
          </div>
        </div>
        <input type="submit" value="搜索" class="button main-bg-color"  >
      </div>
    </form>

  </div>
		<?php echo $this->fetch('library/user_header_right.lbi'); ?> 
	</div>
</div>

<div class="all-nav">
	<div class="w1210">
		<div class="home-category fl" > <a href="catalog.php" class="menu-event" title="查看全部商品分类">全部商品分类<i></i></a> </div>
		<div class="allnav fl" id="nav">
        <ul>
          <li><a class="nav" href="index.html" title="首页">首页</a></li>
          <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); };$this->_var['nav'] =[];array_push($this->_var['nav'], 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
          <li><a class="nav <?php if ($this->_var['nav']['active'] == 1): ?>current<?php endif; ?>" href="<?php echo $this->_var['nav']['url']; ?>" title="<?php echo $this->_var['nav']['name']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" rel="noopener noreferrer" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </ul>
        <div class="wrap-line"><span style="left:15px;"></span></div>
      </div>
		<div class="all-cat main-bg-color"> 
        <?php $_from = $this->_var['get_categories_tree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); };$this->push_vars('', 'cat');$this->_foreach['cat0'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat0']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cat0']['iteration']++;
?>

        <div class="list">
          <dl class="cat">
            <dt class="cat-name"> <a href="<?php echo $this->_var['cat']['url']; ?>" target="_blank" rel="noopener noreferrer" title="进入<?php echo $this->_var['cat']['name']; ?>频道"><?php echo $this->_var['cat']['name']; ?></a> </dt>
            
          </dl>
          <div class="categorys">
            <div class="item-left fl"> 
              
           
              <div class="subitems"> 
			  <dd>
              
                <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); };$this->push_vars('', 'child');$this->_foreach['namechild'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['namechild']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['namechild']['iteration']++;
?>
                <dl class="fore1">
                  <dt><font size="2"> <a href="<?php echo $this->_var['child']['url']; ?>" target="_blank" rel="noopener noreferrer" title="<?php echo htmlspecialchars($this->_var['child']['name']); ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a><i> &#9660</i> </font></dt>
                  <dd> 
                    <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); };$this->push_vars('', 'childer');$this->_foreach['childername'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['childername']['total'] > 0):
    foreach ($_from AS $this->_var['childer']):
        $this->_foreach['childername']['iteration']++;
?> 
                    <a href="<?php echo $this->_var['childer']['url']; ?>" target="_blank" rel="noopener noreferrer" title="<?php echo htmlspecialchars($this->_var['childer']['name']); ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a> 
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                  </dd>
                </dl>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
                </dd>
              </div>
            </div>

          </div>
        </div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      </div>
  	</div>
</div>
<script type="text/javascript">
//<![CDATA[

function checkSearchForm()
{
    if(document.getElementById('keyword').value)
    {
	var frm  = document.getElementById('searchForm');
	var type = parseInt(document.getElementById('searchtype').value);
	frm.action = type==0 ? 'search.php' : 'stores.php';
        return true;
    }
    else
    {
	alert("请输入关键词！");
        return false;
    }
}

function myValue1(){
	document.getElementById('keyword').value = "请输入商品名称或编号...";
}

function myValue2(){
	document.getElementById('keyword').value = "";
}

//]]>

$(function(){
	//图片放大效果
    $(".header-right img").bubbleup({scale:70});
	
	//头部搜索
	$('.search-type').hover(function(){
		$(this).css({"height":"auto","overflow":"visible"});
	},function(){
		$(this).css({"height":32,"overflow":"hidden"});
	});
	
	
});
</script> 

<script type="text/javascript" src="themes/sanmubuy/js/nav.js"></script>
