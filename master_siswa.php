<?php
require "user_cek_auth.php";
?>
<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">

        <title>Master Siswa</title>

      
        <link rel="shortcut icon" href="asset/img/favicon.ico">
     
        
        <link rel="stylesheet" href="asset/css/bootstrap.min.css">

     
        <link rel="stylesheet" href="asset/css/plugins.css">

        
        <link rel="stylesheet" href="asset/css/main.css">

        
        <link rel="stylesheet" href="asset/css/themes.css">
        
        <script src="asset/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
    </head>
    
    <body>
       
        <div class="preloader themed-background">
            <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
            <div class="inner">
                <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>
                <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
            </div>
        </div>
        
        <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
            <!-- Alternative Sidebar -->
            <div id="sidebar-alt">
                <!-- Wrapper for scrolling functionality -->
              
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Alternative Sidebar -->

            <!-- Main Sidebar -->
            <div id="sidebar">
                <!-- Wrapper for scrolling functionality -->
                <div class="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <div class="sidebar-content">
                        <!-- Brand -->
                        <a href="index.html" class="sidebar-brand">
                        <strong>Penilaian Siswa</strong> 
                        </a>
                        <!-- END Brand -->

                        

                       

                        <!-- Sidebar Navigation -->
                        <ul class="sidebar-nav">
                            
                            <li>
                                <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator"></i><i class="gi gi-certificate sidebar-nav-icon"></i>Menu Master</a>
                                <ul>
                                    <li>
                                        <a href="page_ui_grid_blocks.html">Grid &amp; Blocks</a>
                                    </li>
                                    <li>
                                        <a href="page_ui_draggable_blocks.html">Draggable Blocks</a>
                                    </li>
                                    <li>
                                        <a href="page_ui_typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="page_ui_buttons_dropdowns.html">Buttons &amp; Dropdowns</a>
                                    </li>
                                    <li>
                                        <a href="page_ui_navigation_more.html">Navigation &amp; More</a>
                                    </li>
                                    <li>
                                        <a href="page_ui_horizontal_menu.html">Horizontal Menu</a>
                                    </li>
                                    <li>
                                        <a href="page_ui_progress_loading.html">Progress &amp; Loading</a>
                                    </li>
                                    <li>
                                        <a href="page_ui_preloader.html">Page Preloader</a>
                                    </li>
                                    <li>
                                        <a href="page_ui_color_themes.html">Color Themes</a>
                                    </li>
                                </ul>
                            </li>
                            
                          
                           
                                </ul>
                            </li>
                        </ul>
                        <!-- END Sidebar Navigation -->

                       
                    </div>
                    <!-- END Sidebar Content -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Main Sidebar -->

            <!-- Main Container -->
            <div id="main-container">
              
                <header class="navbar navbar-default">
                    <!-- Left Header Navigation -->
                    <ul class="nav navbar-nav-custom">
                        <!-- Main Sidebar Toggle Button -->
                        <li>
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                                <i class="fa fa-bars fa-fw"></i>
                            </a>
                        </li>
                        <!-- END Main Sidebar Toggle Button -->

                        <!-- Template Options -->
                        <!-- Change Options functionality can be found in js/app.js - templateOptions() -->
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="gi gi-settings"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-options">
                                <li class="dropdown-header text-center">Header Style</li>
                                <li>
                                    <div class="btn-group btn-group-justified btn-group-sm">
                                        <a href="javascript:void(0)" class="btn btn-primary" id="options-header-default">Light</a>
                                        <a href="javascript:void(0)" class="btn btn-primary" id="options-header-inverse">Dark</a>
                                    </div>
                                </li>
                                <li class="dropdown-header text-center">Page Style</li>
                                <li>
                                    <div class="btn-group btn-group-justified btn-group-sm">
                                        <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style">Default</a>
                                        <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style-alt">Alternative</a>
                                    </div>
                                </li>
                                <li class="dropdown-header text-center">Main Layout</li>
                                <li>
                                    <button class="btn btn-sm btn-block btn-primary" id="options-header-top">Fixed Side/Header (Top)</button>
                                    <button class="btn btn-sm btn-block btn-primary" id="options-header-bottom">Fixed Side/Header (Bottom)</button>
                                </li>
                                <li class="dropdown-header text-center">Footer</li>
                                <li>
                                    <div class="btn-group btn-group-justified btn-group-sm">
                                        <a href="javascript:void(0)" class="btn btn-primary" id="options-footer-static">Default</a>
                                        <a href="javascript:void(0)" class="btn btn-primary" id="options-footer-fixed">Fixed</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- END Template Options -->
                    </ul>
                    <!-- END Left Header Navigation -->

                   
                    <!-- Right Header Navigation -->
                    <ul class="nav navbar-nav-custom pull-right">
                        <!-- Alternative Sidebar Toggle Button -->
                        
                        <!-- END Alternative Sidebar Toggle Button -->

                        <!-- User Dropdown -->
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="asset/img/placeholders/avatars/avatar2.jpg"> <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                 
                                <li>
                                    
                                    <a href="logout.php"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                </li>
                                
                            </ul>
                        </li>
                        <!-- END User Dropdown -->
                    </ul>
                    <!-- END Right Header Navigation -->
                </header>
                <!-- END Header -->

                <!-- Page content -->
                <div id="page-content">
                    <!-- Datatables Header -->
                    <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="fa fa-table"></i>Master Siswa<br> 
                            </h1>
                        </div>
                    </div>
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Tables</li>
                        <li><a href="">Datatables</a></li>
                    </ul>
                    <!-- END Datatables Header -->

                    <!-- Datatables Content -->
                    <div class="block full">
                        <div class="block-title">
                            <h2><strong>Data Master</strong>  </h2>
                        </div>
                         
<<<<<<< HEAD
<<<<<<< HEAD
                         <a href="add_master_siswa.php" class="btn btn-primary"> Tambah Data</a>
                         <br>
                            <div class="table-responsive">

                            <?php
                            include "koneksi.php";
                            $sql ="select *,date_format(tgl_lahir,'%d %M %Y') as ttl from tab_siswa";
                            $exsql =mysql_query($sql);

                            ?>
=======
						 
				<a href="add_master_siswa.php" class="btn btn-primary"> Tambah Data </a>
                <br>
                     <div class="table-responsive">

                 <?php 
				 include "koneksi.php";
                 $sql = " select *,date_format(tgl_lahir,'%d %M %Y')	as ttl from tab_siswa";
                 $exsql = mysql_query($sql);
                  
                 ?>				  
						 
					
                           <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
>>>>>>> e09c44311136374f6b565a314557ef4840bd8d9a
=======
                        <a href="add_master_siswa.php" class="btn btn-primary"> Tambah Data </a>
                        <br>
                           <div class="table-responsive">

                           <?php
                           include "koneksi.php";

                           $sql = "select *,date_format(tgl_lahir,'%d %M %Y') as ttl from tab_siswa";
                           
                           $exsql = mysql_query($sql);

                           ?>
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
                            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
                                <thead>
                                    <tr>
                                        <th class="text-center">NIS</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">TTL</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Telp</th>
                                        <th class="text-center">Opsi</th>
                                    </tr>
                                </thead>
<<<<<<< HEAD
                                <tbody> 
                                    <?php
                                    while($row=mysql_fetch_array($exsql)){
                                    ?>
                                        <tr>
                                            <td class="text-center"><?php echo $row['nis']; ?></td>
                                            <td class="text-center"><?php echo $row['nama_siswa']; ?></td>
                                            <td class="text-center"><?php echo $row['tempat_lahir'] .','.$row['ttl']; ?></td>
                                            <td class="text-center"><?php echo $row['alamat']; ?></td>
                                            <td class="text-center"><?php echo $row['telp']; ?></td>
                                            <td>
                                           <a href="edit_master_siswa.php?id=<?php echo $row['id']; ?>"> <span class="label label-primary">Edit </span>  </a> &nbsp;
                                           <a href="pro_del _master_siswa.php?id=<?php echo $row['id']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')"> <span class="label label-primary">Delete </span> </a> &nbsp;
                                           <a href="foto_siswa.php?id=<?php echo $row['id']; ?>"> <span class="label label_primary">foto </span> </a> 
                                           </td>
                                                 
                                        </tr>
                                        <?php
                                    }
                                    ?>
=======
                                <tbody>
<<<<<<< HEAD
								
								<?php
								while($row = mysql_fetch_array($exsql)){
								?>	
								
                                    <tr>
                                        <td class="text-center"><?php echo $row['nis']; ?></td>
                                        <td class="text-center"><?php echo $row['nama_siswa']; ?></td>
										<td class="text-center"><?php echo $row['tempat_lahir'] .','.$row['ttl']; ?></td>
										<td class="text-center"><?php echo $row['alamat']; ?></td>
										<td class="text-center"><?php echo $row['telp']; ?></td>
                                        <td><a href="edit_master_siswa.php?id=<?php echo $row['id'];?>"><span class="label label-primary">Edit</span> <a/> &nbsp;
										    <a href="pro_del_master_siswa.php?id=<?php echo $row['id'];?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><span class="label label-primary">Delete</span></td>
										    <a href="foto_siswa.php?id=<?php echo $row['id']; ?>"> <span class="label label-primary">Foto </span> </a>
										   </td>
										   </tr>
										   <?php
								}
								?>
=======
                                <?php
                                while($row = mysql_fetch_array($exsql)){
                                ?>
                                    <tr>
                                        <td class="text-center"><?php echo $row['nis']; ?></td>
                                        <td class="text-center"><?php echo $row['nama_siswa']; ?></td>
                                        <td class="text-center"><?php echo $row['tempat_lahir'] .','. $row['ttl']; ?></td>
                                        <td class="text-center"><?php echo $row['alamat']; ?></td>
                                        <td class="text-center"><?php echo $row['telp']; ?></td>
                                        <td> <a href="edit_master_siswa.php?id=<?php echo $row['id']; ?>"> <span class="label label-primary">Edit </span>  </a> &nbsp; 
                                             <a href="pro_del_master_siswa.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"> <span class="label label-primary">Delete </span>  </a> &nbsp;
                                             <a href="foto_siswa.php?id=<?php echo $row['id']; ?>"> <span class="label label-primary">Foto </span>  </a>
                                             </td>
                                       
                                    </tr>
                                <?php
                                }
                                ?>
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <!-- END Datatables Content -->
                </div>
                <!-- END Page Content -->

                <!-- Footer -->
                <footer class="clearfix">
                     
                    <div class="pull-left">
                        <span id="year-copy"></span> &copy; <a href="" target="_blank">STIKOM & UHAMKA</a>
                    </div>
                </footer>
                <!-- END Footer -->
            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="asset/jquery.min.js"></script>
            <!-- Bootstrap.js, Jquery plugins and Custom JS code -->
        <script src="asset/js/vendor/bootstrap.min.js"></script>
        <script src="asset/js/plugins.js"></script>
        <script src="asset/js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="asset/js/pages/tablesDatatables.js"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>
    </body>
</html>