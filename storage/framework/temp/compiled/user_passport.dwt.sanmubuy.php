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
<link rel="stylesheet" type="text/css" href="themes/sanmubuy/css/sanmu_basic.css" />
<link type="text/css" rel="stylesheet" href="themes/sanmubuy/css/passport.css"/>
<script type="text/javascript" src="themes/sanmubuy/js/jquery-1.9.1.min.js" ></script>
<script type="text/javascript" src="themes/sanmubuy/js/jquery_email.js"></script>
<script type="text/javascript" src="themes/sanmubuy/js/placeholder.js" ></script>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.json.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js')); ?>
<script type="text/javascript">
function user_login(back_history){

	var logform = $('form[name="formLogin"]');
	var username = logform.find('#username');
	var password = logform.find('#password');
	var captcha = logform.find('#authcode');
	var error = logform.find('.msg-wrap');
	var back_act = logform.find("input[name='back_act']").val();

	if(username.val()==''){
		error.css({'visibility':'visible'});
		error.find('.msg-error-text').html('请输入账户名');
		username.parents('.item').addClass('item-error');
		return false;
	}

	if(password.val()==''){
		error.css({'visibility':'visible'});
		password.parents('.item').addClass('item-error');
		error.find('.msg-error-text').html('请输入密码');
		return false;
	}
	
	if(captcha.val()==''){
		error.css({'visibility':'visible'});
		captcha.parents('.item-detail').addClass('item-error');
		error.find('.msg-error-text').html('请输入验证码');
		return false;
	}

	if(back_history){
		//Ajax.call( 'user.php?act=act_login', 'username=' + username.val()+'&password='+password.val()+'&captcha='+captcha.val()+'&back_act='+back_act, return_login_back , 'POST', 'JSON');	
  $.ajax({
					type:"POST",
					url:"user.php?act=act_login",
					cache:false,
					dataType:'json',     //接受数据格式
					data:'username=' + username.val()+'&password='+password.val()+'&captcha='+captcha.val()+'&back_act='+back_act,
					success:return_login_back
				});        
	}else{
		//Ajax.call( 'user.php?act=act_login', 'username=' + username.val()+'&password='+password.val()+'&captcha='+captcha.val()+'&back_act='+back_act, return_login , 'POST', 'JSON');
  $.ajax({
					type:"POST",
					url:"user.php?act=act_login",
					cache:false,
					dataType:'json',     //接受数据格式
					data:'username=' + username.val()+'&password='+password.val()+'&captcha='+captcha.val()+'&back_act='+back_act,
					success:return_login
				});          
	}
return false;
}
</script>
</head>
<body onclick="ecshop68_onclick();">
<script>
function erweima1(obj, sType) { var oDiv = document.getElementById(obj); if (sType == 'show') {oDiv.style.display = 'block';} if (sType == 'hide') {oDiv.style.display = 'none';} }
</script>
<div class="logo-r">
  <div class="logo-info-r"><a href="./" class="logo"></a><span class="findpw">登录平台</span><?php echo $this->fetch('library/user_right.lbi'); ?></div>
</div>
<div class="w"> 
   
  <?php if ($this->_var['action'] == 'login'): ?>
  <div class="login-wrap" id="entry">
  	<div class="login-banner">
    	<div class="w990 position-relative">
        	<?php echo $this->fetch('library/login_banner.lbi'); ?>
            <div class="login-form">
            <form name="formLogin" action="user.php?XDEBUG_SESSION_START=ECLIPSE_DBGP" method="post" onSubmit="return user_login(1)">
              <div class="login-tit">个人/企业登录<a class="regist-link main-color" href="register.php">立即注册 <i>&gt;</i></a></div>
              
              <div class="form">
                <div class="msg-wrap">
                    <div class="msg-error">
                        <i class="msg-icon"></i><span id="msg-error-text" class="msg-error-text"></span>
                    </div>
                </div>

			    <div class="item item-name">
                	<i class="icon"></i>
                  	<input type="text" id="username" name="username" class="text" tabindex="1" placeholder="手机号/用户名/邮箱"/>
                </div>
                <div class="item item-password">
                	<i class="icon"></i>
                	<input type="password" id="password" name="password" class="text" tabindex="2" placeholder="密码"/>
                </div>
                <?php if ($this->_var['enabled_captcha']): ?>
                <div class="item item-authcode clearfix" id="o-authcode">
                	<div class="item-detail fl">
                    	<i class="icon"></i>
                        <input type="text" id="authcode" name="captcha" class="text text-1" tabindex="3"/>
                    </div>
                    <label class="img fl"> <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /> </label>
                </div>
                <?php endif; ?>
                <div class="safety" id="autoentry">
                    <label for="remember" class="mar-b"><input type="checkbox" value="1" name="remember" id="remember" class="checkbox"/><?php echo $this->_var['lang']['remember']; ?></label>
                    
                </div>
                <div class="login-btn">
                  <input type="hidden" name="act" value="act_login" />
                  <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
                  <input type="submit" name="submit" class="btn-img btn-entry" id="loginsubmit" value="立即登录" />
                </div>
      
            </form>
        </div>
        </div>
    </div>
  </div>
  <?php endif; ?> 
   


</div>
<div class="site-footer">
    <div class="footer-related">
  		<?php echo $this->fetch('library/page_footer.lbi'); ?>
  </div>
</div>
</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); };$this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";

$(".mcon").height($(".uc_box").height());
</script>
</html>
