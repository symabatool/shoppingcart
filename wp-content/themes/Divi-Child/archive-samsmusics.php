<?php get_header();?>
<div id="main-content" class="section-samsmusic-list">
	<div class="container">
		<div id="content-area" class="clearfix">
        <?php
            if(have_posts()) :
                while(have_posts()) : the_post(); ?> 
                    <div class="two-col">
                       <h2 class="title">
                        <?php the_title(); ?>
                       </h2>
                        <p class="content">
                        <?php the_content(); ?>
                        </p>
                        <a href="<?php the_permalink()?>">Read More</a>
                    </div>
            <?php
                endwhile; 
            endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>