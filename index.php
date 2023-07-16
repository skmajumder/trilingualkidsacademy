<?php get_header(); ?>

    <section class="tf-page-title">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title inner">
                        <h1 class="title">Blog Grid View</h1>
                        <div class="breadcrumbs">
                            <ul class="jus-ct">
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="f-rubik">Home</a></li>
                                <li><p class="breadcrumbs-inner f-rubik">Blog</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section tf-blog-grid">
        <div class="container">
            <div class="row">
				<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                        <article <?php post_class( 'box-artice fl-scale st-2 wow fadeIn animated' ); ?>
                                data-wow-delay="0.3ms"
                                data-wow-duration="1200ms">
                            <div class="box-feature inner-scale">
                                <a href="<?php echo esc_url( get_the_permalink() ); ?>">
									<?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?>
                                </a>
                            </div>
                            <div class="box-content">
                                <div class="meta-post st-1">
                                    <ul class="fx">
                                        <li>
                                            <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="fx">
                                                <i class="far fa-calendar-alt clr-pri-3"></i>
                                                <time datetime="<?php echo esc_html( the_modified_date( 'c' ) ); ?>">
													<?php echo esc_html( the_modified_date() ); ?>
                                                </time>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="title-article-post">
                                    <a href="<?php echo esc_url( get_the_permalink() ); ?>">
										<?php echo esc_html( get_the_title() ); ?>
                                    </a>
                                </h4>
                                <div class="btn-rm">
                                    <a href="<?php echo esc_url( get_the_permalink() ); ?>"
                                       class="fl-btn st-4 active">
                                        <span class="inner">read more</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>
				<?php
				endwhile; endif;
				$blogPaginationArgs = [
					'type'      => 'array',
					'prev_text' => '<i class="fas fa-chevron-left"></i>',
					'next_text' => '<i class="fas fa-chevron-right"></i>',
				];
				$blogPagination     = paginate_links( $blogPaginationArgs );
				if ( $blogPagination ): ?>
                    <div class="col-12">
                        <div class="themesflat-pagination st-1" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <ul>
								<?php foreach ( $blogPagination as $pageLink ): ?>
                                    <li>
										<?php echo $pageLink; ?>
                                    </li>
								<?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
				<?php endif; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>