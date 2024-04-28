<?php 
$con=mysqli_connect("localhost","root","","practice");

    if(isset($_POST['save'])){
        $n=$_POST['name'];
        $e=$_POST['email'];
        $ph=$_POST['phone'];
        $p=$_POST['pass'];

        $ins="INSERT INTO user SET name='$n',email='$e',phone='$ph',pass='$p'";
        if ($con->query($ins)) {
            echo "suc";
        }
        else{
            echo "Unv";
        }
     
     
     
     
     
     }
?>