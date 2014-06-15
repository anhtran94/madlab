
<header id="header">
    <div id="header-container">

      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>

      <?php print render($page['header']); ?>
    
		<?php if ($main_menu || $secondary_menu): ?>
        
          <nav id="nav">            
		  	<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
          	
          </nav> <!-- END NAV -->
        
		<?php endif; ?>
    
    </div><!-- END HEADER CONTAINER -->
</header><!-- END HEADER SECTION -->

<section id="featured">
    <article id="featured-container" class="clearfix">
		
		<?php print render($page['featured']); ?> 
    
    </article>
</section><!-- END FEATURED SECTION -->

<section id="welcome">
    <article id="welcome-container" class="clearfix">
       
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
		<?php print render($page['welcome']); ?> 

    </article>
</section><!-- END WELCOME SECTION -->

<section id="columns" class="clearfix">

	<?php print render($page['columns']); ?>  
      
</section> <!-- END SERVICES SECTION -->

<div id="container" class="clearfix">
    <section id="content">
       
        <?php print $messages; ?>
            
        <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
        <a id="main-content"></a>
        <?php print render($title_prefix); ?>

        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <?php print render($page['content']); ?>
               
    </section><!-- END CONTENT SECTION -->
            
    <aside id="sidebar" class="clearfix">
        <div class="sidebar-section">
        
            <?php print render($page['sidebar']); ?>
            
        </div><!-- END SIDEBAR SECTION -->
    </aside><!-- END SIDEBAR -->
        
</div><!-- END PAGE CONTAINER -->

<footer id="footer">
    <article id="footer-container">
    
   		<?php print render($page['footer']); ?>
        
    </article><!-- END FOOTER SECTION -->
</footer><!-- END FOOTER-->
