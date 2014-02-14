<!DOCTYPE HTML>
<html>
	<head>
		<title>World Wide Lightning Location Network</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/config.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/skel.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/skel-panels.min.js"></script>
        
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/skel-noscript.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/style-desktop.css" type="text/css" media="screen" />    
               
        <?php add_googleanalytics() ?>
        
	</head>
	<body>

		<!-- Header -->
			<div id="header-wrapper">

                <!-- Header -->
                
				<header id="header" class="container">
					<div class="row">
						<div class="4u">
						
							<!-- Logo -->
                            <h0><a href="<?php echo site_url(); ?>" id="logo">WWLLN</a></h0>
                            
						</div>
                        
                        <!-- Nav -->
                        <div class="8u">
                            <nav id="nav">
                                <a href="<?php echo site_url(); ?>/">Home</a>
                                <a href="<?php echo site_url(); ?>/network">The Network</a>
                                <a href="<?php echo site_url(); ?>/research">Research</a>
                                <a href="<?php echo site_url(); ?>/data">Data</a>
                                <a href="<?php echo site_url(); ?>/hosts">Hosts</a>
                                <a href="<?php echo site_url(); ?>/blog/">Blog</a>
                            </nav>

                        </div>
					</div>
                    <div class="row">
                        <div class="12u">
                        
                            <h1>World Wide Lightning Location Network</h1>

                        </div>
                    </div>
				</header>'
                
                <?php 
                if (is_page_template( 'page-front.php')){
                    get_template_part( 'page','front-header');
                } ?> 
                
                
            </div>