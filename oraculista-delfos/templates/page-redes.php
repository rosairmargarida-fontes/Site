<?php
/*
Template Name: Redes
*/
get_header();
?>
<section class="section">
    <div class="container">
        <h1><?php echo esc_html(od__('Redes sociais')); ?></h1>
        <p><?php echo esc_html(od__('Acompanhe nossos conteudos e novidades.')); ?></p>
        <div class="grid-3">
            <div class="card"><h3>LinkedIn</h3><a class="link" href="#">linkedin.com</a></div>
            <div class="card"><h3>YouTube</h3><a class="link" href="#">youtube.com</a></div>
            <div class="card"><h3>Instagram</h3><a class="link" href="#">instagram.com</a></div>
            <div class="card"><h3>Facebook</h3><a class="link" href="#">facebook.com</a></div>
            <div class="card"><h3>Pinterest</h3><a class="link" href="#">pinterest.com</a></div>
            <div class="card"><h3>WhatsApp</h3><a class="link" href="#">wa.me</a></div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
