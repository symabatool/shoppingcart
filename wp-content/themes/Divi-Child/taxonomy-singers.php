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
						<audio controls>
				<source src="<?php echo $audio?>">
			</audio>
                        <a href="<?php the_permalink()?>" class="read-more">Read More</a>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
=======
<?php
get_header();
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
function callback_recent_audio(){
	$Audio= array(
		"post_type" => "samsmusic",	
		"order_by" => "id"
		"order" => "DESC"
		"post_per_page" => "2"
		query = new wp_query($Audio);
		$html = "";
		if ($query-> have post()
	        )://:={(end if; //end if=)

			}
			While($ query-> have post()):
			$ html .="<h2>".the title()
			endif ;// endif=}
			return $html

		
		
	)
}
>>>>>>> cb01928402f18947d5a04737c085598db02299d3
