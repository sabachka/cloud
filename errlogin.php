<!DOCTYPE HTML>
<?php include ("bts.html"); 
?>

<div class="container" >
<div class="col-md-4 col-md-offset-4">
<h1>Войти в систему</h1>
	<form role="form-horizontal" method="post" >
	<p class="bg-danger text-danger text-center">Неправильный e-mail или пароль! Повторите попытку. </p>
			<div class="form-group">
			<label for="email">Введите e-mail</label>
			  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
			  <input type="email" class="form-control" placeholder="e-mail" id="email" name="email" autofocus required>
			</div>

			<div class="form-group">
				<label for="login">Введите пароль</label>
			  <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span><span class="glyphicon glyphicon-asterisk"></span><span class="glyphicon glyphicon-asterisk"></span></span>
			  <input type="password" class="form-control" placeholder="Пароль" id="password" name="password" required>
			</div>
			
		<div class= "col-md-offset-5">
		<button type="submit" class="btn btn-primary">Войти</button>
		</div>
</form>
		
<hr>
<p class="bg-info text-info text-center"> Вы можете восстановить пароль в случае утери. </p>
		<div class= "col-md-offset-3">
		
			<button type="submit" class="btn btn-default">Восстановление пароля</button>
		</div>
</div><!-- col-md-4 -->	


<!-- navigation -->
	<div class = "gray">
	</div>
<!-- navigation -->
 </body>
</html>