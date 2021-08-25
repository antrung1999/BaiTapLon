<?php
include('./template/header.php');
?>
<?php
include('./config/db.php');
?>
<body>
    <!-- SIDEBAR -->
     <main>
        <div class="sidebar">     
            <div class="admninpanel">
                <h2>Admin panel</h2>
            </div>  
            <div class="sidebar-user">
                <div class="sidebar-user-info">
                    <img src="assets/img/admin-img/z2.jpg" alt="User picture" class="profile-image">
                    <div class="sidebar-user-name">
                        CODELEARN
                    </div>
                </div>
                
            </div>
            <!-- SIDEBAR MENU -->
            <ul class="sidebar-menu">
                <li>
                    <a href="index.php" class="active">
                        <i class="bi bi-speedometer2"></i>
                        <span>dashboard</span>
                    </a>
                </li>
                <li class="sidebar-submenu">
                    <a href="#" class="sidebar-menu-dropdown">
                        <i class="bi bi-person-fill"></i>
                        <span>Quản lý người dùng</span>
                        <div class="dropdown-icon"></div>
                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">
                        <li>
                            <a href="quanlyhocvien.php">
                               <i class="bi bi-person-lines-fill"></i>
                               Quản lý học viên
                            </a>
                        </li>
                        <li>
                            
                            <a href="quanlyadmin.php" >
                                <i class="bi bi-person-fill"></i>
                                Quản lý admin
                            </a>
                        </li>                  
                    </ul>
                </li>
                <li>
                    <a href="quanlylinkkhoahoc.php">
                        <i class="bi bi-book-fill"></i>
                        <span>Quản lý khóa học</span>
                    </a>
                </li>            
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    
        <!-- MAIN CONTENT -->
        <div class="main">
            <div class="header-main">
                <div class="sidebar-user-info img-cre">
                    <img src="assets/img/admin-img/z2.jpg" alt="User picture" class="profile-image">
                    <div class="sidebar-user-name text-white">
                        Haianhzz123
                    </div>
                    <div class="dot">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="bi bi-three-dots"></i></button>
                                    <div id="myDropdown" class="dropdown-content">
                                      <a href="#">Logout</a>
                                    </div>
                                  </div> 
                            </div>
                </div>
            </div>
            <div class="main-header">
                <div class="mobile-toggle" id="mobile-toggle">
                    <i class='bx bx-menu-alt-right'></i>
                </div>
                <div class="main-title">
                    <h2>Quản lý Admin</h2>
                    <p>Quản trị viên</p>
                </div>                 
            </div>
            <div class="main-content">
                <div class="tkadmin">
                    <div class="row">
                    
                        <div class="col-md-6">
                            <h3>Thêm quản trị viên mới</h3>
                            <form action="" method ="POST">                        
                                <div class="row">
                                   <div class="col-md-4 w130">
                                      <p>Họ và tên</p>
                                   </div>
                                   <div class="col-md-8">
                                      <input name="full_name" type="text">
                                   </div>                  
                                </div>
                                <div class="row">
                                    
                                    <div class="col-md-4 w130">
                                       <p>Email:</p>
                                    </div>
                                    <div class="col-md-8">
                                       <input name="email" type="text">
                                    </div>
                                    
                                 </div>
                                 <div class="row">
                                    
                                    <div class="col-md-4 w130">
                                       <p>Mật khẩu</p>
                                    </div>
                                    <div class="col-md-8">
                                       <input name="password" type="text">
                                    </div>
                                 </div>
                                <!-- <div class="row">
                                   <div class="col-md-4">
                                      <p>Nội dung:</p>
                                   </div>
                                   <div class="col-md-8">
                                      <textarea name="messages" id="" cols="30" rows="10"></textarea>
                                   </div>
                                </div> -->
                                <div>
                                   <button name="submit" type="submit">Thêm mới</button>
                                </div>
                             </form>
                        </div>
                        <div class="col-6">
                           <div class="right-img">
                                <!-- <div class="bnt-insert">
                                   
                                </div> -->
                               <div class="insert-img">
                                    <button name="sbm_contact" type="submit"> <i class="bi bi-image-fill"></i> <br> Sửa ảnh mô tả </button>
                               </div>
                               
                           </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
     </main>

     <?php
include('./template/footer.php')
?>
<?php
////Thực hiện và lưu vào database
//Kiểm tra xem button có được click k
if (isset($_POST['submit']))
{
    //Đã được click
    //Lấy data từ form
    $fullname = $_POST['full_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    //truy vấn
    $sql = " insert into tbl_admin (id,user_name,email,password) VALUES('','$fullname','$email','$password')";
    // Thuc thi
    $conn = mysqli_connect('localhost','root','');
    $db_select = mysqli_select_db($conn,'codelearn');
    $rs = mysqli_query($conn,$sql) or die(mysqli_error());
    

}
?>
