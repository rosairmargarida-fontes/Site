<?php
get_header();
?>
<section class="section">
    <div class="container">
        <h1><?php echo esc_html(od__('Resultados da busca')); ?></h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="card post-card">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php echo esc_html(get_the_excerpt()); ?></p>
                <a class="link" href="<?php the_permalink(); ?>"><?php echo esc_html(od__('Ler artigo')); ?></a>
            </article>
        <?php endwhile; else : ?>
            <p><?php echo esc_html(od__('Nenhum resultado encontrado.')); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
?>
