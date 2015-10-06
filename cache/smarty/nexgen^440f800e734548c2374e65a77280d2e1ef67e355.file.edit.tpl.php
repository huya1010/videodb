<?php /* Smarty version Smarty-3.1.13, created on 2015-10-05 19:00:20
         compiled from "templates\nexgen\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87665612aca45920b4-86897835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '440f800e734548c2374e65a77280d2e1ef67e355' => 
    array (
      0 => 'templates\\nexgen\\edit.tpl',
      1 => 1363281447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87665612aca45920b4-86897835',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template' => 0,
    'video' => 0,
    'autoid' => 0,
    'lang' => 0,
    'lookup' => 0,
    'lookup_id' => 0,
    'k' => 0,
    'v' => 0,
    'add_flag' => 0,
    'http_error' => 0,
    'r' => 0,
    'genres' => 0,
    'genre' => 0,
    'mediatypes' => 0,
    'owners' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5612aca47f39b1_80450928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5612aca47f39b1_80450928')) {function content_5612aca47f39b1_80450928($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include './lib/smarty/plugins\\function.html_options.php';
?>

<!-- <?php echo basename($_smarty_tpl->source->filepath);?>
 -->

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
js/edit.js"></script>

<!--
<div id="images">Alternative images:</div>
-->

<form action="edit.php" method="post" enctype="multipart/form-data" name="edi">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
" />
    <input type="hidden" name="save" value="1" />

	<input type="hidden" name="autoid" value="<?php echo $_smarty_tpl->tpl_vars['autoid']->value;?>
" />
	<input type="hidden" name="oldmediatype" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['mediatype'];?>
" />

	<div class="row header">
		<div class="small-12 large-7 columns">
			<dl class="sub-nav" input-radio>
			<dt><?php echo $_smarty_tpl->tpl_vars['lang']->value['radio_look_caption'];?>
:</dt>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['lookup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<dd <?php if ($_smarty_tpl->tpl_vars['lookup_id']->value==$_smarty_tpl->tpl_vars['k']->value){?>class="active"<?php }?>><a href="lookup" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></dd>
				<?php } ?>
			</dl>
		</div><!-- col -->

		<div class="small-12 large-5 columns">
			<div class="row collapse">
				<div class="small-6 large-6 columns">
					<dl class="sub-nav" input-checkbox>
					<dt>Create:</dt>
						<dd <?php if ($_smarty_tpl->tpl_vars['add_flag']->value){?>class="active"<?php }?>><a href="add_flag" value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['add_another'];?>
</a></dd>
					</dl>
				</div><!-- col -->

				<div class="small-6 large-6 columns">
					<ul class="button-group right hide-for-small">
						<li>
							<a href="<?php if ($_smarty_tpl->tpl_vars['video']->value['id']){?>show.php?id=<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
<?php }else{ ?>index.php<?php }?>" class="button small"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cancel'];?>
</a>
							<a href="#" class="button small submit"><?php echo $_smarty_tpl->tpl_vars['lang']->value['save'];?>
</a>
						</li>
					</ul>
					<ul class="button-group right hide-for-medium-up">
						<li>
							<a href="<?php if ($_smarty_tpl->tpl_vars['video']->value['id']){?>show.php?id=<?php echo $_smarty_tpl->tpl_vars['video']->value['id'];?>
<?php }else{ ?>index.php<?php }?>" class="button tiny"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cancel'];?>
</a>
							<a href="#" class="button tiny submit"><?php echo $_smarty_tpl->tpl_vars['lang']->value['save'];?>
</a>
						</li>
					</ul>
				</div>
			</div><!-- row -->
		</div><!-- col -->
	</div><!-- button-bar -->


	<div class="row">
		<div class="small-12 large-10 columns large-centered">

			<?php if ($_smarty_tpl->tpl_vars['http_error']->value){?>
			<div class="alert-box alert">
				<?php echo $_smarty_tpl->tpl_vars['http_error']->value;?>

				<a href="#" class="close">&times;</a>
			</div>
			<?php }?>


			<h4 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['main_details'];?>
</h4>

			<div class="row">
				<div class="small-12 large-6 columns">
					<label for="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
 <a href="javascript:void(lookupData(document.edi.title.value))"><i class="foundicon-search inline"></i></a></label>
					<input type="text" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['q_title'];?>
" class="autofocus" />
				</div><!-- col -->

				<div class="small-12 large-6 columns">
					<label for="subtitle"><?php echo $_smarty_tpl->tpl_vars['lang']->value['subtitle'];?>
 <a href="javascript:void(lookupData(document.edi.subtitle.value))"><i class="foundicon-search inline"></i></a></label>
					<input type="text" name="subtitle" id="subtitle" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['q_subtitle'];?>
"/>
				</div><!-- col -->
			</div><!-- row -->

			<div class="row">
				<div class="small-6 large-3 columns">
					<label for="director"><?php echo $_smarty_tpl->tpl_vars['lang']->value['director'];?>
</label>
					<input type="text" name="director" id="director" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['q_director'];?>
"/>
				</div><!-- col -->

				<div class="small-2 large-1 columns">
					<label for="year"><?php echo $_smarty_tpl->tpl_vars['lang']->value['year'];?>
</label>
					<input type="text" name="year" id="year" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['year'];?>
"/>
				</div><!-- col -->

				<div class="small-4 large-2 columns">
					<div class="row collapse">
						<label for="runtime"><?php echo $_smarty_tpl->tpl_vars['lang']->value['runtime'];?>
</label>
						<div class="small-8 columns">
							<input type="text" name="runtime" id="runtime" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['q_runtime'];?>
" />
						</div><!-- col -->
						<div class="small-4 columns"><span class="postfix">min</span></div>
					</div><!-- row -->
				</div><!-- col -->

				<div class="small-6 large-3 columns">
					<label for="country"><?php echo $_smarty_tpl->tpl_vars['lang']->value['country'];?>
</label>
					<input type="text" name="country" id="country" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['q_country'];?>
"/>
				</div><!-- col -->

				<div class="small-6 large-3 columns">
					<label for="language"><?php echo $_smarty_tpl->tpl_vars['lang']->value['language'];?>
</label>
					<?php echo $_smarty_tpl->tpl_vars['video']->value['f_language'];?>

				</div><!-- col -->
			</div><!-- row -->

			<div class="row">
				<div class="small-2 large-1 columns">
					<dl class="sub-nav" input-radio>
						<dt><?php echo $_smarty_tpl->tpl_vars['lang']->value['rating'];?>
</dt>
					</dl>
				</div><!-- col -->
				<div class="small-4 large-5 columns">
					<dl class="sub-nav tight" input-radio>
						<?php $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['r']->step = 1;$_smarty_tpl->tpl_vars['r']->total = (int)ceil(($_smarty_tpl->tpl_vars['r']->step > 0 ? 10+1 - (0) : 0-(10)+1)/abs($_smarty_tpl->tpl_vars['r']->step));
if ($_smarty_tpl->tpl_vars['r']->total > 0){
for ($_smarty_tpl->tpl_vars['r']->value = 0, $_smarty_tpl->tpl_vars['r']->iteration = 1;$_smarty_tpl->tpl_vars['r']->iteration <= $_smarty_tpl->tpl_vars['r']->total;$_smarty_tpl->tpl_vars['r']->value += $_smarty_tpl->tpl_vars['r']->step, $_smarty_tpl->tpl_vars['r']->iteration++){
$_smarty_tpl->tpl_vars['r']->first = $_smarty_tpl->tpl_vars['r']->iteration == 1;$_smarty_tpl->tpl_vars['r']->last = $_smarty_tpl->tpl_vars['r']->iteration == $_smarty_tpl->tpl_vars['r']->total;?>
						<dd <?php if ($_smarty_tpl->tpl_vars['r']->value==round($_smarty_tpl->tpl_vars['video']->value['rating'])){?>class="active"<?php }?>><a href="rating" value="<?php echo $_smarty_tpl->tpl_vars['r']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value;?>
</a></dd>
						<?php }} ?>
					</dl>
				</div><!-- col -->

				<div class="small-6 columns">
					<dl class="sub-nav inline" input-checkbox>
						<dd <?php if ($_smarty_tpl->tpl_vars['video']->value['seen']){?>class="active"<?php }?>><a href="seen" value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['seen'];?>
</a></dd>
					</dl>

					<dl class="sub-nav inline" input-checkbox>
						<dd <?php if ($_smarty_tpl->tpl_vars['video']->value['istv']){?>class="active"<?php }?>><a href="istv" value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['tvepisode'];?>
</a></dd>
					</dl>

					<dl class="sub-nav inline" input-checkbox>
						<dd <?php if ($_smarty_tpl->tpl_vars['video']->value['3d']){?>class="active"<?php }?>><a href="3d" value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['3d'];?>
3D</a></dd>
					</dl>
				</div><!-- col -->
			</div><!-- row -->

			<div class="row">
				<div class="small-2 large-1 columns">
					<dl class="sub-nav" input-checkbox>
						<dt><?php echo $_smarty_tpl->tpl_vars['lang']->value['genre'];?>
</dt>
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


			<h4 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['media_details'];?>
</h4>

			<div class="row">
				<div class="small-12 large-6 columns">
				<div class="row">
					<div class="small-6 columns">
						<label for="mediatype"><?php echo $_smarty_tpl->tpl_vars['lang']->value['mediatype'];?>
</label>
						<?php echo smarty_function_html_options(array('name'=>"mediatype",'options'=>$_smarty_tpl->tpl_vars['mediatypes']->value,'selected'=>$_smarty_tpl->tpl_vars['video']->value['mediatype']),$_smarty_tpl);?>

					</div><!-- col -->

					<div class="small-6 columns">
						<label for="diskid"><?php echo $_smarty_tpl->tpl_vars['lang']->value['diskid'];?>
</label>
						<input type="text" name="diskid" id="diskid" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['q_diskid'];?>
" />
					</div><!-- col -->
				</div></div><!-- col/row -->

				<div class="small-12 large-6 columns">
				<div class="row">
					<?php if ($_smarty_tpl->tpl_vars['owners']->value){?>
					<div class="small-6 columns">
						<label><?php echo $_smarty_tpl->tpl_vars['lang']->value['owner'];?>
</label>
						<?php echo smarty_function_html_options(array('name'=>'owner_id','options'=>$_smarty_tpl->tpl_vars['owners']->value,'selected'=>$_smarty_tpl->tpl_vars['video']->value['owner_id']),$_smarty_tpl);?>

					</div><!-- col -->
					<?php }?>

					<div class="<?php if ($_smarty_tpl->tpl_vars['owners']->value){?>small-6<?php }else{ ?>small-12<?php }?> columns">
						<label for="imdbID">
							<?php echo $_smarty_tpl->tpl_vars['lang']->value['extid'];?>

						</label>

						<div class="row collapse">
							<div class="small-8 columns">
								<input type="text" name="imdbID" id="imdbID" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['q_imdbID'];?>
" />
							</div><!-- col -->
							<div class="small-4 columns">
								<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" target="_blank" class="button postfix <?php if (!$_smarty_tpl->tpl_vars['link']->value){?>disabled<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lang']->value['visit'];?>
</a>
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- col -->
				</div></div><!-- col/row -->
			</div><!-- row -->

			<div class="row">
				<div class="small-12 large-6 columns">
					<label for="imgurl">
						<?php echo $_smarty_tpl->tpl_vars['lang']->value['coverurl'];?>

						<a href="javascript:void(lookupImage(document.edi.title.value))"><i class="foundicon-search inline"></i></a>
					</label>

					<input type="text" name="imgurl" id="imgurl" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['q_imgurl'];?>
" />
				</div><!-- col -->

				<div class="small-12 large-6 columns">
					<label><?php echo $_smarty_tpl->tpl_vars['lang']->value['coverupload'];?>
</label>
					<div class="row collapse">
						<div class="small-10 columns">
							<input type="file" name="coverupload" id="coverupload" />
						</div><!-- col -->
						<div class="small-2 columns">
							<a href='#' class="button postfix input-browse">Browse</a>
						</div><!-- col -->
					</div>
				</div><!-- col -->
			</div><!-- row -->


			<h4 class="subheader">Description</h4>

			<div class="row">
				<div class="small-12 large-6 columns">
					<label for="plot"><?php echo $_smarty_tpl->tpl_vars['lang']->value['plot'];?>
</label>
					<textarea class="large" name="plot" id="plot" wrap="virtual"><?php echo $_smarty_tpl->tpl_vars['video']->value['q_plot'];?>
</textarea>
				</div><!-- col -->

				<div class="small-12 large-6 columns">
					<label for="actors"><?php echo $_smarty_tpl->tpl_vars['lang']->value['cast'];?>
</label>
					<textarea class="large" name="actors" id="actors" wrap="off"><?php echo $_smarty_tpl->tpl_vars['video']->value['q_actors'];?>
</textarea>
				</div><!-- col -->

				<div class="small-12 columns">
					<label for="comment"><?php echo $_smarty_tpl->tpl_vars['lang']->value['comment'];?>
</label>
					<textarea class="large" name="comment" id="comment" wrap="virtual"><?php echo $_smarty_tpl->tpl_vars['video']->value['q_comment'];?>
</textarea>
				</div><!-- col -->
			</div><!-- row -->


			<h4 class="subheader"><?php echo $_smarty_tpl->tpl_vars['lang']->value['file_details'];?>
</h4>

			<div class="row">
				<div class="small-12 large-6 columns">
					<label for="filename"><?php echo $_smarty_tpl->tpl_vars['lang']->value['filename'];?>
</label>
					<input type="text" name="filename" id="filename" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['q_filename'];?>
"/>
				</div><!-- col -->

				<div class="small-6 large-4 columns">
					<label for="filedate"><?php echo $_smarty_tpl->tpl_vars['lang']->value['filedate'];?>
</label>
					<input type="text" name="filedate" id="filedate" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['q_filedate'];?>
"/>
				</div><!-- col -->

				<div class="small-6 large-2 columns">
					<div class="row collapse">
						<label for="filesize"><?php echo $_smarty_tpl->tpl_vars['lang']->value['filesize'];?>
</label>
						<div class="small-8 columns">
							<input type="text" name="filesize" id="filesize" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['q_filesize'];?>
"/>
						</div><!-- col -->
						<div class="small-4 columns"><span class="postfix">Bytes</span></div>
					</div><!-- row -->
				</div><!-- col -->
			</div><!-- row -->

			<div class="row">
				<div class="small-6 large-5 columns">
					<label for="audio_codec"><?php echo $_smarty_tpl->tpl_vars['lang']->value['audiocodec'];?>
</label>
					<input type="text" name="audio_codec" id="audio_codec" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['q_audio_codec'];?>
" />
				</div><!-- col -->

				<div class="small-6 large-5 columns">
					<label for="video_codec"><?php echo $_smarty_tpl->tpl_vars['lang']->value['videocodec'];?>
</label>
					<input type="text" name="video_codec" id="video_codec" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['q_video_codec'];?>
" />
				</div><!-- col -->

				<div class="small-12 large-2 columns">
					<div class="row collapse">
						<label for="video_width"><?php echo $_smarty_tpl->tpl_vars['lang']->value['dimension'];?>
</label>
						<div class="small-5 columns">
							<input type="text" name="video_width" id="video_width" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['q_video_width'];?>
"/>
						</div><!-- col -->
						<div class="small-2 column"><span class="postfix">x</span></div>
						<div class="small-5 columns">
							<input type="text" name="video_height" id="video_height" value="<?php echo $_smarty_tpl->tpl_vars['video']->value['q_video_height'];?>
"/>
						</div><!-- col -->
					</div><!-- row -->
				</div><!-- col -->

			</div><!-- row -->


			<?php if ($_smarty_tpl->tpl_vars['video']->value['custom1name']||$_smarty_tpl->tpl_vars['video']->value['custom2name']||$_smarty_tpl->tpl_vars['video']->value['custom3name']||$_smarty_tpl->tpl_vars['video']->value['custom4name']){?>
			<h4 class="subheader">Custom Fields</h4>

			<div class="row">
				<div class="small-6 columns">
					<label><?php echo $_smarty_tpl->tpl_vars['video']->value['custom1name'];?>
</label><?php echo $_smarty_tpl->tpl_vars['video']->value['custom1in'];?>

				</div><!-- col -->

				<div class="small-6 columns">
					<label><?php echo $_smarty_tpl->tpl_vars['video']->value['custom2name'];?>
</label><?php echo $_smarty_tpl->tpl_vars['video']->value['custom2in'];?>

				</div><!-- col -->
			</div><!-- row -->

			<div class="row">
				<div class="small-6 columns">
					<label><?php echo $_smarty_tpl->tpl_vars['video']->value['custom3name'];?>
</label><?php echo $_smarty_tpl->tpl_vars['video']->value['custom3in'];?>

				</div><!-- col -->

				<div class="small-6 columns">
					<label><?php echo $_smarty_tpl->tpl_vars['video']->value['custom4name'];?>
</label><?php echo $_smarty_tpl->tpl_vars['video']->value['custom4in'];?>

				</div><!-- col -->
			</div><!-- row -->
			<?php }?>

		</div><!-- col -->
	</div><!-- row -->
</form>
<?php }} ?>