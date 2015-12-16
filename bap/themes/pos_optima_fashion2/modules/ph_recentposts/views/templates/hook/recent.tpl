{if isset($posts) && count($posts) > 0}
<div class="ph_simpleblog simpleblog-recent">
	<div class="title_block"><h4>{l s='Recent posts' mod='ph_recentposts'}</h4></div>
	<div class="row simpleblog-posts">
		{foreach from=$posts item=post}

			{assign var='cols' value='col-md-6 col-sm-6 col-xs-12'}
			{assign var='columns' value=Configuration::get('PH_RECENTPOSTS_GRID_COLUMNS')}
			{if $columns eq '3'}
				{assign var='cols' value='col-md-4 col-sm-4 col-xs-12'}
			{/if}

			{if $columns eq '4'}
				{assign var='cols' value='col-md-3 col-sm-3 col-xs-12'}
			{/if}

			<div class="simpleblog-post-item {if $blogLayout eq 'grid'}{$cols}{else}col-md-12{/if}">

				<div class="post-item">

					{if isset($post.banner) && Configuration::get('PH_BLOG_DISPLAY_THUMBNAIL')}
						<div class="post-thumbnail">
							<a href="{$post.url}" title="{l s='Permalink to' mod='ph_recentposts'} {$post.meta_title}">
								{if $blogLayout eq 'full'}
									<img src="{$post.banner_wide}" alt="{$post.meta_title}" class="img-responsive" />
								{else}
									<img src="{$post.banner_thumb}" alt="{$post.meta_title}" class="img-responsive" />
								{/if}
							</a>
						</div>
					{/if}

					<div class="post-content">
						<h2>
							<a href="{$post.url}" title="{$post.meta_title}">{$post.meta_title}</a>
						</h2>
						{if Configuration::get('PH_BLOG_DISPLAY_DESCRIPTION')}
							{$post.short_content}
						{/if}
					</div>	

					<div class="post-additional-info">
						{if Configuration::get('PH_BLOG_DISPLAY_DATE')}
							<span class="post-date">
								{l s='' mod='ph_recentposts'} {$post.date_add|date_format:Configuration::get('PH_BLOG_DATEFORMAT')}
							</span>
						{/if}
						{if isset($post.author) && !empty($post.author) && Configuration::get('PH_BLOG_DISPLAY_AUTHOR')}
							<span class="post-author">
								{l s='Post by ' mod='ph_recentposts'} <b>{$post.author}</b>
							</span>
						{/if}
						
					</div><!-- .additional-info -->
				</div>
			</div><!-- .simpleblog-post-item -->

		{/foreach}
	</div><!-- .ph_row -->
</div><!-- .ph_simpleblog -->
{else}
	<p class="warning">{l s='There are no posts' mod='ph_recentposts'}</p>
{/if}
<script>
$(window).load(  SimpleBlogEqualHeight  );
$(window).resize(SimpleBlogEqualHeight);

function SimpleBlogEqualHeight()
{
  	var mini = 0;
  	$('.simpleblog-post-item .post-item').each(function(){
      	if(parseInt($(this).css('height')) > mini )
      	{
        	mini = parseInt($(this).css('height'));
      	}  
  	});

  	$('.simpleblog-post-item .post-item').css('height', mini+40);  
}
</script>