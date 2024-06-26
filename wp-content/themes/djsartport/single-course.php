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

<!-- 11 -->
<div class="course-detail-banner-div" style="<?php

if(get_field('course_banner_image_2'))
{
    echo 'height:300px';
}
?>">

    <?php


if(get_field('course_banner_image_2'))
{
    ?>
    <table>
        <tr>
            <td>
                <h2 class="h2-course-name"><?php echo get_field('course_name');?></h2>
            </td>
        </tr>
    </table>
    <?php

}
?>

    <?php

//if(get_field('show_banner_title'))
//{
    ?>

    <table class="banner-course-name <?php if(!get_field('show_banner_title')){ echo 'd-none';}?>">
        <tr>
            <td>
                <h2 class="h2-course-name"><?php echo get_field('course_name');?></h2>
            </td>
        </tr>
    </table>

    <?php
//}
?>

    <?php
    
    if(!get_field('course_banner_image_2'))
    {

        ?>
    <div class="course-detail-banner-div-3" style="">
        <img class="w-100 course-detail-banner-desktop"
            src="<?php echo wp_get_attachment_image_src(get_field('course_banner_image_1'),'full')[0];?>" alt="">
        <img class="w-100 course-detail-banner-mobile"
            src="<?php echo wp_get_attachment_image_src(get_field('course_square_image'),'full')[0];?>" alt="">

    </div>


    <?php
    }
    else
    {
        ?>
    <div class="course-detail-banner-div-1"
        style="background: url(<?php echo wp_get_attachment_image_src(get_field('course_banner_image_1'),'full')[0];?>) center center no-repeat; width: 50%; background-position: center; background-size: 100%;">
    </div>
    <div class="course-detail-banner-div-2"
        style="background: url(<?php echo wp_get_attachment_image_src(get_field('course_banner_image_2'),'full')[0];?>) center center no-repeat; width: 50%; background-position: center; background-size: 100%;">
    </div>

    <?php
    }
    ?>


</div>


<div class="breadcrumb justify-content-center mt-3">

    <a href="<?php echo get_site_url();?>">主頁</a> &gt; <a href="<?php echo get_site_url();?>/course">興趣班</a> &gt;
    <span><?php echo get_the_title();?></span>

</div>
<div class="container h1-outer-div text-center mt-lg-0 mt-md-0 mt-sm-0 mt-0 ">
    <div class="text-center">
        <h1 class="">
            <span class="text-div-outer">
                <span class="text-div">
                    <!-- <div class="text-div-bg"></div> -->
                    課程介紹 Course Introduction
                </span>
            </span>
        </h1>
    </div>
</div>

<div class="container mt-3 course-detail-bottom-content">







    <div class="row">






        <div class="col-lg-6 col-md-12 col-sm-12 col-12 pe-lg-4 pe-md-2 pe-sm-2 pe-2  left-col mb-4">

            <div>
                <h2>課程簡介</h2>
            </div>

            <h1><?php echo get_the_title();?></h1>


            <div>
                <!-- 日本Aromatics Labo氨基酸寶石皂課程由木下和美老師創辦<br>

                氨基酸寶石皂的外觀極具美感，是送禮的首選！不僅可用於洗頭、洗面、洗身，而且每個同學都把它視為珍貴的寶石，捧在手上愛不釋手，捨不得拿來使用。 -->

                <?php
                echo get_field('intro');
                ?>
            </div>

            <div class="course-gallery-div">


                <?php
            
            // Check rows exists.
if( have_rows('course_images') ){

    // Loop through rows.
    while( have_rows('course_images') ) { the_row();

        // Load sub field value.
        // $sub_value = get_sub_field('course_image');
        // Do something, but make sure you escape the value if outputting directly...

    // End loop.

    ?>


                <a href="<?php echo wp_get_attachment_image_src(get_sub_field('course_image'),'full')[0];?>"
                    data-lightbox="image-1">
                    <img class=""
                        src="<?php echo wp_get_attachment_image_src(get_sub_field('course_image'),'full')[0];?>" alt="">
                </a>

                <?php
    }
    
    
}

            ?>

                <!-- <a href="https://djsartport.com/wp-content/uploads/2024/05/WhatsApp-Image-2024-04-20-at-22.45.34.jpeg"
                    data-lightbox="image-1">
                    <img class=""
                        src="https://djsartport.com/wp-content/uploads/2024/05/WhatsApp-Image-2024-04-20-at-22.45.34.jpeg"
                        alt="">
                </a>
                <a href="https://djsartport.com/wp-content/uploads/2024/05/Screenshot-2024-05-02-at-1.12.38 AM.png"
                    data-lightbox="image-2">
                    <img class=""
                        src="https://djsartport.com/wp-content/uploads/2024/05/Screenshot-2024-05-02-at-1.12.38 AM.png"
                        alt="">
                </a> -->


            </div>

            <?php 
            
            if(get_field('video'))
            {
                ?>
            <div class="mt-4 mb-4">

                <div>
                    <h2>影片介紹</h2>
                </div>

                <?php

echo get_field('video');
?>


            </div>

            <?php
            }
            ?>



        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-12 ps-lg-4">



            <div>
                <h2>詳情</h2>
            </div>

            <div>
                <!-- 定價：$3600 <br>
                需時：3小時或完成為止 <br>
                地點：觀塘 -->
                <?php
                
                echo get_field('detail');
                ?>
            </div>

            <div class="mt-4">

                <div>
                    <div>
                        <h2>適合人仕</h2>
                    </div>
                    <!-- - 無需任何繪畫經驗 <br>
                    - 任何對繪畫星空畫有興趣既朋友 -->
                    <?php

echo get_field('suitable_people_content');
?>
                </div>



            </div>

            <?php
            
            if(get_field('notice'))
            {
                ?>
            <div class="mt-4">

                <div>
                    <h2>注意事項</h2>
                </div>


                <?php

echo get_field('notice');
?>
                <br>
                - 若在上課當日懸掛八號或以上強風信號，或黑色暴雨警告信號已經生效，我們將與導師商討活動是否需要改期至其他日期。 <br>
                - 考慮到緊湊的課程安排，請參與者準時到達。



            </div>

            <?php
            }
            else
            {
                ?>

            <div class="mt-4">

                <div>
                    <h2>注意事項</h2>
                    <br>
                    - 若在上課當日懸掛八號或以上強風信號，或黑色暴雨警告信號已經生效，我們將與導師商討活動是否需要改期至其他日期。 <br>
                    - 考慮到緊湊的課程安排，請參與者準時到達。
                </div>
            </div>
            <?php
            }
            ?>





            <div class="mt-4">

                <div>
                    <h2>報名方法</h2>
                    <div>填寫網上表格 或 whatsapp <a href="https://wa.me/+85294444920" target="_blank">94444920</a> 報名</div>
                </div>
            </div>

            <div class="mt-4">
                <h2>報名表格</h2>

                <div class="form-div ">




                    <?php
   echo get_field('special_form') ? get_field('special_form') : do_shortcode('[contact-form-7 id="ee17888" title="Contact form 1"]');
                             
                    // echo do_shortcode('[contact-form-7 id="ee17888" title="Contact form 1"]');
                    ?>
                </div>
            </div>

        </div>

    </div>



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