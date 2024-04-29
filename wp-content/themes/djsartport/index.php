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

            <li class="mb-4 mt-0 mobile-logo-a">
                <a href="https://iherbalgarden.com" class="logo-a">
                    <img src="https://iherbalgarden.com/wp-content/themes/iherbalgarden/assets/images/logo.png" alt="">

                </a>
            </li>
            <li><a class="level-1  " href="https://iherbalgarden.com/">主頁</a></li>
            <li><a class="level-1 about " href="https://iherbalgarden.com/about/">簡介</a></li>
            <li><a class="level-1 education " href="https://iherbalgarden.com/education/">學習</a></li>
            <li><a class="level-1 activity-map-2023 " href="https://iherbalgarden.com/activity-map-2023/">百草園</a></li>
            <li><a class="level-1 games " href="https://iherbalgarden.com/games/">玩學遊戲</a></li>
            <li><a class="level-1 faq " href="https://iherbalgarden.com/faq/">常見問題</a></li>


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