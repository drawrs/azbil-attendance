<html>
	<title>azbil departemen</title>
    <link href="bootstrap.css" rel="stylesheet">
    <link href="stylesheet.css" rel="stylesheet">
    <style>
		body { 
		  background: url(1.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
	</style>
    <body  style="">
	<div class="login-container">
        <div class="login-header bordered">
            <h4>Sign in</h4>
        </div>
        <hr>
        <form method="POST" action="login.php">
		
		<?php 
		if(!empty($_GET['error'])){echo 'Username atau Password tidak sesuai!';}
		?>
            <div class="login-field">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Username">
                <i class="icon-user"></i>
            </div>
            <div class="login-field">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password">
                <i class="icon-lock"></i>
            </div>
            <div class="login-button clearfix">
                <label class="checkbox pull-left">
                    <div class="checker"><span><input type="checkbox" class="uniform" name="checkbox1"></span></div> 
                </label>
                <button type="submit" class="pull-right btn btn-large blue">SIGN IN </button>
            </div>
        </form>
    </div>

    <div id="forgot-pw" class="modal hide fade" tabindex="-1" data-width="760">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></button>
            <h3>Forgot your password?</h3>
        </div>
        <div class="modal-body">
            <div class="row-fluid">
                <div class="span12">
                    <div class="form_row">
                        <label class="field_name">Email address</label>
                        <div class="field">
                            <div class="row-fluid">
                                <div class="span8">
                                    <input type="text" class="span12" name="email" placeholder="example@domain.com">
                                </div>
                                <div class="span4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body></html>