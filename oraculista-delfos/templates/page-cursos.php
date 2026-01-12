<?php
/*
Template Name: Cursos
*/
get_header();
?>
<section class="section">
    <div class="container">
        <h1><?php echo esc_html(od__('Cursos e formacoes')); ?></h1>
        <div class="courses-intro">
            <p><?php echo esc_html(od__('O Oraculista de Delfos disponibiliza na plataforma Hotmart conteudos que abrangem Tarot, Numerologia e Mapa Astral, sempre com abordagem consciente, didatica e voltada ao autoconhecimento.')); ?></p>
            <p><?php echo esc_html(od__('Escolha o caminho que mais ressoa com voce e aprofunde-se no estudo dos simbolos, ciclos e linguagens que ajudam a compreender melhor a si mesmo e a vida.')); ?></p>
            <p><?php echo esc_html(od__('Clique em "Saber Mais" e conheca a proposta completa, o conteudo programatico e realize sua inscricao com seguranca.')); ?></p>
        </div>
        <div class="filters">
            <button class="filter" type="button"><?php echo esc_html(od__('Tarot')); ?></button>
            <button class="filter" type="button"><?php echo esc_html(od__('Numerologia')); ?></button>
            <button class="filter" type="button"><?php echo esc_html(od__('Astrologia')); ?></button>
            <button class="filter" type="button"><?php echo esc_html(od__('Autoconhecimento')); ?></button>
        </div>
        <div class="grid-3">
            <article class="card course-card">
                <h3><?php echo esc_html(od__('Tarot do zero')); ?></h3>
                <p><?php echo esc_html(od__('Bases, arcanos e pratica orientada.')); ?></p>
                <a class="btn btn-primary" href="<?php echo esc_url(home_url('/curso/')); ?>"><?php echo esc_html(od__('Saber Mais')); ?></a>
            </article>
            <article class="card course-card">
                <h3><?php echo esc_html(od__('Numerologia aplicada')); ?></h3>
                <p><?php echo esc_html(od__('Leituras e ciclos para autoconhecimento.')); ?></p>
                <a class="btn btn-primary" href="<?php echo esc_url(home_url('/curso/')); ?>"><?php echo esc_html(od__('Saber Mais')); ?></a>
            </article>
            <article class="card course-card">
                <h3><?php echo esc_html(od__('Astrologia essencial')); ?></h3>
                <p><?php echo esc_html(od__('Mapa astral com foco pratico.')); ?></p>
                <a class="btn btn-primary" href="<?php echo esc_url(home_url('/curso/')); ?>"><?php echo esc_html(od__('Saber Mais')); ?></a>
            </article>
        </div>
    </div>
</section>
<?php
get_footer();
?>
