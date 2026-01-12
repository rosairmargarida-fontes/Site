<?php
/*
Template Name: Merch
*/
get_header();
?>
<section class="section">
    <div class="container">
        <h1><?php echo esc_html(od__('Merch tematico')); ?></h1>
        <p><?php echo esc_html(od__('Camisetas, canecas e itens sob demanda com estampas escolhidas.')); ?></p>
        <div class="grid-3">
            <div class="card">
                <h3><?php echo esc_html(od__('Camisetas')); ?></h3>
                <p><?php echo esc_html(od__('Modelos e estampas personalizadas.')); ?></p>
                <a class="btn btn-primary" href="#"><?php echo esc_html(od__('Ver opcoes')); ?></a>
            </div>
            <div class="card">
                <h3><?php echo esc_html(od__('Canecas')); ?></h3>
                <p><?php echo esc_html(od__('Presentes simbolicos e afetivos.')); ?></p>
                <a class="btn btn-primary" href="#"><?php echo esc_html(od__('Ver opcoes')); ?></a>
            </div>
            <div class="card">
                <h3><?php echo esc_html(od__('Acessorios')); ?></h3>
                <p><?php echo esc_html(od__('Bones, posters e itens exclusivos.')); ?></p>
                <a class="btn btn-primary" href="#"><?php echo esc_html(od__('Ver opcoes')); ?></a>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
