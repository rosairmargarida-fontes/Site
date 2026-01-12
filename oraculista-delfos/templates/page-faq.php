<?php
/*
Template Name: FAQ
*/
get_header();
?>
<section class="section">
    <div class="container">
        <h1><?php echo esc_html(od__('Perguntas frequentes')); ?></h1>
        <div class="grid-2">
            <div class="card">
                <h3><?php echo esc_html(od__('Preciso ter experiencia para comecar?')); ?></h3>
                <p><?php echo esc_html(od__('Nao. Os cursos partem do basico e conduzem ate a pratica.')); ?></p>
            </div>
            <div class="card">
                <h3><?php echo esc_html(od__('Posso estudar no meu ritmo?')); ?></h3>
                <p><?php echo esc_html(od__('Sim. O acesso e online e voce organiza seus horarios.')); ?></p>
            </div>
            <div class="card">
                <h3><?php echo esc_html(od__('Como acesso os cursos?')); ?></h3>
                <p><?php echo esc_html(od__('A compra e feita na Hotmart e o acesso chega por e-mail.')); ?></p>
            </div>
            <div class="card">
                <h3><?php echo esc_html(od__('Existe suporte?')); ?></h3>
                <p><?php echo esc_html(od__('Sim. Voce pode falar conosco pelo WhatsApp.')); ?></p>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
