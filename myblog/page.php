<?php get_header(); ?>
<div id="content">
	<div class="container">
        <div class="break">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs"><i class="fa fa-home"></i> ','</p>');} ?>
        </div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<div class="post-news post-news-single">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <?php setpostview(get_the_id()) ?>
                    <h1 class="single-title"><?php the_title(); ?></h1>
                    <div class="meta">
                        <span>Ngày đăng: <?php echo get_the_date('d - m - Y') ?></span>
                        <span>Lượt xem: <?php echo getpostviews(get_the_id())?> lượt xem</span>
                    </div>
                    <article class="post-content">
                        <?php the_content() ?>
                    </article>
                    <div class="like">
                    <div class="fb-like" data-href="<?php the_permalink(); ?>" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
                    </div>
                <?php endwhile; else : ?>
                <?php endif; ?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3">
				<div class="sidebar">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>