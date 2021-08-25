<?php
include('./config/db.php');
?>
<!DOCTYPE html>
<head>
    <title> Admin Login</title>
    <style>
        .login{
            width: 20%;
            border: 1px solid #787878;
            margin:10% auto;
            padding: 2%;
            text-align: center;
            
        }
        .btn-primary{
            width: 120px;
            height: 50px;
            margin-top: 20px;
            background : #1a94d6;
            color: #fff;
            outline: none;
            border: none;
            border-radius: 35px;
        }
        

    </style>
</head>
<body>
    <div class="login">
        <h1 class = "text-center">Login</h1>
       
        <br></br>
        <form action="" method="POST" class="text-center">
            Username<br></br>
            <input type ="text" name="user_name" placeholder="Username"><br></br>
            Password<br></br>
            <input type ="password" name="password" placeholder="Password"><br></br>
            <input type="submit" name="submit" value="Login" class="btn-primary">
        </form>


    </div>
</body>
<?php
//Check xem button duoc click chua
if(isset($_POST['submit']))
{
    //Xu ly dang nhap
    //Lay data tu form
     $user_name = $_POST['user_name'];
     $password= $_POST['password'];
     //SQL
     $conn = mysqli_connect('localhost','root','','codelearn');
     $sql = "select * from tbl_admin where user_name='$user_name' and password ='$password'";
     $result = mysqli_query($conn,$sql);
     $count = mysqli_num_rows($result);
     if($count==1)
     {
         //User Avaiable
         
         header('location:'.SITEURL.'./admin/index.php');
     }
     else
     {
         //User not avaiable
         echo 'Sai nguoi dung';
         header('location:'.SITEURL.'./admin/login.php');
     }
} 
?>