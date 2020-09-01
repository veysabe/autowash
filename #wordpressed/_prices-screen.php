<div class="prices-screen">
    <div class="prices-screen__content page-wrapper">
        <h2>
            Цены на мойки<br>
            самообслуживания<br>
            под ключ
        </h2>
        <div class="prices-screen__items">
            <? if (have_posts()): ?>
                <? while (have_posts()): ?>
                    <? the_post(); ?>
                    <div class="price-item">
                        <?the_post_thumbnail('full', "class=price-item__image");?>
                        <span class="subtitle-4 mt-3 mb-2"><?the_title();?></span>
                        <div class="price-item__bill">
                            <div class="price-item__bill-item">
                                <span class="subtitle-3">Строительство</span>
                                <span class="headline-4">от <?the_field('build_price');?> ₽</span>
                            </div>
                            <div class="price-item__bill-item">
                                <span class="subtitle-3">Оборудование</span>
                                <span class="headline-4">от <?the_field('obor_price');?> €</span>
                            </div>
                        </div>
                    </div>
                <? endwhile; ?>
            <? endif; ?>
        </div>
        <div class="prices-screen__info-text col-lg-6 col-12 px-0">
                <span class="subtitle-2">
                    Автомойки самообслуживания под ключ - готовые решения. Выбирайте исходя из своего бюджета и характеристик земельного участка. При необходимости разрабатываем проекты с учетом индивидуальных требований.
                </span>
        </div>
    </div>
</div>