<?php /* Smarty version Smarty-3.1.13, created on 2015-10-05 19:00:00
         compiled from "templates\nexgen\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282255612ac9026f181-15274470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f42bb9377857a87da4fff0d44fd3802066a2d6dd' => 
    array (
      0 => 'templates\\nexgen\\footer.tpl',
      1 => 1363115598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282255612ac9026f181-15274470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageno' => 0,
    'maxpageno' => 0,
    'delta' => 0,
    'page' => 0,
    'DEBUG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5612ac9032d147_36367130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5612ac9032d147_36367130')) {function content_5612ac9032d147_36367130($_smarty_tpl) {?>

<!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->

<?php if ($_smarty_tpl->tpl_vars['pageno']->value&&$_smarty_tpl->tpl_vars['maxpageno']->value){?>
<footer>
	<div class="pagination-centered">
		<ul class="pagination">
			<li class="arrow <?php if ($_smarty_tpl->tpl_vars['pageno']->value<=1){?>unavailable<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['pageno']->value<=1){?>#<?php }else{ ?>index.php?pageno=<?php echo $_smarty_tpl->tpl_vars['pageno']->value-1;?>
<?php }?>">&laquo;</a></li>

			<?php if (isset($_smarty_tpl->tpl_vars['delta'])) {$_smarty_tpl->tpl_vars['delta'] = clone $_smarty_tpl->tpl_vars['delta'];
$_smarty_tpl->tpl_vars['delta']->value = 2; $_smarty_tpl->tpl_vars['delta']->nocache = null; $_smarty_tpl->tpl_vars['delta']->scope = 0;
} else $_smarty_tpl->tpl_vars['delta'] = new Smarty_variable(2, null, 0);?>

			<?php if ($_smarty_tpl->tpl_vars['maxpageno']->value>0){?>
			<li <?php if ($_smarty_tpl->tpl_vars['pageno']->value==1){?>class="current"<?php }?>><a href="index.php?pageno=1">1</a></li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['pageno']->value-$_smarty_tpl->tpl_vars['delta']->value>2){?><li class="unavailable"><a href="">&hellip;</a></li><?php }?>

			<?php $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int)ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? min(($_smarty_tpl->tpl_vars['pageno']->value+$_smarty_tpl->tpl_vars['delta']->value),($_smarty_tpl->tpl_vars['maxpageno']->value-1))+1 - (max(($_smarty_tpl->tpl_vars['pageno']->value-$_smarty_tpl->tpl_vars['delta']->value),2)) : max(($_smarty_tpl->tpl_vars['pageno']->value-$_smarty_tpl->tpl_vars['delta']->value),2)-(min(($_smarty_tpl->tpl_vars['pageno']->value+$_smarty_tpl->tpl_vars['delta']->value),($_smarty_tpl->tpl_vars['maxpageno']->value-1)))+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0){
for ($_smarty_tpl->tpl_vars['page']->value = max(($_smarty_tpl->tpl_vars['pageno']->value-$_smarty_tpl->tpl_vars['delta']->value),2), $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++){
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
			<li <?php if ($_smarty_tpl->tpl_vars['page']->value==$_smarty_tpl->tpl_vars['pageno']->value){?>class="current"<?php }?>><a href="index.php?pageno=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
			<?php }} ?>

			<?php if ($_smarty_tpl->tpl_vars['pageno']->value+$_smarty_tpl->tpl_vars['delta']->value<=$_smarty_tpl->tpl_vars['maxpageno']->value-2){?><li class="unavailable"><a href="">&hellip;</a></li><?php }?>

			<?php if ($_smarty_tpl->tpl_vars['maxpageno']->value>1){?>
			<li <?php if ($_smarty_tpl->tpl_vars['pageno']->value==$_smarty_tpl->tpl_vars['maxpageno']->value){?>class="current"<?php }?>><a href="index.php?pageno=<?php echo $_smarty_tpl->tpl_vars['maxpageno']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['maxpageno']->value;?>
</a></li>
			<?php }?>
			<li class="arrow <?php if ($_smarty_tpl->tpl_vars['pageno']->value>=$_smarty_tpl->tpl_vars['maxpageno']->value){?>unavailable<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['pageno']->value>=$_smarty_tpl->tpl_vars['maxpageno']->value){?>#<?php }else{ ?>index.php?pageno=<?php echo $_smarty_tpl->tpl_vars['pageno']->value+1;?>
<?php }?>">&raquo;</a></li>
		</ul>
	</div>
</footer>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['DEBUG']->value){?>
<div class="row"><?php echo $_smarty_tpl->tpl_vars['DEBUG']->value;?>
</div>
<?php }?>

</body>
</html>
<?php }} ?>