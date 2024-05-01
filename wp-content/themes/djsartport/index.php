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


<script type="text/javascript">
$(function() {


    $('.course-tag-ul li a').click(function(e) {

        e.preventDefault();

        $('.course-tag-ul li a').removeClass('active');
        $(this).addClass('active');


    })



})
</script>

<div class="container h1-outer-div text-center mt-5">


    <div class="text-center">
        <h1 class="">
            <span class="text-div-outer">
                <span class="text-div">
                    <!-- <div class="text-div-bg"></div> -->
                    興趣班 Interest class
                </span>
            </span>
        </h1>
    </div>
</div>

<div class="container">

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
        <div class="col-3 mb-5 course-grid-col">

            <a href="<?php echo get_site_url();?>/course-detail" class="course-select-a"><img class="w-100"
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