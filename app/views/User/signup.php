<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="../../../public/css/signup.css">
    <div class="container">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="post" action="/user/signup">
						<div class="form-group">
							<h2>Create account</h2>
						</div>
                        <div class="form-group">
							<label class="control-label" for="login">Your login</label>
							<input id="login" type="text" name="login" class="form-control" value="<?=isset($_SESSION['form_data']['login']) ? htmlspecialchars($_SESSION['form_data']['login']) : ''?>">
						</div>
                        <div class="form-group">
							<label class="control-label" for="password">Password</label>
							<input id="password" type="password" name="password" class="form-control" placeholder="at least 6 characters">
						</div>
						<!-- <div class="form-group">
							<label class="control-label" for="signupPasswordagain">Password again</label>
							<input id="signupPasswordagain" type="password" maxlength="25" class="form-control">
						</div> -->
						<div class="form-group">
							<label class="control-label" for="name">Your name</label>
							<input id="name" type="text" name="name" class="form-control" value = <?=isset($_SESSION['form_data']['name']) ? htmlspecialchars($_SESSION['form_data']['name']) : ''?>>
						</div>
						<div class="form-group">
							<label class="control-label" for="email">Email</label>
							<input id="email" type="text" name="email" class="form-control" value = <?=isset($_SESSION['form_data']['email']) ? htmlspecialchars($_SESSION['form_data']['email']) : ''?>>
						</div>
						<!-- <div class="form-group">
							<label class="control-label" for="signupEmailagain">Email again</label>
							<input id="signupEmailagain" type="email" maxlength="50" class="form-control">
						</div> -->
						<div class="form-group">
							<button id="submit" type="submit" class="btn btn-info btn-block">Create your account</button>
						</div>
						<p class="form-group">By creating an account, you agree to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p>
						<hr>
						<!-- <p></p>Already have an account? <a href="#">Sign in</a></p> -->
					</form>
					<?php if (isset($_SESSION['form_data'])) {
						unset($_SESSION['form_data']);
					}?>
				</div>
			</div>
		</div>
	</div>
