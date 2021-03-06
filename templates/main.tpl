<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<nav class="navbar navbar-inverse" role = "navigation">
	<div class = "navbar-header">
		<a class="navbar-brand">Cloudds</a>
			<ul class="nav navbar-nav">
				<li class="divider-vertical"></li>
				<li class="dropdown">
					<a href = "#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-home icon-white"></i> Главная <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">Страница1</a></li>
						<li><a href="#">Страница1</a></li>
					</ul>
				</li>	
				<li><a href = "#">Инфо</a></li>
				<li><a href = "#">Еще</a></li>
			</ul>
	</div>
	
	<form action="login.php" method="POST" class="navbar-form navbar-right">
	<input name="username" type="text" class="form-control" placeholder="Логин"/>
	<input name="password" type="password" class="form-control"  placeholder="Пароль"/>
	<input type="submit" value="Войти" class="btn btn-default navbar-btn"/>
	<a href = "reg.php" class="btn btn-primary navbar-btn">Регистрация</a>
</form>	
</nav>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>