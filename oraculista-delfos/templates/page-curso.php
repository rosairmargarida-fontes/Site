<?php
/*
Template Name: Curso
*/
get_header();
?>
<section class="section">
    <div class="container">
        <h1><?php echo esc_html(od__('Curso')); ?></h1>
        <p><?php echo esc_html(od__('Aprenda Tarot do zero com metodo e pratica.')); ?></p>
        <div class="grid-2">
            <div class="card">
                <h3><?php echo esc_html(od__('Para quem e')); ?></h3>
                <p><?php echo esc_html(od__('Para quem busca autoconhecimento e orientacao.')); ?></p>
            </div>
            <div class="card">
                <h3><?php echo esc_html(od__('O que voce vai aprender')); ?></h3>
                <p><?php echo esc_html(od__('Arcanos, tiragens e interpretacao.')); ?></p>
            </div>
        </div>
        <div class="card">
            <h3><?php echo esc_html(od__('Modulos')); ?></h3>
            <ol class="list">
                <li><?php echo esc_html(od__('Bases e fundamentos')); ?></li>
                <li><?php echo esc_html(od__('Arcanos maiores')); ?></li>
                <li><?php echo esc_html(od__('Arcanos menores')); ?></li>
                <li><?php echo esc_html(od__('Tiragens e pratica')); ?></li>
            </ol>
            <a class="btn btn-accent" href="#"><?php echo esc_html(od__('Acessar Hotmart')); ?></a>
        </div>
    </div>
</section>
<?php
get_footer();
?>
