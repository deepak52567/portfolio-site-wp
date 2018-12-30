		<?php
            $posts = get_posts(array(
                'posts_per_page'	=> -1,
                'post_type'			=> 'post'
            ));
            if( $posts ):
        ?>
            <?php foreach( $posts as $post ):
                setup_postdata( $post );
            ?>

                <div class="work">
                    <h2><?php the_title(); ?></h2>
                    <?php the_post_thumbnail('full'); ?>
                    <div class="author-con">
                        <span>By </span>
                        <span class="author-name"><?php echo get_the_author(); ?></span>
                        <span class="time"> on <?php the_time('F jS, Y'); ?></span>
                    </div>
                    <?php the_content('Read More'); ?>
                    <a href="<?php the_permalink(); ?>" class="action" type="_blank">
                        <span>Know More</span>
                    </a>
                </div>

            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>












        		<?php while ( have_posts() ) : the_post(); ?>
        			<div class="work">
        				<h2><?php the_title(); ?></h2>
        				<?php the_post_thumbnail('full'); ?>
        				<div class="author-con">
        					<span>By </span>
        					<span class="author-name"><?php echo get_the_author(); ?></span>
        					<span class="time"> on <?php the_time('F jS, Y'); ?></span>
        				</div>
        				<?php the_content('Read More'); ?>
        				<a href="<?php the_permalink(); ?>" class="action" type="_blank">
        					<span>Know More</span>
        				</a>
        			</div>
        		<?php endwhile; ?>