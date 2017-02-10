<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>iDBoard Bienvenido | eys Soluciones Empresariales IT</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="<?php echo URL; ?>views/template/css/main.css">
		<link rel="stylesheet" href="<?php echo URL; ?>views/template/css/font-awesome.min.css">
			<!-- jQuery library -->
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<script>
			$(function() {

			    $('#login-form-link').click(function(e) {
					$("#login-form").delay(100).fadeIn(100);
			 		$("#register-form").fadeOut(100);
					$('#register-form-link').removeClass('active');
					$(this).addClass('active');
					e.preventDefault();
				});			
			});
		</script>
	</head>
<body>
	<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12">
								<a href="www.eys.coom.co" class="active" id="login-form-link">iDBoard | eys Soluciones Empresariales</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="<?php echo URL; ?>dashboard/ingresar" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" class="form-control" placeholder="Usuario" autocomplete="off" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" class="form-control" placeholder="Contraseña" required>
									</div>

									<!-- 
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
										<label for="remember"> Remember Me</label>
									</div>
									-->

									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Entrar">
											</div>
										</div>
									</div>
									<!--
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												
												<div class="text-center">
													<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
												
											</div>
										</div>
									</div>
									-->
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>