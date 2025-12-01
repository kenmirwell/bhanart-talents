<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div>
    <h1 class="text-red-500">Hello</h1>
    <h2>This should be green from custom CSS</h2>
</div>

<?php wp_footer(); ?>
</body>
</html>
