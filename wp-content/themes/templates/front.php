<?php
/*
Template Name: Front
*/
get_header(); ?>

			<div id="slider" class="row">
			<?php
			//Slider
			echo '<div class="slider clearfix">';
			if ( have_rows( 'slick_slides' ) ) :
				while ( have_rows( 'slick_slides' ) ) : the_row();
					$slide = get_sub_field('slide');
					echo "<img src=".$slide." />" ;
				endwhile;
			endif;
			echo '</div>';

			//Thumbnails
			echo '<div class="slider-nav-thumbnails">';
			if ( have_rows( 'slick_slides' ) ) :
				while ( have_rows( 'slick_slides' ) ) : the_row();
					echo '<div>';
					$thumbnail	= get_sub_field('thumbnail');
					$thumbnail_heading	= get_sub_field('thumbnail_heading');
					echo '<div style="background: url('.$thumbnail.')">' ;
					echo '<h3>'.$thumbnail_heading.'</h3>';
					echo '</div>';
					echo '</div>';
				endwhile;
			endif;
			echo '</div>';
			?>
			</div>


			<div class="row">
			<?php if( have_rows('staff_member') ): ?>
				<?php while( have_rows('staff_member') ): the_row(); ?>

						<?php
						$image = get_sub_field('image');
						echo '<img src='.$image.' />';
						?>

						<h2><?php the_sub_field('first_name'); ?> <?php the_sub_field('last_name'); ?></h2>
						<p><?php the_sub_field('expertise'); ?></p>
						<p><?php the_sub_field('affiliation'); ?></p>
						<p><?php the_sub_field('email'); ?></p>
						<p><?php the_sub_field('phone_number'); ?></p>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>



<div class="row">
	<div class="small-12 large-12 columns" role="main">

	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
</div>

<?php get_footer(); ?>
