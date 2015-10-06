<?php /* Smarty version Smarty-3.1.13, created on 2015-10-05 19:01:03
         compiled from "templates\nexgen\setup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:216035612accf15d601-90852114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4521df7e580abb341334aa2d7ce6e567276fa129' => 
    array (
      0 => 'templates\\nexgen\\setup.tpl',
      1 => 1363428607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216035612accf15d601-90852114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'cacheclear' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5612accf1c4244_91593999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5612accf1c4244_91593999')) {function content_5612accf1c4244_91593999($_smarty_tpl) {?>

<!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->

<form action="setup.php" method="post">
	<input type="hidden" name="save" value="1" />

	<div class="row header">
		<div class="small-12 columns">
			<ul class="button-group right">
				<a class="button small" href="setup.php?cacheempty=1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cacheempty'];?>
</a>
				<a class="button small submit" href="#"><?php echo $_smarty_tpl->tpl_vars['lang']->value['save'];?>
</a>
			</ul><!-- nav-bar -->
		</div><!-- button-bar -->
	</div>


	<?php if ($_smarty_tpl->tpl_vars['cacheclear']->value){?>
	<div class="alert-box">
		Cache cleared.
		<a href="#" class="close">&times;</a>
	</div>
	<?php }?>

	<?php echo $_smarty_tpl->getSubTemplate ("options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</form>
<?php }} ?>