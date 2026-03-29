
<?php if ($this->_var['user_info']): ?>
<a class="sn-login main-color" href="user.php" target="_top"><?php if (! $this->_var['user_info']['user_rank'] == ''): ?><?php echo $this->_var['user_info']['user_rank']; ?><?php else: ?>个人会员<?php endif; ?>&nbsp;-&gt;&nbsp;<?php echo $this->_var['user_info']['username']; ?></a><em>，三目商城<?php echo $this->_var['lang']['welcome_return']; ?>！</em>
<a class="sn-register" href="user.php?act=logout" target="_top"><?php echo $this->_var['lang']['user_logout']; ?></a> 
<?php else: ?> 
<em><?php echo $this->_var['lang']['welcome']; ?>!</em>
<a class="sn-login main-color" href="user.php" target="_top">登录</a>

<a class="sn-register" href="register.php" target="_top">注册</a> 

<?php endif; ?>