{* Smarty *}
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
						{include file=$content_view}
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
</html>