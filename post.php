<?php
session_start();

$firstName = $_POST['firstName'];
$secondName = $_POST['secondName'];
$phoneNo = $_POST['phoneNo'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['Gender'];


$upper = preg_match('@[A-Z]@', $password);
$lower = preg_match('@[a-z]@', $password);
$number = preg_match('@[0-9]@', $password);
$spsl = preg_match('@[!,#,$,%,^,&,*,-,+]@', $password);


$valid = filter_var($email, FILTER_VALIDATE_EMAIL);

$flag = false;

if(!$firstName){
    $flag = true;
    $_SESSION['firstName_err'] = 'Enter Your Name';
}
else{
    $_SESSION['old_firstName'] = $firstName;
}
if(!$secondName){
    $flag = true;
    $_SESSION['secondName_err'] = 'Enter Your secondName';
}
else{
    $_SESSION['old_secondName'] = $secondName;
}
if(!$phoneNo){
    $flag = true;
    $_SESSION['phoneNo_err'] = 'Enter Your phoneNo';
}
else{
    $_SESSION['old_phoneNo'] = $phoneNo;
}
if(!$email){
    $flag = true;
    $_SESSION['email_err'] = 'Enter Your email';
}
else{
    if(!$valid){
        $flag = true;
        $_SESSION['old_email'] = $email;
        $_SESSION['email_err'] = 'Enter Valid Email';
    }
    else{
        $_SESSION['old_email'] = $email;
    }
}
if(!$password){
    $flag = true;
    $_SESSION['password_err'] = 'Enter Your password';
}
else{
    $_SESSION['old_password'] = $password;
    if(!$upper){
        $flag = true;
        $_SESSION['password_err'] = 'Enter UpperCase';
    }
    if(!$lower){
        $flag = true;
        $_SESSION['password_err'] = 'Enter lowerCase';
    }
    if(!$number){
        $flag = true;
        $_SESSION['password_err'] = 'Enter number';
    }
    if(!$spsl){
        $flag = true;
        $_SESSION['password_err'] = 'Enter Special Character';
    }
    if(strlen($password) < 6){
        $flag = true;
        $_SESSION['password_err'] = 'Minimum 6 Character';
    }
  
}

if(!$gender){
    $flag = true;
    $_SESSION['gender_err'] = 'Select Your Gender';
}
else{
    $_SESSION['old_gender'] = $gender;
}

if($flag){
  header('location:index.php');
}

echo $firstName.'<br>';
echo $secondName.'<br>';
echo $phoneNo.'<br>';
echo $email.'<br>';
echo $password.'<br>';

?>