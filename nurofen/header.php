<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo('name'); ?></title>


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
    <div class="wrapper">
        <a href="<?php echo home_url(); ?>" class="title-header">ShamollashStop</a>
        <ul class="menu-header">
            <li><a href="#">
                <span>УЗ</span>
                <div class="icon-lang">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/png/lang-icon.png" alt="lang">
                </div>
                </a>
            </li>
            <li><a href="<?php echo get_permalink(get_page_by_path('strepsils')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/strepsils.svg" alt="strepsils"></a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path('nurofen')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/nurofen.svg" alt="nurofen"></a></li>
            <li><a href="<?php echo get_permalink(get_page_by_path('nurofen-kids')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/nurofen-child.svg" alt="nurofen"></a></li>
        </ul>
    </div>
</header>