<?php session_start();
if(!isset($_SESSION['ad']))
{
echo "<script>window.location='../adminlogin.php';</script>";
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
    a:link{color: darkorchid;}
    a:visited{color: darkorchid;}
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
                        <a class="nav-link" href="ourpage.php">
                            <i class="icofont icofont-brainstorming"></i>
                            <p>Manage Content</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="ourbranches.php">
                            <i class="icofont icofont-building-alt"></i>
                            <p>Branches</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="ourschool.php">
                            <i class="icofont icofont-education"></i>
                            <p>Add School</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="ourmember.php">
                            <i class="icofont icofont-people"></i>
                            <p>Team</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="ouraccount.php">
                            <i class="icofont icofont-bank"></i>
                            <p>Bank Account </p>
                        </a>
                    </li>
                    
                    <li>
                        <a class="nav-link" href="ourvolunteer.php">
                            <i class="icofont icofont-brand-slideshare"></i>
                            <p>Volunteers </p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="ouradmission.php">
                            <i class="icofont icofont-abc"></i>
                            <p>Admission Enquiry</p>
                        </a>

                    </li>
                    <li>
                        <a class="nav-link" href="./ourcontact.php">
                            <i class="icofont icofont-ui-message"></i>
                            <p>Website Enquires</p>
                        </a>
                    </li>
                   
                </ul>
            </div>
        </div>
<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
        <div class="container-fluid">
            <a class="navbar-brand" href="#pablo"> Admin Panel</a>
            <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="nav navbar-nav mr-auto">
                 
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="icofont-plus-circle"></i>
                            <span class="d-lg-none">Add</span>
                        </a>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="member.php">Member</a>
                            <a class="dropdown-item" href="branches.php">Branch</a>
                            <a class="dropdown-item" href="school.php">School</a>
                            <a class="dropdown-item" href="page.php">Page</a>
                            <a class="dropdown-item" href="account_detail.php">Account</a>
                            <a class="dropdown-item" href="question.php">Question</a>
                        </ul>
                    </li>
                        </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
                            <span class="no-icon">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="no-icon"><i class="icofont-list"></i></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="ourarticle.php">Articles</a>
                           
                            <div class="divider"></div>
                            <a class="dropdown-item" href="ouractivity.php">Events</a>
                            <a class="dropdown-item" href="ourquestion.php">Questions</a>
                        </div>
                        
                        
                       
                
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="no-icon"><i class="icofont-list"></i></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="ourimage_gallery.php">Image Gallery</a>
                            <a class="dropdown-item" href="ourvideo_gallery.php">Video Gallery</a>
                            <div class="divider"></div>
                            <a class="dropdown-item" href="oure_book.php">Reference Material</a>
                            
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <span class="no-icon"><i class="icofont icofont-power"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->