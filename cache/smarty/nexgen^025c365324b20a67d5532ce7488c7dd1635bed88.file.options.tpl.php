<?php /* Smarty version Smarty-3.1.13, created on 2015-10-05 19:01:03
         compiled from "templates\nexgen\options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185285612accf1d9ff7-71029756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '025c365324b20a67d5532ce7488c7dd1635bed88' => 
    array (
      0 => 'templates\\nexgen\\options.tpl',
      1 => 1363883277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185285612accf1d9ff7-71029756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'setup' => 0,
    'option' => 0,
    'lang' => 0,
    'thumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5612accf2bda94_17657039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5612accf2bda94_17657039')) {function content_5612accf2bda94_17657039($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_checkbox')) include './lib/smarty/custom\\function.html_checkbox.php';
if (!is_callable('smarty_function_html_options')) include './lib/smarty/plugins\\function.html_options.php';
?>

<!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->

<div class="row">
	<div class="small-12 large-10 columns large-centered">

<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['setup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>

	<?php if ($_smarty_tpl->tpl_vars['option']->value['group']){?>
	<h3 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value[$_smarty_tpl->tpl_vars['option']->value['group']];?>
</h3>
	<?php }else{ ?>

	<div class="row">
		<div class="small-12 large-4 columns">
			<label <?php if ($_smarty_tpl->tpl_vars['option']->value['type']=='boolean'){?>for="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['hl'];?>
</label>
			<?php if ($_smarty_tpl->tpl_vars['option']->value['type']=='text'){?>
				<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['set'], ENT_QUOTES, 'UTF-8', true);?>
" />
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['option']->value['type']=='boolean'){?>
				<?php echo smarty_function_html_checkbox(array('name'=>$_smarty_tpl->tpl_vars['option']->value['name'],'id'=>$_smarty_tpl->tpl_vars['option']->value['name'],'value'=>1,'checked'=>$_smarty_tpl->tpl_vars['option']->value['set']),$_smarty_tpl);?>

			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['option']->value['type']=='dropdown'){?>
				<?php echo smarty_function_html_options(array('name'=>$_smarty_tpl->tpl_vars['option']->value['name'],'options'=>$_smarty_tpl->tpl_vars['option']->value['data'],'selected'=>$_smarty_tpl->tpl_vars['option']->value['set']),$_smarty_tpl);?>

			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['option']->value['type']=='multi'){?>
				<select name="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
[]"  multiple="multiple">
					<option value=""></option>
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['option']->value['data'],'selected'=>$_smarty_tpl->tpl_vars['option']->value['set']),$_smarty_tpl);?>

				</select>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['option']->value['type']=='special'){?>
				<?php if ($_smarty_tpl->tpl_vars['option']->value['name']=='languageflags'){?><div class="small-cols-4"><?php }?>
				<?php echo $_smarty_tpl->tpl_vars['option']->value['data'];?>

				<?php if ($_smarty_tpl->tpl_vars['option']->value['name']=='languageflags'){?></div><?php }?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['option']->value['type']=='link'){?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['option']->value['data'];?>
"><?php echo $_smarty_tpl->tpl_vars['option']->value['hl'];?>
</a>
			<?php }?>
		</div><!-- col -->

		<div class="small-12 large-8 columns">
			<p><?php echo $_smarty_tpl->tpl_vars['option']->value['help'];?>
</p>

			<?php if ($_smarty_tpl->tpl_vars['option']->value['thumbs']){?>
			<ul class="small-block-grid-4">
				<?php  $_smarty_tpl->tpl_vars['thumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['thumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['thumbs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['thumb']->key => $_smarty_tpl->tpl_vars['thumb']->value){
$_smarty_tpl->tpl_vars['thumb']->_loop = true;
?>
				<li>
					<a href="<?php echo $_SERVER['PHP_SELF'];?>
?template=<?php echo $_smarty_tpl->tpl_vars['thumb']->value['name'];?>
&quicksave=1">
						<img src="<?php echo $_smarty_tpl->tpl_vars['thumb']->value['img'];?>
" />
						<span><?php echo $_smarty_tpl->tpl_vars['thumb']->value['name'];?>
</span>
					</a>
				</li>
				<?php } ?>
			</ul>
			<?php }?>
		</div><!-- col -->
	</div><!-- row -->
	<?php }?>

<?php } ?>

	</div>
</div>
<?php }} ?>