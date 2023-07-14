<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <!-- Basic Page Needs -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'counter-scroll header-fixed' ); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

<!-- Preloader -->
<div id="preload" class="preload">
    <div class="preload-logo"></div>
</div>

<div id="wrapper">
    <div id="page" class="clearfix">
        <header id="header">
            <div class="top-bar">
                <div class="inner jus-ct">
                    <p class="clr-pri-1">Working Jours : Sun - Friday, 08:00 am - 05:00 pm</p>
                </div>
            </div>
            <div id="site-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="site-header-inner fx">
                                <div id="site-logo" class="clearfix">
                                    <a href="index.html" class="logo">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/logodark.png"
                                             alt="Kinco">
                                    </a>
                                </div>
                                <div class="btn-menu"><span></span></div>
                                <div class="nav-wrap">
                                    <nav id="mainnav" class="mainnav st-2">
                                        <ul class="menu">
                                            <li class="menu-item-has-children">
                                                <a href="#">HOME</a>
                                                <ul class="sub-menu">
                                                    <li><a href="index.html">Home 01</a></li>
                                                    <li><a href="home2.html">Home 02</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item current-menu-item">
                                                <a href="about.html">About</a>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a>PAGES</a>
                                                <ul class="sub-menu">
                                                    <li class="inner-menu-item"><a href="#">Teachers</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="teacher.html">Teacher</a></li>
                                                            <li><a href="teacher-details.html">Teachers Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="inner-menu-item "><a href="#">Classes</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="classes.html">Classes</a></li>
                                                            <li><a href="classe-details.html">Classes Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="inner-menu-item"><a href="#">Events</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="events.html">Event</a></li>
                                                            <li><a href="event2.html">Event 2</a></li>
                                                            <li><a href="event-details.html">Events Details</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="calendar.html">Academic Calendar</a></li>
                                                    <li><a href="testimonials.html">testimonials</a></li>
                                                    <li><a href="time-table.html">Time Table</a></li>
                                                    <li><a href="gallery.html">gallery</a></li>
                                                    <li><a href="pricing.html">pricing</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a>Programs</a>
                                                <ul class="sub-menu">
                                                    <li><a href="program.html">Program</a></li>
                                                    <li><a href="program-details.html">program details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a>BLOG</a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-grid.html">blog grid</a></li>
                                                    <li><a href="blog-list.html">blog list</a></li>
                                                    <li><a href="blog-single.html">blog single</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a>SHOP</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="inner">
                                                <a href="contact.html">CONTACTS</a>
                                            </li>
                                        </ul>
                                        <!-- /.menu -->
                                    </nav>
                                </div>
                                <div class="header-right fx">
                                    <div id="header-search">
                                        <a href="#" class="search-box header-search-icon">
                                            <i class="far fa-search"></i>
                                        </a>
                                        <form role="search" method="get" class="header-search-form" action="#">
                                            <input type="text" value="" name="s" class="header-search-field"
                                                   placeholder="Search...">
                                            <button type="submit" class="header-search-submit" title="Search"><i
                                                        class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                    <div class="header-contact fx">
                                        <a href="#" class="menu-bar-right header-menu">
                                            <svg data-name="Hero Area" xmlns="http://www.w3.org/2000/svg" width="58"
                                                 height="58" viewBox="0 0 58 58">
                                                <defs>
                                                    <style>
                                                        .cls-1 {
                                                            fill: #b250fe;
                                                        }

                                                        .cls-1, .cls-2 {
                                                            fill-rule: evenodd;
                                                        }

                                                        .cls-2 {
                                                            fill: #fff;
                                                        }
                                                    </style>
                                                </defs>
                                                <g id="Menu_Area2" data-name="Menu Area">
                                                    <g id="Menu_bar" data-name="Menu bar">
                                                        <path id="Bg" class="cls-1"
                                                              d="M7.853,2.283c14.9-3.89,29.969-1.4,43.467.819a7.923,7.923,0,0,1,5.735,5.422c3.111,14.141-.428,28.636-1.166,42.981a5.157,5.157,0,0,1-4.773,4.875c-13.49.568-23.463,3.285-41.787,0.9C5.948,56.807,2.348,54.2,1.9,51.7-0.683,37.877.2,23.508,2.194,8.757a8.71,8.71,0,0,1,5.66-6.473"/>
                                                        <path id="Bar" class="cls-2"
                                                              d="M16,17H42a2,2,0,0,1,0,4H16A2,2,0,0,1,16,17Zm0,10H42a2,2,0,0,1,0,4H16A2,2,0,0,1,16,27Zm0,10H42a2,2,0,0,1,0,4H16A2,2,0,0,1,16,37Z"/>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>

                                        <div class="inner-contact fx">
                                            <svg id="Hero_Area2" data-name="Hero Area"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="49" height="47"
                                                 viewBox="0 0 49 47">
                                                <g data-name="Menu Area">
                                                    <g>
                                                        <image id="helpline2" width="49" height="47"
                                                               xlink:href="data:img/png;base64,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"/>
                                                    </g>
                                                </g>
                                            </svg>
                                            <ul>
                                                <li class="clr-pri-2">Hotline</li>
                                                <li class="clr-pri-2">+012 (345) 678</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sidebar2" class="side-menu__block">
                    <div class="side-menu__block-overlay custom-cursor__overlay"></div>

                    <div class="inner-sidebar side-menu__block-inner fl-st-1">
                        <div class="side-menu__top justify-content-end">
                            <a href="#" class="side-menu__toggler side-menu__close-btn"><img
                                        src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/close.png"
                                        alt="images"></a>
                        </div>
                        <div class="wrap">
                            <div class="widget widget-quote">
                                <div class="box-feature">
                                    <div class="inner">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/post/post-quotes2.jpg"
                                             alt="Image">
                                        <div class="box-icon jus-ali-ct">
                                            <i class="far fa-quote-right"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <h5 class="author clr-pri-2">Patrick D. Smith</h5>
                                    <p class="wrap f-rubik">
                                        Sit amet consectetur adipiscing elit sed do eiusmod tempor didunt ut labore et
                                        dolore magna
                                    </p>
                                </div>
                            </div>

                            <div class="widget widget-search st-2">
                                <h4 class="title-widget fl-ctm-1">Search<span class="ctm-inner"></span></h4>
                                <div class="form-search-widget">
                                    <form action="#">
                                        <input type="text" placeholder="Search Here">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>

                            <div class="widget widget-category st-2">
                                <h4 class="title-widget fl-ctm-1">category<span class="ctm-inner"></span></h4>
                                <div class="list-category">
                                    <ul>
                                        <li class="fx"><span class="st wd-ctm">Arts &amp; Drawing</span><span
                                                    class="st">05</span></li>
                                        <li class="fx"><span class="st wd-ctm">Basic Language</span><span
                                                    class="st">02</span></li>
                                        <li class="fx"><span class="st wd-ctm">Graphics Design</span><span
                                                    class="st">07</span></li>
                                        <li class="fx"><span class="st wd-ctm">Web Development</span><span
                                                    class="st">04</span></li>
                                        <li class="fx"><span class="st wd-ctm">Lifestyle</span><span
                                                    class="st">06</span></li>
                                        <li class="fx"><span class="st wd-ctm">GYM &amp; Gaming</span><span class="st">05</span>
                                        </li>
                                        <li class="fx"><span class="st wd-ctm">Events &amp; Party</span><span
                                                    class="st">05</span></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="widget widget-news st-2">
                                <h4 class="title-widget fl-ctm-1">recent news<span class="ctm-inner"></span></h4>
                                <ul class="list-news">
                                    <li class="fx">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumbnails/widget1.jpg"
                                             alt="Image" class="feature">
                                        <ul class="box-content">
                                            <li><h6 class="title"><a href="blog-single.html">Bake Layers Accesilit
                                                        Testing Supporte</a></h6></li>
                                            <li><a href="blog-single.html" class="fx meta-news clr-pri-4"><i
                                                            class="far fa-calendar-alt"></i><span
                                                            class="f-rubik">25 nov 2021</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="fx">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumbnails/widget2.jpg"
                                             alt="Image" class="feature">
                                        <ul class="box-content">
                                            <li><h6 class="title"><a href="blog-single.html">Bake Layers Accesilit
                                                        Testin Supporte</a></h6></li>
                                            <li><a href="blog-single.html" class="fx meta-news clr-pri-4"><i
                                                            class="far fa-calendar-alt"></i><span
                                                            class="f-rubik">25 nov 2021</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="fx">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumbnails/widget3.jpg"
                                             alt="Image" class="feature">
                                        <ul class="box-content">
                                            <li><h6 class="title"><a href="blog-single.html">Bake Layers Accesilit
                                                        Testin Supporte</a></h6></li>
                                            <li><a href="blog-single.html" class="fx meta-news clr-pri-4"><i
                                                            class="far fa-calendar-alt"></i><span
                                                            class="f-rubik">25 nov 2021</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="fx">
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumbnails/widget4.jpg"
                                             alt="Image" class="feature">
                                        <ul class="box-content">
                                            <li><h6 class="title"><a href="blog-single.html">Bake Layers Accesilit
                                                        Testin Supporte</a></h6></li>
                                            <li><a href="blog-single.html" class="fx meta-news clr-pri-4"><i
                                                            class="far fa-calendar-alt"></i><span
                                                            class="f-rubik">25 nov 2021</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="widget widget-tag st-2">
                                <h4 class="title-widget fl-ctm-1">best tags<span class="ctm-inner"></span></h4>
                                <ul class="list-tag">
                                    <li><a href="shop-details.html" class="f-rubik active">Technology</a></li>
                                    <li><a href="shop-details.html" class="f-rubik">service</a></li>
                                    <li><a href="shop-details.html" class="f-rubik">team</a></li>
                                    <li><a href="shop-details.html" class="f-rubik">solutions</a></li>
                                    <li><a href="shop-details.html" class="f-rubik">consultancy</a></li>
                                    <li><a href="shop-details.html" class="f-rubik">It Company</a></li>
                                    <li><a href="shop-details.html" class="f-rubik">agency</a></li>
                                </ul>
                            </div>

                            <div class="widget widget-gallery st-2">
                                <h4 class="title-widget fl-ctm-1">photo gallery<span class="ctm-inner"></span></h4>
                                <div class="list-gallery fx">
                                    <div class="box-photo">
                                        <div class="overlay fx"><i class="fal fa-plus"></i></div>
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumbnails/widget5.jpg"
                                             alt="Image">
                                    </div>
                                    <div class="box-photo active">
                                        <div class="overlay fx"><i class="fal fa-plus"></i></div>
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumbnails/widget1.jpg"
                                             alt="Image">
                                    </div>
                                    <div class="box-photo">
                                        <div class="overlay fx"><i class="fal fa-plus"></i></div>
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumbnails/widget6.jpg"
                                             alt="Image">
                                    </div>

                                    <div class="box-photo">
                                        <div class="overlay fx"><i class="fal fa-plus"></i></div>
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumbnails/widget7.jpg"
                                             alt="Image">
                                    </div>
                                    <div class="box-photo">
                                        <div class="overlay fx"><i class="fal fa-plus"></i></div>
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumbnails/widget3.jpg"
                                             alt="Image">
                                    </div>
                                    <div class="box-photo">
                                        <div class="overlay fx"><i class="fal fa-plus"></i></div>
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/thumbnails/widget8.jpg"
                                             alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/inner-sidebar-->
                </div>
            </div>
        </header>