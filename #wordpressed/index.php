<? get_header(); ?>

<div class="main-screen">
    <div class="main-screen-container">
        <div class="main-screen__content page-wrapper">
            <div class="main-screen__text">
                <h1>
                    МОЙКИ САМООБСЛУЖИВАНИЯ<br>
                    ПОД КЛЮЧ<br>
                    NERTA SW<br>
                </h1>
                <div class="row mt-lg-4 mt-5 main-screen__text-info align-items-lg-start align-items-center">
                    <div class="col-lg-3 col-12">
                    <span class="subtitle-2">
                        За время работы мы реализовали более
                        100 проектов, которые стабильно приносят доход своим собственникам.
                    </span>
                    </div>
                    <div class="col-lg-3 col-12 pt-lg-0 pt-3">
                    <span class="subtitle-2">
                        Берем на себя полный комплекс работ от помощи
                        в подборе участка земли
                        до обслуживания мойки самообслуживания.
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="label subtitle-3">
            Работаем с 2000 года<br>
            по РФ и СНГ
        </div>
    </div>
</div>
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

<? get_footer(); ?>
