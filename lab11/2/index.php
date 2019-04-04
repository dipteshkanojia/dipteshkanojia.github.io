<!DOCTYPE HTML>
<?php session_start(); 
if(isset($_SESSION['msg']) && $_SESSION['msg']=="OK"){
	header("location:album.php");
}
?>
<html>
	<head>
    	
    	<meta name="author" content="Diptesh"/>
        
        <title>
       		CS699-Lab11-PHPTwo
        </title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../base/jquery.js"></script>
	    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">        
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<style>
			.form-signin
			{
				max-width: 330px;
				padding: 15px;
				margin: 0 auto;
			}
			.form-signin .form-signin-heading, .form-signin .checkbox
			{
				margin-bottom: 10px;
			}
			.form-signin .checkbox
			{
				font-weight: normal;
			}
			.form-signin .form-control
			{
				position: relative;
				font-size: 16px;
				height: auto;
				padding: 10px;
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
			}
			.form-signin .form-control:focus
			{
				z-index: 2;
			}
			.form-signin input[type="text"]
			{
				margin-bottom: -1px;
				border-bottom-left-radius: 0;
				border-bottom-right-radius: 0;
			}
			.form-signin input[type="password"]
			{
				margin-bottom: 10px;
				border-top-left-radius: 0;
				border-top-right-radius: 0;
			}
			.account-wall
			{
				margin-top: 20px;
				padding: 40px 0px 20px 0px;
				background-color: #f7f7f7;
				-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
				-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
				box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			}
			.login-title
			{
				color: #555;
				font-size: 18px;
				font-weight: 400;
				display: block;
			}
			.profile-img
			{
				width: 96px;
				height: 96px;
				margin: 0 auto 10px;
				display: block;
				-moz-border-radius: 50%;
				-webkit-border-radius: 50%;
				border-radius: 50%;
			}


		</style>

		        
    </head>
    
    <body>
		<ul class="pager">
			<li><a href="../"><span aria-hidden="true">&larr;</span> Navigator</a></li>
		</ul>
        <div class="container">
        	
            <div class="row">
            	<div class="col-xs-12 jumbotron well well-lg">
                	<strong> Photo Album Login </strong> <br/>
                </div>
            </div>
        
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
				
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <?php if(isset($_SESSION['msg']) && $_SESSION['msg']=="No"){ ?>
				<?php echo "<center><h4 class='alert alert-danger'><span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'>&nbsp;</span>Invalid Login Credentials!</h4></center>"; ?>
				<?php } ?>
                <form class="form-signin" action="login.php" method="post" name="Login_Form">
                <input name="Username" type="text" class="form-control" placeholder="Username" required autofocus>
                <input name="Password" type="password" class="form-control" placeholder="Password" required>
                <input name="Submit" type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in" type="submit"></input>
                
                </form>
            </div>
        </div>
        
    </div>
         	
         	<div class="row">
				<br/><br/>
         		<div class="col-xs-12" style="text-align:center; background-color:black; color:white; padding:10px">
                    
                    <p>
                        <span class="glyphicon glyphicon-copyright-mark"></span> Diptesh, 2016 <br>
						Original Template Credits to: Prashanth, 2016 <br>

                        All Rights Reserved.
                    </p>
                </div>
            </div>
                        
       	</div>
        <!-- End of page container -->
                            
        
    </body>
</html>
