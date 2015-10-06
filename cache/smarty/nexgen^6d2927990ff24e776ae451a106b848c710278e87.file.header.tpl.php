<?php /* Smarty version Smarty-3.1.13, created on 2015-10-05 18:59:59
         compiled from "templates\nexgen\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:273335612ac8fde43d8-95968862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d2927990ff24e776ae451a106b848c710278e87' => 
    array (
      0 => 'templates\\nexgen\\header.tpl',
      1 => 1363883277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273335612ac8fde43d8-95968862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'header' => 0,
    'filters' => 0,
    'filter' => 0,
    'k' => 0,
    'v' => 0,
    'mediafilter' => 0,
    'mediatype' => 0,
    'owners' => 0,
    'owner' => 0,
    'pdf' => 0,
    'xls' => 0,
    'xml' => 0,
    'loggedin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5612ac90149a28_70425143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5612ac90149a28_70425143')) {function content_5612ac90149a28_70425143($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("xml.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>

<!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->

<!-- top-bar -->
<nav class="top-bar">
	<ul class="title-area">
		<li class="name">
			<h1><a href="http://videodb.net">video|db</a></h1>
		</li>
		<li class="toggle-topbar menu-icon">
			<a href="#"><span><?php echo $_smarty_tpl->tpl_vars['lang']->value['menu'];?>
</span></a>
		</li>
	</ul>

	<!-- top-bar contents -->
	<section class="top-bar-section">
		<ul class="left">
			<?php if ($_smarty_tpl->tpl_vars['header']->value['trace']){?><li<?php if ($_smarty_tpl->tpl_vars['header']->value['active']=='trace'){?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['header']->value['trace'];?>
?iframe=1">IMDB</a></li><?php }?>

			<?php if ($_smarty_tpl->tpl_vars['header']->value['new']){?><li<?php if ($_smarty_tpl->tpl_vars['header']->value['active']=='new'||$_smarty_tpl->tpl_vars['header']->value['active']=='edit'){?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['header']->value['new'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['create'];?>
</a></li><?php }?>

			<?php if ($_smarty_tpl->tpl_vars['header']->value['browse']){?>
			<li class="has-dropdown hide-for-small <?php if ($_smarty_tpl->tpl_vars['header']->value['active']=='browse'){?>active<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['header']->value['browse'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['browse'];?>
</a>

				<?php if ($_smarty_tpl->tpl_vars['header']->value['active']=='browse'){?>
				<ul class="dropdown large hide-for-small">
					<li>
						<dl class="sub-nav">
						<dt><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
:</dt>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<dd <?php if ($_smarty_tpl->tpl_vars['filter']->value==$_smarty_tpl->tpl_vars['k']->value){?>class="active"<?php }?>><a href="index.php?filter=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></dd>
							<?php } ?>
						</dl>
					</li>

					<li>
						<dl class="sub-nav">
						<dt><?php echo $_smarty_tpl->tpl_vars['lang']->value['mediatype'];?>
:</dt>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mediafilter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<dd <?php if ($_smarty_tpl->tpl_vars['mediatype']->value==$_smarty_tpl->tpl_vars['k']->value){?>class="active"<?php }?>><a href="index.php?mediafilter=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></dd>
							<?php } ?>
						</dl>
					</li>

					<?php if ($_smarty_tpl->tpl_vars['owners']->value){?>
					<li>
						<dl class="sub-nav">
						<dt><?php echo $_smarty_tpl->tpl_vars['lang']->value['owner'];?>
:</dt>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['owners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<dd <?php if ($_smarty_tpl->tpl_vars['owner']->value==$_smarty_tpl->tpl_vars['v']->value){?>class="active"<?php }?>><a href="index.php?owner=<?php echo rawurlencode($_smarty_tpl->tpl_vars['v']->value);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></dd>
							<?php } ?>
						</dl>
					</li>
					<?php }?>
				</ul>
				<?php }?>
			</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['header']->value['browse']){?>
			<li class="hide-for-medium-up <?php if ($_smarty_tpl->tpl_vars['header']->value['active']=='browse'){?>active<?php }?>">
				<a href="<?php echo $_smarty_tpl->tpl_vars['header']->value['browse'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['browse'];?>
</a>
			</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['header']->value['active']=='browse'){?>
			<li class="has-dropdown hide-for-medium-up">
				<a href="#"><?php echo $_smarty_tpl->tpl_vars['lang']->value['filter'];?>
</a>

				<ul class="dropdown">
					<li class="has-dropdown">
						<a href="#"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</a>
						<ul class="dropdown">
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<li <?php if ($_smarty_tpl->tpl_vars['filter']->value==$_smarty_tpl->tpl_vars['k']->value){?>class="active"<?php }?>><a href="index.php?filter=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
							<?php } ?>
						</ul>
					</li>
					<li class="has-dropdown">
						<a href="#"><?php echo $_smarty_tpl->tpl_vars['lang']->value['mediatype'];?>
</a>
						<ul class="dropdown">
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mediafilter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<li <?php if ($_smarty_tpl->tpl_vars['mediatype']->value==$_smarty_tpl->tpl_vars['k']->value){?>class="active"<?php }?>><a href="index.php?mediafilter=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
							<?php } ?>
						</ul>
					</li>

					<?php if ($_smarty_tpl->tpl_vars['owners']->value){?>
					<li class="has-dropdown">
						<a href="#"><?php echo $_smarty_tpl->tpl_vars['lang']->value['owner'];?>
</a>
						<ul class="dropdown">
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['owners']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<li <?php if ($_smarty_tpl->tpl_vars['owner']->value==$_smarty_tpl->tpl_vars['v']->value){?>class="active"<?php }?>><a href="index.php?owner=<?php echo rawurlencode($_smarty_tpl->tpl_vars['v']->value);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
							<?php } ?>
						</ul>
					</li>
					<?php }?>
				</ul>
			</li>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['pdf']->value||$_smarty_tpl->tpl_vars['xls']->value||$_smarty_tpl->tpl_vars['xml']->value){?>
			<li class="has-dropdown">
				<a href="#">Export</a>

				<ul class="dropdown">
					<?php if ($_smarty_tpl->tpl_vars['pdf']->value){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['pdf']->value;?>
export=pdf&ext=.pdf">Adobe PDF</a></li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['xls']->value){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['xls']->value;?>
export=xls&ext=.xls">Microsoft Excel</a></li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['xml']->value){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['xml']->value;?>
export=xml">XML</a></li><?php }?>
				</ul>
			</li>
			<?php }?>

			<li class="has-dropdown <?php if ($_smarty_tpl->tpl_vars['header']->value['active']=='borrow'||$_smarty_tpl->tpl_vars['header']->value['active']=='stats'){?>active<?php }?>">
				<a href="#">Manage</a>

				<ul class="dropdown">
					<?php if ($_smarty_tpl->tpl_vars['header']->value['borrow']){?><li<?php if ($_smarty_tpl->tpl_vars['header']->value['active']=='borrow'){?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['header']->value['borrow'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['borrow'];?>
</a></li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['header']->value['stats']){?><li<?php if ($_smarty_tpl->tpl_vars['header']->value['active']=='stats'){?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['header']->value['stats'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['statistics'];?>
</a></li><?php }?>
				</ul>
			</li>

			<?php if ($_smarty_tpl->tpl_vars['header']->value['contrib']||$_smarty_tpl->tpl_vars['header']->value['profile']||$_smarty_tpl->tpl_vars['header']->value['setup']){?>
			<li class="has-dropdown <?php if ($_smarty_tpl->tpl_vars['header']->value['active']=='setup'||$_smarty_tpl->tpl_vars['header']->value['active']=='profile'||$_smarty_tpl->tpl_vars['header']->value['active']=='contrib'){?>active<?php }?>">
				<a href="<?php if ($_smarty_tpl->tpl_vars['header']->value['setup']){?><?php echo $_smarty_tpl->tpl_vars['header']->value['setup'];?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['header']->value['profile']){?><?php echo $_smarty_tpl->tpl_vars['header']->value['profile'];?>
<?php }else{ ?>#<?php }?><?php }?>">Options</a>

				<ul class="dropdown">
					<?php if ($_smarty_tpl->tpl_vars['header']->value['setup']){?><li<?php if ($_smarty_tpl->tpl_vars['header']->value['active']=='setup'){?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['header']->value['setup'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['setup'];?>
</a></li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['header']->value['profile']){?><li<?php if ($_smarty_tpl->tpl_vars['header']->value['active']=='profile'){?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['header']->value['profile'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['profile'];?>
</a></li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['header']->value['users']){?><li<?php if ($_smarty_tpl->tpl_vars['header']->value['active']=='users'){?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['header']->value['users'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['users'];?>
</a></li><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['header']->value['contrib']){?><li<?php if ($_smarty_tpl->tpl_vars['header']->value['active']=='contrib'){?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['header']->value['contrib'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['contrib'];?>
</a></li><?php }?>
				</ul>
			</li>
			<?php }?>
		</ul>

		<ul class="right">
			<!-- other elements for top bar -->
			<li class="has-form">
				<form action="search.php">
				<input type="hidden" name="default" />
					<div class="row collapse">
						<div class="small-8 columns">
							<input type="text" name="q" />
						</div>
						<div class="small-4 columns">
							<button type="submit" class="button"><?php echo $_smarty_tpl->tpl_vars['lang']->value['search'];?>
</button>
						</div>
					</div>
				</form>
			</li>

			<?php if ($_smarty_tpl->tpl_vars['header']->value['login']){?>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['header']->value['login'];?>
"><?php if ($_smarty_tpl->tpl_vars['loggedin']->value){?><?php echo $_smarty_tpl->tpl_vars['lang']->value['logout'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['login'];?>
<?php }?></a>
			</li>
			<?php }?>
		</ul>
	</section>
</nav><!-- top-bar -->



<!-- /header --><?php }} ?>