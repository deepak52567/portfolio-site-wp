<?php /* Template Name: portfolio */ ?>
<section class="potfolio" id="work">
	<div class="head">
		<h1>WORK</h1>
	</div>
	<div class="work-con">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="work">
				<h2><?php the_title(); ?></h2>
				<?php the_post_thumbnail('full'); ?>
				<div class="author-con">
					<span>By </span><?php the_author_posts_link(); ?><span class="time"> on <?php the_time('F jS, Y'); ?></span>
				</div>
				<?php the_content('Read More'); ?>
				<a href="<?php the_permalink(); ?>" class="action" type="_blank">
					<span>Know More</span>
				</a>
			</div>
		<?php endwhile; ?>
	</div>
</section>