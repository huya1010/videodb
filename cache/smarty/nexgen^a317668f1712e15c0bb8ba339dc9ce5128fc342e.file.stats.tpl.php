<?php /* Smarty version Smarty-3.1.13, created on 2015-10-05 19:00:56
         compiled from "templates\nexgen\stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211385612acc827eab0-02447476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a317668f1712e15c0bb8ba339dc9ce5128fc342e' => 
    array (
      0 => 'templates\\nexgen\\stats.tpl',
      1 => 1363188436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211385612acc827eab0-02447476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'owners' => 0,
    'owner' => 0,
    'stats' => 0,
    'row' => 0,
    'year' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5612acc8438392_63138298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5612acc8438392_63138298')) {function content_5612acc8438392_63138298($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include './lib/smarty/plugins\\function.html_options.php';
if (!is_callable('smarty_modifier_spacify')) include './lib/smarty/plugins\\modifier.spacify.php';
if (!is_callable('smarty_function_math')) include './lib/smarty/plugins\\function.math.php';
?>

<!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->

<div class="row">
	<div class="small-12 large-10 columns small-centered">


    <h3 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['statistics'];?>
</h3>

    <?php if ($_smarty_tpl->tpl_vars['owners']->value){?>
    <h6 class="subheader">Statistics for</h6>
    <form action="stats.php">
    	<?php echo smarty_function_html_options(array('name'=>'owner','options'=>$_smarty_tpl->tpl_vars['owners']->value,'selected'=>$_smarty_tpl->tpl_vars['owner']->value,'class'=>"autosubmit"),$_smarty_tpl);?>

    </form>
    <?php }?>


    <div class="row">
    	<div class="small-12 large-6 columns">

          <table class="small-12">
            <tr>
              <td><h6 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['totalfiles'];?>
:</h6></td>
              <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['count_all'];?>
</td>
            </tr>
            <tr>
              <td><h6 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tv_episodes'];?>
:</h6></td>
              <td><a href="search.php?q=1&fields=istv"><?php echo $_smarty_tpl->tpl_vars['stats']->value['count_tv'];?>
</a></td>
            </tr>
            <tr>
              <td><h6 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['numberdisks'];?>
:</h6></td>
              <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['count_disk'];?>
</td>
            </tr>
            <tr>
              <td><h6 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['videobygen'];?>
:</h6><?php echo $_smarty_tpl->tpl_vars['lang']->value['multiple'];?>
</td>
              <td>
              	<div class="small-cols-1 large-cols-2">
          				<ul>
          					<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stats']->value['count_genre']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
          					<li><?php echo $_smarty_tpl->tpl_vars['row']->value['count'];?>
 <a href="search.php?q=&genres[]=<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</a></li>
          					<?php } ?>
          				</ul>
                </div>
              </td>
            </tr>
            <tr>
              <td><h6 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['year'];?>
:</h6></td>
              <td>
                <table class="small-12">
                  <tr>
                    <td valign="bottom"><small><?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['stats']->value['first_year'],"<br/>");?>
</small></td>
                    <td colspan="2" valign="bottom">
                      <?php  $_smarty_tpl->tpl_vars['count'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['count']->_loop = false;
 $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stats']->value['count_year']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['count']->key => $_smarty_tpl->tpl_vars['count']->value){
$_smarty_tpl->tpl_vars['count']->_loop = true;
 $_smarty_tpl->tpl_vars['year']->value = $_smarty_tpl->tpl_vars['count']->key;
?><a href="search.php?q=<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
&amp;fields=year&amp;nowild=1"><img src="images/bar.gif" style="width:7px; height:<?php echo smarty_function_math(array('equation'=>'max(round(100/y*x),1)','x'=>$_smarty_tpl->tpl_vars['count']->value,'y'=>$_smarty_tpl->tpl_vars['stats']->value['max_count']),$_smarty_tpl);?>
px;" title="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['year']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
" /></a><?php } ?>
                    </td>
                    <td><small><?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['stats']->value['last_year'],"<br/>");?>
</small></td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>

    	</div><!-- col -->

    	<div class="small-12 large-6 columns">

          <table class="small-12">
            <tr>
              <td><h6 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['averageruntime'];?>
:</h6></td>
              <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['avg_time'];?>
 min</td>
            </tr>
            <tr>
              <td><h6 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['totalruntime'];?>
:</h6></td>
              <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['sum_time'];?>
 h</td>
            </tr>
            <tr>
              <td><h6 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['totalseen'];?>
:</h6></td>
              <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['seen_time'];?>
 h</td>
            </tr>
            <tr>
              <td><h6 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['languages'];?>
:</h3></td>
              <td>
              	<div class="small-cols-1 large-cols-2">
              	<ul>
                	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stats']->value['count_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                	<?php if ($_smarty_tpl->tpl_vars['row']->value['language']){?>
    				      <li><?php echo $_smarty_tpl->tpl_vars['row']->value['count'];?>
 <a href="search.php?q=<?php echo rawurlencode($_smarty_tpl->tpl_vars['row']->value['language']);?>
&amp;fields=language"><?php echo $_smarty_tpl->tpl_vars['row']->value['language'];?>
</a></li>
                  <?php }?>
                	<?php } ?>
                </ul>
                </div>
              </td>
            </tr>
            <tr>
              <td><h6 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['videobymedia'];?>
:</h6></td>
              <td>
              	<div class="small-cols-1 large-cols-2">
          				<ul>
          					<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stats']->value['count_media']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
          					<li><?php echo $_smarty_tpl->tpl_vars['row']->value['count'];?>
 <a href="search.php?q='<?php echo rawurlencode($_smarty_tpl->tpl_vars['row']->value['name']);?>
'&amp;fields=mediatype&amp;nowild=1"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</a></li>
          					<?php } ?>
          				</ul>
                </div>
              </td>
            </tr>
            <tr>
              <td><h6 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['averagefilesize'];?>
:</h6></td>
              <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['avg_size'];?>
 mb</td>
            </tr>
            <tr>
              <td><h6 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['totalsize'];?>
:</h6></td>
              <td><?php echo $_smarty_tpl->tpl_vars['stats']->value['sum_size'];?>
 gb</td>
            </tr>
            <tr>
              <td><h6 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['videobyvcodec'];?>
:</h3></td>
              <td>
              	<div class="small-cols-1 large-cols-2">
    				<ul>
    					<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stats']->value['count_vcodec']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    					<?php if ($_smarty_tpl->tpl_vars['row']->value['video_codec']){?>
    					<li><?php echo $_smarty_tpl->tpl_vars['row']->value['count'];?>
 <a href="search.php?q=<?php echo rawurlencode($_smarty_tpl->tpl_vars['row']->value['video_codec']);?>
&amp;fields=video_codec&amp;nowild=1"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</a></li>
    					<?php }?>
    					<?php } ?>
    				</ul>
                </div>
              </td>
            </tr>
            <tr>
              <td><h6 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['videobyacodec'];?>
:</h3></td>
              <td>
              	<div class="small-cols-1 large-cols-2">
          				<ul>
          					<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stats']->value['count_acodec']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
          					<?php if ($_smarty_tpl->tpl_vars['row']->value['audio_codec']){?>
          					<li><?php echo $_smarty_tpl->tpl_vars['row']->value['count'];?>
 <a href="search.php?q=<?php echo rawurlencode($_smarty_tpl->tpl_vars['row']->value['audio_codec']);?>
&amp;fields=audio_codec&amp;nowild=1"><?php echo $_smarty_tpl->tpl_vars['row']->value['audio_codec'];?>
</a></li>
          					<?php }?>
          					<?php } ?>
          				</ul>
                </div>
              </td>
            </tr>
          </table>

    	</div><!-- col -->
    </div><!-- row -->

  </div><!-- col -->
</div><!-- row -->
<?php }} ?>