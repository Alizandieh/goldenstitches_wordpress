<?php 
/*
	Template Name: Portfolio Masonry Full Width 	
*/
	update_post_meta ( get_the_ID(), 'unique_layout', 1 );
	update_post_meta ( get_the_ID(), 'layout', 'full_width' );
	update_post_meta ( get_the_ID(), 'full_width', 1 );
	get_header(); 
	$sy_options = kameleon_get_options_name();
	$folio_per_page = ($sy_options['folio_per_page'] != null ) ? $sy_options['folio_per_page'] : 12;
?>
<style type="text/css">.effect-sadie h2{opacity: 0;}</style>
<div id="km-content" >
	<div id="km-checker">
		<div id="km-data">
			<?php get_template_part('templates/portfolio/portfolio','filter-full'); ?>							
			<div class="km-portfolio-loop km-pf-container-simple" data-gutter="0" style="overflow: hidden" data-layout="masonry_layout" data-number="<?php echo esc_attr($folio_per_page); ?>" >	


			</div>
			<div class="ajax-loading-folio"><?php echo kameleon_loader_spinner('style1'); ?></div>
		</div>
	</div>
</div>
<?php get_footer();?>