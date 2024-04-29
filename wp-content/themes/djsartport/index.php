<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
<header class="page-header alignwide">
    <h1 class="page-title"><?php single_post_title(); ?></h1>
</header><!-- .page-header -->
<?php endif; ?>


<div class="mt-4">
    <div class="text-center ">
        <img class="header-logo" src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="">
    </div>
</div>



<div class="container position-relative">




    <ul class="top-menu-ul-outer-ul">

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


<div class="container h1-outer-div text-center mt-5">


    <h1 class="">
        <span class="text-div-outer">
            <span class="text-div">
                <!-- <div class="text-div-bg"></div> -->
                興趣班 Interest class
            </span>
        </span>
    </h1>
</div>



<?php

get_footer();