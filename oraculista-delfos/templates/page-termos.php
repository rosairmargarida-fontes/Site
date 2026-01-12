<?php
/*
Template Name: Termos de Uso
*/
get_header();
?>
<section class="section">
    <div class="container">
        <h1><?php echo esc_html(od__('Termos de Uso')); ?></h1>
        <div class="content-body">
            <p><?php echo esc_html(od__('Ao usar este site, voce concorda com estes termos.')); ?></p>
            <h2><?php echo esc_html(od__('Uso do conteudo')); ?></h2>
            <p><?php echo esc_html(od__('Todo conteudo e protegido e nao pode ser reproduzido sem autorizacao.')); ?></p>
            <h2><?php echo esc_html(od__('Cursos e pagamentos')); ?></h2>
            <p><?php echo esc_html(od__('Os cursos sao vendidos pela Hotmart, que processa pagamentos.')); ?></p>
            <h2><?php echo esc_html(od__('Responsabilidade')); ?></h2>
            <p><?php echo esc_html(od__('Os conteudos sao informativos e nao substituem apoio profissional.')); ?></p>
        </div>
    </div>
</section>
<?php
get_footer();
?>
