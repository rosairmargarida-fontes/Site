<?php
/*
Template Name: Produto
*/
get_header();
?>
<section class="section">
    <div class="container">
        <h1><?php echo esc_html(od__('Produto')); ?></h1>
        <p><?php echo esc_html(od__('Pagina modelo para apresentar detalhes como cores, tamanhos e opcoes de compra.')); ?></p>
        <div class="card">
            <h3><?php echo esc_html(od__('Detalhes do produto')); ?></h3>
            <p><?php echo esc_html(od__('Inclua aqui a descricao completa, imagens e opcoes de variacao.')); ?></p>
            <a class="btn btn-primary" href="#contato"><?php echo esc_html(od__('Falar no WhatsApp')); ?></a>
        </div>
    </div>
</section>
<?php
get_footer();
?>
