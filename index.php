<?php get_header(); ?>

<div class="row conteudo">
	<div class="medium-8 columns artigos">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<section class="artigo">
					<h3><?php the_category(); ?></h3>
					<a href="<?php the_Permalink(); ?>"><?php the_post_thumbnail('maior-thumb'); ?></a>
					<hgroup>
					<a href="<?php the_Permalink(); ?>"><h1><?php the_title(); ?></h1></a>
					<h4>Publicado por <a href="<?php the_author(); ?>"><?php the_author(); ?></a> em <?php the_time('j \d\e F \d\e Y'); ?></h4>
					<h2><a href="<?php the_Permalink(); ?>"><strong><?php the_content('Descubra mais >>'); ?></strong></a></h2>
					</hgroup>
            </section><!--artigo-->
		<?php endwhile?>
			<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>
		<?php else: ?>
		<?php endif; ?>
	</div><!--artigos-->
	<div class="medium-4 columns">
		<?php get_sidebar(''); ?>
	</div>
</div><!--conteudo-->

<?php get_footer(); ?>