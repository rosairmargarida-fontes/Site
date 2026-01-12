<?php
/*
Template Name: Loja
*/
get_header();
?>
<section class="section">
    <div class="container">
        <h1><?php echo esc_html(od__('Loja')); ?></h1>
        <p class="shop-intro"><?php echo esc_html(od__('Esses produtos combinam com voce e com a sua jornada.')); ?></p>
        <nav class="shop-menu" aria-label="<?php echo esc_attr(od__('Tipos de produtos')); ?>">
            <a class="shop-menu-link" href="#camisetas"><?php echo esc_html(od__('Camisetas')); ?></a>
            <a class="shop-menu-link" href="#canecas"><?php echo esc_html(od__('Canecas')); ?></a>
            <a class="shop-menu-link" href="#bones"><?php echo esc_html(od__('Bones')); ?></a>
            <a class="shop-menu-link" href="#poster"><?php echo esc_html(od__('Poster')); ?></a>
        </nav>
        <div class="shop-section" id="camisetas">
            <h2><?php echo esc_html(od__('Camisetas')); ?></h2>
            <div class="shop-grid">
                <article class="card shop-card">
                    <a href="<?php echo esc_url(home_url('/produto/')); ?>" class="shop-image">
                        <img src="<?php echo esc_url('https://oraculistadedelfos.com.br/wp-content/uploads/2026/01/camiseta-exemplo.jpg'); ?>" alt="<?php echo esc_attr(od__('Camiseta Tarot')) ?>">
                    </a>
                    <h3><a href="<?php echo esc_url(home_url('/produto/')); ?>"><?php echo esc_html(od__('Camiseta Tarot')); ?></a></h3>
                    <p class="shop-desc"><?php echo esc_html(od__('Algodao premium com estampa simbolica.')); ?></p>
                    <p class="shop-price"><?php echo esc_html(od__('R$ 89,90')); ?></p>
                    <a class="btn btn-primary" href="<?php echo esc_url(home_url('/produto/')); ?>"><?php echo esc_html(od__('Ver detalhes')); ?></a>
                </article>
                <article class="card shop-card">
                    <a href="<?php echo esc_url(home_url('/produto/')); ?>" class="shop-image">
                        <img src="<?php echo esc_url('https://oraculistadedelfos.com.br/wp-content/uploads/2026/01/camiseta-exemplo-2.jpg'); ?>" alt="<?php echo esc_attr(od__('Camiseta Numerologia')) ?>">
                    </a>
                    <h3><a href="<?php echo esc_url(home_url('/produto/')); ?>"><?php echo esc_html(od__('Camiseta Numerologia')); ?></a></h3>
                    <p class="shop-desc"><?php echo esc_html(od__('Modelagem confortavel e design exclusivo.')); ?></p>
                    <p class="shop-price"><?php echo esc_html(od__('R$ 89,90')); ?></p>
                    <a class="btn btn-primary" href="<?php echo esc_url(home_url('/produto/')); ?>"><?php echo esc_html(od__('Ver detalhes')); ?></a>
                </article>
            </div>
        </div>
        <div class="shop-section" id="canecas">
            <h2><?php echo esc_html(od__('Canecas')); ?></h2>
            <div class="shop-grid">
                <article class="card shop-card">
                    <a href="<?php echo esc_url(home_url('/produto/')); ?>" class="shop-image">
                        <img src="<?php echo esc_url('https://oraculistadedelfos.com.br/wp-content/uploads/2026/01/caneca-exemplo.jpg'); ?>" alt="<?php echo esc_attr(od__('Caneca Astrologia')) ?>">
                    </a>
                    <h3><a href="<?php echo esc_url(home_url('/produto/')); ?>"><?php echo esc_html(od__('Caneca Astrologia')); ?></a></h3>
                    <p class="shop-desc"><?php echo esc_html(od__('Ceramica com acabamento fosco.')); ?></p>
                    <p class="shop-price"><?php echo esc_html(od__('R$ 59,90')); ?></p>
                    <a class="btn btn-primary" href="<?php echo esc_url(home_url('/produto/')); ?>"><?php echo esc_html(od__('Ver detalhes')); ?></a>
                </article>
                <article class="card shop-card">
                    <a href="<?php echo esc_url(home_url('/produto/')); ?>" class="shop-image">
                        <img src="<?php echo esc_url('https://oraculistadedelfos.com.br/wp-content/uploads/2026/01/caneca-exemplo-2.jpg'); ?>" alt="<?php echo esc_attr(od__('Caneca Ciclos')) ?>">
                    </a>
                    <h3><a href="<?php echo esc_url(home_url('/produto/')); ?>"><?php echo esc_html(od__('Caneca Ciclos')); ?></a></h3>
                    <p class="shop-desc"><?php echo esc_html(od__('Arte simbolica com brilho suave.')); ?></p>
                    <p class="shop-price"><?php echo esc_html(od__('R$ 59,90')); ?></p>
                    <a class="btn btn-primary" href="<?php echo esc_url(home_url('/produto/')); ?>"><?php echo esc_html(od__('Ver detalhes')); ?></a>
                </article>
            </div>
        </div>
        <div class="shop-section" id="bones">
            <h2><?php echo esc_html(od__('Bones')); ?></h2>
            <div class="shop-grid">
                <article class="card shop-card">
                    <a href="<?php echo esc_url(home_url('/produto/')); ?>" class="shop-image">
                        <img src="<?php echo esc_url('https://oraculistadedelfos.com.br/wp-content/uploads/2026/01/bone-exemplo.jpg'); ?>" alt="<?php echo esc_attr(od__('Bone Oraculista')) ?>">
                    </a>
                    <h3><a href="<?php echo esc_url(home_url('/produto/')); ?>"><?php echo esc_html(od__('Bone Oraculista')); ?></a></h3>
                    <p class="shop-desc"><?php echo esc_html(od__('Ajustavel com bordado autoral.')); ?></p>
                    <p class="shop-price"><?php echo esc_html(od__('R$ 69,90')); ?></p>
                    <a class="btn btn-primary" href="<?php echo esc_url(home_url('/produto/')); ?>"><?php echo esc_html(od__('Ver detalhes')); ?></a>
                </article>
                <article class="card shop-card">
                    <a href="<?php echo esc_url(home_url('/produto/')); ?>" class="shop-image">
                        <img src="<?php echo esc_url('https://oraculistadedelfos.com.br/wp-content/uploads/2026/01/bone-exemplo-2.jpg'); ?>" alt="<?php echo esc_attr(od__('Bone Simbolico')) ?>">
                    </a>
                    <h3><a href="<?php echo esc_url(home_url('/produto/')); ?>"><?php echo esc_html(od__('Bone Simbolico')); ?></a></h3>
                    <p class="shop-desc"><?php echo esc_html(od__('Tecido leve e bordado em relevo.')); ?></p>
                    <p class="shop-price"><?php echo esc_html(od__('R$ 69,90')); ?></p>
                    <a class="btn btn-primary" href="<?php echo esc_url(home_url('/produto/')); ?>"><?php echo esc_html(od__('Ver detalhes')); ?></a>
                </article>
            </div>
        </div>
        <div class="shop-section" id="poster">
            <h2><?php echo esc_html(od__('Poster')); ?></h2>
            <div class="shop-grid">
                <article class="card shop-card">
                    <a href="<?php echo esc_url(home_url('/produto/')); ?>" class="shop-image">
                        <img src="<?php echo esc_url('https://oraculistadedelfos.com.br/wp-content/uploads/2026/01/poster-exemplo.jpg'); ?>" alt="<?php echo esc_attr(od__('Poster Arcanos')) ?>">
                    </a>
                    <h3><a href="<?php echo esc_url(home_url('/produto/')); ?>"><?php echo esc_html(od__('Poster Arcanos')); ?></a></h3>
                    <p class="shop-desc"><?php echo esc_html(od__('Arte impressa em papel premium.')); ?></p>
                    <p class="shop-price"><?php echo esc_html(od__('R$ 49,90')); ?></p>
                    <a class="btn btn-primary" href="<?php echo esc_url(home_url('/produto/')); ?>"><?php echo esc_html(od__('Ver detalhes')); ?></a>
                </article>
                <article class="card shop-card">
                    <a href="<?php echo esc_url(home_url('/produto/')); ?>" class="shop-image">
                        <img src="<?php echo esc_url('https://oraculistadedelfos.com.br/wp-content/uploads/2026/01/poster-exemplo-2.jpg'); ?>" alt="<?php echo esc_attr(od__('Poster Astrologia')) ?>">
                    </a>
                    <h3><a href="<?php echo esc_url(home_url('/produto/')); ?>"><?php echo esc_html(od__('Poster Astrologia')); ?></a></h3>
                    <p class="shop-desc"><?php echo esc_html(od__('Cores intensas e acabamento fosco.')); ?></p>
                    <p class="shop-price"><?php echo esc_html(od__('R$ 49,90')); ?></p>
                    <a class="btn btn-primary" href="<?php echo esc_url(home_url('/produto/')); ?>"><?php echo esc_html(od__('Ver detalhes')); ?></a>
                </article>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>
