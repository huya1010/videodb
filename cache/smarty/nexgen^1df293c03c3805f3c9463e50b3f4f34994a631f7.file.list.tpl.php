<?php /* Smarty version Smarty-3.1.13, created on 2015-10-05 19:00:00
         compiled from "templates\nexgen\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207765612ac901c3d81-47132248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1df293c03c3805f3c9463e50b3f4f34994a631f7' => 
    array (
      0 => 'templates\\nexgen\\list.tpl',
      1 => 1363883277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207765612ac901c3d81-47132248',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'deleted' => 0,
    'lang' => 0,
    'listcolumns' => 0,
    'list' => 0,
    'video' => 0,
    'max_width' => 0,
    'max_height' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5612ac9025c5c0_88704563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5612ac9025c5c0_88704563')) {function content_5612ac9025c5c0_88704563($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_image')) include './lib/smarty/custom\\function.html_image.php';
?>

<!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->

<?php if ($_smarty_tpl->tpl_vars['deleted']->value){?>
<div class="alert-box alert sticky">
	<?php echo $_smarty_tpl->tpl_vars['lang']->value['deleted'];?>

	<a href="#" class="close">&times;</a>
</div>
<?php }?>

<div class="row">
	<div class="small-12 columns small-centered">

		<?php if (isset($_smarty_tpl->tpl_vars['max_width'])) {$_smarty_tpl->tpl_vars['max_width'] = clone $_smarty_tpl->tpl_vars['max_width'];
$_smarty_tpl->tpl_vars['max_width']->value = 220; $_smarty_tpl->tpl_vars['max_width']->nocache = null; $_smarty_tpl->tpl_vars['max_width']->scope = 0;
} else $_smarty_tpl->tpl_vars['max_width'] = new Smarty_variable(220, null, 0);?>
		<?php if (isset($_smarty_tpl->tpl_vars['max_height'])) {$_smarty_tpl->tpl_vars['max_height'] = clone $_smarty_tpl->tpl_vars['max_height'];
$_smarty_tpl->tpl_vars['max_height']->value = 400; $_smarty_tpl->tpl_vars['max_height']->nocache = null; $_smarty_tpl->tpl_vars['max_height']->scope = 0;
} else $_smarty_tpl->tpl_vars['max_height'] = new Smarty_variable(400, null, 0);?>

		<ul class="small-block-grid-2 large-block-grid-<?php echo $_smarty_tpl->tpl_vars['listcolumns']->value;?>
 itemlist">
			<?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['col']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value){
$_smarty_tpl->tpl_vars['video']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['col']['index']++;
?>
			<li <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['col']['index'])%$_smarty_tpl->tpl_vars['listcolumns']->value==0){?>class="clear"<?php }?>>
				<a href="show.php?id=<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
" class="th radius">

					<?php if ($_smarty_tpl->tpl_vars['video']->value['imgurl']){?><?php echo smarty_function_html_image(array('file'=>$_smarty_tpl->tpl_vars['video']->value['imgurl'],'max_width'=>$_smarty_tpl->tpl_vars['max_width']->value,'max_height'=>$_smarty_tpl->tpl_vars['max_height']->value),$_smarty_tpl);?>
<?php }?>
				</a>
			</li><!--col-->
			<?php } ?>
		</ul><!--row-->

	</div><!--column-->
</div><!--row-->
<?php }} ?>