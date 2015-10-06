<?php /* Smarty version Smarty-3.1.13, created on 2015-10-05 19:12:46
         compiled from "templates\nexgen\lookup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285265612af8e63d870-72825244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a616a23c94ca47a0061e4bc68dddc44627c70ad5' => 
    array (
      0 => 'templates\\nexgen\\lookup.tpl',
      1 => 1363444187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285265612af8e63d870-72825244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template' => 0,
    'engines' => 0,
    'engine' => 0,
    'e' => 0,
    'eng' => 0,
    'searchtype' => 0,
    'q_find' => 0,
    'lang' => 0,
    'http_error' => 0,
    'imdbresults' => 0,
    'match' => 0,
    'searchurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5612af8eb2d760_97539348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5612af8eb2d760_97539348')) {function content_5612af8eb2d760_97539348($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("xml.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>

<!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->

<!-- load js -->
<script> document.write('<script src="lib/foundation4/js/vendor/' + ('__proto__' in {} ? 'zepto' : 'jquery') + '.js"><\/script>'); </script> 
<script src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
js/app.js"></script>
<script src="lib/foundation4/js/vendor/custom.modernizr.js"></script>
<script src="lib/foundation4/js/foundation.min.js"></script>
<script> $(document).ready(function(){$(document).foundation();}); </script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
js/lookup.js"></script>

<dl class="tabs">
    <?php  $_smarty_tpl->tpl_vars['eng'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['eng']->_loop = false;
 $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['engines']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['eng']->key => $_smarty_tpl->tpl_vars['eng']->value){
$_smarty_tpl->tpl_vars['eng']->_loop = true;
 $_smarty_tpl->tpl_vars['e']->value = $_smarty_tpl->tpl_vars['eng']->key;
?>
	<dd class="<?php if ($_smarty_tpl->tpl_vars['engine']->value==$_smarty_tpl->tpl_vars['e']->value){?>active<?php }?>"><a href="<?php if ($_smarty_tpl->tpl_vars['engine']->value==$_smarty_tpl->tpl_vars['e']->value){?>#<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['eng']->value['url'];?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['eng']->value['name'];?>
</a></dd>
    <?php } ?>
</dl>

<div class="row">
	<div class="small-12 columns">

		<div class="row header">
			<form action="lookup.php" name="formlookup" method="post">
				<input type="hidden" name="engine" value="<?php echo $_smarty_tpl->tpl_vars['engine']->value;?>
" />
				<input type="hidden" name="searchtype" value="<?php echo $_smarty_tpl->tpl_vars['searchtype']->value;?>
" />

				<div class="small-6 columns">
					<input type="text" name="find" id="find" value="<?php echo $_smarty_tpl->tpl_vars['q_find']->value;?>
" class="autofocus" />
				</div><!-- col -->
				<div class="small-6 columns left">
					<a href="#" class="button small submit" /><?php echo $_smarty_tpl->tpl_vars['lang']->value['l_search'];?>
</a>
				</div><!-- col -->
			</form>
		</div><!-- row -->

		<?php if ($_smarty_tpl->tpl_vars['http_error']->value){?>
		<div class="alert-box alert">
			<?php echo $_smarty_tpl->tpl_vars['http_error']->value;?>

			<a href="#" class="close">&times;</a>
		</div>
		<?php }?>

		<?php if (!$_smarty_tpl->tpl_vars['imdbresults']->value){?>
		<div class="alert-box">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['l_nothing'];?>

		</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['imdbresults']->value){?>
        <h4 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['l_select'];?>
</h4>

        <?php if ($_smarty_tpl->tpl_vars['searchtype']->value=='image'){?>
		<ul class="small-block-grid-4 small">
			<?php  $_smarty_tpl->tpl_vars['match'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['match']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imdbresults']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["col"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['match']->key => $_smarty_tpl->tpl_vars['match']->value){
$_smarty_tpl->tpl_vars['match']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["col"]['index']++;
?>
			<li <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['col']['index'])%4==0){?>class="clear"<?php }?>>
				<a href="javascript:void(returnImage('<?php echo $_smarty_tpl->tpl_vars['match']->value['coverurl'];?>
'))" title="Select">
					<img src="<?php echo $_smarty_tpl->tpl_vars['match']->value['imgsmall'];?>
" max-width="90" max-height="60" />
				</a>

				<div class="small">
					<?php echo $_smarty_tpl->tpl_vars['match']->value['title'];?>

				</div>
			</li>
			<?php } ?>
		</ul>
		<?php }else{ ?>
		<ul class="no-bullet">
			<li>
				<ol>
					<?php  $_smarty_tpl->tpl_vars['match'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['match']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imdbresults']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['match']->key => $_smarty_tpl->tpl_vars['match']->value){
$_smarty_tpl->tpl_vars['match']->_loop = true;
?>
					<li>
						<a href="javascript:void(returnData('<?php echo $_smarty_tpl->tpl_vars['match']->value['id'];?>
','<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['match']->value['title'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8', true);?>
','<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['match']->value['subtitle'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo $_smarty_tpl->tpl_vars['engine']->value;?>
'));" title="add ID and close Window"><?php echo $_smarty_tpl->tpl_vars['match']->value['title'];?>
<?php if ($_smarty_tpl->tpl_vars['match']->value['subtitle']){?> - <?php echo $_smarty_tpl->tpl_vars['match']->value['subtitle'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['match']->value['year']){?> (<?php echo $_smarty_tpl->tpl_vars['match']->value['year'];?>
)<?php }?></a>

						<?php if ($_smarty_tpl->tpl_vars['match']->value['details']||$_smarty_tpl->tpl_vars['match']->value['imgsmall']){?>
						<font size="-2">
							<?php if ($_smarty_tpl->tpl_vars['match']->value['imgsmall']){?><img src="<?php echo $_smarty_tpl->tpl_vars['match']->value['imgsmall'];?>
" align="left" width="25" height="35" /><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['match']->value['details'];?>

						</font>
						<?php }?>
					</li>
					<?php } ?>
				</ol>
				<?php }?>
			</li>
		</ul>
		<?php }?>

		<div class="right">
			<a href="<?php echo $_smarty_tpl->tpl_vars['searchurl']->value;?>
" class="button small" target="_blank"><?php echo $_smarty_tpl->tpl_vars['lang']->value['l_selfsearch'];?>
</a>
		</div>

	</div><!-- col -->
</div><!-- row -->

</body>
</html>
<?php }} ?>