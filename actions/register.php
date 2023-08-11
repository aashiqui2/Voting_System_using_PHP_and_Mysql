<?php  
include 'connect.php';

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmpname=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];

if($password!=$cpassword){
    echo '<script>
     alert("Password Did\'nt match");
     window.location="../partials/registration.php";
     </script>';
     
}
else{
    // $hash = password_hash($password, PASSWORD_DEFAULT);
    move_uploaded_file($tmpname,"../img/$image");
    $sql="insert into userdata (username,mobile,password,photo,standard,status,votes) values('$username','$mobile','$password','$image','$std',0,0)";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo '<script>
        alert("Registration Successfull");
        window.location="../index.php";
        </script>';

    }
}

?>