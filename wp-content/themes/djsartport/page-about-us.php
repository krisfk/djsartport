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


<div class="course-detail-banner-div">



    <!-- <div class="course-detail-banner-div-3"
        style="background: url(http://143.198.107.5/wp-content/uploads/2024/05/S__47595671.jpg) center center no-repeat; width: 50%; background-position: center; background-size: 100%;height:300px;">
    </div> -->
    <img class="w-100" src="http://143.198.107.5/wp-content/uploads/2024/05/djsartport-rt-scaled.jpg" alt="">

</div>


<div class="container h1-outer-div text-center mt-5">
    <div class="text-center">
        <h1 class="">
            <span class="text-div-outer">
                <span class="text-div">
                    <!-- <div class="text-div-bg"></div> -->
                    關於我們 About Us
                </span>
            </span>
        </h1>
    </div>
</div>

<div class="container mt-3 course-detail-bottom-content">
    <?php
    
    echo get_the_content();
    ?>

</div>

<script type="text/javascript">
$(document).ready(function() {


    $('.course-name').val($('.h2-course-name').html());
    var date = new Date();

    var day = date.getDate();
    var month = date.getMonth() + 1;
    var year = date.getFullYear();

    if (month < 10) month = "0" + month;
    if (day < 10) day = "0" + day;

    var today = year + "-" + month + "-" + day;
    $("#joinDate").attr("min", today);
});
</script>
<?php

get_footer();