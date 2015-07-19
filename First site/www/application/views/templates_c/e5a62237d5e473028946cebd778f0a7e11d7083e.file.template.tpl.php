<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-25 10:14:06
         compiled from "\home\hwwpv3.ru\www\application\views\templates\template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:834855626858a49503-30776988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5a62237d5e473028946cebd778f0a7e11d7083e' => 
    array (
      0 => '\\home\\hwwpv3.ru\\www\\application\\views\\templates\\template.tpl',
      1 => 1432512844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '834855626858a49503-30776988',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55626858bfc6b0_01787139',
  'variables' => 
  array (
    'content_view' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55626858bfc6b0_01787139')) {function content_55626858bfc6b0_01787139($_smarty_tpl) {?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Задание</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<a href="/">Команда</span> <span class="cms">R</span></a>
				</div>
				<div id="menu">
					<ul>
						<li class="first active"><a href="/">Главная</a></li>
						<li><a href="/plugins">Плагины</a></li>
						<li><a href="/messages">Сообщения</a></li>
						<li><a href="/interesting">Интересное</a></li>
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div id="sidebar">
					<div class="side-box">
						<h3>Основное меню</h3>
						
						<ul class="list">
							<li class="first "><a href="/">Главная</a></li>
							<li><a href="/plugins">Плагины</a></li>
							<li><a href="/messages">Сообщения</a></li>
							<li><a href="/interesting">Интересное</a></li>
						</ul>
					</div>
				</div>
				<div id="content">
					<div class="box">
						<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['content_view']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div id="page-bottom">
				<div id="page-bottom-sidebar">
					<h3>Наши контакты</h3>
					<ul class="list">
						<li class="first">vk: vk.com/rainwb01</li>
						<li class="last">email: kelebro@list.ru</li>
					</ul>
				</div>
				<div id="page-bottom-content">
					<h3>О Компании</h3>
					<p>
						ООО "Коваленко Павел"
					</p>
				</div>
				<br class="clearfix" />
			</div>
		</div>
		<div id="footer">
			<a href="/">Коваленко Павел</a> &copy; 2015</a>
		</div>
	</body>
</html><?php }} ?>
