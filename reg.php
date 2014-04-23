<!DOCTYPE HTML>
<?php include ("bts.html"); 
?>

	
	
<!-- container -->	
 <div class="container" >
	<header>
		<h1><center>Регистрация в системе</center></h1>
	</header>

	
	

	</div><!-- container -->
<div class="col-md-2 col-md-offset-5">
	<form role="form-horizontal" method ="post" ><!-- container -->
	<div class="form-group">
		<label for="email">Введите ваш e-mail</label>
		<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
		<input type="email" class="form-control" placeholder="e-mail" id="email" name="email" autofocus required>
	</div>
	<div class="form-group">
		<label for="password1">Создайте пароль, не менее 6 символов</label>
		<span class="input-group-addon"><span class="glyphicon glyphicon-edit"></span></span>
		<input type="password" class="form-control" placeholder="Пароль" id="password" name="password1" required pattern="[a-zA-Zа-яА-Я0-9.-_]{6,}">
	</div>
	<div class="form-group">
		<label for="password2">Повторите пароль</label>
		<span class="input-group-addon"><span class="glyphicon glyphicon-check"></span></span>
		<input type="password" class="form-control" placeholder="Повтор пароля" id="password" name="password2" required pattern="[a-zA-Zа-яА-Я0-9.-_]{6,}">
	</div>
			
		<div class= "col-md-offset-3">
		<button type="submit" class="btn btn-primary">Зарегистрироваться</button>
		</div>
</form><!-- container -->
</div><!-- col-md-4 -->	


<!-- navigation -->
	<div class = "gray">
	</div>
<!-- navigation -->
 </body>
</html>