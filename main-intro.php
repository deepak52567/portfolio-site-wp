<section class="top">
    <?php $main_top_page = get_field('cover_image'); ?>
	<div class="tagline-con">
		<h1>
			<span><?php echo $main_top_page['first_name']; ?></span>
			.<?php echo $main_top_page['last_name']; ?>
		</h1>
		<span class="desc">
            <?php echo $main_top_page['about_portfolio']; ?>
        </span>
		<a href="#about" class="link">
			<i class="fas fa-info"></i>
			<span>Info</span>
		</a>
	</div>
	<div class="art-con">
		<div class="img-con" style="background-image: url(<?php echo $main_top_page['main_profile']; ?>)">
		</div>
		<div class="texture-1"></div>
		<div class="texture-2"></div>
	</div>
</section>
<div class="texture-main"></div>
