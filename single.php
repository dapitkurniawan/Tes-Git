<?php global $meta_config; ?>
<?php
$meta_config['title']			= 'Download ' . esc_html( get_the_title() ) . ' MP3 | ' . get_bloginfo('name');
$meta_config['keywords'] 		= 'Download ' . esc_html( get_the_title() );
$meta_config['description'] 	= 'Download ' . esc_html( get_the_title() ) . ' MP3. Streaming ' . esc_html( get_the_title() ) . '. Video ' . esc_html( get_the_title() );
$meta_config['robots'] 			= 'index, follow';
?>
<?php get_header(); ?>
		<div class="main">
			<div class="row">
				<div class="col-md-8">
					<?php
					while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php the_title( '<h1 class="en-title">', '</h1>' ); ?>
							<div class="line mb-1"></div>
							<div class="mb-3">
								<em class="text-muted"><small>Dipublikasikan pada : <?php echo  date('n-j-Y', strtotime(get_the_date())); ?></small></em>
							</div>
						</header>
						<div class="entry-content">
							<?php
								the_content();
							?>
						</div>
					</article>
					<?php endwhile; ?>
				</div>
				<div class="col-md-4">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
<?php get_footer(); ?>