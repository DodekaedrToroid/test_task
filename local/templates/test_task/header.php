<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
    IncludeTemplateLangFile(__FILE__);
?>
<!doctype html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <? $APPLICATION->ShowHead(); ?>
    <title>Colorlib Balita &mdash; Minimal Blog Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <!-- Theme Style -->
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/bootstrap.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/animate.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/owl.carousel.min.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/fonts/ionicons/css/ionicons.min.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/fonts/fontawesome/css/font-awesome.min.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/fonts/flaticon/font/flaticon.css'); ?>
    <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/style.css'); ?>

    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery-3.2.1.min.js'); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery-migrate-3.0.0.js'); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/popper.min.js'); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/bootstrap.min.js'); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/owl.carousel.min.js'); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.waypoints.min.js'); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jquery.stellar.min.js'); ?>
    <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/main.js'); ?>
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
<header role="banner">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-9 social">
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-instagram"></span></a>
                    <a href="#"><span class="fa fa-youtube-play"></span></a>
                    <a href="#"><span class="fa fa-vimeo"></span></a>
                    <a href="#"><span class="fa fa-snapchat"></span></a>
                </div>
                <div class="col-3 search-top">
                    <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                    <form action="#" class="search-top-form">
                        <span class="icon fa fa-search"></span>
                        <input type="text" id="s" placeholder="Type keyword to search...">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container logo-wrap">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                <h1 class="site-logo"><a href="/">Balita</a></h1>
            </div>
        </div>
    </div>
    <? $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "top_menu",
        array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "subsections",
            "DELAY" => "N",
            "MAX_LEVEL" => "4",
            "MENU_CACHE_GET_VARS" => array(),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "Y",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_THEME" => "green",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "Y",
            "COMPONENT_TEMPLATE" => "top_menu"
        ),
        false
    ); ?>
</header>
<!-- END header -->
<section class="site-section py-sm">
    <div class="container">
        <? if ($APPLICATION->GetCurPage() == '/') { ?>
            <div class="row">
                <div class="col-md-12">

                    <div class="owl-carousel owl-theme home-slider owl-loaded owl-drag">

                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-2240px, 0px, 0px); transition: all 0s ease 0s; width: 7840px;">
                                <div class="owl-item cloned" style="width: 1110px; margin-right: 10px;">
                                    <div>
                                        <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('/local/templates/test_task/images/img_2.jpg'); ">
                                            <div class="text half-to-full">
                                                <div class="post-meta">
                                                    <span class="category">Lifestyle</span>
                                                    <span class="mr-2">March 15, 2018 </span> •
                                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                                </div>
                                                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 1110px; margin-right: 10px;">
                                    <div>
                                        <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('/local/templates/test_task/images/img_3.jpg'); ">
                                            <div class="text half-to-full">
                                                <div class="post-meta">
                                                    <span class="category">Lifestyle</span>
                                                    <span class="mr-2">March 15, 2018 </span> •
                                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                                </div>
                                                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 1110px; margin-right: 10px;">
                                    <div>
                                        <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('/local/templates/test_task/images/img_1.jpg'); ">
                                            <div class="text half-to-full">
                                                <div class="post-meta">
                                                    <span class="category">Lifestyle</span>
                                                    <span class="mr-2">March 15, 2018 </span> •
                                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                                </div>
                                                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 1110px; margin-right: 10px;">
                                    <div>
                                        <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('/local/templates/test_task/images/img_2.jpg'); ">
                                            <div class="text half-to-full">
                                                <div class="post-meta">
                                                    <span class="category">Lifestyle</span>
                                                    <span class="mr-2">March 15, 2018 </span> •
                                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                                </div>
                                                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 1110px; margin-right: 10px;">
                                    <div>
                                        <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('/local/templates/test_task/images/img_3.jpg'); ">
                                            <div class="text half-to-full">
                                                <div class="post-meta">
                                                    <span class="category">Lifestyle</span>
                                                    <span class="mr-2">March 15, 2018 </span> •
                                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                                </div>
                                                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 1110px; margin-right: 10px;">
                                    <div>
                                        <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('/local/templates/test_task/images/img_1.jpg'); ">
                                            <div class="text half-to-full">
                                                <div class="post-meta">
                                                    <span class="category">Lifestyle</span>
                                                    <span class="mr-2">March 15, 2018 </span> •
                                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                                </div>
                                                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 1110px; margin-right: 10px;">
                                    <div>
                                        <a href="blog-single.html" class="a-block d-flex align-items-center height-lg" style="background-image: url('/local/templates/test_task/images/img_2.jpg'); ">
                                            <div class="text half-to-full">
                                                <div class="post-meta">
                                                    <span class="category">Lifestyle</span>
                                                    <span class="mr-2">March 15, 2018 </span> •
                                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                                </div>
                                                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem nobis, ut dicta eaque ipsa laudantium!</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav">
                            <button role="presentation" class="owl-prev"><span class="ion-chevron-left"></span></button>
                            <button role="presentation" class="owl-next"><span class="ion-chevron-right"></span></button>
                        </div>
                        <div class="owl-dots">
                            <button class="owl-dot active"><span></span></button>
                            <button class="owl-dot"><span></span></button>
                            <button class="owl-dot"><span></span></button>
                        </div>
                    </div>
                </div>
            </div>
        <? } ?>
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-4"><? $APPLICATION->ShowTitle(); ?></h2>
            </div>
        </div>
        <div class="row blog-entries">