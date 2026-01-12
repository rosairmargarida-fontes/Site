<?php
get_header();
?>
<section class="section">
    <div class="container">
        <h1><?php echo esc_html(od__('Artigos e reflexoes')); ?></h1>
        <div class="content-with-sidebar">
            <div class="content-list">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="card post-card">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php echo esc_html(get_the_excerpt()); ?></p>
                        <a class="link" href="<?php the_permalink(); ?>"><?php echo esc_html(od__('Ler artigo')); ?></a>
                    </article>
                <?php endwhile; else : ?>
                    <p><?php echo esc_html(od__('Nenhum artigo encontrado.')); ?></p>
                <?php endif; ?>
            </div>
            <aside class="sidebar">
                <?php if (is_active_sidebar('od-sidebar')) : ?>
                    <?php dynamic_sidebar('od-sidebar'); ?>
                <?php else : ?>
                    <div class="widget">
                        <h3 class="widget-title"><?php echo esc_html(od__('Categorias')); ?></h3>
                        <p><?php echo esc_html(od__('Adicione widgets aqui.')); ?></p>
                    </div>
                <?php endif; ?>
            </aside>
        </div>
    </div>
</section>
<?php
get_footer();
?>
