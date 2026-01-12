<?php
/*
Template Name: Atendimentos
*/
get_header();
?>
<section class="section">
    <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
        <h1><?php echo esc_html(od__('Atendimentos e agenda')); ?></h1>
        <p><?php echo esc_html(od__('Agende uma conversa e receba orientacao personalizada.')); ?></p>
        <div class="card">
            <h3><?php echo esc_html(od__('Atendimentos individuais')); ?></h3>
            <p><?php echo esc_html(od__('Horarios e valores sob consulta.')); ?></p>
            <a class="btn btn-primary" href="#"><?php echo esc_html(od__('Falar no WhatsApp')); ?></a>
        </div>
    </div>
</section>
<?php
get_footer();
?>

