<?php /* Smarty version Smarty-3.1.13, created on 2015-10-05 19:19:35
         compiled from "templates\nexgen\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97435612b127581c05-51212267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd74f571d6949b4e1dfb6ce2b94f314c1b8542c8' => 
    array (
      0 => 'templates\\nexgen\\show.tpl',
      1 => 1363883277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97435612b127581c05-51212267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'video' => 0,
    'lang' => 0,
    'engines' => 0,
    'link' => 0,
    'config' => 0,
    'd' => 0,
    'director' => 0,
    'country' => 0,
    'genres' => 0,
    'genre' => 0,
    'language' => 0,
    'loggedin' => 0,
    'actor' => 0,
    'role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5612b127a8cf16_65442512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5612b127a8cf16_65442512')) {function content_5612b127a8cf16_65442512($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_image')) include './lib/smarty/custom\\function.html_image.php';
if (!is_callable('smarty_modifier_capitalize')) include './lib/smarty/plugins\\modifier.capitalize.php';
?>

<!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->

<script type="text/javascript">

function showTrailer(title)
{
	open('trailer.php?title=' + escape(title), 'trailer',
		 'width=500,height=500,menubar=no,resizable=yes,scrollbars=yes,status=yes,toolbar=no');
}

</script>

<div class="row header">
	<div class="small-12 columns">
		<div class="right">
			<ul class="button-group">
				<li><a class="button small <?php if (!$_smarty_tpl->tpl_vars['video']->value['copyable']){?>disabled<?php }?>" href="#" data-reveal-id="delete-modal"><?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
</a></li>
			</ul><!-- button-group -->
			<ul class="button-group">
				<li><a class="button small <?php if (!$_smarty_tpl->tpl_vars['video']->value['copyable']){?>disabled<?php }?>" href="edit.php?copyid=<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
&amp;save=1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['copy'];?>
</a></li>
				<li><a class="button small <?php if (!$_smarty_tpl->tpl_vars['video']->value['editable']){?>disabled<?php }?>" href="borrow.php?id=<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
&amp;diskid=<?php echo $_smarty_tpl->tpl_vars['video']->value['diskid'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['borrow'];?>
</a></li>
			</ul><!-- button-group -->
			<ul class="button-group">
				<li><a class="button small <?php if (!$_smarty_tpl->tpl_vars['video']->value['copyable']){?>disabled<?php }?>" href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
</a></li>
			</ul><!-- button-group -->
		</div>

		<ul class="button-group hide-for-small">
			<li><a class="button small secondary <?php if (!$_smarty_tpl->tpl_vars['video']->value['prev_id']){?>disabled<?php }?>" href="show.php?id=<?php echo $_smarty_tpl->tpl_vars['video']->value['prev_id'];?>
">&laquo;</a></li>
			<li><a class="button small secondary <?php if (!$_smarty_tpl->tpl_vars['video']->value['next_id']){?>disabled<?php }?>" href="show.php?id=<?php echo $_smarty_tpl->tpl_vars['video']->value['next_id'];?>
">&raquo;</i></a></li>
		</ul><!-- button-group -->
<!--
		<?php if ($_smarty_tpl->tpl_vars['engines']->value['trailer']||$_smarty_tpl->tpl_vars['engines']->value['purchase']||$_smarty_tpl->tpl_vars['engines']->value['download']){?>
		<ul class="button-group hide-for-small">
			<?php if ($_smarty_tpl->tpl_vars['engines']->value['trailer']){?><li id="youtube"><a class="button small" href="#" onclick='showTrailer("<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['video']->value['title'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8', true);?>
"); return false;'><i class="foundicon-video"></i></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['engines']->value['purchase']){?><li id="purchase"><a href="#" class="button small" onclick="toggler('purchases');return false;">X</a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['engines']->value['download']){?><li id="torrent"><a href="#" class="button small" onclick="toggler('torrents');return false">X</a></li><?php }?>
		</ul>
		<?php }?>
-->
	</div><!-- nav-bar -->
</div>

<div class="row">
	<div class="small-12 large-3 columns show-cover">
		<h2><?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
</h2>
        <?php if ($_smarty_tpl->tpl_vars['link']->value&&$_smarty_tpl->tpl_vars['config']->value['imdbBrowser']){?>
        	<?php if (isset($_smarty_tpl->tpl_vars["link"])) {$_smarty_tpl->tpl_vars["link"] = clone $_smarty_tpl->tpl_vars["link"];
$_smarty_tpl->tpl_vars["link"]->value = rawurlencode($_smarty_tpl->tpl_vars['link']->value); $_smarty_tpl->tpl_vars["link"]->nocache = null; $_smarty_tpl->tpl_vars["link"]->scope = 0;
} else $_smarty_tpl->tpl_vars["link"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['link']->value), null, 0);?>
			<?php if (isset($_smarty_tpl->tpl_vars["link"])) {$_smarty_tpl->tpl_vars["link"] = clone $_smarty_tpl->tpl_vars["link"];
$_smarty_tpl->tpl_vars["link"]->value = "trace.php?iframe=1&amp;videodburl=".((string)$_smarty_tpl->tpl_vars['link']->value); $_smarty_tpl->tpl_vars["link"]->nocache = null; $_smarty_tpl->tpl_vars["link"]->scope = 0;
} else $_smarty_tpl->tpl_vars["link"] = new Smarty_variable("trace.php?iframe=1&amp;videodburl=".((string)$_smarty_tpl->tpl_vars['link']->value), null, 0);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['video']->value['imgurl']){?>
			<?php echo smarty_function_html_image(array('file'=>$_smarty_tpl->tpl_vars['video']->value['imgurl'],'link'=>$_smarty_tpl->tpl_vars['link']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['visit']),$_smarty_tpl);?>

        <?php }?>

		<h3 class="subheader"><?php echo $_smarty_tpl->tpl_vars['video']->value['subtitle'];?>
</h3>

		<?php if ($_smarty_tpl->tpl_vars['video']->value['diskid']){?>
		<h3><a href="search.php?q=<?php echo $_smarty_tpl->tpl_vars['video']->value['diskid'];?>
&amp;fields=diskid&amp;nowild=1">&lt;<?php echo $_smarty_tpl->tpl_vars['video']->value['diskid'];?>
&gt;</a></h3>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['video']->value['who']){?>
		<div class="alert-box">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['notavail'];?>
 <?php echo $_smarty_tpl->tpl_vars['video']->value['who'];?>

		</div>
		<?php }?>
	</div><!-- col -->

	<!-- main block -->
	<div class="small-12 large-9 columns show-details">
		<h4 class="subheader">Main Details</h4>

		<div class="row">
			<div class="small-12 large-6 columns">
				<div class="row"><!-- clear helper -->
					<div class="small-6 columns">
						<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['director'];?>
:
							<?php if (isset($_smarty_tpl->tpl_vars['d'])) {$_smarty_tpl->tpl_vars['d'] = clone $_smarty_tpl->tpl_vars['d'];
$_smarty_tpl->tpl_vars['d']->value = preg_split("/\s*,\s*/",$_smarty_tpl->tpl_vars['video']->value['director']); $_smarty_tpl->tpl_vars['d']->nocache = null; $_smarty_tpl->tpl_vars['d']->scope = 0;
} else $_smarty_tpl->tpl_vars['d'] = new Smarty_variable(preg_split("/\s*,\s*/",$_smarty_tpl->tpl_vars['video']->value['director']), null, 0);?>
							<?php  $_smarty_tpl->tpl_vars['director'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['director']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['director']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['total'] = $_smarty_tpl->tpl_vars['director']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['director']->key => $_smarty_tpl->tpl_vars['director']->value){
$_smarty_tpl->tpl_vars['director']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
							<a href="search.php?q=%22<?php echo rawurlencode($_smarty_tpl->tpl_vars['director']->value);?>
%22&amp;isname=1"><?php echo $_smarty_tpl->tpl_vars['director']->value;?>
</a><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']<$_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['total']-1){?>, <?php }?>
							<?php } ?>
						</p>
					</div><!-- col -->

					<div class="small-6 columns">
						<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['year'];?>
:
							<?php if ($_smarty_tpl->tpl_vars['video']->value['year']){?><a href="search.php?q=<?php echo $_smarty_tpl->tpl_vars['video']->value['year'];?>
&amp;fields=year&amp;nowild=1"><?php echo $_smarty_tpl->tpl_vars['video']->value['year'];?>
</a><?php }?>
						</p>
					</div><!-- col -->
				</div><!-- col -->
			</div><!-- row -->

			<div class="small-12 large-6 columns">
				<div class="row"><!-- clear helper -->
					<div class="small-6 columns">
						<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['country'];?>
:
							<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['video']->value['country']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['country']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['total'] = $_smarty_tpl->tpl_vars['country']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
							<a href="search.php?q=%22<?php echo rawurlencode($_smarty_tpl->tpl_vars['country']->value);?>
%22&amp;fields=country"><?php echo $_smarty_tpl->tpl_vars['country']->value;?>
</a><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']<$_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['total']-1){?>, <?php }?>
							<?php } ?>
						</p>
					</div><!-- col -->

					<div class="small-6 columns">
						<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['runtime'];?>
: <?php if ($_smarty_tpl->tpl_vars['video']->value['runtime']){?><?php echo $_smarty_tpl->tpl_vars['video']->value['runtime'];?>
min<?php }?></p>
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- col -->
		</div><!-- row -->

		<div class="row">
			<div class="small-12 large-6 columns">
				<div class="row"><!-- clear helper -->
					<div class="small-6 columns">
						<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['genres'];?>
:
							<?php  $_smarty_tpl->tpl_vars['genre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['genre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['genres']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['genre']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['total'] = $_smarty_tpl->tpl_vars['genre']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['genre']->key => $_smarty_tpl->tpl_vars['genre']->value){
$_smarty_tpl->tpl_vars['genre']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
							<a href="search.php?q=&amp;genres[]=<?php echo $_smarty_tpl->tpl_vars['genre']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['genre']->value['name'];?>
</a><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']<$_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['total']-1){?>, <?php }?>
							<?php } ?>
						</p>
					</div><!-- col -->

					<div class="small-6 columns">
						<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['language'];?>
:
							<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['video']->value['language']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['language']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["loop"]['total'] = $_smarty_tpl->tpl_vars['language']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["loop"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["loop"]['index']++;
?>
							<a href="search.php?q=%22<?php echo rawurlencode($_smarty_tpl->tpl_vars['language']->value);?>
%22&amp;fields=language"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['language']->value);?>
</a><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']<$_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['total']-1){?>, <?php }?>
							<?php } ?>
						</p>
					</div><!-- col -->
				</div><!-- col -->
			</div><!-- row -->

			<div class="small-12 large-6 columns">
				<div class="row"><!-- clear helper -->
					<div class="small-6 columns">
						<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['mediatype'];?>
:
							<a href="search.php?q=%22<?php echo rawurlencode($_smarty_tpl->tpl_vars['video']->value['mediatype']);?>
%22&amp;fields=mediatype&amp;nowild=1"><?php echo $_smarty_tpl->tpl_vars['video']->value['mediatype'];?>
</a>
						</p>
					</div><!-- col -->

					<div class="small-6 columns">
						<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['rating'];?>
: <?php if ($_smarty_tpl->tpl_vars['video']->value['rating']){?><?php echo $_smarty_tpl->tpl_vars['video']->value['rating'];?>
<?php }?></p>
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- col -->
		</div><!-- row -->

		<div class="row">
			<?php if ($_smarty_tpl->tpl_vars['video']->value['owner']){?>
			<div <?php if ($_smarty_tpl->tpl_vars['video']->value['istv']||$_smarty_tpl->tpl_vars['video']->value['seen']||$_smarty_tpl->tpl_vars['video']->value['3d']){?>class="small-6 large-3 columns"<?php }else{ ?>class="small-12 large-12 columns"<?php }?>>
				<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['owner'];?>
: <a href="search.php?q=<?php echo rawurlencode($_smarty_tpl->tpl_vars['video']->value['owner']);?>
&amp;fields=owner&amp;nowild=1"><?php echo $_smarty_tpl->tpl_vars['video']->value['owner'];?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['loggedin']->value&&$_smarty_tpl->tpl_vars['video']->value['email']&&$_smarty_tpl->tpl_vars['video']->value['owner']!=$_smarty_tpl->tpl_vars['loggedin']->value&&$_smarty_tpl->tpl_vars['video']->value['who']==''&&$_smarty_tpl->tpl_vars['video']->value['diskid']){?>
					<a href="javascript:void(open('borrowask.php?id=<?php echo rawurlencode($_smarty_tpl->tpl_vars['video']->value['id']);?>
&amp;diskid=<?php echo rawurlencode($_smarty_tpl->tpl_vars['video']->value['diskid']);?>
','borrowask','width=300,height=300,menubar=no,resizable=yes,scrollbars=yes,status=yes,toolbar=no'))" class="button tiny"><?php echo $_smarty_tpl->tpl_vars['lang']->value['borrowask'];?>
</a>
					<?php }?>
				</p>
			</div><!-- col -->
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['video']->value['istv']||$_smarty_tpl->tpl_vars['video']->value['seen']||$_smarty_tpl->tpl_vars['video']->value['3d']){?>
			<div <?php if ($_smarty_tpl->tpl_vars['video']->value['owner']){?>class="small-6 large-9 columns"<?php }else{ ?>class="small-12 large-12 columns"<?php }?>>
				<?php if ($_smarty_tpl->tpl_vars['video']->value['istv']){?>
				<dl class="sub-nav inline" input-checkbox>
					<dd <?php if ($_smarty_tpl->tpl_vars['video']->value['istv']){?>class="active"<?php }?>><a href="istv" value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tvepisode'];?>
</a></dd>
				</dl>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['video']->value['seen']){?>
				<dl class="sub-nav inline" input-checkbox>
					<dd <?php if ($_smarty_tpl->tpl_vars['video']->value['seen']){?>class="active"<?php }?>><a href="seen" value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['seen'];?>
</a></dd>
				</dl>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['video']->value['3d']){?>
				<dl class="sub-nav inline" input-checkbox>
					<dd <?php if ($_smarty_tpl->tpl_vars['video']->value['3d']){?>class="active"<?php }?>><a href="3d" value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['3d'];?>
3D</a></dd>
				</dl>
				<?php }?>
			</div><!-- col -->
			<?php }?>
		</div><!-- row -->


		<?php if ($_smarty_tpl->tpl_vars['video']->value['plot']){?>
		<h4 class="subheader">Synopsis</h4>

		<div class="row">
			<div class="small-12 columns">
				<div <?php if (strlen($_smarty_tpl->tpl_vars['video']->value['plot'])>200){?>class="small-cols-1 large-cols-3"<?php }?>>
					<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['plot'], ENT_QUOTES, 'UTF-8', true);?>
</p>
				</div><!-- col -->
			</div><!-- col -->
		</div><!-- row -->
		<?php }?>


		<?php if ($_smarty_tpl->tpl_vars['video']->value['filename']){?>
		<h4 class="subheader">File Details</h4>

		<div class="row">
			<div class="small-6 large-4 columns">
				<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['filename'];?>
: <?php echo $_smarty_tpl->tpl_vars['video']->value['filename'];?>
</p>
			</div><!-- col -->

			<div class="small-6 large-4 columns">
				<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['filesize'];?>
: <?php if ($_smarty_tpl->tpl_vars['video']->value['filesize']){?><?php echo $_smarty_tpl->tpl_vars['video']->value['filesize'];?>
mb<?php }else{ ?>-<?php }?></p>
			</div><!-- col -->

			<div class="small-6 large-4 hide-for-small columns">
				<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['filedate'];?>
: <?php if ($_smarty_tpl->tpl_vars['video']->value['filedate']){?><?php echo $_smarty_tpl->tpl_vars['video']->value['filedate'];?>
<?php }else{ ?>-<?php }?></p>
			</div><!-- col -->
		</div><!-- row -->

		<div class="row hide-for-medium-up">
			<div class="small-6 columns">
				<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['filedate'];?>
: <?php if ($_smarty_tpl->tpl_vars['video']->value['filedate']){?><?php echo $_smarty_tpl->tpl_vars['video']->value['filedate'];?>
<?php }else{ ?>-<?php }?></p>
			</div><!-- col -->

			<div class="small-6 columns">
				<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['dimension'];?>
: <?php echo $_smarty_tpl->tpl_vars['video']->value['video_width'];?>
x<?php echo $_smarty_tpl->tpl_vars['video']->value['video_height'];?>
</p>
			</div><!-- col -->
		</div><!-- row -->

		<div class="row">
			<div class="small-6 large-4 columns">
				<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['audiocodec'];?>
:
					<a href="search.php?q=%22<?php echo rawurlencode($_smarty_tpl->tpl_vars['video']->value['audio_codec']);?>
%22&amp;fields=audio_codec&amp;nowild=1"><?php if ($_smarty_tpl->tpl_vars['video']->value['audio_codec']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['audio_codec'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>-<?php }?></a>
				</p>
			</div><!-- col -->

			<div class="small-6 large-4 columns">
				<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['videocodec'];?>
:
					<a href="search.php?q=%22<?php echo rawurlencode($_smarty_tpl->tpl_vars['video']->value['video_codec']);?>
%22&amp;fields=video_codec&amp;nowild=1"><?php if ($_smarty_tpl->tpl_vars['video']->value['video_codec']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['video_codec'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>-<?php }?></a>
				</p>
			</div><!-- col -->

			<div class="small-6 large-4 hide-for-small columns">
				<p><?php echo $_smarty_tpl->tpl_vars['lang']->value['dimension'];?>
: <?php echo $_smarty_tpl->tpl_vars['video']->value['video_width'];?>
x<?php echo $_smarty_tpl->tpl_vars['video']->value['video_height'];?>
</p>
			</div><!-- col -->
		</div><!-- row -->
		<?php }?>


		<?php if ($_smarty_tpl->tpl_vars['video']->value['comment']){?>
		<h4 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['comment'];?>
</h4>

		<div class="row">
			<div class="small-12 columns">
				<p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['video']->value['comment'], ENT_QUOTES, 'UTF-8', true);?>
</p>
			</div><!-- col -->
		</div><!-- row -->
		<?php }?>


		<?php if ($_smarty_tpl->tpl_vars['video']->value['custom1name']||$_smarty_tpl->tpl_vars['video']->value['custom2name']||$_smarty_tpl->tpl_vars['video']->value['custom3name']||$_smarty_tpl->tpl_vars['video']->value['custom4name']){?>
		<h4 class="subheader">Custom Details</h4>

		<div class="row">
			<div class="small-12 columns">
				<ul class="small-block-grid-4">
					<?php if ($_smarty_tpl->tpl_vars['video']->value['custom1name']){?>
					<li><?php echo $_smarty_tpl->tpl_vars['video']->value['custom1name'];?>
: <?php echo $_smarty_tpl->tpl_vars['video']->value['custom1out'];?>
</li><?php }?>

					<?php if ($_smarty_tpl->tpl_vars['video']->value['custom2name']){?>
					<li><?php echo $_smarty_tpl->tpl_vars['video']->value['custom2name'];?>
: <?php echo $_smarty_tpl->tpl_vars['video']->value['custom2out'];?>
</li><?php }?>

					<?php if ($_smarty_tpl->tpl_vars['video']->value['custom3name']){?>
					<li><?php echo $_smarty_tpl->tpl_vars['video']->value['custom3name'];?>
: <?php echo $_smarty_tpl->tpl_vars['video']->value['custom3out'];?>
</li><?php }?>

					<?php if ($_smarty_tpl->tpl_vars['video']->value['custom4name']){?>
					<li><?php echo $_smarty_tpl->tpl_vars['video']->value['custom4name'];?>
: <?php echo $_smarty_tpl->tpl_vars['video']->value['custom4out'];?>
</li><?php }?>
				</ul>
			</div><!-- col -->
		</div><!-- row -->
		<?php }?>


		<?php if (count($_smarty_tpl->tpl_vars['video']->value['cast'])){?>
		<h4 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cast'];?>
</h4>

		<div class="row">
			<div class="small-12 columns">
				<ul class="small-block-grid-1 large-block-grid-4">
					<?php  $_smarty_tpl->tpl_vars['actor'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['actor']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['video']->value['cast']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['col']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['actor']->key => $_smarty_tpl->tpl_vars['actor']->value){
$_smarty_tpl->tpl_vars['actor']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['col']['index']++;
?>
					<li <?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['col']['index'])%4==0){?>class="clear"<?php }?>>
						<div class="row collapse">
							<div class="small-4 columns">
								<?php if ($_smarty_tpl->tpl_vars['actor']->value['imgurl']){?>
									<?php if (isset($_smarty_tpl->tpl_vars["link"])) {$_smarty_tpl->tpl_vars["link"] = clone $_smarty_tpl->tpl_vars["link"];
$_smarty_tpl->tpl_vars["link"]->value = $_smarty_tpl->tpl_vars['actor']->value['imdburl']; $_smarty_tpl->tpl_vars["link"]->nocache = null; $_smarty_tpl->tpl_vars["link"]->scope = 0;
} else $_smarty_tpl->tpl_vars["link"] = new Smarty_variable($_smarty_tpl->tpl_vars['actor']->value['imdburl'], null, 0);?>
									<?php if ($_smarty_tpl->tpl_vars['config']->value['imdbBrowser']){?>
										<?php if (isset($_smarty_tpl->tpl_vars["link"])) {$_smarty_tpl->tpl_vars["link"] = clone $_smarty_tpl->tpl_vars["link"];
$_smarty_tpl->tpl_vars["link"]->value = rawurlencode($_smarty_tpl->tpl_vars['link']->value); $_smarty_tpl->tpl_vars["link"]->nocache = null; $_smarty_tpl->tpl_vars["link"]->scope = 0;
} else $_smarty_tpl->tpl_vars["link"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['link']->value), null, 0);?>
										<?php if (isset($_smarty_tpl->tpl_vars["link"])) {$_smarty_tpl->tpl_vars["link"] = clone $_smarty_tpl->tpl_vars["link"];
$_smarty_tpl->tpl_vars["link"]->value = "trace.php?iframe=1&amp;videodburl=".((string)$_smarty_tpl->tpl_vars['link']->value); $_smarty_tpl->tpl_vars["link"]->nocache = null; $_smarty_tpl->tpl_vars["link"]->scope = 0;
} else $_smarty_tpl->tpl_vars["link"] = new Smarty_variable("trace.php?iframe=1&amp;videodburl=".((string)$_smarty_tpl->tpl_vars['link']->value), null, 0);?>
									<?php }?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"><?php echo smarty_function_html_image(array('file'=>$_smarty_tpl->tpl_vars['actor']->value['imgurl'],'max_width'=>60,'max_height'=>90),$_smarty_tpl);?>
</a>
								<?php }?>
							</div>
							<div class="small-8 columns">
								<a href="search.php?q=%22<?php echo rawurlencode($_smarty_tpl->tpl_vars['actor']->value['name']);?>
%22&amp;isname=1"><?php echo $_smarty_tpl->tpl_vars['actor']->value['name'];?>
</a>
								<?php  $_smarty_tpl->tpl_vars['role'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['role']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actor']->value['roles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['role']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["loop"]['total'] = $_smarty_tpl->tpl_vars['role']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["loop"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['role']->key => $_smarty_tpl->tpl_vars['role']->value){
$_smarty_tpl->tpl_vars['role']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["loop"]['index']++;
?><br/><?php echo $_smarty_tpl->tpl_vars['role']->value;?>
<?php } ?>
							</div>
						</div>
					</li><!-- col -->
					<?php } ?>
				</ul><!-- row -->

			</div><!-- col -->
		</div><!-- row -->
		<?php }?>

	</div><!-- col -->
</div><!-- row -->

<!-- modal dialogs -->
<div id="delete-modal" class="reveal-modal large">
	<form action="delete.php" method="post">
		<input type="hidden" name="redirect" value="1" />
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
" />

		<div class="row">
			<div class="small-3 columns">
				<?php if ($_smarty_tpl->tpl_vars['video']->value['imgurl']){?>
				<?php echo smarty_function_html_image(array('file'=>$_smarty_tpl->tpl_vars['video']->value['imgurl'],'link'=>$_smarty_tpl->tpl_vars['link']->value,'title'=>$_smarty_tpl->tpl_vars['lang']->value['visit']),$_smarty_tpl);?>

				<?php }?>
			</div>
			<div class="small-9 columns">
				<h2><?php echo $_smarty_tpl->tpl_vars['video']->value['title'];?>
</h2> 
				<p class="lead"><?php echo $_smarty_tpl->tpl_vars['lang']->value['delete_movie'];?>
</p> 
				<a href="#" class="button submit"><?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
</a>
				<a class="button close-modal"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cancel'];?>
</a> 
				<a class="close-reveal-modal">&#215;</a> 
			</div>
		</div>
	</form>
</div>
<?php }} ?>