
<?php
session_start();
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
	padding: 0;
	margin: 0;
}
body{
  background: url(http://wrbbradio.org/wp-content/uploads/2016/10/grey-background-07.jpg) no-repeat center fixed;
  background-size: cover;
}

.container{
	background: #2d3e3f;
	width: 350px;
	height: 400px;
	padding-bottom: 20px;
	position: absolute;
	top:50%;
	left: 50%;
	transform: translate(-50%, -50%);
	margin: auto;
  padding: 70px 50px 20px 50px;
}


.fl{
	float: left;
  width: 110px;
  line-height: 35px;
}

.fontLabel{
  color: white;
}

.fr{
	float: right;
}

.clr{
	clear: both;
}

.box{
	width: 360px;
	height: 35px;
	margin-top: 10px;
	font-family: verdana;
	font-size: 12px;
}

.textBox{
	height: 35px;
	width: 190px;
	border: none;
  padding-left: 20px;
}

.new{
  float: left;
}

.iconBox{
	height: 35px;
	width: 40px;
	line-height: 38px;
	text-align: center;
  background: #ff6600;
}
.iconBox i{
  line-height: 35px;
  font-size: 16px;
  color: #000;
}

.radio{
	color: white;
	background: #2d3e3f;
	line-height: 38px;
}

.terms{
	line-height: 35px;
	text-align: center;
	background: #2d3e3f;
	color: white;
}
.mt{
  margin-top: 50px;
}

.submit{
	float: right;
	border: none;
	color: white;
	width: 110px;
	height: 35px;
	background: #ff6600;
	text-transform: uppercase;
  cursor: pointer;
}



    </style>
  </head>
  <body>
    <!-- Body of Form starts -->
  	<div class="container">

      <form action="post.php" method="post" autocomplete="on">
        <!--First name-->
    		<div class="box">
          <label for="firstName" class="fl fontLabel"> First Name: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="firstName" class="textBox" autofocus="on" value="<?=(isset($_SESSION['old_firstName'])?$_SESSION['old_firstName']:'')?>">
              </br>
              <?php
              if(isset($_SESSION['firstName_err'])){ ?>

              <div style="color:red; margin:8px 0; background-color:yellow; height:25px; line-height:25px; text-align:center;"><?=$_SESSION['firstName_err']?></div>

              <?php } unset($_SESSION['firstName_err']) ?>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--First name-->


        <!--Second name-->
    		<div class="box">
          <label for="secondName" class="fl fontLabel"> Seconed Name: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" name="secondName"class="textBox" value="<?=(isset($_SESSION['old_secondName'])?$_SESSION['old_secondName']:'')?>">
              </br>
              <?php
              if(isset($_SESSION['secondName_err'])){ ?>

              <div style="color:red; margin:8px 0; background-color:yellow; height:25px; line-height:25px; text-align:center;"><?=$_SESSION['secondName_err']?></div>

              <?php } unset($_SESSION['secondName_err']) ?>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Second name-->


    		<!---Phone No.------>
    		<div class="box">
          <label for="phone" class="fl fontLabel"> Phone No.: </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" name="phoneNo" maxlength="10" class="textBox" value="<?=(isset($_SESSION['old_phoneNo'])?$_SESSION['old_phoneNo']:'')?>">
              </br>
              <?php
              if(isset($_SESSION['phoneNo_err'])){ ?>

              <div style="color:red; margin:8px 0; background-color:yellow; height:25px; line-height:25px; text-align:center;"><?=$_SESSION['phoneNo_err']?></div>

              <?php } unset($_SESSION['phoneNo_err']) ?>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Phone No.---->


    		<!---Email ID---->
    		<div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" name="email" class="textBox" value="<?=(isset($_SESSION['old_email'])?$_SESSION['old_email']:'')?>">
              </br>
              <?php
              if(isset($_SESSION['email_err'])){ ?>

              <div style="color:red; margin:8px 0; background-color:yellow; height:25px; line-height:25px; text-align:center;"><?=$_SESSION['email_err']?></div>

              <?php } unset($_SESSION['email_err']) ?>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->


    		<!---Password------>
    		<div class="box">
          <label for="password" class="fl fontLabel"> Password </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="Password" name="password" class="textBox" value="<?=(isset($_SESSION['old_password'])?$_SESSION['old_password']:'')?>">
              </br>
              <?php
              if(isset($_SESSION['password_err'])){ ?>

              <div style="color:red; margin:8px 0; background-color:yellow; height:25px; line-height:25px; text-align:center;"><?=$_SESSION['password_err']?></div>

              <?php } unset($_SESSION['password_err']) ?>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Password---->

    		<!---Gender----->
        <?php
        if(isset($_SESSION['old_gender'])){
          $gender = $_SESSION['old_gender'];
        }
        ?>
    		<div class="box radio mt">
          <label for="gender" class="fl fontLabel"> Gender: </label>
    				<input  type="radio" name="Gender" value="male" <?=($gender == 'male'?'checked':'')?>>Male 
    				<input type="radio" name="Gender" value="female" <?=($gender == 'female'?'checked':'')?>> Female
            <?php 
            if(isset($_SESSION['gender_err'])){ ?>

              <div style="color:red; margin:8px 0;"><?=$_SESSION['gender_err']?></div>

              <?php } unset($_SESSION['gender_err']) ?>
    		</div>
    		<!---Gender--->



    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<input style="margin:0 20px;" type="Submit" name="Submit" class="submit" value="SUBMIT">
    		</div>
    		<!---Submit Button----->
      </form>
  </div>
  <!--Body of Form ends--->



  <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>

  </body>
</html>


<?php
unset($_SESSION['old_firstName']);
unset($_SESSION['old_secondName']);
unset($_SESSION['old_phoneNo']);
unset($_SESSION['old_email']);
unset($_SESSION['old_password']);
unset($_SESSION['old_gender']);

?>
