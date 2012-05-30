<div class="container">
  <div class="header">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
      </a>
    <?php endif; ?>

    <?php if ($site_name): ?>
      <h1><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a></h1>
    <?php endif; ?>

    <?php if ($page['header']): ?>
      <?php print render($page['header']); ?>
    <?php endif; ?>
  </div>

  <div class="main">
    <?php if ($page['highlight']): ?>
      <?php print render($page['highlight']) ?>
    <?php endif; ?>

    <?php if ($title): ?>
      <h1 class="title"><?php print $title; ?></h1>
    <?php endif; ?>

    <?php print render($title_suffix); ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <?php if ($tabs): ?>
      <?php print render($tabs); ?>
    <?php endif; ?>

    <?php if ($action_links): ?>
      <ul><?php print render($action_links); ?></ul>
    <?php endif; ?>

    <?php print render($page['content']) ?>

    <?php if ($page['sidebar_first']): ?>
      <?php print render($page['sidebar_first']); ?>
    <?php endif; ?> <!-- /sidebar-first -->

    <?php if ($page['sidebar_second']): ?>
      <?php print render($page['sidebar_second']); ?>
    <?php endif; ?> <!-- /sidebar-second -->

    <?php if ($page['footer']): ?>
      <?php print render($page['footer']); ?>
    <?php endif; ?>
  </div>

</div>
