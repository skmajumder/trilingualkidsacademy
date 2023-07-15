<?php
$homeBlogSectionMataQuery = [
	'key'     => 'section_type',
	'compare' => '=',
	'value'   => 'blog',
];

$homeBlogSectionArgs = [
	'post_type'           => 'section',
	'posts_per_page'      => 1,
	'meta_key'            => 'section_type',
	'meta_value'          => 'blog',
	'meta_query'          => $homeBlogSectionMataQuery,
	'ignore_sticky_posts' => true
];
$homeBlogSection     = new WP_Query( $homeBlogSectionArgs );
if ( $homeBlogSection->post_count > 0 ):
	if ( $homeBlogSection->have_posts() ): while ( $homeBlogSection->have_posts() ): $homeBlogSection->the_post();
		?>
        <section <?php post_class( 'tf-section tf-sc-blog' ); ?> id="<?php echo esc_attr( $post->post_name ); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading st-1">
                            <div class="title-heading">
                                <div class="sub-heading clr-pri-3 f-mulish">
									<?php
									if ( function_exists( 'get_field' ) ) {
										$subHeadline = get_field( 'blog_sub_headline' );
										if ( $subHeadline ) {
											echo '<span class="inner-sub st-2">' . esc_html( $subHeadline ) . '</span>';
										}
									}
									?>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" width="77" height="30"
                                         viewBox="0 0 77 30">
                                        <g>
                                            <image width="77" height="30"
                                                   xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE0AAAAeCAYAAABpE5PpAAAEMUlEQVRoge2Ze4hVVRTGf46WMyWmZvkaNSWfST7I1EINyVQ0kSxsQiyS3JFo/lGhUQSCJokk5aONhijhHyGRkKTlI3JMFKQaBx2o1HS0klSs66ucGVl3vhOnw73XwblPnQ8OZ+acfc/e+zvr8a11mtXNmsUtDe8T79659sAVvP87eqvo1mYsJR4C9ica0ERaclQBfXFuSHREE2nJ4P0x4BzwdXREE2mp8S3QDucGhUc1kZYa23V3SXhUizxb5I3AXnxPYCDQG+gAtAk9x7Lfb8AvwA/AT0BtA+cJSBuDcyV4f4kCJu1OYAowERgLtA/dqwFiIus2oDVQErp/FtgGbNZxOeks3lfhXDVQCowDPqcASesDvA5MA1rJYvYA5TpbxjsO/Bv5nRHXD3gwbjX1RJcB53HuY+B9vK9OMucO4HlgUkBaocS07sBG4DAwU8TMBjoBo4A3gS1ywShhhr+AfcAakdURmCCLexU4gnPLcK5tgt9+o/PjwYV8J605MF9k2Wa/12YHAKuA0zf4XHPhrbLYXsB6YF58HuemRsaW69wd57qS56R1AXYC7wIWgF+QSrfN1qVtFu+P4v1LwOC4xcEmnFsbD/z1938GTmn0aPKYtMEqYcz1vgQekDWkj6wovK8ARgJv6QXtwrl7NWqfzo+Sp6Q9IlHZGVgKPAn8npWZva/B+0XA+HgJBd/hXGmoBjVLzzvSBsmyLDMuAN5Q/MkuvN8uq7tLieC45h+Acy0C0koiWicX6Kp41VrZcElOV+P9QckTE8rv6Gox0L9IWu0i8EEOl3iHNJCp+dUK/rlHPXFPAT1Ca+lnhF0FLENMllvEcrBYI2qIsuXcnJHl3N3xAr2+4ghQLUtbrP/7BhXBCmA5MB34KMtLfRmYAZwEntVLzDT6K2YNxLleCg3dIuVWMvQJ2t1Wo/0DnADu19/ZwMPAbiWkx1QKZQLN9fyp8qgujZhjTWBpVnrMAT6UMn4vC4TdExeScDvwWoYIs2e/Ld1VGrpeo2ripM4mXs8oNMVUdl1WrA9QF++SeP9r+MNKkSzMCBwKVGZgEwGK1XYxsfgZ8HSGhGsrJZVTittHJR/+/K89lOzDSgqEuxy1KhPKVfyOCJUP6YS5ygYRdlAdhEwp/Zg8KK2Iits9aoV0UwegY4YIe0auMTlH2bpRSFQRTNSGrJOwVz2sdMBE4hfAc3KPJ4BjhUHT/5GItCuq/2xD9wEHgFcaWXKZRVWopjuiQvxQOjaQCyQjwoLlcIlNE3orgR/lVi0buM4idUh3q61sWugrYJj6YwWLVO3uP7RpS68L5a6fKh1vEaGVGndVJHVQ0T1CPfVOetZptak3FDJZAa73jaBWFcInykIvSvyW6bgeqqT91qmReFOgoR9WYtI7dph7mbo2NW8xz6zLXPaCLMpczz6VWYvHSLu5AFwD7u/9V73LPFIAAAAASUVORK5CYII="/>
                                        </g>
                                    </svg>
                                </div>
								<?php
								if ( function_exists( 'get_field' ) ) {
									$headline = get_field( 'blog_headline' );
									if ( $headline ) {
										echo '<h2 class="title clr-pri-2">' . esc_html( $headline ) . '</h2>';
									}
								}
								?>
                            </div>
                        </div>
                    </div>

					<?php
					$homeBlogPostArgs = [
						'post_type'           => 'post',
						'posts_per_page'      => 6,
						'ignore_sticky_posts' => true
					];
					$homeBlogPost     = new WP_Query( $homeBlogPostArgs );
					if ( $homeBlogPost->post_count > 0 ):
						if ( $homeBlogPost->have_posts() ): while ( $homeBlogPost->have_posts() ): $homeBlogPost->the_post(); ?>
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
					endif;
					wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
	<?php
	endwhile; endif;
endif;
wp_reset_postdata();
?>