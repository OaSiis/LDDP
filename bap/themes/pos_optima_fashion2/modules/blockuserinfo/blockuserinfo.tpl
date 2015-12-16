<ul id="header_links">
	<!--<li><a href="{$link->getPageLink('contact', true)|escape:'html':'UTF-8'}" title="{l s='Contact Us' mod='blockcontact'}">{l s='Contact Us' mod='blockcontact'}</a>
</li>-->
	{$context = Context::getContext()}
	<li><a class="link-myaccount" href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='My account' mod='blockuserinfo'}">{l s='My account' mod='blockuserinfo'}</a></li>
	
	<li><a class="link-wishlist wishlist_block" href="{$context->link->getModuleLink('blockwishlist', 'mywishlist')}" title="{l s='My wishlist' mod='blockuserinfo'}">{l s='My wishlist' mod='blockuserinfo'}</a></li>
	{if !$PS_CATALOG_MODE}
	<li><a class="link-mycart" href="{$link->getPageLink('order', true)|escape:'html'}" title="{l s='My cart' mod='blockuserinfo'}">{l s='My cart' mod='blockuserinfo'}</a></li>
	{/if}
	{if $logged}
			<li class="last"><a class="link-out" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html'}" title="{l s='Log out' mod='blockuserinfo'}"  rel="nofollow">{l s='Log out' mod='blockuserinfo'}</a></li>
		{else}
			<li class="last"><a class="link-login" href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='Login' mod='blockuserinfo'}"  rel="nofollow">{l s='Login' mod='blockuserinfo'}</a></li>
	{/if}
	
</ul>