<?php
/*
Template Name: Sobre
*/
get_header();
?>
<section class="section about">
    <div class="container">
        <h1><?php echo esc_html(od__('Quem somos')); ?></h1>
        <div class="about-inner">
            <div>
                <figure>
                    <img src="<?php echo esc_url('https://oraculistadedelfos.com.br/wp-content/uploads/2026/01/c2f2c19b-8820-422f-9359-62aea443b8d1.png'); ?>" alt="<?php echo esc_attr(od__('Professora Eliane Melissa')); ?>">
                </figure>
                <div class="about-panel">
                    <h3><?php echo esc_html(od__('Formação profissional')); ?></h3>
                    <ul>
                        <li><?php echo esc_html(od__('Formação em Tarot Simbólico e Arcanos Maiores')); ?></li>
                        <li><?php echo esc_html(od__('Curso de Astrologia Psicológica e Arquétipos')); ?></li>
                        <li><?php echo esc_html(od__('Estudos Avançados em Simbolismo, Mitologia e Linguagem Arquetípica')); ?></li>
                    </ul>
                </div>
            </div>
            <div>
                <p><?php echo esc_html(od__('O Oraculista de Delfos nasce como um espaço de estudo, reflexão e aprofundamento nas ciências esotéricas. Nosso propósito é transformar saberes simbólicos milenares em conhecimento acessível, ético e aplicável ao autoconhecimento, ao desenvolvimento pessoal e à leitura consciente dos ciclos da vida.')); ?></p>
                <p><?php echo esc_html(od__('Atuamos na produção de conteúdos educativos, cursos online, livros didáticos e materiais temáticos que envolvem Tarot, Astrologia, Mapa Astral e outras linguagens simbólicas.')); ?></p>
                <p><?php echo esc_html(od__('A curadoria de conteúdo é conduzida pela professora Eliane Melissa, estudiosa das ciências esotéricas há mais de 10 anos, com formação acadêmica pela Universidade de São Paulo (USP) e trajetória dedicada à pesquisa, ensino e aplicação prática do simbolismo como ferramenta de consciência e leitura da experiência humana.')); ?></p>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
