<?php get_header(); ?>
<main class="container-fluid">
	<div class="row">
		<div id="content" role="main">
			<?php get_template_part('loops/single-post', get_post_format()); ?>
		</div><!-- /#content -->
		<?php get_sidebar(); ?>
	</div><!-- /.row -->
</main><!-- /.container -->
<?php get_footer(); ?>