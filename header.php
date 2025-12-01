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
  <header id="header" class="bg-white shadow-md top-0 z-[999] fixed w-[100%] transition-all duration-200 ease">
    <div class="custom-container mx-auto flex items-center justify-between px-4 py-4">
        THIS IS HEADER    
    </div>
  </header>


