<?php
$userm=$_POST['userf'];
$mail1=$_POST['emailf'];
$password=$_POST['passf'];
$number=$_POST['numf'];





 
$namef= $_FILES['files']['name'];        
        
       
  
$fileName = $_FILES['files']['name'];
$tempName = $_FILES['files']['tmp_name'];

if(isset($fileName))
 {   
    if(!empty($fileName))
    {
        $location = "users1m/";
        if(move_uploaded_file($tempName, $location.$fileName))
        {
            
        }
    }
}












$conn=new mysqli('localhost','root','','users');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);

}
else{
    $stmt=$conn->prepare("insert into users(name,email,phone,password,filename)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$userm,$mail1,$number,$password,$fileName);
    $stmt->execute();
    echo "successfully registered";
    

}


    


  
    //     $namef= $_FILES['file1']['name'];        
        
       
  
    // $fileName = $_FILES['file1']['name'];
    // $tempName = $_FILES['file1']['tmp_name'];
    
    // if(isset($fileName))
    //  {   
    //     if(!empty($fileName))
    //     {
    //         $location = "users1m/";
    //         if(move_uploaded_file($tempName, $location.$fileName))
    //         {
    //             echo "W"
    //         }
    //     }
    // }








?>