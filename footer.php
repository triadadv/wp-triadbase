                </section>
				<aside id="sidebar">
				<?php if ( is_active_sidebar( 'main-sidebar') ) : ?>
					<?php dynamic_sidebar( 'main-sidebar' ); ?>
				<?php endif; ?>
				</aside>
            </div>
            <footer>
            	<div class="content">
					&copy; <?php echo date('Y'); ?> Company Name LLC
                </div>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>