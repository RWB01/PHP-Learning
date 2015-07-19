{* Smarty *}

<!DOCTYPE html>

 <h1 class="myHeader">Сообщить хотите? Вдвойне получите!</h1>

<p> 
	<table>
		<tr><td>#</td><td>from</td><td>to</td><td>Message</td></tr>
		{foreach from=$messages item=message}
			<tr><td>{$message['id']}</td><td>{$message['from']}</td><td>{$message['to']}</td><td>{$message['message']}</td></tr>
		{/foreach}
	</table>
	
	<form id="myForm" name="test" action="messages" method="post">
		<p>
			<b> Kому отправить(id)?:</b>
			<br>
			<input name="id" type="text" size="40">
		</p>
		<p> Сообщение <Br>
			<textarea name="message" cols="40" rows="3"></textarea></p>
		<p>
			<input type="submit" name="send" value="Oтправить">
			<input type="reset" value="Oчистить">
		</p>
	</form>
	
</p>