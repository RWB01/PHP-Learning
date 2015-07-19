<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-24 04:13:21
         compiled from "\home\hwwpv3.ru\www\application\views\templates\plugins.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2729055605f90585083-88653928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7cb1ccd65f9ac011cb941bb2a0714eee99d8470' => 
    array (
      0 => '\\home\\hwwpv3.ru\\www\\application\\views\\templates\\plugins.tpl',
      1 => 1432440800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2729055605f90585083-88653928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55605f905fe740_41517773',
  'variables' => 
  array (
    'leftPlugs' => 0,
    'lPlug' => 0,
    'rightPlugs' => 0,
    'rPlug' => 0,
    'factoryPlugis' => 0,
    'fPlug' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55605f905fe740_41517773')) {function content_55605f905fe740_41517773($_smarty_tpl) {?>
<!DOCTYPE html>
 <link href="hwwpv3.ru/www/css/bootstrap.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="hwwpv3.ru/www/css/plugin.css" rel="stylesheet">
<h1 class="myHeader">ѕлагин, я выбираю тебя!</h1>
<div class="myContainer"> 
	<div class="row-fluid"> 
		<?php  $_smarty_tpl->tpl_vars['lPlug'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lPlug']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leftPlugs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lPlug']->key => $_smarty_tpl->tpl_vars['lPlug']->value) {
$_smarty_tpl->tpl_vars['lPlug']->_loop = true;
?>
			<?php echo $_smarty_tpl->tpl_vars['lPlug']->value;?>

		<?php } ?>
	</div>
	
	<div class="row-fluid"> 
		<?php  $_smarty_tpl->tpl_vars['rPlug'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rPlug']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rightPlugs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rPlug']->key => $_smarty_tpl->tpl_vars['rPlug']->value) {
$_smarty_tpl->tpl_vars['rPlug']->_loop = true;
?>
			<?php echo $_smarty_tpl->tpl_vars['rPlug']->value;?>

		<?php } ?>
	</div>
</div>
<h1 class="myHeader">фабричный метод, это твой шанс!</h1>
<p class="myHeader">¬от сюда подать фабричный метод</p>
<?php  $_smarty_tpl->tpl_vars['fPlug'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fPlug']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['factoryPlugis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fPlug']->key => $_smarty_tpl->tpl_vars['fPlug']->value) {
$_smarty_tpl->tpl_vars['fPlug']->_loop = true;
?>
	<?php echo $_smarty_tpl->tpl_vars['fPlug']->value;?>

<?php } ?><?php }} ?>
