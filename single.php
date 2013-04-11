<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="page-header">
		<h1>
			<?php the_title(); ?>
			
			<?php if ( is_singular( 'orbis_company' ) ) : ?>
			
				<small><?php _e( 'Company Details', 'orbis' ); ?></small>
			
			<?php endif; ?>
		</h1>
	</div>
	
	<div class="row">
		<div class="span8">	
			<?php do_action( 'orbis_before_main_content' ); ?>

			<div class="panel">
				<header>
					<h3><?php _e( 'Description', 'orbis' ); ?></h3>
				</header>
				
				<div class="content">
					<?php the_content(); ?>
				</div>
			</div>
	
			<?php do_action( 'orbis_after_main_content' ); ?>
	
			<?php comments_template( '', true ); ?>
		</div>
	
		<div class="span4">
			<?php do_action( 'orbis_before_side_content' ); ?>

			<div class="panel">
				<header>
					<h3><?php _e( 'Additional Information', 'orbis' ); ?></h3>
				</header>
	
				<div class="content">
					<dl>
						<dt><?php _e( 'ID', 'orbis' ); ?></dt>
						<dd><?php echo get_the_id(); ?></dd>

						<dt><?php _e( 'Posted on', 'orbis' ); ?></dt>
						<dd><?php echo get_the_date(); ?></dd>

						<dt><?php _e( 'Posted by', 'orbis' ); ?></dt>
						<dd><?php echo get_the_author(); ?></dd>

						<dt><?php _e( 'Actions', 'orbis' ); ?></dt>
						<dd><?php edit_post_link( __( 'Edit', 'orbis' ) ); ?></dd>
					</dl>
				</div>
			</div>
			
			<?php do_action( 'orbis_after_side_content' ); ?>
		</div>
	</div>

<?php endwhile; ?>

<?php get_footer(); ?>