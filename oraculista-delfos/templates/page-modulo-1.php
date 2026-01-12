<?php
/*
Template Name: Modulo 1
*/
get_header();
?>
<section class="hero">
    <div class="container hero-inner">
        <div>
            <p class="eyebrow"><?php echo esc_html(od__('Modulo 1')); ?></p>
            <h1><?php echo esc_html(od__('O Chamado do Louco')); ?></h1>
            <p><?php echo esc_html(od__('Os 22 Arcanos Maiores e as grandes licoes da vida.')); ?></p>
            <div class="hero-cta">
                <a class="btn btn-accent" href="#inscricao"><?php echo esc_html(od__('Quero me inscrever')); ?></a>
                <a class="btn btn-ghost" href="#conteudo"><?php echo esc_html(od__('Ver conteudo')); ?></a>
            </div>
        </div>
        <div class="hero-card">
            <h3><?php echo esc_html(od__('Promessa')); ?></h3>
            <p><?php echo esc_html(od__('Descubra em que fase da vida voce esta e qual aprendizado esse momento pede.')); ?></p>
            <p><strong><?php echo esc_html(od__('Preco sugerido: R$ 67')); ?></strong></p>
        </div>
    </div>
</section>

<section id="conteudo" class="section">
    <div class="container">
        <h2><?php echo esc_html(od__('O que voce vai aprender')); ?></h2>
        <div class="grid-3">
            <div class="card"><h3><?php echo esc_html(od__('Arcanos Maiores')); ?></h3><p><?php echo esc_html(od__('Significados e aplicacao real.')); ?></p></div>
            <div class="card"><h3><?php echo esc_html(od__('Ciclos de vida')); ?></h3><p><?php echo esc_html(od__('Momentos, crises e viradas.')); ?></p></div>
            <div class="card"><h3><?php echo esc_html(od__('Leitura consciente')); ?></h3><p><?php echo esc_html(od__('Sem fatalismo e com clareza.')); ?></p></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2><?php echo esc_html(od__('Para quem e')); ?></h2>
        <div class="card">
            <p><?php echo esc_html(od__('Para quem quer iniciar no Tarot com metodo, sem misticismo exagerado e com foco em autoconhecimento.')); ?></p>
        </div>
    </div>
</section>

<section id="inscricao" class="section cta">
    <div class="container cta-inner">
        <div>
            <h2><?php echo esc_html(od__('Inscreva-se na Hotmart')); ?></h2>
            <p><?php echo esc_html(od__('Acesso imediato e garantia conforme a plataforma.')); ?></p>
        </div>
        <div class="cta-actions">
            <a class="btn btn-accent" href="#"><?php echo esc_html(od__('Ir para Hotmart')); ?></a>
            <a class="btn btn-ghost" href="#contato"><?php echo esc_html(od__('Falar no WhatsApp')); ?></a>
        </div>
    </div>
</section>
<?php
get_footer();
?>
