<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript">
    $(function() {


        $('.course-tag-ul li a').click(function(e) {

            e.preventDefault();

            $('.course-tag-ul li a').removeClass('active');
            $(this).addClass('active');


        })
        $('h1').animate({
            'width': '100%',
            'opacity': '1'
        }, 800, function() {


            for (i = 0; i < $('.course-tag-ul li').length; i++) {

                $('.course-tag-ul li').delay(i * 10).eq(i).animate({
                    'opacity': '1'
                });
            }


            setTimeout(() => {


                $('.random-text').fadeIn(200)

                for (i = 0; i < $('.course-grid-col').length; i++) {

                    $('.course-grid-col').delay(i * 50).eq(i).animate({
                        'opacity': '1'
                    });
                }

            }, 500);
        })



    })
    </script>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="d-none skip-link screen-reader-text" href="#content">
            <?php
		/* translators: Hidden accessibility text. */
		esc_html_e( 'Skip to content', 'twentytwentyone' );
		?>
        </a>

        <?php //get_template_part( 'template-parts/header/site-header' ); ?>

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">



                    <?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
                    <header class="page-header alignwide">
                        <h1 class="page-title"><?php single_post_title(); ?></h1>
                    </header><!-- .page-header -->
                    <?php endif; ?>


                    <div class="mt-4">
                        <div class="text-center ">
                            <img class="header-logo"
                                src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="">
                        </div>
                    </div>



                    <div class="container position-relative mt-4">
                        <ul class="top-menu-ul-outer-ul ">

                            <ul class=" top-menu-ul">

                                <li><a class="level-1  " href="<?php echo get_site_url();?>">主頁</a></li>
                                <li><a class="level-1  " href="javascript:void(0);">關於我們</a></li>

                                <li><a class="level-1  " href="javascript:void(0);">興趣班課程</a></li>

                                <li><a class="level-1  " href="javascript:void(0);">寄賣招募</a></li>

                                <li><a class="level-1  " href="javascript:void(0);">店鋪位置</a></li>


                                <li><a class="level-1  " href="javascript:void(0);">聯絡我們</a></li>



                            </ul>
                        </ul>
                    </div>