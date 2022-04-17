<?php 
/**
 * Template Name: News
 */
    get_header();
?>

<main role="main" aria-label="Content">
	<section class="newsSection">
    <?php if (have_posts()) : ?>
			<?php while (have_posts()) : ?>
				<?php the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class();?>>
			<div class="pageContainer">     

                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $our_news = new WP_Query(
                            array(
                            'post_type' => 'news',
                            'category_name' => 'Våra nyheter',
                            'post_per_page' => 3,
                            'paged' => $paged,
                            )
                        );

                        if($our_news->have_posts() ) {?>
                            <div class="newsContainer">
                                <h1>   
                                    Våra nyheter
                                </h1> 
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
                                }?>
                                <div class="readMore">
                                    <div class="paginate">
                                    <?php 
                                        $total_pages = $our_news->max_num_pages;
                                        if ($total_pages > 1){
                                    
                                            $current_page = max(1, get_query_var('paged'));
                                    
                                            echo paginate_links(array(
                                                'base' => get_pagenum_link(1) . '%_%',
                                                'format' => '/page/%#%',
                                                'current' => $current_page,
                                                'total' => $total_pages,
                                                'prev_text'    => __('«'),
                                                'next_text'    => __('»'),
                                            ));
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }

                        $SDF_news = new WP_Query(
                            array(
                            'post_type' => 'news',
                            'category_name' => 'SDF nyheter',
                            )
                        );
                        if($SDF_news->have_posts() ) {?>
                            <div class="newsContainer">
                                <h1>   
                                    SDF nyheter
                                </h1> 
                                <?php      
                                while($SDF_news->have_posts() ) {
                                    $SDF_news->the_post();
                                    ?>
                                    <div class="postContainer">
                                        <a href="<?php echo basename( get_permalink() )?>"><h2><?php the_title(); ?></h2></a>
                                        <p class="date"><?php the_time(get_option('date_format')); ?> </p>
                                        <p><?php the_excerpt(); ?></p> 
                                        <a href="<?php echo basename( get_permalink() )?>" class="underline">Läs mer 
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.3536 4.35355C11.5488 4.15829 11.5488 3.84171 11.3536 3.64645L8.17157 0.464466C7.97631 0.269204 7.65973 0.269204 7.46447 0.464466C7.2692 0.659728 7.2692 0.976311 7.46447 1.17157L10.2929 4L7.46447 6.82843C7.2692 7.02369 7.2692 7.34027 7.46447 7.53553C7.65973 7.7308 7.97631 7.7308 8.17157 7.53553L11.3536 4.35355ZM0 4.5H11V3.5H0V4.5Z" fill="black"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <?php
                                }?>
                                 <div class="readMore">
                                    <div class="paginate">
                                    <?php 
                                        $total_pages = $SDF_news->max_num_pages;
                                        if ($total_pages > 1){
                                    
                                            $current_page = max(1, get_query_var('paged'));
                                    
                                            echo paginate_links(array(
                                                'base' => get_pagenum_link(1) . '%_%',
                                                'format' => '/page/%#%',
                                                'current' => $current_page,
                                                'total' => $total_pages,
                                                'prev_text'    => __('«'),
                                                'next_text'    => __('»'),
                                            ));
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                            
                            <?php
                        }

                        $DF_news = new WP_Query(
                            array(
                            'post_type' => 'news',
                            'category_name' => 'DF nyheter',
                            )
                        );
                        if($DF_news->have_posts() ) {?>
                            <div class="newsContainer">
                                <h1>   
                                    DF nyheter
                                </h1> 
                                <?php      
                                while($DF_news->have_posts() ) {
                                    $DF_news->the_post();
                                    ?>
                                    <div class="postContainer">
                                        <a href="<?php echo basename( get_permalink() )?>"><h2><?php the_title(); ?></h2></a>
                                        <p class="date"><?php the_time(get_option('date_format')); ?> </p>
                                        <p><?php the_excerpt(); ?></p> 
                                        <a href="<?php echo basename( get_permalink() )?>" class="underline">Läs mer 
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.3536 4.35355C11.5488 4.15829 11.5488 3.84171 11.3536 3.64645L8.17157 0.464466C7.97631 0.269204 7.65973 0.269204 7.46447 0.464466C7.2692 0.659728 7.2692 0.976311 7.46447 1.17157L10.2929 4L7.46447 6.82843C7.2692 7.02369 7.2692 7.34027 7.46447 7.53553C7.65973 7.7308 7.97631 7.7308 8.17157 7.53553L11.3536 4.35355ZM0 4.5H11V3.5H0V4.5Z" fill="black"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <?php
                                }?>
                                </div>
                                <div class="readMore">
                                    <div class="paginate">
                                    <?php 
                                        $total_pages = $DF_news->max_num_pages;
                                        if ($total_pages > 1){
                                    
                                            $current_page = max(1, get_query_var('paged'));
                                    
                                            echo paginate_links(array(
                                                'base' => get_pagenum_link(1) . '%_%',
                                                'format' => '/page/%#%',
                                                'current' => $current_page,
                                                'total' => $total_pages,
                                                'prev_text'    => __('«'),
                                                'next_text'    => __('»'),
                                            ));
                                        }
                                    ?>
                                    </div>
                                </div>
                            <?php
                        }

                        $RF_news = new WP_Query(
                            array(
                            'post_type' => 'news',
                            'category_name' => 'RF nyheter',
                            )
                        );
                        if($RF_news->have_posts() ) {?>
                            <div class="newsContainer">
                                <h1>   
                                    RF nyheter
                                </h1> 
                                <?php      
                                while($RF_news->have_posts() ) {
                                    $RF_news->the_post();
                                    ?>
                                    <div class="postContainer">
                                        <a href="<?php echo basename( get_permalink() )?>"><h2><?php the_title(); ?></h2></a>
                                        <p class="date"><?php the_time(get_option('date_format')); ?> </p>
                                        <p><?php the_excerpt(); ?></p> 
                                        <a href="<?php echo basename( get_permalink() )?>" class="underline">Läs mer 
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.3536 4.35355C11.5488 4.15829 11.5488 3.84171 11.3536 3.64645L8.17157 0.464466C7.97631 0.269204 7.65973 0.269204 7.46447 0.464466C7.2692 0.659728 7.2692 0.976311 7.46447 1.17157L10.2929 4L7.46447 6.82843C7.2692 7.02369 7.2692 7.34027 7.46447 7.53553C7.65973 7.7308 7.97631 7.7308 8.17157 7.53553L11.3536 4.35355ZM0 4.5H11V3.5H0V4.5Z" fill="black"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <?php
                                }?>
                                <div class="readMore">
                                    <div class="paginate">
                                    <?php 
                                        $total_pages = $RF_news->max_num_pages;
                                        if ($total_pages > 1){
                                    
                                            $current_page = max(1, get_query_var('paged'));
                                    
                                            echo paginate_links(array(
                                                'base' => get_pagenum_link(1) . '%_%',
                                                'format' => '/page/%#%',
                                                'current' => $current_page,
                                                'total' => $total_pages,
                                                'prev_text'    => __('«'),
                                                'next_text'    => __('»'),
                                            ));
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
			</div>
		</div>
        <?php endwhile; ?>
		<?php else : ?>
			<article>
				<h2><?php esc_html_e('Sorry, nothing to display.', 'html5blank'); ?></h2>
			</article>
		<?php endif; ?>
	</section>
</main>

<?php get_footer(); ?>
