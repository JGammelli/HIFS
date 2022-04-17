<?php 
/**
 * Template Name: Home
 */
    get_header();
?>

<main role="main" aria-label="Content">
	<section class="homeSection">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php $image = get_field('image_1');?>
            <div class="welcomeSection" style="background-image: url(<?php echo $image['url']; ?>); height: 70vh;">
                <div class="welcomeContainer">
                    <h1><?php the_field('welcome_header');?></h1>
                    <p><?php the_field('welcome_text');?></p>
                </div>
            </div>

                <div class="scheduleSection">
                    <div class="svgSchedule">
                        <svg width="30vw" height="2" viewBox="0 0 30vw 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="1" x2="30vw" y2="1" stroke="white" stroke-width="2"/>
                        </svg>
                        <svg width="40vw" height="2" viewBox="0 0 40vw 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="1" x2="40vw" y2="1" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>
                    <div class="scheduleContainer">
                        
                        <div class="scheduleDiv">
                          
                            <h2>Schema</h2>
                            <p><?php the_field('schedule');?></p>
                        </div>
                        <div class="activitiesInfoDiv">
                            <p><?php the_field('activities_info');?></p>
                        </div>
                    </div>
                    <div class="readMore justifyRight">
                        <a href="<?php echo basename( "aktiviteter" )?>" class="underline">Mer info 
                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.3536 4.35355C11.5488 4.15829 11.5488 3.84171 11.3536 3.64645L8.17157 0.464466C7.97631 0.269204 7.65973 0.269204 7.46447 0.464466C7.2692 0.659728 7.2692 0.976311 7.46447 1.17157L10.2929 4L7.46447 6.82843C7.2692 7.02369 7.2692 7.34027 7.46447 7.53553C7.65973 7.7308 7.97631 7.7308 8.17157 7.53553L11.3536 4.35355ZM0 4.5H11V3.5H0V4.5Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                    <div class="svgSchedule">
                        <svg width="50vw" height="2" viewBox="0 0 50vw 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="1" x2="50vw" y2="1" stroke="white" stroke-width="2"/>
                        </svg>
                        <svg width="60vw" height="2" viewBox="0 0 60vw 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line y1="1" x2="60vw" y2="1" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>


                </div>

            <?php $image2 = get_field('image_2');?>
            <div class="homeNewsSection" style="background-image: url(<?php echo $image2['url']; ?>); height: 100vh;">
                <div class="homeNewsContainer">
                    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $our_news = new WP_Query(
                            array(
                            'post_type' => 'news',
                            'category_name' => 'Våra nyheter',
                            'post_per_page' => 3,
                            'paged' => $paged,
                            )
                        );

                         if($our_news->have_posts() ) {?>
                            <h1>Nyheter!</h1>
                                <?php      
                                while($our_news->have_posts() ) {
                                    $our_news->the_post();
                                    ?>
                                    <div class="postContainer">
                                        <a href="<?php echo basename( get_permalink() )?>" ><h2><?php the_title(); ?></h2></a>
                                        <p class="date"><?php the_time(get_option('date_format')); ?> </p>
                                        <p><?php the_excerpt(); ?></p> 
                                        <a href="<?php echo basename( get_permalink() )?>" class="underline">Läs mer 
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.3536 4.35355C11.5488 4.15829 11.5488 3.84171 11.3536 3.64645L8.17157 0.464466C7.97631 0.269204 7.65973 0.269204 7.46447 0.464466C7.2692 0.659728 7.2692 0.976311 7.46447 1.17157L10.2929 4L7.46447 6.82843C7.2692 7.02369 7.2692 7.34027 7.46447 7.53553C7.65973 7.7308 7.97631 7.7308 8.17157 7.53553L11.3536 4.35355ZM0 4.5H11V3.5H0V4.5Z" fill="black"/>
                                            </svg>
                                        </a>
                                        
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                            <div class="readMore justifyRight">
                                <a href="<?php echo basename( "nyheter" )?>" class="underline">Läs mer 
                                        <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.3536 4.35355C11.5488 4.15829 11.5488 3.84171 11.3536 3.64645L8.17157 0.464466C7.97631 0.269204 7.65973 0.269204 7.46447 0.464466C7.2692 0.659728 7.2692 0.976311 7.46447 1.17157L10.2929 4L7.46447 6.82843C7.2692 7.02369 7.2692 7.34027 7.46447 7.53553C7.65973 7.7308 7.97631 7.7308 8.17157 7.53553L11.3536 4.35355ZM0 4.5H11V3.5H0V4.5Z" fill="black"/>
                                        </svg>
                                </a>
                            </div>
                </div>
            </div>
        </article>
	</section>
</main>


<?php get_footer(); ?>