<?php get_header(); ?>

<main class="main">
    <div class="container">
        <section class="content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="post_item">
                    <h2 class="post_title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="post_meta">
                        <span>Опубликовано: <?php the_time('j F Y'); ?></span>
                        <span>Автор: <?php the_author(); ?></span>
                        <span>Категории: <?php the_category(', '); ?></span>
                    </div>
                    <div class="post_excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; else : ?>
                <p>Записи не найдены.</p>
            <?php endif; ?>
        </section>

        <aside class="sidebar">
            <section class="categories_widget">
                <h3>Категории</h3>
                <ul class="categories_list">
                    <?php
                    $categories = get_categories(array(
                        'orderby'    => 'name',
                        'order'      => 'ASC',
                        'hide_empty' => false,
                    ));
                    foreach ($categories as $cat) {
                        echo '<li><a href="' . esc_url(get_category_link($cat->term_id)) . '">' . esc_html($cat->name) . '</a></li>';
                    }
                    ?>
                </ul>
            </section>
        </aside>
    </div>
</main>

<?php get_footer(); ?>