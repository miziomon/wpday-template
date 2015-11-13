<article <?php post_class(""); ?>   >

    
    <header class="page-header">
        <h2><?php the_title(); ?></h2>
        
        <small><?php echo get_the_date("j F Y"); ?> / in <?php echo get_the_term_list( $post->ID, "category" ); ?></small>
        
        
    </header>
        <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>
    
    
</article>