<?php /* Smarty version Smarty-3.1.13, created on 2015-10-05 19:29:58
         compiled from "templates\nexgen\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166655612b396d0ac37-75088784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9d76717560f408641ca81e7bbf5aedde42826dc' => 
    array (
      0 => 'templates\\nexgen\\search.tpl',
      1 => 1363444187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166655612b396d0ac37-75088784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template' => 0,
    'imgurl' => 0,
    'q' => 0,
    'config' => 0,
    'link' => 0,
    'lang' => 0,
    'q_q' => 0,
    'owners' => 0,
    'search_fields' => 0,
    'k' => 0,
    'selected_fields' => 0,
    'v' => 0,
    'owner' => 0,
    'genres' => 0,
    'genre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5612b396e76576_82559266',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5612b396e76576_82559266')) {function content_5612b396e76576_82559266($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include './lib/smarty/plugins\\modifier.regex_replace.php';
if (!is_callable('smarty_function_html_image')) include './lib/smarty/custom\\function.html_image.php';
?>

<!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
js/search.js"></script>

<form action="search.php" id="search" name="search" method="get">

	<div class="row">
		<?php if ($_smarty_tpl->tpl_vars['imgurl']->value){?>
		<div class="large-2 columns hide-for-small search-cover">
			<?php if (isset($_smarty_tpl->tpl_vars['link'])) {$_smarty_tpl->tpl_vars['link'] = clone $_smarty_tpl->tpl_vars['link'];
$_smarty_tpl->tpl_vars['link']->value = rawurlencode(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['q']->value,"/&quot;|\"|%22/",'')); $_smarty_tpl->tpl_vars['link']->nocache = null; $_smarty_tpl->tpl_vars['link']->scope = 0;
} else $_smarty_tpl->tpl_vars['link'] = new Smarty_variable(rawurlencode(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['q']->value,"/&quot;|\"|%22/",'')), null, 0);?>
			<?php if (isset($_smarty_tpl->tpl_vars['link'])) {$_smarty_tpl->tpl_vars['link'] = clone $_smarty_tpl->tpl_vars['link'];
$_smarty_tpl->tpl_vars['link']->value = "http://www.imdb.com/find?q=".((string)$_smarty_tpl->tpl_vars['link']->value)."&s=all"; $_smarty_tpl->tpl_vars['link']->nocache = null; $_smarty_tpl->tpl_vars['link']->scope = 0;
} else $_smarty_tpl->tpl_vars['link'] = new Smarty_variable("http://www.imdb.com/find?q=".((string)$_smarty_tpl->tpl_vars['link']->value)."&s=all", null, 0);?>
	        <?php if ($_smarty_tpl->tpl_vars['config']->value['imdbBrowser']){?>
				<?php if (isset($_smarty_tpl->tpl_vars["link"])) {$_smarty_tpl->tpl_vars["link"] = clone $_smarty_tpl->tpl_vars["link"];
$_smarty_tpl->tpl_vars["link"]->value = "trace.php?iframe=1&videodburl=".((string)$_smarty_tpl->tpl_vars['link']->value); $_smarty_tpl->tpl_vars["link"]->nocache = null; $_smarty_tpl->tpl_vars["link"]->scope = 0;
} else $_smarty_tpl->tpl_vars["link"] = new Smarty_variable("trace.php?iframe=1&videodburl=".((string)$_smarty_tpl->tpl_vars['link']->value), null, 0);?>
	        <?php }?>
			<a href='<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
' class="th"><?php echo smarty_function_html_image(array('file'=>$_smarty_tpl->tpl_vars['imgurl']->value),$_smarty_tpl);?>
</a>
		</div>
		<?php }?>

		<div class="small-12 large-10 columns <?php if (!$_smarty_tpl->tpl_vars['imgurl']->value){?>large-centered<?php }?> search-parameters">

			<h4 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['search'];?>
</h4>

			<div class="row">
				<div class="small-12 columns">
					<label><?php echo $_smarty_tpl->tpl_vars['lang']->value['keywords'];?>
</label>
				</div><!-- col -->
			</div><!-- row -->

			<div class="row collapse">
				<div class="small-10 columns">
					<input type="text" name="q" id="q" value='<?php echo $_smarty_tpl->tpl_vars['q_q']->value;?>
' />
					<div id="item_choices" class="autocomplete" style="display: none"></div>
				</div><!-- col -->

				<div class="small-2 columns">
					<a class="button postfix submit" href="#"><?php echo $_smarty_tpl->tpl_vars['lang']->value['l_search'];?>
</a>
				</div><!-- col -->
			</div><!-- row -->

			<!-- fields -->
			<div class="row">
				<div class="small-2 large-1 columns">
					<dl class="sub-nav">
						<dt>Note:</dt>
					</dl>
				</div><!-- col -->
				<div class="small-10 large-11 columns">
					<dl class="sub-nav">
						<dd><?php echo $_smarty_tpl->tpl_vars['lang']->value['keywords_desc'];?>
</dd>
					</dl>
				</div><!-- col -->
			</div><!-- row -->
			
			<div class="row">
				<div class="small-2 large-1 columns">
					<dl class="sub-nav" input-checkbox>
						<dt><?php echo $_smarty_tpl->tpl_vars['lang']->value['fieldselect'];?>
:</dt>
					</dl>
				</div><!-- col -->
				<div class="small-10 <?php if ($_smarty_tpl->tpl_vars['owners']->value){?>large-7<?php }else{ ?>large-11<?php }?> columns">
					<dl class="sub-nav" input-checkbox>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['search_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<dd <?php if (in_array($_smarty_tpl->tpl_vars['k']->value,$_smarty_tpl->tpl_vars['selected_fields']->value)){?>class="active"<?php }?>><a href="fields[]" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></dd>
						<?php } ?>
					</dl>
				</div><!-- col -->

				<?php if ($_smarty_tpl->tpl_vars['owners']->value){?>
				<div class="small-2 large-1 columns">
					<dl class="sub-nav" input-radio>
						<dt><?php echo $_smarty_tpl->tpl_vars['lang']->value['owner'];?>
:</dt>
						</dl>
					</div><!-- col -->
					<div class="small-10 large-3 columns">
						<dl class="sub-nav" input-radio>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['owners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<dd <?php if ($_smarty_tpl->tpl_vars['owner']->value==$_smarty_tpl->tpl_vars['v']->value){?>class="active"<?php }?>><a href="owner" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></dd>
						<?php } ?>
					</dl><!-- sub-nav -->
				</div><!-- col -->
				<?php }?>
			</div><!-- row -->

			<div class="row">
				<div class="small-2 large-1 columns">
					<dl class="sub-nav" input-checkbox>
						<dt><?php echo $_smarty_tpl->tpl_vars['lang']->value['genre'];?>
:</dt>
					</dl>
				</div><!-- col -->
				<div class="small-10 large-11 columns">
					<dl class="sub-nav" input-checkbox>
						<?php  $_smarty_tpl->tpl_vars['genre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['genre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['genres']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['genre']->key => $_smarty_tpl->tpl_vars['genre']->value){
$_smarty_tpl->tpl_vars['genre']->_loop = true;
?>
						<dd <?php if ($_smarty_tpl->tpl_vars['genre']->value['checked']){?>class="active"<?php }?>><a href="genres[]" value="<?php echo $_smarty_tpl->tpl_vars['genre']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['genre']->value['name'];?>
</a></dd>
						<?php } ?>
					</dl>
				</div><!-- col -->
			</div><!-- row -->

		</div><!-- col -->
	</div><!-- row -->

</form>
<?php }} ?>