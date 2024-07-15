<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$upper=preg_match('@[A-Z]@',$password);
$lower=preg_match('@[a-z]@',$password);
$conform_password=$_POST['conform_password'];
$country=$_POST['country'];
$gender=$_POST['gender'];
if (empty($name)){
    $nam_err="please Enter your name ?";
    header('location:register.php?nam_err='.$nam_err);
}

else if(empty($email)){
    $email_err='please send enter your email ?';
    header('location:register.php?email_err='.$email_err);
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $email_err='please enter your currect email address ??';
    header('location:register.php?email_err='.$email_err);
}

else if(empty($password)){
    $pass_err='enter your password ?';
    header('location:register.php?pass_err='. $pass_err);
}

// else if(!$upper){
//     $pass_err='1 letter uppercase';
//     header('location:register.php?pass_err='.$pass_err);
// }

// else if(!$lower){
//     $pass_err='1 letter lowercase';
//     header('location:register.php?pass_err='.$pass_err);
// }
elseif(!$upper || !$lower ){
    $pass_err='1 letter uppercase,1 letter lowercase';
    header('location:register.php?pass_err='.$pass_err);
}

elseif(!$conform_password){
    $conpass_err='enter your password agian?';
    header('location:register.php?conpass_err='.$conpass_err);
}
elseif($password !=$conform_password){
    $conpass_err='your password do mass??';
    header('location:register.php?conpass_err='.$conpass_err);
}

else if(empty($country)){
    $country_err='Select your country ?';
    header('location:register.php?pass_err='. $country_err);
}

else if(empty($gender)){
    $gender_err='Select your gender ?';
    header('location:register.php?gender_err='. $gender_err);
}
else{
    echo $name;
    echo"<br>";
    echo $email;

    echo"<br>";
    echo $password;
    echo"<br>";
    echo $conform_password;
    echo"<br>";
    echo $country;
    echo"<br>";
    echo $gender;
    echo"<br>";
}
?>