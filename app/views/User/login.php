<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="../../../public/css/signup.css">
    <div class="container">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="post" action="/user/login">
						<div class="form-group">
							<h2>Login</h2>
						</div>
                        <div class="form-group">
							<label class="control-label" for="login">Your login</label>
							<input id="login" type="text" name="login" class="form-control" placeholder="Введите логин">
						</div>
                        <div class="form-group">
							<label class="control-label" for="password">Password</label>
							<input id="password" type="password" name="password" class="form-control" placeholder="Введите пароль">
						</div>
						<div class="form-group">
							<button id="submit" type="submit" class="btn btn-info btn-block">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>