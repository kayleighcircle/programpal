<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Program Pal | Never miss out on your favorite shows</title>

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/site.css"/>
	<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet'>

	<!-- SCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/utility.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
	<!--[if lt IE 9]>
	  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5shiv.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<section id="side-nav">
		<article class="logo">
			<a href="<?php echo get_bloginfo('url') ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/programpal-logo.svg" alt="Program Pal logo"></a>
		</article>
		<nav id="main-nav">
			<span class="menu-toggle">Menu</span>
			<ul id="primary-nav">
				<li>
					<a href="<?php echo get_bloginfo('url') ?>/upcoming-premieres">
						<span class="icon">
							<svg width="100%" height="100%" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
								<g class="icon-fill" fill="#fff" fill-rule="evenodd">
									<path id="icon-calendar" d="M18.56,2.872l-7.143,0l0,2.674c0,0.896 -0.96,1.612 -2.144,1.612l-1.426,0c-1.188,0 -2.144,-0.722 -2.144,-1.612l0,-2.674l-4.816,0c-0.496,0 -0.898,0.416 -0.898,0.927l0,25.29c0,0.511 0.401,0.926 0.897,0.926l28.205,0c0.496,0 0.898,-0.415 0.898,-0.926l0,-25.29c0,-0.512 -0.403,-0.927 -0.899,-0.927l-4.816,0l0,2.674c0,0.896 -0.96,1.612 -2.144,1.612l-1.426,0c-1.188,0 -2.144,-0.722 -2.144,-1.612l0,-2.674ZM1.417,24.301l0,3.751c0,0.295 0.275,0.534 0.614,0.534l3.672,0l0,-4.285l-4.286,0ZM7.131,24.301l0,4.285l4.286,0l0,-4.285l-4.286,0ZM12.846,24.301l0,4.285l4.285,0l0,-4.285l-4.285,0ZM18.56,24.301l0,4.285l4.286,0l0,-4.285l-4.286,0ZM24.274,24.301l0,4.285l3.672,0c0.339,0 0.614,-0.239 0.614,-0.534l0,-3.751l-4.286,0ZM1.417,18.586l0,4.286l4.286,0l0,-4.286l-4.286,0ZM7.131,18.586l0,4.286l4.286,0l0,-4.286l-4.286,0ZM18.56,18.586l0,4.286l4.286,0l0,-4.286l-4.286,0ZM24.274,18.586l0,4.286l4.286,0l0,-4.286l-4.286,0ZM1.417,12.872l0,4.286l4.286,0l0,-4.286l-4.286,0ZM7.131,12.872l0,4.286l4.286,0l0,-4.286l-4.286,0ZM12.846,12.872l0,4.286l4.285,0l0,-4.286l-4.285,0ZM18.56,12.872l0,4.286l4.286,0l0,-4.286l-4.286,0ZM24.274,12.872l0,4.286l4.286,0l0,-4.286l-4.286,0ZM8.203,0.015c-0.592,0 -1.072,0.477 -1.072,1.075l0,3.565c0,0.593 0.479,1.074 1.072,1.074l0.714,0c0.592,0 1.072,-0.477 1.072,-1.074l0,-3.565c0,-0.594 -0.479,-1.075 -1.072,-1.075l-0.714,0ZM21.417,0.015c-0.789,0 -1.428,0.639 -1.428,1.427l0,2.86c0,0.788 0.641,1.427 1.428,1.427c0.789,0 1.429,-0.639 1.429,-1.427l0,-2.86c0,-0.788 -0.641,-1.427 -1.429,-1.427Z"/>
								</g>
							</svg>
						</span>
						Upcoming
					</a>
				</li>
				<li>
					<a href="<?php echo get_bloginfo('url') ?>/all-premieres">
						<span class="icon">
							<svg width="100%" height="100%" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
								<g class="icon-fill" fill="#fff" fill-rule="evenodd">
									<path id="icon-list" d="M21.596,30.101l-18.913,0c-1.441,0 -2.609,-1.176 -2.609,-2.61l0,-24.781c0,-1.441 1.176,-2.609 2.61,-2.609l24.78,0c1.442,0 2.61,1.166 2.61,2.601l0,18.268l-7.826,9.131l-0.652,0ZM1.378,7.927l0,19.567c0,0.73 0.589,1.302 1.314,1.302l18.252,0l0,-6.514c0,-1.46 1.166,-2.616 2.606,-2.616l5.22,0l0,-11.739l-27.392,0ZM1.378,6.622l0,-3.914c0,-0.72 0.572,-1.303 1.303,-1.303l24.786,0c0.719,0 1.303,0.587 1.303,1.313l0,3.904l-27.392,0ZM22.248,28.144l0,-5.858c0,-0.727 0.588,-1.316 1.3,-1.316l4.83,0l-6.13,7.174ZM10.509,17.057l0,1.304l9.13,0l0,-1.304l-9.13,0ZM3.987,15.753l0,3.913l3.913,0l0,-3.913l-3.913,0ZM5.291,17.057l0,1.304l1.305,0l0,-1.304l-1.305,0ZM10.509,11.84l0,1.304l15.652,0l0,-1.304l-15.652,0ZM3.987,10.535l0,3.913l3.913,0l0,-3.913l-3.913,0ZM5.291,11.84l0,1.304l1.305,0l0,-1.304l-1.305,0ZM10.509,22.275l0,1.304l7.826,0l0,-1.304l-7.826,0ZM3.987,20.97l0,3.913l3.913,0l0,-3.913l-3.913,0ZM5.291,22.275l0,1.304l1.305,0l0,-1.304l-1.305,0Z"/>
								</g>
							</svg>
						</span>
						All premieres
					</a>
				</li>
				<li>
					<a href="<?php echo get_bloginfo('url') ?>/midseason">
						<span class="icon">
							<svg width="100%" height="100%" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
								<g class="icon-fill" fill="#fff" fill-rule="evenodd">
						        <path d="M15,0c-8.284,0 -15,6.716 -15,15c0,8.284 6.716,15 15,15c8.284,0 15,-6.716 15,-15c0,-8.284 -6.716,-15 -15,-15ZM15.069,27.557c-6.918,0 -12.526,-5.608 -12.526,-12.526c0,-6.918 5.608,-12.526 12.526,-12.526c6.918,0 12.526,5.607 12.526,12.526c0,6.918 -5.607,12.526 -12.526,12.526Z" />
						        <path d="M18.414,8.488l-6.828,0c-0.704,0 -1.273,0.56 -1.273,1.25l0,11.619c0.003,0.069 0.068,0.273 0.791,-0.022l3.479,-1.418c0.024,-0.009 0.442,-0.168 0.856,0.002l0.001,0l3.677,1.505c0.216,0.08 0.57,0.177 0.57,-0.065l0,-5.325l0,-1.018l0,-5.278c0,-0.69 -0.57,-1.25 -1.273,-1.25ZM17.793,14.746l0,3.761c0,0.133 -0.151,0.11 -0.277,0.068l-2.178,-0.892c-0.294,-0.12 -0.635,-0.003 -0.641,-0.001l-1.893,0.772c-0.528,0.215 -0.573,0.063 -0.575,0.014l0,-3.118l0,-0.604l0,-3.134c0,-0.409 0.339,-0.742 0.755,-0.742l4.054,0c0.418,0 0.756,0.332 0.756,0.742l0,3.134l-0.001,0Z" />
							    </g>
						    </svg>
						</span>
						Midseason
					</a>
				</li>
				<li>
					<a href="<?php echo get_bloginfo('url') ?>/submit-a-show">
						<span class="icon">
							<svg width="100%" height="100%" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve">
								<g class="icon-fill" fill="#fff" fill-rule="evenodd">
						        <path d="M0.823,15.194c-1.137,0.614 -1.09,1.514 0.103,2.003l3.528,1.439c1.192,0.485 2.995,0.221 4.007,-0.595l15.325,-12.459c1.008,-0.819 1.116,-0.698 0.24,0.269l-12.115,13.369c-0.878,0.964 -0.619,2.145 0.576,2.622l0.414,0.166c1.195,0.476 3.146,1.279 4.333,1.776l3.914,1.645c1.188,0.497 2.16,0.91 2.163,0.917c0.001,0.008 0.006,0.031 0.012,0.033c0.006,0.002 0.286,-1.04 0.623,-2.315l5.965,-22.607c0.337,-1.276 -0.316,-1.818 -1.452,-1.204l-27.636,14.941Z"/>
						        <path d="M10.508,29.991c-0.07,0.216 2.414,-3.707 2.414,-3.707c0.701,-1.105 0.304,-2.423 -0.884,-2.923l-2.707,-1.144c-1.188,-0.5 -1.756,0.087 -1.264,1.311c0,0.001 2.513,6.243 2.441,6.463Z" />
							  	</g>
						    </svg>
						</span>
						Submit a show
					</a>
				</li>
			</ul>
		</nav>
	</section>