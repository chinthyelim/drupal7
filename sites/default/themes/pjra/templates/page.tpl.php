<?php include_once('header.php'); ?>
<div class="main-container container">
  <div class="gridimg"></div>
  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>
    <?php print render($page['header']); ?>
  </header> <!-- /#header -->
  <div class="row">
    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="span2" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>  
    <section id="main-content" class="<?php print _pjra_content_span($columns); ?>">  
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php print render($title_prefix); ?>
      <?php print render($title_suffix); ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php if ( ! empty($title)):?>
	    <h1 class="page-header"><?php echo htmlspecialchars_decode($title); ?></h1>
      <?php endif; ?>
			<?php echo $messages;?>
      <?php print render($page['content']); ?>
	  <?php include_once('footer.php'); ?>
    </section>
    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>
  </div>
</div>
