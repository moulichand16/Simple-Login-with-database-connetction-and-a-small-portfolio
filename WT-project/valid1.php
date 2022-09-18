<?php
$name1;
$email1;
$phone1;
$pas11;
$connect=mysqli_connect("localhost","root","","users") or die("connection failed");

if(!empty($_POST['mail'])&&!empty($_POST['pass']))
{
    $email=$_POST['mail'];
    $password=$_POST['pass'];
    $query="select * from users where email='$email' and password='$password'";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        echo "login success";
        $sql = "select * from users where email='$email' ";
        $details=mysqli_query($connect,$sql);
        // $details=mysqli_fetch_all($res);
        $numr=mysqli_num_rows($details);

        if($numr>0)
        {
            while($row=mysqli_fetch_assoc($details))
            {
                echo $row['email'];
         
            }
        }
        header("location:dashboard.php");
        

        
        

    
    }
    else{
        echo "login failed";
    }
}
?>