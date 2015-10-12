{*
  Show template
  $Id: show.tpl,v 1.9 2013/03/21 16:27:57 andig2 Exp $
*}

<!-- {$smarty.template} -->


<div class="row header">
	<div class="small-12 columns">
		<div class="right">
			<ul class="button-group">
				<li><a class="button small {if !$studio.copyable}disabled{/if}" href="#" data-reveal-id="delete-modal">{$lang.delete}</a></li>
			</ul><!-- button-group -->
			<ul class="button-group">
				<li><a class="button small {if !$studio.copyable}disabled{/if}" href="studioedit.php?copyid={$studio.id}&amp;save=1">{$lang.copy}</a></li>
			</ul><!-- button-group -->
			<ul class="button-group">
				<li><a class="button small {if !$studio.copyable}disabled{/if}" href="studioedit.php?id={$studio.id}">{$lang.edit}</a></li>
			</ul><!-- button-group -->
		</div>

		<ul class="button-group hide-for-small">
			<li><a class="button small secondary {if !$studio.prev_id}disabled{/if}" href="show.php?id={$studio.prev_id}">&laquo;</a></li>
			<li><a class="button small secondary {if !$studio.next_id}disabled{/if}" href="show.php?id={$studio.next_id}">&raquo;</i></a></li>
		</ul><!-- button-group -->

	</div><!-- nav-bar -->
</div>

{if $deleted}
<div class="alert-box alert sticky">
	{$lang.deleted}
	<a href="#" class="close">&times;</a>
</div>
{/if}

<div class="row">

	<div class="small-2 large-2 columns">
	<table width="100%" class="tableborder"> 
	<tbody>
	{foreach $studiolist as $studio}
	<tr class="{$studio.trclass}"> <td class="center"> <a href="studioshow.php?id={$studio.id}">{$studio.name}</a> </td> </tr> 
	{/foreach}
	</tbody></table>
	</div>

	<div class="small-12 large-8 columns">
		{assign var=max_width value=220}
		{assign var=max_height value=400}

		<ul class="small-block-grid-2 large-block-grid-{$listcolumns} itemlist">
			{foreach $videolist as $video name=col}
			<li {if ($smarty.foreach.col.index) % $listcolumns == 0}class="clear"{/if}>
				<a href="show.php?id={$video.id}" class="th radius">

					{* Uncomment this if you want title/subtitle to be shown above the cover image: *}
					<div>{$video.title}{if $video.subtitle} - {$video.subtitle}{/if}</div>

					{if $video.imgurl}{html_image file=$video.imgurl max_width=$max_width max_height=$max_height}{/if}
				</a>
			</li><!--col-->
			{/foreach}
		</ul><!--row-->

	</div><!--column-->
</div><!--row-->
