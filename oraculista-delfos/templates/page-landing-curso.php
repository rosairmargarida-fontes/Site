<?php
/*
Template Name: Landing de Curso
*/
get_header();
?>
<section class="hero">
    <div class="container hero-inner">
        <div>
            <p class="eyebrow"><?php echo esc_html(od__('Curso online')); ?></p>
            <h1><?php echo esc_html(od__('Tarot do zero com metodo e pratica')); ?></h1>
            <p><?php echo esc_html(od__('Uma jornada completa para aprender leitura, simbolos e interpretacao.')); ?></p>
            <div class="hero-cta">
                <a class="btn btn-accent" href="#inscricao"><?php echo esc_html(od__('Quero me inscrever')); ?></a>
                <a class="btn btn-ghost" href="#conteudo"><?php echo esc_html(od__('Ver conteudo')); ?></a>
            </div>
        </div>
        <div class="hero-card">
            <h3><?php echo esc_html(od__('Inclui')); ?></h3>
            <ul>
                <li><?php echo esc_html(od__('Aulas gravadas')); ?></li>
                <li><?php echo esc_html(od__('Material de apoio')); ?></li>
                <li><?php echo esc_html(od__('Certificado')); ?></li>
            </ul>
        </div>
    </div>
</section>

<section id="conteudo" class="section">
    <div class="container">
        <h2><?php echo esc_html(od__('O que voce vai aprender')); ?></h2>
        <div class="grid-3">
            <div class="card"><h3><?php echo esc_html(od__('Fundamentos')); ?></h3><p><?php echo esc_html(od__('Historia, etica e preparacao.')); ?></p></div>
            <div class="card"><h3><?php echo esc_html(od__('Arcanos')); ?></h3><p><?php echo esc_html(od__('Interpretacao clara e pratica.')); ?></p></div>
            <div class="card"><h3><?php echo esc_html(od__('Tiragens')); ?></h3><p><?php echo esc_html(od__('Metodos e leituras guiadas.')); ?></p></div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2><?php echo esc_html(od__('Para quem e este curso')); ?></h2>
        <div class="card">
            <p><?php echo esc_html(od__('Para mulheres que buscam autoconhecimento e orientacao com base simbolica.')); ?></p>
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
