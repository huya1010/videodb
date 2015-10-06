<?php /* Smarty version Smarty-3.1.13, created on 2015-10-05 19:00:00
         compiled from "templates\nexgen\xml.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112905612ac901665d2-28541644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c04a8923cadd5d58c8ba7ab6ea7b61378bbd7f1' => 
    array (
      0 => 'templates\\nexgen\\xml.tpl',
      1 => 1363883277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112905612ac901665d2-28541644',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'rss' => 0,
    'style' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5612ac90182511_56573010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5612ac90182511_56573010')) {function content_5612ac90182511_56573010($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><![endif]-->
<!--[if IE 8]><html class="lt-ie9" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->
<head>
	<title>videoDB<?php if ($_smarty_tpl->tpl_vars['title']->value){?> - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }?></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<meta name="description" content="VideoDB" />
	<link rel="shortcut icon" type="image/ico" href="images/icons/1-favicon.ico" />

	<?php if ($_smarty_tpl->tpl_vars['rss']->value){?><link rel="alternate" type="application/rss+xml" title="VideoDB RSS" href="index.php?export=rss" /><?php }?>

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="lib/foundation4/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="lib/foundation4/css/foundation.css" />
	<link rel="stylesheet" type="text/css" href="lib/foundation4/fonts/general_foundicons.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
" />
<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="lib/foundation4/css/ltie9.css" /><![endif]-->

	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Exo:600' type='text/css'>

	<!-- js -->
	<script>document.write('<script src="lib/foundation4/js/vendor/' + ('__proto__' in {} ? 'zepto' : 'jquery') + '.js"><\/script>');</script> 
	<script type="text/javascript" src="lib/foundation4/js/vendor/custom.modernizr.js"></script>
	<!-- <script type="text/javascript" src="lib/foundation4/js/foundation.min.js"></script> -->
	<script src="lib/foundation4/js/foundation/foundation.js"></script>
	<script src="lib/foundation4/js/foundation/foundation.forms.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
js/app.js"></script>
	<script>$(document).ready(function(){$(document).foundation()});</script>
</head>
<?php }} ?>