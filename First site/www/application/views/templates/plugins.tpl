{* Smarty *}
<h1 class="myHeader">������, � ������� ����!</h1>
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
<h1 class="myHeader">��������� �����, ��� ���� ����!</h1>
<p class="myHeader">��� ���� ������ ��������� �����</p>
{foreach from=$factoryPlugis item=fPlug}
	{$fPlug}
{/foreach}