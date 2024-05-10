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





    function shuffle() {
        var container = document.getElementById("course-row");
        var elementsArray = Array.prototype.slice.call(container.getElementsByClassName('course-grid-col'));
        elementsArray.forEach(function(element) {
            container.removeChild(element);
        })
        shuffleArray(elementsArray);
        elementsArray.forEach(function(element) {
            container.appendChild(element);
        })
        // alert(1);
    }


    function shuffleArray(array) {
        for (var i = array.length - 1; i > 0; i--) {
            var j = Math.floor(Math.random() * (i + 1));
            var temp = array[i];
            array[i] = array[j];
            array[j] = temp;
        }
        return array;
    }

    shuffle();




    $('.course-tag-ul li a').click(function(e) {

        e.preventDefault();

        $('.course-tag-ul li a').removeClass('active');
        $(this).addClass('active');

        $('.course-grid-col').fadeOut(0);
        var course_type_id = $(this).attr('rel');
        // alert(course_type_id)

        if (course_type_id == 0) {
            $('.course-grid-col').fadeIn(200);

        } else {
            $('.course-grid-col.course-type-' + course_type_id).fadeIn(200);

        }


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

    <ul class="course-tag-ul mt-3 text-center">
        <li> <a href="javascript:void(0);" class="active" rel="0"> 顯示全部</a></li>

        <?php
        $args = array(
            'post_type' => 'course',
            'taxonomy'  => 'course_type'
        );
        $categories = get_terms( $args );

        for($i=0;$i<sizeof($categories);$i++)
        {
            ?>

        <li><a href="javascript:void(0);" rel="<?php echo $categories[$i]->term_id?>"><?php
                 echo $categories[$i]->name;
                 ?></a></li>
        <?php
        }
        
        //   echo $categories[0]->name;
        ?>

        <!-- <li> <a href="javascript:void(0);">手工班</a></li>
        <li><a href="javascript:void(0);">畫班</a></li>
        <li><a href="javascript:void(0);">生活優閒</a></li>
        <li><a href="javascript:void(0);">運動班</a></li>
        <li><a href="javascript:void(0);">實用班</a></li>
        <li><a href="javascript:void(0);">烹飪班</a></li>
        <li><a href="javascript:void(0);">化妝班</a></li>
        <li><a href="javascript:void(0);">心理班</a></li>
        <li><a href="javascript:void(0);">音樂班</a></li>
        <li><a href="javascript:void(0);">證書課程</a></li> -->

    </ul>
    <div class="text-center small random-text mt-2">:: 先後次序隨機排列 ::
    </div>



    <div class="row mt-5" id="course-row">


        <?php
$query_args = array(
	'post_type' => 'course',
	'post_status' => '',
);

// The Query
$the_query = new WP_Query( $query_args );

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
    
        ?>
        <div class="col-lg-3 col-md-4 col-sm-6 col-6  mb-5 course-grid-col <?php
               
               $terms = get_the_terms( $post->ID, 'course_type' ); 
               foreach($terms as $term) {
                 echo 'course-type-'.$term->term_id.' ';
               }?>">

            <a href="<?php echo get_permalink();?>" class="course-select-a">


                <img class="w-100"
                    src="<?php echo wp_get_attachment_image_src(get_field('course_square_image'),'full')[0];?>" alt="">




                <div class="bottom-txt-div"><?php echo get_field('course_name');?>



                    <div class="course-type">

                        <ul>

                            <?php
                        
                        $terms = get_the_terms( $post->ID, 'course_type' ); 
                        foreach($terms as $term) {
                          echo '<li>'.$term->name.'</li>';
                        }
                        
                        ?>
                            <!-- <li>手工班</li>
                            <li>手工班</li>
                            <li>手工班</li> -->

                        </ul>


                    </div>
                </div>



            </a>


            <!-- <div class="short-des text-start pt-3">
            </div> -->



        </div>

        <?php
	}
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}




    // for($i=0;$i<8;$i++)
    // {

        ?>


        <!-- <div class="col-3 mb-5 course-grid-col">

            <a href="<?php echo get_site_url();?>/course-detail" class="course-select-a"><img class="w-100"
                    src="http://143.198.107.5/wp-content/uploads/2024/04/440419620_18426416392045554_6531587873840991221_n.jpg"
                    alt="">


                <div class="bottom-txt-div">日本Aromatics Labo木下和美氨基酸寶石皂
                    (興趣班)</div>


            </a>


            <div class="short-des text-start pt-3">
                氨基酸寶石皂的外觀極具美感，是送禮的首選！不僅可用於洗頭、洗面、洗身，而且每個同學都把它視為珍貴的寶石...
            </div>



        </div> -->


        <?php
    // }
    ?>



    </div>









</div>



<?php

get_footer();