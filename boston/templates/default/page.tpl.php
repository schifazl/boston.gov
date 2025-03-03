<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 *
 * @see https://drupal.org/node/1728148
 */
?>

<input type="checkbox" id="hb__trigger" class="hb__trigger" aria-hidden="true" />

<div class="main-navigation">
  <div class="main-navigation-wrapper">
    <div class="main-navigation-title"></div>
    <?php print render($page['navigation']); ?>
  </div>
</div>

<div class="page" id="page">
  <header id="main-menu" class="header" role="banner">
    <div class="container">
      <label tabindex="0" for="hb__trigger" class="nav-trigger" type="button" aria-label="Menu" aria-controls="navigation"  aria-expanded="false">
        <div class="hb">
          <span class="hb__box">
            <span class="hb__inner"></span>
          </span>
          <span class="hb__label">Menu</span>
        </div>
      </label>

      <?php if ($site_name): ?>
        <h1 class="header__site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
        </h1>
      <?php endif; ?>

      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="s">
        <img src="<?php print $asset_url ?>/images/<?php print $asset_name ?>/seal.svg" alt="City of Boston Seal" class="s-i" />
      </a>

      <div class="tr">
        <a href="#" class="tr-link">Translate</a>
        <ul class="tr-dd">
          <li><span class="notranslate tr-dd-link tr-dd-link--message">Loading...</span></li>
          <li><a href="#" class="notranslate tr-dd-link" data-ln="ht">Kreyòl Ayisyen</a></li>
          <li><a href="#" class="notranslate tr-dd-link" data-ln="pt">Portugese</a></li>
          <li><a href="#" class="notranslate tr-dd-link" data-ln="es">Español</a></li>
          <li><a href="#" class="notranslate tr-dd-link" data-ln="vi">Tiếng Việt</a></li>
          <li><a href="#" class="notranslate tr-dd-link tr-dd-link--hidden" data-ln="en">English</a></li>
        </ul>
      </div>

      <?php print theme('links__system_secondary_menu', array(
        'links' => $secondary_menu,
        'attributes' => array(
          'class' => array('header-menu', 'links', 'inline', 'clearfix')
        ),
      )); ?>

      <?php print render($page['header']); ?>
    </div>

  </header>

  <div class="main">
    <div class="container">
      <section class="main-content" id="content" role="main">
        <?php print render($page['highlighted']); ?>
        <a href="#skip-link" class="visually-hidden--focusable" id="main-content">Back to top</a>
        <?php if (!isset($header_image) || !empty($node) && $node->type == 'how_to'): ?>
          <?php if ($breadcrumb): ?>
            <div id="breadcrumb"><?php print $breadcrumb; ?></div>
          <?php endif; ?>
        <?php endif; ?>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php if (isset($header_image)): ?>
        <div class="hero-image fullwidth">
          <div class="hero-image-wrapper <?php print $hero_classes; ?>">
            <?php print render($header_image); ?>
          </div>
        </div>
        <?php if (!empty($node) && $node->type !== 'how_to'): ?>
        <?php if ($breadcrumb): ?>
          <div id="breadcrumb" class="breadcrumb-wrapper with-hero"><?php print $breadcrumb; ?></div>
        <?php endif; ?>
        <?php endif; ?>
        <?php endif; ?>

        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </section>

    </div>
  </div>
  <?php print render($page['modal']); ?>
  <?php print render($page['footer']); ?>
</div>

<?php print render($page['bottom']); ?>
