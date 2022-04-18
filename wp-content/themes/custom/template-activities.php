<?php 

    get_header();
?>

<main role="main" aria-label="Content">
	<section class="homeSection">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
            <div id="activities" class="activitiesSection">
                <div class="activitiesContainer">
                    <h2><?php the_title();?></h2>
                    <p><?php the_field('activities_info');?></p>
                    
                </div>
            </div>
        
            <div id="activitiesSchedule" class="scheduleInfoSection">
                <div class="scheduleInfoContainer">
                    <h2>Aktivitetsschema</h2>
                    <p><?php the_field('schedule_info');?></p>
                    
                </div>
            </div>

            <div id="hallSection" class="hallSection"> 
                <?php $image = get_field('image');?>
                <img src="<?php echo $image['sizes']['medium'];?>">
                <div class="hallContainer">
                    <h2>Idrottshallen</h2>
                    <p><?php the_field('sportshall_info');?></p>
                </div>
            </div>

            <div id="parkingSection" class="parkingSection">
                <div class="parkingContainer">
                    <h2>Parkering</h2>
                    <p><?php the_field('parking_info');?></p>
                    
                </div>
            </div>

            <div id="allActivitiesSection" class="allActivitiesSection">
                <div class="allActivitiesContainer">
                    <h2>Våra aktiviteter</h2>
                    <p><?php the_content();?></p>
                    
                </div>
            </div>
        </article>
	</section>
</main>


<?php get_footer(); ?>