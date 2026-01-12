<?php
/*
Template Name: Politica de Privacidade
*/
get_header();
?>
<section class="section">
    <div class="container">
        <h1><?php echo esc_html(od__('Politica de Privacidade')); ?></h1>
        <div class="content-body">
            <p><?php echo esc_html(od__('Esta pagina descreve como coletamos, usamos e protegemos seus dados.')); ?></p>
            <h2><?php echo esc_html(od__('Dados coletados')); ?></h2>
            <p><?php echo esc_html(od__('Coletamos dados enviados por voce em formularios e dados de navegacao.')); ?></p>
            <h2><?php echo esc_html(od__('Finalidade')); ?></h2>
            <p><?php echo esc_html(od__('Usamos dados para responder contatos, melhorar o site e enviar comunicacoes.')); ?></p>
            <h2><?php echo esc_html(od__('Seus direitos')); ?></h2>
            <p><?php echo esc_html(od__('Voce pode solicitar acesso, correcao ou exclusao dos seus dados.')); ?></p>
        </div>
    </div>
</section>
<?php
get_footer();
?>
