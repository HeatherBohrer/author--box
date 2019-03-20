<!DOCTYPE html>
<html>
<head>
<title>Author Box</title>
</head>
<body>

<div id="author-wrap">
				<div class="media-figure">
					<?php echo get_avatar( get_the_author_meta('email'), '400' ); ?>
				</div>
				<div class="media-body">
					<h2><?php the_author_posts_link(); ?></h2>
					<p><?php the_author_meta('description'); ?></p>					
					<div class="author-icons">
						<a href="<?php the_author_meta('user_url'); ?>" class="author-website">
							<i class="fa fa-globe fa-2x"></i>
						</a>						
						<a href="<?php the_author_meta('user_email'); ?>" class="author-email">
							<i class="fa fa-envelope-square fa-2x"></i>
						</a>						
						<a href="<?php the_author_meta('facebook'); ?>" target="_blank" rel="nofollow" class="author-facebook">
							<i class="fa fa-facebook-official fa-2x"></i>
						</a>						
						<a href="<?php the_author_meta('twitter'); ?>" target="_blank" rel="nofollow" class="author-twitter">
							<i class="fa fa-twitter-square fa-2x"></i>
						</a>						
						<a href="<?php the_author_meta('linkedin'); ?>" target="_blank" rel="nofollow" class="author-linkedin">
							<i class="fa fa-linkedin-square fa-2x"></i>
						</a>							
						<a href="<?php the_author_meta('googleplus'); ?>" target="_blank" rel="nofollow" class="author-googleplus">
							<i class="fa fa-google-plus-square fa-2x"></i>
						</a>						
						<a href="<?php the_author_meta('pinterest'); ?>" target="_blank" rel="nofollow" class="author-pinterest">
							<i class="fa fa-pinterest-square fa-2x"></i>
						</a>
					</div>
				</div>
			</div>
