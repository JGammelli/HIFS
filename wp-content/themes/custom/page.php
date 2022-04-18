<?php get_header(); ?>

<main role="main" aria-label="Content">
	<section class="pageSection">
		<div id="post-<?php the_ID(); ?>" <?php post_class();?>>
			<div class="pageContainer">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>