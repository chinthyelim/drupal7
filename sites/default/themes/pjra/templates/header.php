<header id="top-header" role="banner">
  <div class='header-container'>
    <div id="subscribe-div">
      <a id="page-nav-btn"></a>
      <?php if (!empty($logo)): ?>
        <a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>
      <div class="clear">&nbsp;</div> 
    </div>
  </div>
</header>
