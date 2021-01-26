<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package blogshop
 */
get_header();
/**
 * Blog Page Sidebar Control
 */
$getblogsidebar = get_theme_mod( 'blog_page_sidebar', 'right' );
$blogsidebar = 'col-md-5 col-lg-4 order-1';
$blogcontent = 'col-md-7 col-lg-8 order-0';
$sidebarshow = true;
if ($getblogsidebar === 'right') {
    $blogsidebar = 'col-md-5 col-lg-4 order-1';
    $blogcontent = 'col-md-7 col-lg-8 order-0';
    $sidebarshow = true;
}elseif ($getblogsidebar === 'left') {
    $blogsidebar = 'col-md-5 col-lg-4 order-0';
    $blogcontent = 'col-md-7 col-lg-8 order-1';
    $sidebarshow = true;
}elseif($getblogsidebar === 'no'){
    $blogsidebar = 'sidebar-hide';
    $blogcontent = 'col-md-12';
    $sidebarshow = false;
}else{
    $blogsidebar = 'col-md-5 col-lg-4 order-1';
	$blogcontent = 'col-md-7 col-lg-8 order-0';
}
?>
	<section id="primary" class="content-area archive-page-section">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="<?php echo esc_attr( $blogcontent );?>">
                        <?php
                        if ( have_posts() ) :
                            $get_blog_layout = get_theme_mod('blog_layout');
                           
                            if ('grid' == $get_blog_layout) {
                                    echo '<div class="row masonaryactive">';
                                }
                            /* Start the Loop */
                            while (have_posts()) :
                                the_post();
                                /*
                                 * Include the Post-Type-specific template for the content.
                                 * If you want to override this in a child theme, then include a file
                                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                                 */
                               $grid_column = get_theme_mod( 'grid_column', 'col-sm-6' );
                                if ($grid_column === 'col-sm-6') {
                                    $grid_column = 'col-lg-6 col-md-12';
                                }elseif ($grid_column === 'col-sm-4') {
                                    $grid_column = 'col-sm-12 col-md-6 col-lg-4';
                                }elseif ($grid_column === 'col-sm-3') {
                                    $grid_column = 'col-sm-12 col-md-6 col-lg-3';
                                }
                                if ('grid' == $get_blog_layout) {
                                    echo '<div class="'.$grid_column.' blog-grid-layout">';
                                }
                                get_template_part('template-parts/content/content', 'search');
                                if ('grid' == $get_blog_layout) {
                                    echo '</div>';
                                }
                            endwhile;
                            if ('grid' == $get_blog_layout) {
                                    echo '</div>';
                                }
                                $pagination_alignment = get_theme_mod('blog_page_pagination', 'center');
                                echo '<div class="pagination-'.$pagination_alignment.'">';
                                    the_posts_pagination();
                                echo '</div>';
                        else :
                            get_template_part('template-parts/content/content', 'none');
                        endif;
                        ?>
                    </div>
                    <?php if ($sidebarshow === true) :?>
                        <div class="<?php echo esc_attr( $blogsidebar );?>">
                            <?php get_sidebar(); ?>
                        </div>
                    <?php endif; ?>
				</div>
			</div>
		</main><!-- #main -->
	</section><!-- #primary -->
<?php get_footer(); ?>
