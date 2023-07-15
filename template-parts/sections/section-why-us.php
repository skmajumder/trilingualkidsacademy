<?php
$homeWhyUsSectionMataQuery = [
	'key'     => 'section_type',
	'compare' => '=',
	'value'   => 'why_us',
];

$homeWhyUsSectionArgs = [
	'post_type'           => 'section',
	'posts_per_page'      => 1,
	'meta_key'            => 'section_type',
	'meta_value'          => 'why_us',
	'meta_query'          => $homeWhyUsSectionMataQuery,
	'ignore_sticky_posts' => true
];
$homeWhyUsSection     = new WP_Query( $homeWhyUsSectionArgs );
if ( $homeWhyUsSection->post_count > 0 ):
	if ( $homeWhyUsSection->have_posts() ): while ( $homeWhyUsSection->have_posts() ): $homeWhyUsSection->the_post();
		$bgImage = get_field( 'why_choose_us_background_image' );
		?>
        <section <?php post_class( 'tf-section tf-sc-about1' ); ?>
                style="background-image: url(<?php echo esc_url( $bgImage ); ?>)"
                id="<?php echo esc_attr( $post->post_name ); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-12 col-12">
                        <div class="sc-about-1 wow fadeInLeft animated" data-wow-delay="0.3ms"
                             data-wow-duration="1400ms">
							<?php if ( function_exists( 'get_field' ) ) : ?>
                                <div class="title-heading">
									<?php
									$subHeadline = get_field( 'why_choose_us_sub_headline' );
									if ( $subHeadline ): ?>
                                        <div class="sub-heading clr-pri-3 f-mulish">
                                            <span class="inner-sub st-2"><?php echo esc_html( $subHeadline ); ?></span>
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
									endif;
									$subHeadline = get_field( 'why_choose_us_headline' );
									if ( $subHeadline ) {
										echo '<h2 class="title clr-pri-2">' . esc_html( $subHeadline ) . '</h2>';
									}
									?>
                                </div>
							<?php endif; ?>

							<?php if ( function_exists( 'get_field' ) ) : ?>
                                <div class="inner">
									<?php
									$text = get_field( 'why_choose_us_text' );
									if ( $text ) {
										echo '<p class="wrap f-mulish clr-pri-4">' . esc_html( $text ) . '</p>';
									}
									if ( have_rows( 'why_choose_us_bullet_point' ) ): ?>
                                        <ul>
											<?php while ( have_rows( 'why_choose_us_bullet_point' ) ): the_row(); ?>
                                                <li class="st-2 fx"><i class="fas fa-check"></i>
                                                    <p class="clr-pri-2"><?php the_sub_field( 'points' ); ?></p>
                                                </li>
											<?php endwhile; ?>
                                        </ul>
									<?php endif; ?>
                                </div>
							<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	<?php
	endwhile; endif;
endif;
wp_reset_postdata();
?>