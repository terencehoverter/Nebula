<?php
/**
 * Theme Footer
 */
?>
			<?php if ( is_active_sidebar('Footer Widget Area') ): ?>
				<div id="footer-widget-section">
					<div class="container">
						<div class="row">
							<?php dynamic_sidebar('Footer Widget Area'); ?>
						</div><!--/row-->
					</div><!--/container-->
				</div>
			<?php endif; ?>

			<div id="footer-section" role="contentinfo" <?php echo ( get_theme_mod('nebula_footer_bg_image') )? 'style="background-image: url(' . get_theme_mod('nebula_footer_bg_image') . ');"' : ''; ?>>
				<?php if ( get_theme_mod('nebula_footer_overlay', true) ): ?>
					<?php
						if ( get_theme_mod('nebula_footer_overlay_color') || get_theme_mod('nebula_footer_overlay_opacity') ){
							$footer_overlay = 'style="';
							$footer_overlay .= ( get_theme_mod('nebula_footer_overlay_color') )? 'background: ' . get_theme_mod('nebula_footer_overlay_color') . ';' : '';
							$footer_overlay .= ( get_theme_mod('nebula_footer_overlay_opacity') )? 'opacity: ' . get_theme_mod('nebula_footer_overlay_opacity') . ';' : '';
							$footer_overlay .= 'animation: none;"';
						}
					?>
					<div class="nebula-color-overlay" <?php echo ( !empty($footer_overlay) )? $footer_overlay : ''; ?>></div>
				<?php endif; ?>

				<div class="container">
					<?php if ( get_theme_mod('nebula_footer_logo') ): ?>
						<div class="row footerlogocon">
							<div class="col">
								<a class="footerlogo" href="<?php echo home_url('/'); ?>"><img class="svg" src="<?php echo get_theme_mod('nebula_footer_logo'); ?>" /></a>
							</div><!--/col-->
						</div><!--/row-->
					<?php endif; ?>
					<div class="row powerfootercon">
						<div class="col">
							<?php if ( has_nav_menu('footer') ): ?>
								<nav id="powerfooter" role="navigation">
									<?php wp_nav_menu(array('theme_location' => 'footer', 'depth' => '2')); ?>
								</nav>
							<?php endif; ?>
						</div><!--/col-->
					</div><!--/row-->
					<div class="row copyright-con">
						<div class="col">
							<p class="copyright">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><strong>Nebula</strong></a> <?php echo nebula()->version('full'); ?>, <em>all rights reserved</em>.</p>

							<form class="nebula-search search footer-search" method="get" action="<?php echo home_url('/'); ?>">
								<label class="sr-only" for="nebula-footer-search">Search</label>
								<input id="nebula-footer-search" class="open input search" type="search" name="s" placeholder="Search" autocomplete="off" role="search" x-webkit-speech />
							</form>
						</div><!--/col-->
					</div><!--/row-->
				</div><!--/container-->

				<?php do_action('nebula_footer'); ?>
			</div>

			<?php wp_footer(); ?>
		</div><!--/body-wrapper-->
	</body>
</html>