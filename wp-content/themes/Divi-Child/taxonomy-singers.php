<<<<<<< HEAD
<?php get_header();?>
<div id="main-content" class="section-samsmusic-list">
	<div class="container">
		<div id="content-area" class="clearfix">
        <?php
            if(have_posts()) :?>
            <div class="row">
                <?php while(have_posts()) : the_post(); ?> 
                    <div class="two-col">
                       <h2 class="title">
                        <?php the_title(); ?>
                       </h2>
                        <div class="content">
                        <?php the_excerpt(); ?>
                        </div>
						<div class="audio"><audio controls>
				<source src="<?php echo $audio?>">
			    </audio>
			</div>
			<div class="content">
                        <?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink()?>" class="read-more">Read More</a>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<?php
get_header( ) ;
?>
<div id="main-content" class="section-samsmusic-list">
	<div class="container">
		<div id="content-area" class="clearfix">
		<?php
		while ( have_posts() ): the_post(); 
		$audio = get_field("upload_audio");
		$singerName = get_field("singer_name");
		$singerBio = get_field("singer_bio");
		$singerpic = get_field("singer_image");
		?>

		<article id="post-<?php the_ID(); ?>">
		<h2 class="title">
                        <?php the_title(); ?>
                       </h2>
			<div class="entry-content">
			<?php
				the_content();
			?>
			<audio controls>
				<source src="<?php echo $audio?>">
			</audio>
			</div> <!-- .entry-content -->
			<div class="singer-details">
				<img src="<?php echo $singerpic; ?>" alt="Singer Image">
				<h3 class="singer-name">
					<?php echo $singerName; ?>
				</h3>
				<p class="singer-bio">
					<?php echo $singerBio; ?>
				</p>
			</div>
		</article> <!-- .et_pb_post -->

		<?php endwhile; ?>
		</div>
	</div>
</div>

<?php
get_footer();
?>
