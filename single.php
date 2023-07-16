<?php get_header();
the_post(); ?>

    <section class="tf-page-title">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title inner">
                        <h1 class="title">Single Blog</h1>
                        <div class="breadcrumbs">
                            <ul class="jus-ct">
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="f-rubik">Home</a></li>
                                <li><p class="breadcrumbs-inner f-rubik">Blog Details</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section tf-blog-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                    <article <?php post_class( 'article' ); ?>>
                        <div class="feature-article wow fadeIn animated" data-wow-delay="0.3ms"
                             data-wow-duration="1200ms">
							<?php the_post_thumbnail( 'full' ); ?>
                        </div>
                        <div class="meta-post st-2">
                            <ul class="fx">
                                <li class="fx"><i class="far fa-calendar-alt clr-pri-3"></i>
                                    <time datetime="<?php echo esc_html( the_modified_date( 'c' ) ); ?>">
										<?php echo esc_html( the_modified_date() ); ?>
                                    </time>
                                </li>
                                <li class="fx">
                                    <i class="far fa-user-alt clr-pri-3"></i>
                                    By <?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?>
                                </li>
                            </ul>
                        </div>
                        <h1 class="title-article clr-pri-2">
							<?php echo esc_html( get_the_title() ); ?>
                        </h1>
						<?php the_content(); ?>
						<?php
						$postCategories = get_the_category();
						if ( $postCategories ): ?>
                            <div class="tag-article">
                                <div class="box-lt">
                                    <p class="title clr-pri-2">Category</p>
                                    <ul class="fx">
										<?php foreach ( $postCategories as $category ): ?>
                                            <li>
                                                <a href="<?php echo esc_url( get_category_link( $category->term_id ) ) ?>"
                                                   class="jus-ct f-rubik active">
													<?php echo esc_html( $category->name ); ?>
                                                </a>
                                            </li>
										<?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
						<?php endif; ?>

						<?php
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>

                    </article>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-12">
                    <div id="sidebar" class="sidebar-style2 wow fadeIn animated" data-wow-delay="0.3ms"
                         data-wow-duration="1200ms">
                        <div class="inner-sidebar fl-st-1">
							<?php
							$allCategory = get_categories();
							if ( $allCategory ): ?>
                                <div class="widget widget-category st-2">
                                    <h4 class="title-widget fl-ctm-1">category<span class="ctm-inner"></span></h4>
                                    <div class="list-category">
                                        <ul>
											<?php foreach ( $allCategory as $category ): ?>
                                                <li class="fx">
                                                    <span class="st wd-ctm"><?php echo esc_html( $category->name ); ?></span>
                                                    <span class="st"><?php echo esc_html( $category->count ); ?></span>
                                                </li>
											<?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
							<?php
							endif;
							$newPostArgsArgs = array(
								'posts_per_page'      => 8,
								'ignore_sticky_posts' => true,
								'post__not_in'        => array( get_the_ID() ),
							);
							$newPostArgs     = new WP_Query( $newPostArgsArgs );
							if ( $newPostArgs->post_count > 0 ): ?>
                                <div class="widget widget-news st-2">
                                    <h4 class="title-widget fl-ctm-1">recent news<span class="ctm-inner"></span></h4>
                                    <ul class="list-news">
										<?php if ( $newPostArgs->have_posts() ): while ( $newPostArgs->have_posts() ): $newPostArgs->the_post(); ?>
                                            <li <?php post_class( 'fx' ); ?>>
												<?php the_post_thumbnail( 'thumb80', [ 'class' => 'feature' ] ); ?>
                                                <ul class="box-content">
                                                    <li>
                                                        <h6 class="title">
                                                            <a href="<?php echo esc_url( get_the_permalink() ); ?>">
																<?php echo esc_html( get_the_title() ); ?>
                                                            </a>
                                                        </h6>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo esc_url( get_the_permalink() ); ?>"
                                                           class="fx meta-news clr-pri-4"><i
                                                                    class="far fa-calendar-alt"></i>
                                                            <span class="f-rubik">
                                                                <time datetime="<?php echo esc_html( the_modified_date( 'c' ) ); ?>">
                                                                    <?php echo esc_html( the_modified_date() ); ?>
                                                                </time>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
										<?php endwhile; endif; ?>
                                    </ul>
                                </div>
							<?php endif;
							wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>