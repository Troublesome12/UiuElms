<?php

require_once 'entities/AdminEntity.php';

class AdminModel {
    
    function checkAdmin($email, $password) {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $count = mysqli_num_rows($result);
        
        mysqli_close($con);
        return $count;
    }
    
    function getAdminList(){
        include 'Credentials.php';
        
        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = 'SELECT * FROM admin';
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $adminArray = array();
        
        //Get data from database
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $password = $row['password'];
            $email = $row['email'];
            $image = $row['image'];
            
            $admin = new AdminEntity($id, $name, $password, $email, $image);
            array_push($adminArray, $admin);
        }
        
        mysqli_close($con);
        return $adminArray;
    }
    
    function getAdminInfo($email) {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "SELECT * FROM admin WHERE email='$email'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));

        while ($row = mysqli_fetch_assoc($result)) {
            $id =  $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $image = $row['image'];
            $password = $row['password'];

            $admin = new AdminEntity($id, $name, $password, $email, $image);
        }

        mysqli_close($con);
        return $admin;
    }
    
    function updateAdminInfo($admin){
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "UPDATE admin SET name='$admin->name', email='$admin->email', image='$admin->image', password='$admin->password'  WHERE id='$admin->id'";
        
        mysqli_query($con, $query) or die(mysqli_error($con));
        mysqli_close($con);
        
    }
    
    function deleteAdminById($admin_id) {
        include 'Credentials.php';

        //Open Connection and select database
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "DELETE FROM admin WHERE id='$admin_id'";
        
        mysqli_query($con, $query) or die(mysqli_error($con));
        mysqli_close($con);
    }
    
    function getImageById($id){
        include 'Credentials.php';
        $con = mysqli_connect($host, $user, $passwd, $database) or die(mysqli_connect_error());
        $query = "SELECT image FROM admin WHERE id='$id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        
        //Get data from database
        while ($row = mysqli_fetch_assoc($result)) {
            $image = $row['image'];
        }
        
        return $image;     
    }
}