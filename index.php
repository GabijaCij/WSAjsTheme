<!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="myapp">
<head>
	<title>Angular Experiments (1)</title>
	<?php get_header(); ?>
</head>

<body>
	<div class="row">

		<div class="col-sm-8 blog-main">

			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );

			endwhile; endif;
			?>

		</div> <!-- /.blog-main -->


	</div> <!-- /.row -->


	
	<div ng-controller="mycontroller">
 <article ng-repeat="post in posts" ng-bind-html-unsafe="post.excerpt">
 <h3>{{ post.title }}</h3>
 <p>{{ post.excerpt }}</p>
 </article>
</div>

<?php get_footer(); ?>
</body>
</html>