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


    <table>
        <tr>
            <td>
                <h2 class="h2-course-name">日本Aromatics Labo木下和美氨基酸寶石皂 (興趣班)</h2>
            </td>
        </tr>
    </table>

    <div class="course-detail-banner-div-1"
        style="background: url(https://djsartport.com/wp-content/uploads/2024/05/WhatsApp-Image-2024-04-20-at-22.45.34.jpeg) center center no-repeat; width: 50%; background-position: center; background-size: 100%;">
    </div>
    <div class="course-detail-banner-div-2"
        style="background: url(https://djsartport.com/wp-content/uploads/2024/05/Screenshot-2024-05-02-at-1.12.38 AM.png) center center no-repeat; width: 50%; background-position: center; background-size: 100%;">


    </div>


</div>


<div class="container h1-outer-div text-center mt-5">
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


    <!-- <h1>日本Aromatics Labo木下和美氨基酸寶石皂課程
    </h1> -->
    <!-- <ul class="course-tag-ul mt-3 text-center mb-4">

        <li> <a href="javascript:void(0);"> 手工班</a></li>


    </ul> -->





    <div class="row">






        <div class="col-6 pe-4 left-col">

            <div>
                <h2>簡介</h2>
            </div>


            <div>
                日本Aromatics Labo氨基酸寶石皂課程由木下和美老師創辦<br>

                氨基酸寶石皂的外觀極具美感，是送禮的首選！不僅可用於洗頭、洗面、洗身，而且每個同學都把它視為珍貴的寶石，捧在手上愛不釋手，捨不得拿來使用。

            </div>

            <div class="course-gallery-div">

                <a href="https://djsartport.com/wp-content/uploads/2024/05/WhatsApp-Image-2024-04-20-at-22.45.34.jpeg"
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
                </a>
            </div>
        </div>

        <div class="col-6 ps-4">



            <div>
                <h2>詳情</h2>
            </div>

            <div>
                定價：$3600 <br>
                需時：3小時或完成為止 <br>
                地點：觀塘
            </div>

            <div class="mt-4">

                <div>
                    <div>
                        <h2>適合人仕</h2>
                    </div>
                    - 無需任何繪畫經驗 <br>
                    - 任何對繪畫星空畫有興趣既朋友

                </div>



            </div>


            <div class="mt-4">

                <div>
                    <h2>注意事項</h2>
                </div>
                - 若在上課當日懸掛八號或以上強風信號，或黑色暴雨警告信號已經生效，我們將與導師商討活動是否需要改期至其他日期。 <br>
                - 考慮到緊湊的課程安排，請參與者準時到達。


            </div>



            <div class="mt-4">
                <h2>報名</h2>

                <div class="form-div ">




                    <?php
                    
                    // if(get_field('special_form'))
                    // {
                    //     echo get_field('special_form');
                    // }
                    // else
                    // {
                    //     echo do_shortcode('[contact-form-7 id="ee17888" title="Contact form 1"]');
                   
                    // }
                    
                    // [contact-form-7 id="5914911" title="enrollment form(drawing)"]
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