<?php

get_header()
?>

<main role="main" aria-label="Content">
	<section class="pageSection">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : ?>
				<?php the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="pageContainer">
					<h1><?php the_title(); ?></h1>
						<p><?php the_content(); ?></p> 

				</div>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<article>
				<h2><?php esc_html_e('Sorry, nothing to display.', 'html5blank'); ?></h2>
			</article>
		<?php endif; ?>
	</section>
</main>

<?php get_footer(); ?>