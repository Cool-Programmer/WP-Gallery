<?php if(is_single()): ?>
	<div class="w3-col m9 l9">
		<article class="post">
			<p class="meta">
				Created By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> on <?php the_time('F j, Y g:i'); ?>
			</p>
			
			<?php if(has_post_thumbnail()): ?>
				<div class="post-thumbnail">
					<?php 
						$attr = [
							'class' => 'w3-animate-right'
						];
					?>
					<?php echo get_the_post_thumbnail($id, 'large', $attr); ?>
				</div>
			<?php endif; ?>

			<div class="w3-row">
				<div class="w3-col l2">
					<br>
					<a href="<?php echo site_url(); ?>" class="w3-btn w3-red">Back</a>
				</div>

				<div class="w3-col l10">
					<h1><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>
				</div>
			</div>
		</article>
	</div>
<?php else: ?>
	<div class="w3-col m4 l4 pic">
		<?php if(has_post_thumbnail()): ?>
			<div class="post-thumbnail">
				<?php 
					$attr = [
						'class' => 'w3-animate-opacity w3-hover-opacity'
					];
				?>

				<a href="<?php the_permalink(); ?>">
					<?php echo get_the_post_thumbnail($id, 'large', $attr); ?>
				</a>
			</div>
		<?php endif; ?>
		<?php the_content(); ?>
	</div>
<?php endif; ?>