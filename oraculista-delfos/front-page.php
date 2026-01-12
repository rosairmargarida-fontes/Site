<?php
get_header();
?>
<section class="hero">
    <div class="container hero-inner">
        <div>
            <p class="eyebrow"><?php echo esc_html(od__('Escola de simbolismo e autoconhecimento')); ?></p>
            <h1><?php echo esc_html(od__('Tarot e autoconhecimento para decisoes mais claras.')); ?></h1>
            <p><?php echo esc_html(od__('Cursos e conteudo para quem busca se conhecer e evoluir com metodo.')); ?></p>
            <div class="hero-cta">
                <a class="btn btn-primary" href="#cursos"><?php echo esc_html(od__('Ver cursos')); ?></a>
                <a class="btn btn-ghost" href="#contato"><?php echo esc_html(od__('Falar no WhatsApp')); ?></a>
            </div>
        </div>
        <div class="hero-card">
            <h3><?php echo esc_html(od__('Curso em destaque')); ?></h3>
            <p><?php echo esc_html(od__('Aprenda Tarot do zero com metodo e pratica.')); ?></p>
            <a class="btn btn-accent" href="#cursos"><?php echo esc_html(od__('Acessar Hotmart')); ?></a>
        </div>
    </div>
</section>

<section class="section benefits">
    <div class="container">
        <div class="section-header">
            <h2><?php echo esc_html(od__('Por que estudar com a gente?')); ?></h2>
        </div>
        <div class="grid-3">
            <div class="card">
                <h3><?php echo esc_html(od__('Leituras profundas e praticas')); ?></h3>
                <p><?php echo esc_html(od__('Teoria e pratica para orientar escolhas reais.')); ?></p>
            </div>
            <div class="card">
                <h3><?php echo esc_html(od__('Metodo claro e acessivel')); ?></h3>
                <p><?php echo esc_html(od__('Passo a passo com estrutura e exemplos.')); ?></p>
            </div>
            <div class="card">
                <h3><?php echo esc_html(od__('Acompanhamento e suporte')); ?></h3>
                <p><?php echo esc_html(od__('Apoio e direcao ao longo da jornada.')); ?></p>
            </div>
        </div>
    </div>
</section>

<section id="cursos" class="section">
    <div class="container">
        <div class="section-header">
            <h2><?php echo esc_html(od__('Cursos em destaque')); ?></h2>
            <a class="link" href="#"><?php echo esc_html(od__('Ver todos')); ?></a>
        </div>
        <div class="grid-3">
            <article class="card course-card">
                <h3><?php echo esc_html(od__('Tarot do zero')); ?></h3>
                <p><?php echo esc_html(od__('Bases, arcanos e pratica orientada.')); ?></p>
                <a class="btn btn-primary" href="#"><?php echo esc_html(od__('Acessar Hotmart')); ?></a>
            </article>
            <article class="card course-card">
                <h3><?php echo esc_html(od__('Numerologia aplicada')); ?></h3>
                <p><?php echo esc_html(od__('Leituras e ciclos para autoconhecimento.')); ?></p>
                <a class="btn btn-primary" href="#"><?php echo esc_html(od__('Acessar Hotmart')); ?></a>
            </article>
            <article class="card course-card">
                <h3><?php echo esc_html(od__('Astrologia essencial')); ?></h3>
                <p><?php echo esc_html(od__('Mapa astral com foco pratico.')); ?></p>
                <a class="btn btn-primary" href="#"><?php echo esc_html(od__('Acessar Hotmart')); ?></a>
            </article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-header">
            <h2><?php echo esc_html(od__('Loja e produtos')); ?></h2>
            <a class="link" href="#"><?php echo esc_html(od__('Ver loja')); ?></a>
        </div>
        <div class="grid-3">
            <article class="card course-card">
                <h3><?php echo esc_html(od__('Livro didatico')); ?></h3>
                <p><?php echo esc_html(od__('Versao PDF e impressa para aprofundar o curso.')); ?></p>
                <a class="btn btn-primary" href="#"><?php echo esc_html(od__('Comprar')); ?></a>
            </article>
            <article class="card course-card">
                <h3><?php echo esc_html(od__('Livro para colorir')); ?></h3>
                <p><?php echo esc_html(od__('Arcanos para estudo e conexao emocional.')); ?></p>
                <a class="btn btn-primary" href="#"><?php echo esc_html(od__('Comprar')); ?></a>
            </article>
            <article class="card course-card">
                <h3><?php echo esc_html(od__('Merch tematico')); ?></h3>
                <p><?php echo esc_html(od__('Camisetas, canecas e itens sob demanda.')); ?></p>
                <a class="btn btn-primary" href="#"><?php echo esc_html(od__('Ver produtos')); ?></a>
            </article>
        </div>
    </div>
</section>

<section class="section cta">
    <div class="container cta-inner">
        <div>
            <h2><?php echo esc_html(od__('Modulo 1: O Chamado do Louco')); ?></h2>
            <p><?php echo esc_html(od__('Descubra em que fase da vida voce esta e qual aprendizado esse momento pede.')); ?></p>
        </div>
        <div class="cta-actions">
            <a class="btn btn-accent" href="#"><?php echo esc_html(od__('Ir para Hotmart')); ?></a>
            <a class="btn btn-ghost" href="#"><?php echo esc_html(od__('Ver detalhes')); ?></a>
        </div>
    </div>
</section>

<section class="section about">
    <div class="container about-inner">
        <div>
            <h2><?php echo esc_html(od__('Quem somos')); ?></h2>
            <p><?php echo esc_html(od__('Somos uma escola dedicada ao estudo do simbolismo e do autoconhecimento, com foco em Tarot, Numerologia e Astrologia.')); ?></p>
            <a class="btn btn-ghost" href="#"><?php echo esc_html(od__('Conhecer a equipe')); ?></a>
        </div>
        <div class="about-panel">
            <h3><?php echo esc_html(od__('Especializacoes')); ?></h3>
            <ul>
                <li><?php echo esc_html(od__('Formacao em Tarot e oraculos')); ?></li>
                <li><?php echo esc_html(od__('Numerologia cabalistica e pitagorica')); ?></li>
                <li><?php echo esc_html(od__('Astrologia aplicada ao dia a dia')); ?></li>
            </ul>
        </div>
    </div>
</section>

<section class="section testimonials">
    <div class="container">
        <div class="section-header">
            <h2><?php echo esc_html(od__('Depoimentos')); ?></h2>
        </div>
        <div class="grid-2">
            <div class="card">
                <p><?php echo esc_html(od__('Em breve novos depoimentos.')); ?></p>
            </div>
            <div class="card">
                <p><?php echo esc_html(od__('Em breve novos depoimentos.')); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="section blog">
    <div class="container">
        <div class="section-header">
            <h2><?php echo esc_html(od__('Artigos e reflexoes')); ?></h2>
            <a class="link" href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"><?php echo esc_html(od__('Ver blog')); ?></a>
        </div>
        <div class="grid-3">
            <?php
            $recent_posts = new WP_Query(array('posts_per_page' => 3));
            if ($recent_posts->have_posts()) :
                while ($recent_posts->have_posts()) : $recent_posts->the_post();
            ?>
                <article class="card post-card">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php echo esc_html(get_the_excerpt()); ?></p>
                    <a class="link" href="<?php the_permalink(); ?>"><?php echo esc_html(od__('Ler artigo')); ?></a>
                </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <article class="card post-card">
                    <h3><?php echo esc_html(od__('Seu primeiro artigo')); ?></h3>
                    <p><?php echo esc_html(od__('Publique conteudo para criar autoridade e atrair novos alunos.')); ?></p>
                    <a class="link" href="#"><?php echo esc_html(od__('Ver blog')); ?></a>
                </article>
            <?php endif; ?>
        </div>
    </div>
</section>

<section id="contato" class="section cta">
    <div class="container cta-inner">
        <div>
            <h2><?php echo esc_html(od__('Pronta para começar?')); ?></h2>
            <p><?php echo esc_html(od__('Garanta sua vaga na Hotmart ou fale com a equipe.')); ?></p>
        </div>
        <div class="cta-actions">
            <a class="btn btn-accent" href="#"><?php echo esc_html(od__('Acessar Hotmart')); ?></a>
            <a class="btn btn-ghost" href="#"><?php echo esc_html(od__('Falar no WhatsApp')); ?></a>
        </div>
    </div>
</section>
<?php
get_footer();
?>
