<?php
$homeCtaSectionMataQuery = [
	'key'     => 'section_type',
	'compare' => '=',
	'value'   => 'cta',
];

$homeCtaSectionArgs = [
	'post_type'           => 'section',
	'posts_per_page'      => 1,
	'meta_key'            => 'section_type',
	'meta_value'          => 'cta',
	'meta_query'          => $homeCtaSectionMataQuery,
	'ignore_sticky_posts' => true
];
$homeCtaSection     = new WP_Query( $homeCtaSectionArgs );
if ( $homeCtaSection->post_count > 0 ):
	if ( $homeCtaSection->have_posts() ): while ( $homeCtaSection->have_posts() ): $homeCtaSection->the_post(); ?>
        <section <?php post_class( 'tf-sc-contact' ); ?> id="<?php echo esc_attr( $post->post_name ); ?>">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="sc-contact wow fadeIn animated" data-wow-delay="0.3ms" data-wow-duration="1200ms">
							<?php if ( function_exists( 'get_field' ) ): ?>
                                <div class="wrap">
									<?php
									$ctaHeadline = get_field( 'cta_cta_headline' );
									$ctaText     = get_field( 'cta_cta_text' );
									if ( $ctaHeadline ) {
										echo '<h2 class="title clr-pri-1">' . esc_html( $ctaHeadline ) . '</h2>';
									}
									if ( $ctaText ) {
										echo '<p class="sub clr-pri-1 f-mulish">' . esc_html( $ctaText ) . '</p>';
									}
									?>
                                </div>
								<?php
								$ctaButton = get_field( 'cta_cta_button' );
								if ( $ctaButton ): ?>
                                    <div class="inner-sc-contact">
                                        <div class="box-btn">
                                            <a href="<?php echo esc_url( $ctaButton['url'] ); ?>" class="fl-btn st-9">
                                                <span class="inner">
                                                    <?php echo esc_html( $ctaButton['title'] ); ?>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
								<?php endif; endif; ?>
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