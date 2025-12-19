<?php get_header(); ?>
<main class="main_post">
    <section class="post_item">
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="post_item_content">
                <h1 class="page_item_title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <div class="post_meta">
                    <p>Опубликовано <?php the_time('F Js, Y'); ?></p>
                    <p>Автор <?php the_author(); ?></p>  
                </div>            
            </div>
        <?php endwhile; endif; ?>   
    </section>
</main>

<?php get_footer(); ?>
