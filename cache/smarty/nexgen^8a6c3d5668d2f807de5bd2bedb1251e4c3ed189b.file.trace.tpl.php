<?php /* Smarty version Smarty-3.1.13, created on 2015-10-05 19:00:08
         compiled from "templates\nexgen\trace.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48575612ac983d12b4-33397258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a6c3d5668d2f807de5bd2bedb1251e4c3ed189b' => 
    array (
      0 => 'templates\\nexgen\\trace.tpl',
      1 => 1363115598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48575612ac983d12b4-33397258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'fetchtime' => 0,
    'lang' => 0,
    'md5' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5612ac9844db82_11489694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5612ac9844db82_11489694')) {function content_5612ac9844db82_11489694($_smarty_tpl) {?>

<!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->

<script>$("html").css("height", "100%");$("body").css("height", "100%");</script>

<div class="row header">
<!--
	<h3>URL: </h3><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
</a>
	<nobr><?php if ($_smarty_tpl->tpl_vars['fetchtime']->value){?><span class="filterlink"><?php echo $_smarty_tpl->tpl_vars['lang']->value['fetchtime'];?>
: </span><?php echo $_smarty_tpl->tpl_vars['fetchtime']->value;?>
s<?php }else{ ?>&nbsp;<?php }?><?php if ($_smarty_tpl->tpl_vars['md5']->value){?> <?php echo $_smarty_tpl->tpl_vars['md5']->value;?>
<?php }?></nobr>
-->
	<div class="small-12 columns">
		<ul class="button-group right">
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="button small" target="_blank">Open in Browser</a></li>
			<li><a href="trace.php?iframe=1&videodburl=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&videodbreload=1" class="button small submit" />Reload</a></li>
		</ul>
	</div>
</div>

<div style="height:100%">
<iframe seamless="seamless" src="trace.php?iframe=2&videodburl=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"></iframe>
</div><?php }} ?>