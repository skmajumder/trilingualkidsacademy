<footer id="footer">
    <div class="footer-inner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="widget-footer">
						<?php
						if ( function_exists( 'get_option' ) ):
							$themeHeaderOptions = get_option( 'theme_framework' );
							$footerLogo = $themeHeaderOptions['newblog-footer-logo'];
							?>
                            <div class="widget widget-logo">
                                <div class="logo-bottom" id="logo-footer">
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <img src="<?php echo esc_url( $footerLogo ); ?>" alt="Logo">
                                    </a>
                                </div>
								<?php
								$description = $themeHeaderOptions['newblog-footer-description'];
								if ( $description ):
									echo '<p class="wrap f-mulish">' . esc_html( $description ) . '</p>';
								endif; ?>
                                <div class="list-contact">
                                    <ul>
										<?php
										$address = $themeHeaderOptions['newblog-footer-address'];
										if ( $address ):
											?>
                                            <li class="fx">
                                            <span>
                                                <i class="far fa-map-marker-alt"></i>
                                                <?php echo esc_html( $address ) ?>
                                            </span>
                                            </li>
										<?php
										endif;
										$email = $themeHeaderOptions['newblog-footer-email'];
										if ( $email ): ?>
                                            <li class="fx">
                                                <a href="mailto:<?php echo esc_html( $email ); ?>">
                                                    <i class="far fa-envelope"></i>
													<?php echo esc_html( $email ); ?>
                                                </a>
                                            </li>
										<?php
										endif;
										$phoneNumber = $themeHeaderOptions['newblog-footer-phone'];
										if ( $phoneNumber ): ?>
                                            <li class="fx">
                                                <a href="tel:<?php echo esc_attr( $phoneNumber ); ?>"><i
                                                            class="fal fa-phone"></i>
													<?php echo esc_html( $phoneNumber ); ?>
                                                </a>
                                            </li>
										<?php endif; ?>
                                    </ul>
                                </div>
                            </div>
						<?php endif; ?>

                        <div class="widget widget-link">
                            <h4 class="title-widget">Useful links</h4>
							<?php get_template_part( './template-parts/common/navigation/navigation', 'footer' ); ?>
                        </div>
						<?php $newPostArgsArgs = array(
							'posts_per_page'      => 3,
							'ignore_sticky_posts' => true,
						);
						$newPostArgs           = new WP_Query( $newPostArgsArgs );
						if ( $newPostArgs->post_count > 0 ): ?>
                            <div class="widget widget-news st-3">
                                <h4 class="title-widget">recent news</h4>
                                <ul class="list-news">

	                                <?php if ( $newPostArgs->have_posts() ): while ( $newPostArgs->have_posts() ): $newPostArgs->the_post(); ?>
                                        <li <?php post_class( 'fx' ); ?>>
			                                <?php the_post_thumbnail( 'thumb80', ['class' => 'feature'] ); ?>
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
                <div class="col-12">
                    <div class="footer-bottom jus-ct">
						<?php
						if ( function_exists( 'get_option' ) ):
							$newblogFooterOptions = get_option( 'theme_framework' );
							$newblogCopyrightText = $newblogFooterOptions['newblog-footer-copyright-text'];
							if ( $newblogCopyrightText ):
								echo '<p class="copy-right">' . $newblogCopyrightText . '</p>';
							else:
								echo '<p class="copy-right">&copy;' . date( "Y" ) . ' ' . get_bloginfo( 'name' ) . '. All rights reserved.</p>';
							endif;
						else:
							echo '<p class="copy-right">&copy;' . date( "Y" ) . ' ' . get_bloginfo( 'name' ) . '. All rights reserved.</p>';
						endif;
						?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<!-- /#wrapper -->

<a id="scroll-top"></a>
<?php wp_footer(); ?>
</body>

</html>