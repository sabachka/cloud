<?PHP
header("Content-Type: text/html; charset=utf-8");?>

<!DOCTYPE HTML>
<html lang="ru">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width">
	<link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <title>DEV  CLOUD</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<nav class="navbar navbar-static-top" role = "navigation">
  <div class="container-fluid">
	<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
        <span class="sr-only">Меню сайта</span>
        <span class="glyphicon glyphicon-th-list"></span>
      </button>
		<a class="navbar-brand" href="/"><span class="glyphicon glyphicon-cloud"></span> Cloudds</a>
	</div>
	
		<div class="collapse navbar-collapse" id="navbar-collapse-1">
	 		<ul class="nav navbar-nav">
				<li class="active"><a href = "/"> Главная </a></li>				
				<li><a href = "errlogin.php">Вход</a></li>
				<li><a href = "passrenew.php">Пароль</a></li>
				<li><a href = "list.php">Файлы</a></li>
				<li><a href = "404.php">404</a></li>
			</ul>
			<form action="login.php" method="POST" class="navbar-form navbar-right">
			<input name="username" type="text" class="form-control" placeholder="Логин"/>
			<input name="password" type="password" class="form-control"  placeholder="Пароль"/>
			<input type="submit" value="Вход на сайт" class="btn btn-default navbar-btn"/>
			<a href="reg.php" class="btn btn-primary navbar-btn">Регистрация</a>
			</form>
		</div>
 </div>
</nav>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>