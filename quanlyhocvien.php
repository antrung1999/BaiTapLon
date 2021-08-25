<?php
include('./template/header.php')
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
                    <a href="index.php" >
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
                            <a href="quanlyhocvien.php" class="active">
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
                    <h2>Quản lý học viên</h2>
                    <p>Student</p>
                </div>                  
            </div>
            <div class="main-content">
               <div class="row">               
                    <div class="col-12">
                        <!-- ORDERS TABLE -->
                        <div class="box">
                            
                            <div class="box-body overflow-scroll">
                                <table>
                                <?php
                                    $conn = mysqli_connect('localhost','root','','codelearn');
                                    $sql = $sql = "SELECT * FROM tbl_user";
                                    $result =mysqli_query($conn,$sql);
                                    $count =mysqli_num_rows($result);
                                    // Tis sua o day
                                    if (mysqli_num_rows($result)>0)
                                    {
                                        $i=1;
                                        while($rows = mysqli_fetch_assoc($result))
                                        {
                                            $id = $rows['id'];
                                            $full_name = $rows['user_name'];
                                            $email = $rows['email'];
                                            ?>
                                            <tr>
                                            <td class="pl20"><?php echo $id; ?></td>
                                            <td><?php echo $full_name; ?></td>
                                            <td><?php echo $email; ?></td>
                                            <td></td>
                                            <td></td>
                                            <td style="display: flex;">
                                            
                                               
                                                <!-- Tí copy ở đây ra dashboad -->
                                                
                                                <div class="btn btn-danger delete"><a href="<?php echo SITEURL;?>./admin/deletestudents.php?id=<?php echo $id ?>">Xóa</a></div>
                                                <?php
                                            
                                                ?>
                                            </td>                                       
                                        </tr>
                                            <?php
                                            $i++;
                                        }
                                    }
                                    ?>
                                    <thead>
                                        <tr class="blue">
                                            <th class="pl20">ID</th>
                                            <th>Tên Học viên</th>
                                            <th>Email</th>
                                            <th></th>
                                            <th></th>
                                            <th class="jsx-width"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- <tr>
                                            <td class="pl20">1</td>
                                            <td>Nguyễn Đức Hải</td>
                                            <td>haizz:123.com</td>
                                            <td></td>
                                            <td></td>
                                            <td style="display: flex;">
                                                <button type="button" class="btn btn-success delete " data-toggle="modal" data-target="#myModal">Xóa</button>
                                            </td>                                       
                                        </tr> -->
                                        
                                </table>
                            </div>
                        </div>
                        <!-- END ORDERS TABLE -->
                    </div>
                </div>   
            </div>
        </div>
        <!-- END MAIN CONTENT -->
     </main>
<?php
include('./template/footer.php')
?>