<?php
/**
 * Template Name: Nurofen
 */
get_header();
require get_template_directory() . "/inc/get_posts_by_category.php";
?>
<main>
    <section class="header-main">
        <div class="fon">
            <div class="layer ornament">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/узбекск.svg" alt="fon">
            </div>
            <div class="layer doctor">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/png/фон врач(2).png" alt="fon">
            </div>
            <div class="layer line">
                <img class="line" src="<?php echo get_template_directory_uri(); ?>/assets/img/png/полоска.png"
                    alt="fon">
            </div>
        </div>
        <div class="wrapper">
            <div class="title-main-header page-2 page-3">
                <div class="logotip">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/nurofen-main.svg" alt="">
                </div>
                <div class="text-main">
                    <span class="three-action"><?php esc_html_e('Тройное действие:', NUROFEN_TD); ?></span>
                    <span><?php _e('Против жара, боли и воспаления<sup>1-3</sup>', NUROFEN_TD); ?></span>
                </div>

            </div>
        </div>
    </section>

    <?php require get_template_directory() . "/inc/article-more-section.php"; ?>
    <section class="medications">
        <div class="wrapper nurofen-page">
            <div class="sub-title"><?php esc_html_e('Препараты', NUROFEN_TD); ?></div>
            <div class="cards-medication-nurofen">
                <div class="left-block-nurof">
                    <div class="block-one">
                        <div class="sub-title"><?php _e('Нурофен<sup>®1</sup>', NUROFEN_TD); ?></div>
                        <span class="info-about-nurof"><?php _e('Ибупрофен, 200 мг, таблетки,<br> покрытые оболочкой ', NUROFEN_TD); ?></span>
                        <ul>
                            <li><span><?php _e('Против <br>жара, боли <br>и воспаления', NUROFEN_TD); ?></span></li>
                            <li><span><?php _e('От боли и жара<br> при простуде<br> и гриппе', NUROFEN_TD); ?></span></li>
                            <li><span><?php esc_html_e('С 6 лет', NUROFEN_TD); ?></span></li>
                        </ul>
                        <div class="nurf-grey"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/png/nurf-grey.png" alt="">
                        </div>
                    </div>
                    <div class="block-one">
                        <div class="sub-title"><?php _e('Нурофен<sup>®</sup> Экспресс<sup>2</sup> ', NUROFEN_TD); ?></div>
                        <span class="info-about-nurof"><?php _e('Ибупрофен, 200 мг, капсулы <br>с жидким действующим веществом', NUROFEN_TD); ?></span>
                        <ul>
                            <li><span><?php _e('Тройное действие:<br> против жара, боли <br>и воспаления', NUROFEN_TD); ?></span></li>
                            <li><span><?php _e('Быстрее<sup>6</sup>, чем<br> обычные таблетки<sup>*</sup>', NUROFEN_TD); ?></span></li>
                            <li><span><?php _e('Активен уже через <br>10 минут<sup>4</sup>', NUROFEN_TD); ?></span></li>
                            <li><span><?php esc_html_e('С 12 лет', NUROFEN_TD); ?></span></li>
                        </ul>
                        <div class="nurf-small"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/png/nurf-green-red-small.png"
                                alt=""></div>
                    </div>
                </div>
                <div class="right-block-nurof">
                    <div class="block-one">
                        <div class="sub-title"><?php _e(' Нурофен<sup>®</sup> Экспресс Форте<sup>3</sup>', NUROFEN_TD); ?></div>
                        <span class="info-about-nurof"><?php esc_html_e('Ибупрофен, 400 мг, капсулы с жидким действующим веществом', NUROFEN_TD); ?></span>
                        <ul>
                            <li><span><?php _e('Тройное действие: против жара,<br> боли и воспаления', NUROFEN_TD); ?></span></li>
                            <li><span><?php _e('Двойная доза действующего вещества<sup>5</sup>', NUROFEN_TD); ?></span></li>
                            <li><span><?php _e('Быстрее<sup>7</sup> чем обычные таблетки<sup>* </sup>', NUROFEN_TD); ?></span></li>
                            <li><span><?php esc_html_e('с 12 лет', NUROFEN_TD); ?></span></li>
                        </ul>
                        <div class="nurf-left"><img
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/png/nurf-green-red-big.png"
                                alt=""></div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <?php require get_template_directory() . '/inc/telegram-section.php'; ?>

    <section class="info">
        <div class="wrapper">
            <span class="tag"><?php esc_html_e('*Обычные таблетки – Нурофен® в форме таблеток, покрытых оболочкой, 200 мг, DV/X 03693/11/17', NUROFEN_TD); ?></span>
            <div class="list_with_recomend">
                <ol class="streprils-page">
                    <li><?php esc_html_e('Согласно листку-вкладышу Нурофен®, таблетки, покрытые оболочкой, 200 мг, DV/X 03693/11/17.', NUROFEN_TD); ?></li>
                    <li><?php esc_html_e('Инструкция по медицинскому применению Нурофен® Экспресс, капсулы. Фарм. группа: НПВП. DV/X 03942/01/18', NUROFEN_TD); ?></li>
                    <li><?php esc_html_e('Инструкция по медицинскому применению Нурофен® Экспресс Форте, капсулы. Фарм. группа: НПВП. DV/X 11037/08/25', NUROFEN_TD); ?></li>
                    <li><?php esc_html_e('После приема 2 капсул препарата натощак ибупрофен обнаруживается в плазме крови через 10 минут, максимальная концентрация (Сmax) ибупрофена в плазме крови достигается через 30-40 минут, что в два раза быстрее, чем после приема эквивалентной дозы препарата Нурофен®, в лекарственной форме таблетки, покрытые оболочкой 200 мг. Инструкция по медицинскому применению Нурофен® Экспресс, капсулы. Фарм. группа: НПВП.DV/X 03942/01/18.', NUROFEN_TD); ?></li>
                    <li><?php esc_html_e('Нурофен® Экспресс Форте содержит в составе 400,00 мг ибупрофена, что в 2 раза больше, чем в составе Нурофен® Экспресс. Инструкция по медицинскому применению Нурофен® Экспресс, капсулы. Фарм. группа: НПВП. DV/X 03942/01/18. Инструкция по медицинскому применению Нурофен® Экспресс Форте, капсулы. Фарм. группа: НПВП. DV/X 11037/08/25', NUROFEN_TD); ?></li>
                    <li><?php esc_html_e('Максимальная концентрация ибупрофена в плазме крови достигается быстрее, чем после приема эквивалентной дозы препарата Нурофен®, 200 мг. Инструкция по медицинскому применению Нурофен® Экспресс, капсулы, 200 мг, DV/X 03942/01/18', NUROFEN_TD); ?></li>
                    <li><?php esc_html_e('Максимальная концентрация ибупрофена в плазме крови достигается быстрее, чем после приема эквивалентной дозы препарата Нурофен®, 200 мг. Инструкция по медицинскому применению Нурофен® Экспресс Форте, капсулы, 400 мг DV/X 11037/08/25', NUROFEN_TD); ?></li>
                </ol>
                <span><?php esc_html_e('ТОЛЬКО для медицинских и фармацевтических работников', NUROFEN_TD); ?></span>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>