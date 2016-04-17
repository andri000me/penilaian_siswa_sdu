<?php
require "user_cek_auth.php";
require "koneksi.php";
$id = $_GET['id'];
$sql = "select * from tab_siswa where id = '$id'";
$exsql = mysql_query($sql);
$data = mysql_fetch_array($exsql);

$id = $data['id'];
$nis =  $data['nis'];
$nama =  $data['nama_siswa'];
$tempat_lahir = $data['tempat_lahir'];
$tgl_lahir = $data['tgl_lahir'];
$alamat = $data['alamat'];
$kelas =  $data['id_kelas'];
$telp =  $data['telp'];
$foto =  $data['foto'];

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
                                <i class="fa fa-table"></i>Edit Master Siswa<br> 
                            </h1>
                        </div>
                    </div>
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Tables</li>
                        <li><a href="master_siswa.php">Master Siswa</a></li>
                        <li class="active">Edit Master Siswa</li>
                    </ul>
                    <!-- END Datatables Header -->

                    <!-- Datatables Content -->
                    <div class="block full">
                        <div class="block-title">
                            <h2><strong>Edit Data Master Siswa</strong>  </h2>
                        </div>
                      
                         <form action="pro_edit_master_siswa.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                                    <input type="hidden" name="id" value="<?php echo $id;?>"> 
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">NIS </label>
                                        <div class="col-md-9">
                                            <input type="text" name="nis" class="form-control" value="<?php echo $nis;?>" placeholder="NIS">
                                             
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">Nama </label>
                                        <div class="col-md-9">
                                            <input type="text" name="nama" class="form-control" value="<?php echo $nama;?>" placeholder="Nama">
                                             
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">Tempat Lahir </label>
                                        <div class="col-md-9">
                                            <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $tempat_lahir;?>" placeholder="Tempat Lahir">
                                             
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-datepicker">Tanggal Lahir</label>
                                            <div class="col-md-9">
                                                <input type="text" id="example-datepicker" name="tanggal_lahir" value="<?php echo $tgl_lahir;?>" class="form-control input-datepicker" data-date-format="yyyy/mm/dd" placeholder="yyyy/mm/dd">
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-textarea-input">Alamat</label>
                                        <div class="col-md-9">
                                            <textarea  name="alamat" rows="9" class="form-control" placeholder="Alamat"> <?php echo $alamat;?> </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-select">Kelas</label>
                                        <div class="col-md-9">
                                            <select id="example-select" name="kelas" class="form-control" size="1">
                                                <option value="" selected="selected">--Pilih--</option>
                                                <option value="1" <?php if($kelas == 1){
                                                                    echo "selected='selected'";
                                                                  }
                                                                  ?>> 1 </option>
                                                <option value="2" <?php if($kelas == 2){
                                                                    echo "selected='selected'";
                                                                  }
                                                                  ?>>2</option>
                                                <option value="3" <?php if($kelas == 3){
                                                                    echo "selected='selected'";
                                                                  }
                                                                  ?>>3</option>
                                                <option value="4" <?php if($kelas == 4){
                                                                    echo "selected='selected'";
                                                                  }
                                                                  ?>>4</option>
                                                <option value="5" <?php if($kelas == 5){
                                                                    echo "selected='selected'";
                                                                  }
                                                                  ?>>5</option>
                                                <option value="6" <?php if($kelas == 6){
                                                                    echo "selected='selected'";
                                                                  }
                                                                  ?>>6</option>
                                            </select>
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-text-input">Telepon </label>
                                        <div class="col-md-9">
                                            <input type="text" name="no_telp" class="form-control" value="<?php echo $telp;?>" placeholder="No Telepon">
                                             
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-file-input">Foto</label>
                                        <div class="col-md-9">
                                            <input type="file" name="foto" value="<?php echo $foto;?>"> 
                                            <br>
                                            <img src="foto_siswa/<?php echo $foto;?>" style="width:30%; height:30%;">
                                           
                                        </div>
                                    </div>
                                    
                                    <div class="form-group form-actions">
                                        <div class="col-md-9 col-md-offset-3">
                                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Simpan</button>
                                             
                                        </div>
                                    </div>
                                </form>

                      
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