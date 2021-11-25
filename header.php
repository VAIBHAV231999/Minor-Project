<?php session_start();
if(!isset($_SESSION['mm']))
{
echo "<script>window.location='../stafflogin.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>All India Pingalwara Charitable Society (Regd) Amritsar.</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../sidebar/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link href="../css/icofont.css" rel="stylesheet" />
<style>
    a:link{color: blueviolet;}
    </style>
    
    </head>
<?php  include '../db_c.php';?>
<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../sidebar/icon.png">
                    <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="../index.php" class="simple-text">
                        PINGALWARA
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="profile.php">
                            <i class="icofont icofont-user"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="ouractivity.php">
                            <i class="icofont icofont-list"></i>
                            <p>Events/Activity</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="ourarticle.php">
                            <i class="icofont icofont-newspaper"></i>
                            <p>Articles News</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="video_gallery.php">
                            <i class="icofont icofont-ui-video-play"></i>
                            <p>Video Gallery</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="image_gallery.php">
                            <i class="icofont icofont-picture"></i>
                            <p>Image Gallery</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="e_book.php">
                            <i class="icofont icofont-ebook"></i>
                            <p>E-Books</p>
                        </a>
                    </li>
                    
                    
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="logout.php">
                            <i class="icofont icofont-logout"></i>
                            <p>Log Out</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
        <div class="container-fluid">
            <a class="navbar-brand" href="#pablo"> Staff Panel</a>
            <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <i class="nc-icon nc-palette"></i>
                            <span class="d-lg-none">Dashboard</span>
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                             <i class="icofont-plus-circle"></i>
                            <span class="d-lg-none">Add</span>
                        </a>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="activity.php">Events</a>
                            <a class="dropdown-item" href="article.php">Articles</a>
                            
                        </ul>
                    </li>
                        </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="password.php">
                            <span class="no-icon">Change Password</span>
                        </a>
                    </li>
                  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="no-icon"><i class="icofont-ui-file"></i></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="image_gallery.php">Image Gallery</a>
                            <a class="dropdown-item" href="video_gallery.php">Video Gallery</a>
                            <div class="divider"></div>
                            <a class="dropdown-item" href="e_book.php">Reference Material</a>
                        </div>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->