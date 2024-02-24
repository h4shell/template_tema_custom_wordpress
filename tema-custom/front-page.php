<?php get_header(); ?>

<?php showNavbar(); ?>

<div id="content" >
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
