<?php  

session_start();
include 'connect.php';
$votes=$_POST['groupvotes'];

$totalvotes=$votes+1;

$gid=$_POST['groupid'];
$uid=$_SESSION['id'];

$sql="update userdata set votes='$totalvotes' where id='$gid'";
$sql1="update userdata set status=1 where id='$uid'";

$updatevotes=mysqli_query($conn,$sql);
$updatestatus=mysqli_query($conn,$sql1);
if($updatevotes and $updatestatus){
    $getgroups=mysqli_query($conn,"select username,photo, votes,id from userdata where standard='group'");
    $groups=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
    $_SESSION['status']=1;

    echo '<script>
    alert("Voting Successfull");
    window.location="../partials/dashboard.php";
    </script>';

}
else{
    echo '<script>
    alert("Technical Error !!! Vote After Some time");
    window.location="../partials/dashboard.php";
    </script>';

}

?>