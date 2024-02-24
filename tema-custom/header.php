<!--
    includo tutti i file dipendenze
 -->
<?php include_once(get_template_directory() . "/function.php") ?>
<?php import_php_files("parts"); ?>
<?php import_php_files("models"); ?>

<!-- _________________________________________________________________________--->


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <h1><a href="<?php echo home_url(); ?>"><?php blogInfo('name') ?></a></h1>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>

        <!-- Importo il componente navbar -->
        <?php showNavbar(); ?>

    </header>