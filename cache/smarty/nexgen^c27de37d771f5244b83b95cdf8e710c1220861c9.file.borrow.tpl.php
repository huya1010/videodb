<?php /* Smarty version Smarty-3.1.13, created on 2015-10-05 19:00:52
         compiled from "templates\nexgen\borrow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164135612acc404e286-02675180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c27de37d771f5244b83b95cdf8e710c1220861c9' => 
    array (
      0 => 'templates\\nexgen\\borrow.tpl',
      1 => 1363115598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164135612acc404e286-02675180',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'diskid' => 0,
    'editable' => 0,
    'who' => 0,
    'dt' => 0,
    'config' => 0,
    'owners' => 0,
    'owner' => 0,
    'borrowlist' => 0,
    'disk' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5612acc416f5a8_95344163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5612acc416f5a8_95344163')) {function content_5612acc416f5a8_95344163($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include './lib/smarty/plugins\\function.html_options.php';
?>

<!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->

<div class="row">
	<div class="small-12 large-8 columns small-centered">

		<h3 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['borrow'];?>
</h3>

		<?php if ($_smarty_tpl->tpl_vars['diskid']->value&&$_smarty_tpl->tpl_vars['editable']->value){?>
		<form action="borrow.php" name="formborrow" method="post">
			<input type="hidden" name="diskid" value="<?php echo $_smarty_tpl->tpl_vars['diskid']->value;?>
" />
			<input type="hidden" name="return" value="1" />

			<?php if ($_smarty_tpl->tpl_vars['who']->value){?>
			<h5 class="subheader">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['diskid'];?>
 <?php echo $_smarty_tpl->tpl_vars['diskid']->value;?>

				<?php echo $_smarty_tpl->tpl_vars['lang']->value['lentto'];?>
 <?php echo $_smarty_tpl->tpl_vars['who']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['dt']->value;?>
)
			</h5>
			<input type="submit" class="button" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['returned'];?>
" />

			<?php }else{ ?>
			<h5 class="subheader">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['diskid'];?>
 <?php echo $_smarty_tpl->tpl_vars['diskid']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['available'];?>

				<?php echo $_smarty_tpl->tpl_vars['lang']->value['borrowto'];?>
:
			</h5>
			<div class="row collapse">
				<div class="small-10 columns">
					<input type="text" name="who" />
				</div>
				<div class="small-2 columns">
					<a href="#" class="button postfix submit"><?php echo $_smarty_tpl->tpl_vars['lang']->value['borrow'];?>
</a>
				</div>
			</div>
			<?php }?>
		</form>
		<?php }?>


		<?php if ($_smarty_tpl->tpl_vars['config']->value['multiuser']){?>
		<h5 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['curlentfrom'];?>
</h5>
		<form action="borrow.php">
			<?php echo smarty_function_html_options(array('name'=>'owner','options'=>$_smarty_tpl->tpl_vars['owners']->value,'selected'=>$_smarty_tpl->tpl_vars['owner']->value,'class'=>"autosubmit"),$_smarty_tpl);?>

		</form>
		<?php }else{ ?>
		<h5 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['curlent'];?>
</h5>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['borrowlist']->value){?>
		<table class="small-12">
			<thead>
				<tr>
					<th><h5 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['diskid'];?>
</h5></th>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['multiuser']){?><th><h5 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['owner'];?>
</h5></th><?php }?>
					<th><h5 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</h5></th>
					<th><h5 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['lentto'];?>
</h5></th>
					<th><h5 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
</h5></th>
					<th></th>
				</tr>
			</thead>

			<tbody>
				<?php  $_smarty_tpl->tpl_vars['disk'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['disk']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['borrowlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['disk']->key => $_smarty_tpl->tpl_vars['disk']->value){
$_smarty_tpl->tpl_vars['disk']->_loop = true;
?>
				<tr>
					<td><a href="search.php?q=<?php echo $_smarty_tpl->tpl_vars['disk']->value['diskid'];?>
&amp;fields=diskid&amp;nowild=1"><?php echo $_smarty_tpl->tpl_vars['disk']->value['diskid'];?>
</a></td>
					<?php if ($_smarty_tpl->tpl_vars['config']->value['multiuser']){?>
					<td><?php echo $_smarty_tpl->tpl_vars['disk']->value['owner'];?>
</td>
					<?php }?>
					<td>
						<a href="show.php?id=<?php echo $_smarty_tpl->tpl_vars['disk']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['disk']->value['title'];?>
</a>
						<?php if ($_smarty_tpl->tpl_vars['disk']->value['count']>1){?> ... <?php }?>
					</td>
					<td><?php echo $_smarty_tpl->tpl_vars['disk']->value['who'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['disk']->value['dt'];?>
</td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['disk']->value['editable']){?>
						<form action="borrow.php" method="get">
							<input type="hidden" name="diskid" value="<?php echo $_smarty_tpl->tpl_vars['disk']->value['diskid'];?>
" />
							<input type="hidden" name="return" value="1" />
							<input type="submit" class="button small" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['returned'];?>
" />
						</form>
						<?php }?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>

		<?php }else{ ?>
		<div class="alert-box">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['l_nothing'];?>

		</div>
		<?php }?>

	</div><!-- col -->
</div><!-- row -->
<?php }} ?>