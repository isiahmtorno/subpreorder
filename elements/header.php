<?php include('conf/config.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome to Sub Pre Order</title>

<?php 
    $css_files = array(
        'bootstrap.css',
        //'mdb.css',
        'animate.css',
        'bootsnav.css',
        'style1.css',
        'style.css'
    );

    for ($c=0; $c < count($css_files); $c++) { 
    	echo '<link rel="stylesheet" type="text/css" href="assets/css/'.$css_files[$c].'">'."\n";
    }
?>

</head>
<body>
    
    <!-- Start Navigation -->
    <nav class="navbar navbar-default bootsnav">
        <div class="container">      
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#brand"><img src="assets/images/logo-black.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-center">
                    <li><a href="#">Menu 1</a></li>                    
                    <li><a href="#">Menu 2</a></li>
                    <li><a href="#">Menu 3</a></li>
                    <li><a href="#">Menu 4</a></li>
                    <li><a href="#">Menu 5</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>   
    </nav>
    <!-- End Navigation -->

    <div class="clearfix"></div>

    <!-- Start Home -->
    <div class="pageheader">
        <div class="container">
            <h2 class="title">Pre-Order Your SUB by 8:30am</h2>
            <p>Select your Order&nbsp;&nbsp;&nbsp;<i class="fa fa-hand-o-down" style="font-size: 20px;"></i></p>
        </div>
    </div>
    <!-- End Home -->

    <div class="clearfix"></div>
