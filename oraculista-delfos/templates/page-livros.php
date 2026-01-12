<?php
/*
Template Name: Livros
*/
get_header();
?>
<section class="section">
    <div class="container">
        <h1><?php echo esc_html(od__('Livros')); ?></h1>
        <p><?php echo esc_html(od__('Material de estudo para aprofundar o caminho no Tarot.')); ?></p>
        <div class="grid-2">
            <div class="card">
                <h3><?php echo esc_html(od__('Livro didatico')); ?></h3>
                <p><?php echo esc_html(od__('Versao PDF e impressa sob demanda.')); ?></p>
                <a class="btn btn-primary" href="#"><?php echo esc_html(od__('Comprar')); ?></a>
            </div>
            <div class="card">
                <h3><?php echo esc_html(od__('Livro para colorir')); ?></h3>
                <p><?php echo esc_html(od__('Arcanos para estudo e conexao emocional.')); ?></p>
                <a class="btn btn-primary" href="#"><?php echo esc_html(od__('Comprar')); ?></a>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
