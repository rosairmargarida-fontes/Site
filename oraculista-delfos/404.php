<?php
get_header();
?>
<section class="section">
    <div class="container">
        <h1><?php echo esc_html(od__('Pagina nao encontrada')); ?></h1>
        <p><?php echo esc_html(od__('A pagina que voce busca nao existe.')); ?></p>
        <a class="btn btn-primary" href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html(od__('Voltar para a home')); ?></a>
    </div>
</section>
<?php
get_footer();
?>
