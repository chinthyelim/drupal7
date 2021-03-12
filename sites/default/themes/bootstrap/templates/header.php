<header id="top-header" role="banner">
  <?php if (!empty($logo)): ?>
	<a class="logo pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
	  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
	</a>
  <?php endif; ?>
  <div id="subscribe-div">
	<form id="frmSubscribe" method="post" action="">
	  <label for="txtSubscribeEmail">Subscribe</label><input type="text" id="txtSubscribeEmail" name="txtSubscribeEmail" maxlength="128" placeholder="Email address"/>
	  <a id="btnSubscribe" href="javascript: void(0);" onclick="if(submitForm('frmSubscribe')){frmSubscribe.submit();}"></a>
	</form>
  </div>
</header>