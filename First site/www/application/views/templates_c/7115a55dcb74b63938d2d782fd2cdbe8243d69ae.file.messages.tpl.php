<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-24 04:12:17
         compiled from "\home\hwwpv3.ru\www\application\views\templates\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22315555ee847a4de03-57677145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7115a55dcb74b63938d2d782fd2cdbe8243d69ae' => 
    array (
      0 => '\\home\\hwwpv3.ru\\www\\application\\views\\templates\\messages.tpl',
      1 => 1432440735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22315555ee847a4de03-57677145',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555ee847b3f246_79728350',
  'variables' => 
  array (
    'messages' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555ee847b3f246_79728350')) {function content_555ee847b3f246_79728350($_smarty_tpl) {?>

<!DOCTYPE html>

 <h1 class="myHeader">Сообщить хотите? Вдвойне получите!</h1>

<p> 
	<table>
		<tr><td>#</td><td>from</td><td>to</td><td>Message</td></tr>
		<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['message']->value['id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['message']->value['from'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['message']->value['to'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>
</td></tr>
		<?php } ?>
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
	
</p><?php }} ?>
