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
        <div>
          <h1 class="font-bold">BhanartTalents</h1>
        </div>
        <div class="text-[#ffffff] flex gap-[10px]">
          <a href="/">Home</a>
          <a href="/">About Us</a>
          <a href="/">Our Talents</a>
        </div>
        <a class=" py-[15px] px-[20px] bg-[#e7b20d] rounded-xl" href="/">Hire Talents</a>
    </div>
  </header>


