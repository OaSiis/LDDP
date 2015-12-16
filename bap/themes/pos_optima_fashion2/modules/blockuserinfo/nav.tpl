<div class="msg">
	<span class="welcome-msg">
		{l s='Default welcome msg !' mod='blockcontact'}
	</span>
	{if $logged}
			<a href="{$link->getPageLink('my-account', true)|escape:'html'}" title="{l s='View my customer account' mod='blockuserinfo'}" class="account" rel="nofollow"><span>{$cookie->customer_firstname} {$cookie->customer_lastname}</0span></a>
	{/if}
</div>

