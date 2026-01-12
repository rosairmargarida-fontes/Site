<?php
/*
Template Name: Contato
*/
get_header();
?>
<section id="contato" class="section">
    <div class="container">
        <h1><?php echo esc_html(od__('Contato')); ?></h1>
        <p><?php echo esc_html(od__('Fale com a gente pelo WhatsApp ou preencha o formulario.')); ?></p>
        <div class="grid-2">
            <div class="card">
                <h3><?php echo esc_html(od__('WhatsApp')); ?></h3>
                <p><?php echo esc_html(od__('Clique para conversar com a equipe.')); ?></p>
                <a class="btn btn-accent" href="#"><?php echo esc_html(od__('Abrir WhatsApp')); ?></a>
            </div>
            <div class="card">
                <h3><?php echo esc_html(od__('Formulario')); ?></h3>
                <p><?php echo esc_html(od__('Use um plugin de formulario para receber mensagens.')); ?></p>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
