<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php wp_title('&raquo;','true','right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

	<?php wp_head();?>
</head>

<body>
	
    <!--Header-->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="/index.php"></a>
                <div class="nav-collapse collapse pull-right">
					<?php 
                      wp_nav_menu( array(
                        'menu'            => 'main-nav',
                        'menu_class'      => 'nav navbar-nav navbar-right',
                      ));
                    ?>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /header -->