<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package Shoes Store 
 */
?>

<h2 class="entry-title"><?php echo esc_html(get_theme_mod('shoes_store_no_results_page_title',__('Nothing Found','shoes-store')));?></h2>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.', 'shoes-store' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
	<p><?php echo esc_html(get_theme_mod('shoes_store_no_results_page_content',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','shoes-store')));?></p><br />
		<?php get_search_form(); ?>
	<?php else : ?>
	<p><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'shoes-store' ); ?></p><br />
	<div class="more-btn">
		<a href="<?php echo esc_url(home_url() ); ?>"><?php esc_html_e( 'Back to Home Page', 'shoes-store' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Back to Home Page','shoes-store' );?></span></a>
	</div>
<?php endif; ?>