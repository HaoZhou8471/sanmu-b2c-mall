


<div class="w">
	<div class="crumbs-nav-main clearfix">
		<?php $_from = $this->_var['data']['body']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); };$this->push_vars('', 'cat_0_98025100_1641434846');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat_0_98025100_1641434846']):
        $this->_foreach['cat']['iteration']++;
?>
		<div class="crumbs-nav-item">
			<div class="menu-drop">
				<div class="trigger<?php if (! $this->_var['cat_0_98025100_1641434846']['cat_tree']): ?> bottom<?php endif; ?>">
					<a href="<?php echo $this->_var['cat_0_98025100_1641434846']['url']; ?>"><span><?php echo $this->_var['cat_0_98025100_1641434846']['cat_name']; ?></span></a>
					<i class="iconfont icon-down"></i>
				</div>
                <?php if ($this->_var['cat_0_98025100_1641434846']['cat_tree']): ?>
				<div class="menu-drop-main">
					<ul>
						<?php $_from = $this->_var['cat_0_98025100_1641434846']['cat_tree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); };$this->push_vars('', 'tree');if (count($_from)):
    foreach ($_from AS $this->_var['tree']):
?>
						<li><a href="<?php echo $this->_var['tree']['url']; ?>"><?php echo $this->_var['tree']['cat_name']; ?></a></li>
						<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					</ul>
				</div>
                <?php endif; ?>
			</div>
			<?php if (! ($this->_foreach['cat']['iteration'] == $this->_foreach['cat']['total']) || $this->_var['data']['foot']): ?><i class="iconfont icon-right"></i><?php endif; ?>
		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<?php if ($this->_var['data']['foot']): ?>
		<span class="cn-goodsName"><?php echo $this->_var['data']['foot']; ?></span>
		<?php endif; ?>
	</div>
</div>