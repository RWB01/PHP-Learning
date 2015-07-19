{* Smarty *}
<h1 class="myHeader">ѕлагин, я выбираю тебя!</h1>
<div class="myContainer"> 
	<div class="row-fluid"> 
		{foreach from=$leftPlugs item=lPlug}
			{$lPlug}
		{/foreach}
	</div>
	
	<div class="row-fluid"> 
		{foreach from=$rightPlugs item=rPlug}
			{$rPlug}
		{/foreach}
	</div>
</div>
<h1 class="myHeader">фабричный метод, это твой шанс!</h1>
<p class="myHeader">¬от сюда подать фабричный метод</p>
{foreach from=$factoryPlugis item=fPlug}
	{$fPlug}
{/foreach}