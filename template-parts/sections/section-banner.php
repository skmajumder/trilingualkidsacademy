<?php
$homeSliderSectionMataQuery = [
	'key'     => 'section_type',
	'compare' => '=',
	'value'   => 'slider',
];

$homeSliderSectionArgs = [
	'post_type'           => 'section',
	'posts_per_page'      => 1,
	'meta_key'            => 'section_type',
	'meta_value'          => 'slider',
	'meta_query'          => $homeSliderSectionMataQuery,
	'ignore_sticky_posts' => true
];
$homeSliderSection     = new WP_Query( $homeSliderSectionArgs );
if ( $homeSliderSection->post_count > 0 ):
	if ( $homeSliderSection->have_posts() ): while ( $homeSliderSection->have_posts() ): $homeSliderSection->the_post();
		?>
        <section class="tf-slider-2" id="<?php echo esc_attr( $post->post_name ); ?>">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="slider-2">
                            <div class="themesflat-carousel clearfix" data-margin="30" data-item="1" data-item2="1"
                                 data-item3="1" data-item4="1" data-auto="false">
                                <div class="owl-carousel owl-theme none dots-none">
									<?php
									if ( have_rows( 'slider' ) ):
										while ( have_rows( 'slider' ) ): the_row(); ?>
                                            <div class="item-slider-2">
                                                <div class="box-content">
                                                    <div class="sub f-rubik clr-pri-3">
														<?php the_sub_field( 'sub_headline' ); ?>
                                                    </div>
                                                    <div class="title clr-pri-2">
														<?php the_sub_field( 'headline' ); ?>
                                                    </div>
                                                    <p class="wrap f-rubik">
														<?php the_sub_field( 'text' ); ?>
                                                    </p>
                                                    <div class="btn-slider">
                                                        <a href="#courses" class="fl-btn st-2">
                                                            <span class="inner">Explore course</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="sc-img fx">
                                                    <img src=<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/imgslhome2.jpg"
                                                         alt="">
                                                    <p>Sit amet consec teture adipiscing elit sed</p>
                                                </div>
												<?php
												$sliderImage = get_sub_field( 'slider_image' );
												if ( $sliderImage ): ?>
                                                    <div class="box-feature">
                                                        <div class="image">
															<?php echo wp_get_attachment_image( $sliderImage, 'full' ); ?>
                                                        </div>
                                                    </div>
												<?php endif; ?>
                                            </div>
										<?php
										endwhile;
									endif;
									?>
                                </div>
                            </div>
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