<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ✅ Open Graph Meta Tags -->
  <meta property="og:title" content="Bhanart Talents" />
  <meta property="og:url" content="<?php echo get_permalink(); ?>" />
  <meta property="og:type" content="website" />

<title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
</head>


<body>
  <header id="header" class="shadow-md w-[100%] transition-all duration-200 ease">
    <div class="w-[1200px] mx-auto flex items-center justify-between py-[10px]">
        <h1>THIS IS The HEADER</h1>
    </div>
  </header>


