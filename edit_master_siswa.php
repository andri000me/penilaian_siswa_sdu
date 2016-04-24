<?php
require "user_cek_auth.php";
require "koneksi.php";
<<<<<<< HEAD
$id =$_GET['id'];
=======
$id = $_GET['id'];
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
$sql = "select * from tab_siswa where id = '$id'";
$exsql = mysql_query($sql);
$data = mysql_fetch_array($exsql);

$id = $data['id'];
<<<<<<< HEAD
$nis = $data['nis'];
$nama = $data['nama_siswa'];
$tempat_lahir = $data['tempat_lahir'];
$tgl_lahir= $data['tgl_lahir'];
$alamat = $data['alamat'];
$kelas = $data['id_kelas'];
$telp = $data['telp'];
$foto = $data['foto'];
=======
$nis =  $data['nis'];
$nama =  $data['nama_siswa'];
$tempat_lahir = $data['tempat_lahir'];
$tgl_lahir = $data['tgl_lahir'];
$alamat = $data['alamat'];
$kelas =  $data['id_kelas'];
$telp =  $data['telp'];
$foto =  $data['foto'];
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0

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
<<<<<<< HEAD
                            <i class="gi gi-flash"></i><strong>Pro</strong>UI
=======
                        <strong>Penilaian Siswa</strong> 
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
                        </a>
                        <!-- END Brand -->

                        

<<<<<<< HEAD
                        <!-- Theme Colors -->
                        <!-- Change Color Theme functionality can be found in js/app.js - templateOptions() -->
                        <ul class="sidebar-section sidebar-themes clearfix">
                            <li class="active">
                                <a href="javascript:void(0)" class="themed-background-dark-default themed-border-default" data-theme="default" data-toggle="tooltip" title="Default Blue"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-night themed-border-night" data-theme="css/themes/night.css" data-toggle="tooltip" title="Night"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-amethyst themed-border-amethyst" data-theme="css/themes/amethyst.css" data-toggle="tooltip" title="Amethyst"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-modern themed-border-modern" data-theme="css/themes/modern.css" data-toggle="tooltip" title="Modern"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-autumn themed-border-autumn" data-theme="css/themes/autumn.css" data-toggle="tooltip" title="Autumn"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-flatie themed-border-flatie" data-theme="css/themes/flatie.css" data-toggle="tooltip" title="Flatie"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-spring themed-border-spring" data-theme="css/themes/spring.css" data-toggle="tooltip" title="Spring"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-fancy themed-border-fancy" data-theme="css/themes/fancy.css" data-toggle="tooltip" title="Fancy"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dark-fire themed-border-fire" data-theme="css/themes/fire.css" data-toggle="tooltip" title="Fire"></a>
                            </li>
                        </ul>
                        <!-- END Theme Colors -->
=======
                       
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0

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

<<<<<<< HEAD
                    <!-- Right Header Navigation -->
                    <ul class="nav navbar-nav-custom pull-right">
                        <!-- Alternative Sidebar Toggle Button -->
                        <li>
                            <!-- If you do not want the main sidebar to open when the alternative sidebar is closed, just remove the second parameter: App.sidebar('toggle-sidebar-alt'); -->
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt', 'toggle-other');">
                                <i class="gi gi-share_alt"></i>
                                <span class="label label-primary label-indicator animation-floating">4</span>
                            </a>
                        </li>
=======
                   
                    <!-- Right Header Navigation -->
                    <ul class="nav navbar-nav-custom pull-right">
                        <!-- Alternative Sidebar Toggle Button -->
                        
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
                        <!-- END Alternative Sidebar Toggle Button -->

                        <!-- User Dropdown -->
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
<<<<<<< HEAD
                                <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
=======
                                <img src="asset/img/placeholders/avatars/avatar2.jpg"> <i class="fa fa-angle-down"></i>
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                 
                                <li>
                                    
<<<<<<< HEAD
                                    <a href="login.html"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
=======
                                    <a href="logout.php"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
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
<<<<<<< HEAD
                                <i class="fa fa-table"></i>Master Siswa<br><small>Tabel Master Data Siswa</small>
=======
                                <i class="fa fa-table"></i>Edit Master Siswa<br> 
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
                            </h1>
                        </div>
                    </div>
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Tables</li>
<<<<<<< HEAD
                        <li><a href="">Datatables</a></li>
                    </ul>
                    <!-- END Datatables Header -->
                    
=======
                        <li><a href="master_siswa.php">Master Siswa</a></li>
                        <li class="active">Edit Master Siswa</li>
                    </ul>
                    <!-- END Datatables Header -->

>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
                    <!-- Datatables Content -->
                    <div class="block full">
                        <div class="block-title">
                            <h2><strong>Edit Data Master Siswa</strong>  </h2>
                        </div>
                      
                         <form action="pro_edit_master_siswa.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
<<<<<<< HEAD
                                    
=======
                                    <input type="hidden" name="id" value="<?php echo $id;?>"> 
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
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
<<<<<<< HEAD
                                            <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $tempat_lahir; ?>" placeholder="Tempat Lahir">
=======
                                            <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $tempat_lahir;?>" placeholder="Tempat Lahir">
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
                                             
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-datepicker">Tanggal Lahir</label>
                                            <div class="col-md-9">
<<<<<<< HEAD
                                                <input type="text" id="example-datepicker" name="tanggal_lahir" value="<?php echo $tgl_lahir;?>"  class="form-control input-datepicker" data-date-format="yyyy/mm/dd" placeholder="yyyy/mm/dd">
=======
                                                <input type="text" id="example-datepicker" name="tanggal_lahir" value="<?php echo $tgl_lahir;?>" class="form-control input-datepicker" data-date-format="yyyy/mm/dd" placeholder="yyyy/mm/dd">
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-textarea-input">Alamat</label>
                                        <div class="col-md-9">
<<<<<<< HEAD
                                            <textarea  name="alamat" rows="9" class="form-control" placeholder="Alamat"> <?php echo $alamat;?></textarea>
=======
                                            <textarea  name="alamat" rows="9" class="form-control" placeholder="Alamat"> <?php echo $alamat;?> </textarea>
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="example-select">Kelas</label>
                                        <div class="col-md-9">
                                            <select id="example-select" name="kelas" class="form-control" size="1">
                                                <option value="" selected="selected">--Pilih--</option>
<<<<<<< HEAD
                                                <option value="1"<?php if($kelas ==1){
													echo "selected='selected'";
												}
												?>>1</option>
												 <option value="2"<?php if($kelas ==2){
													echo "selected='selected'";
												}
												?>>2</option>
												 <option value="3"<?php if($kelas ==3){
													echo "selected='selected'";
												}
												?>>3</option>
												 <option value="4"<?php if($kelas ==4){
													echo "selected='selected'";
												}
												?>>4</option>
												<option value="5"<?php if($kelas ==5){
													echo "selected='selected'";
												}
												?>>5</option>
												<option value="6"<?php if($kelas ==6){
													echo "selected='selected'";
												}
												?>>6</option>
                                               
=======
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
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
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
<<<<<<< HEAD
                                            <input type="file" name="foto">
                                        </div>

                                        <img src="<?php echo 'foto_siswa/'.$foto; ?>" style="width:10%; height:10%;">
=======
                                            <input type="file" name="foto" value="<?php echo $foto;?>"> 
                                            <br>
                                            <img src="foto_siswa/<?php echo $foto;?>" style="width:30%; height:30%;">
                                           
                                        </div>
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
                                    </div>
                                    
                                    <div class="form-group form-actions">
                                        <div class="col-md-9 col-md-offset-3">
                                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Simpan</button>
<<<<<<< HEAD
                                            <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
=======
                                             
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
                                        </div>
                                    </div>
                                </form>

                      
                        </div>
                    </div>
                    <!-- END Datatables Content -->
<<<<<<< HEAD

=======
                </div>
>>>>>>> 1f6715170e09f2753356c50dc37df1bec9865cd0
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