<?php
/**
 * Index.
 *
 */
get_header();
?>


<div class="container">

    <div class="row ">
        <div class="col-sm-8">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('parts/listing', get_post_type() ); ?>
                <?php endwhile; ?>

            <?php else : ?>
            <?php endif; ?>

        </div>

        <div class="col-sm-4 sidebar">
            <?php get_sidebar(); ?>
        </div>


    </div>

</div>

<?php get_footer(); ?>
