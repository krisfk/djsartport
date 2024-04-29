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


<div class="container h1-outer-div text-center mt-5">


    <h1 class="">
        <span class="text-div-outer">
            <span class="text-div">
                <!-- <div class="text-div-bg"></div> -->
                興趣班 Interest class
            </span>
        </span>
    </h1>


    <ul class="course-tag-ul mt-3">
        <li> <a href="javascript:void(0);" class="active"> 顯示全部</a></li>

        <li> <a href="javascript:void(0);"> 手工班</a></li>
        <li><a href="javascript:void(0);">畫班</a></li>
        <li><a href="javascript:void(0);">生活優閒</a></li>
        <li><a href="javascript:void(0);">運動班</a></li>
        <li><a href="javascript:void(0);">實用班</a></li>
        <li><a href="javascript:void(0);">烹飪班</a></li>
        <li><a href="javascript:void(0);">化妝班</a></li>
        <li><a href="javascript:void(0);">心理班</a></li>
        <li><a href="javascript:void(0);">音樂班</a></li>
        <li><a href="javascript:void(0);">證書課程</a></li>

    </ul>
    <div class="text-center small random-text mt-2">:: 先後次序隨機排列 ::
    </div>



    <div class="row mt-5">


        <?php
    
    for($i=0;$i<8;$i++)
    {

        ?>
        <div class="col-3 mb-5">

            <a href="javascript:void" class="course-select-a"><img class="w-100"
                    src="http://143.198.107.5/wp-content/uploads/2024/04/440419620_18426416392045554_6531587873840991221_n.jpg"
                    alt="">


                <div class="bottom-txt-div">日本Aromatics Labo木下和美氨基酸寶石皂
                    (興趣班)</div>


            </a>


            <div class="short-des text-start pt-3">
                氨基酸寶石皂的外觀極具美感，是送禮的首選！不僅可用於洗頭、洗面、洗身，而且每個同學都把它視為珍貴的寶石...
            </div>



        </div>
        <?php
    }
    ?>



    </div>









</div>



<?php

get_footer();