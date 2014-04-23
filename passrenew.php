<!DOCTYPE HTML>
<?php include ("bts.html"); 
?>

<div class="container" >
<div class="col-md-4 col-md-offset-4">
<h1>Восстановление пароля</h1>
<p class="bg-success text-success text-center"> Запрос о восстановлении будет отправлен на почту </p>
	<form role="form-horizontal" ><!-- container -->	
			<div class="form-group">
				<label for="login">Введите ваш email</label>
			  <span class="input-group-addon">@</span>
			  <input type="email" class="form-control" placeholder="Email" id="email" name="email" autofocus required>
			</div>
		<div class= "col-md-offset-4">
		<button type="submit" class="btn btn-primary">Отправить запрос</button>
		</div>
</form><!-- container -->
</div><!-- col-md-4 -->	


<!-- navigation -->
	<div class = "gray">
	</div>
<!-- navigation -->
 </body>
</html>