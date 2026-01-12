<?php
get_header();
?>
<section class="section">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="content-article">
                <h1><?php the_title(); ?></h1>
                <p class="post-meta"><?php echo esc_html(get_the_date()); ?></p>
                <div class="content-body">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</section>
<?php
get_footer();
?>
