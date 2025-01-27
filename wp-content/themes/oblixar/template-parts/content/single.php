<div id="post-<?php the_ID(); ?>" class=" <?php post_class() ?> wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer oblixar-single__k__single-lAFSH8Xo9x-outer oblixar-local-716-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner oblixar-single__k__single-lAFSH8Xo9x-inner oblixar-local-716-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container oblixar-single__k__single-baLWB4dRKjp-container oblixar-local-717-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner oblixar-single__k__single-baLWB4dRKjp-inner oblixar-local-717-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container oblixar-single__k__single-kxeqsSpdy-n-container oblixar-local-718-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner oblixar-single__k__single-kxeqsSpdy-n-inner oblixar-local-718-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-3 v-inner-md-0 h-px-3 v-inner-0">
						<div class="position-relative wp-block-kubio-column__align oblixar-single__k__single-kxeqsSpdy-n-align oblixar-local-718-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container oblixar-single__k__single-rlYTEhTMib-container oblixar-local-719-container h-aspect-ratio--16-9 <?php oblixar_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
								<?php if(has_post_thumbnail()): ?>
								<img class='position-relative wp-block-kubio-post-featured-image__image oblixar-single__k__single-rlYTEhTMib-image oblixar-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
								<?php endif; ?>
								<div class="position-relative wp-block-kubio-post-featured-image__inner oblixar-single__k__single-rlYTEhTMib-inner oblixar-local-719-inner">
									<div class="position-relative wp-block-kubio-post-featured-image__align oblixar-single__k__single-rlYTEhTMib-align oblixar-local-719-align h-y-container align-self-lg-center align-self-md-center align-self-center"></div>
								</div>
							</figure>
							<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container oblixar-single__k__-JpD0wYe4-container oblixar-local-720-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
								<div class="position-relative wp-block-kubio-row__inner oblixar-single__k__-JpD0wYe4-inner oblixar-local-720-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container oblixar-single__k__xwkPdzy-1L-container oblixar-local-721-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner oblixar-single__k__xwkPdzy-1L-inner oblixar-local-721-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-1 h-px-md-0 v-inner-md-1 h-px-0 v-inner-1">
											<div class="position-relative wp-block-kubio-column__align oblixar-single__k__xwkPdzy-1L-align oblixar-local-721-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
												<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer oblixar-single__k__KGesgqe_P-metaDataContainer oblixar-local-722-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta" id="post-metadata">
													<span class="metadata-item">
														<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>">
															<?php echo esc_html(get_the_author_meta("display_name",get_post_field("post_author"))); ?>
														</a>
													</span>
													<span class="metadata-separator">
														-
													</span>
													<span class="metadata-item">
														<a href="<?php echo esc_url(get_day_link(get_post_time( 'Y' ),get_post_time( 'm' ),get_post_time( 'j' ))); ?>">
															<?php echo esc_html(get_the_date('F j, Y')); ?>
														</a>
													</span>
													<span class="metadata-separator">
														-
													</span>
													<span class="metadata-item">
														<a href="">
															<?php echo esc_html(get_the_time()); ?>
														</a>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container oblixar-single__k__m92gY2GWE_-container oblixar-local-723-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner oblixar-single__k__m92gY2GWE_-inner oblixar-local-723-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
											<div class="position-relative wp-block-kubio-column__align oblixar-single__k__m92gY2GWE_-align oblixar-local-723-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
												<div class="wp-block wp-block-kubio-post-categories  position-relative wp-block-kubio-post-categories__container oblixar-single__k__up5pQ_Cww-container oblixar-local-724-container kubio-post-categories-container" data-kubio="kubio/post-categories">
													<div class="position-relative wp-block-kubio-post-categories__placeholder oblixar-single__k__up5pQ_Cww-placeholder oblixar-local-724-placeholder kubio-post-categories-placeholder"></div>
													<div class="position-relative wp-block-kubio-post-categories__tags oblixar-single__k__up5pQ_Cww-tags oblixar-local-724-tags">
														<?php oblixar_categories_list(__('No category', 'oblixar')); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container oblixar-single__k__single-SbdKxHs2YI-container oblixar-local-725-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
								<div class="position-relative wp-block-kubio-row__inner oblixar-single__k__single-SbdKxHs2YI-inner oblixar-local-725-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container oblixar-single__k__single-3VGwAjm9cX-container oblixar-local-726-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner oblixar-single__k__single-3VGwAjm9cX-inner oblixar-local-726-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
											<div class="position-relative wp-block-kubio-column__align oblixar-single__k__single-3VGwAjm9cX-align oblixar-local-726-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
												<?php the_content(); ?>
												<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container oblixar-single__k__GarS7Zw9R-container oblixar-local-727-container gutters-row-lg-0 gutters-row-v-lg-2 gutters-row-md-0 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/row">
													<div class="position-relative wp-block-kubio-row__inner oblixar-single__k__GarS7Zw9R-inner oblixar-local-727-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-2 gutters-col-md-0 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
														<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container oblixar-single__k__U2e4gNfCQx-container oblixar-local-728-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
															<div class="position-relative wp-block-kubio-column__inner oblixar-single__k__U2e4gNfCQx-inner oblixar-local-728-inner d-flex h-flex-basis h-px-lg-1 v-inner-lg-1 h-px-md-1 v-inner-md-1 h-px-1 v-inner-1">
																<div class="position-relative wp-block-kubio-column__align oblixar-single__k__U2e4gNfCQx-align oblixar-local-728-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
																	<p class="wp-block wp-block-kubio-text  position-relative wp-block-kubio-text__text oblixar-single__k__single-1pwRcGAnh-text oblixar-local-729-text" data-kubio="kubio/text">
																		<?php esc_html_e('Tags:', 'oblixar'); ?>
																	</p>
																</div>
															</div>
														</div>
														<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container oblixar-single__k__jtdhSF-WbS-container oblixar-local-730-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
															<div class="position-relative wp-block-kubio-column__inner oblixar-single__k__jtdhSF-WbS-inner oblixar-local-730-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-1 h-px-md-0 v-inner-md-1 h-px-0 v-inner-1">
																<div class="position-relative wp-block-kubio-column__align oblixar-single__k__jtdhSF-WbS-align oblixar-local-730-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
																	<div class="wp-block wp-block-kubio-post-tags  position-relative wp-block-kubio-post-tags__container oblixar-single__k__single-tlSt_AyBi-container oblixar-local-731-container kubio-post-tags-container" data-kubio="kubio/post-tags">
																		<div class="position-relative wp-block-kubio-post-tags__placeholder oblixar-single__k__single-tlSt_AyBi-placeholder oblixar-local-731-placeholder kubio-post-tags-placeholder"></div>
																		<div class="position-relative wp-block-kubio-post-tags__tags oblixar-single__k__single-tlSt_AyBi-tags oblixar-local-731-tags">
																			<?php oblixar_tags_list(__('No tags', 'oblixar')); ?>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php if(oblixar_has_pagination()): ?>
							<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container oblixar-single__k__single-nqLiVZCaYo-container oblixar-local-732-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/query-pagination">
								<div class="position-relative wp-block-kubio-query-pagination__inner oblixar-single__k__single-nqLiVZCaYo-inner oblixar-local-732-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container oblixar-single__k__single-3ndM77FkZV-container oblixar-local-733-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner oblixar-single__k__single-3ndM77FkZV-inner oblixar-local-733-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
											<div class="position-relative wp-block-kubio-column__align oblixar-single__k__single-3ndM77FkZV-align oblixar-local-733-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
												<?php if(oblixar_has_pagination_button(true)): ?>
												<div class="position-relative wp-block-kubio-pagination-nav-button__spacing oblixar-single__k__single-ELgmeRXRD--spacing oblixar-local-734-spacing">
													<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer oblixar-single__k__single-ELgmeRXRD--outer oblixar-local-734-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
														<a class="position-relative wp-block-kubio-pagination-nav-button__link oblixar-single__k__single-ELgmeRXRD--link oblixar-local-734-link h-w-100 h-global-transition" href="<?php oblixar_get_navigation_button_link(true); ?>">
															<span class="position-relative wp-block-kubio-pagination-nav-button__text oblixar-single__k__single-ELgmeRXRD--text oblixar-local-734-text kubio-inherit-typography">
																<?php esc_html_e('Previous', 'oblixar'); ?>
															</span>
														</a>
													</span>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container oblixar-single__k__single-mMPMCQqWfs-container oblixar-local-735-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner oblixar-single__k__single-mMPMCQqWfs-inner oblixar-local-735-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
											<div class="position-relative wp-block-kubio-column__align oblixar-single__k__single-mMPMCQqWfs-align oblixar-local-735-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
												<?php if(oblixar_has_pagination_button()): ?>
												<div class="position-relative wp-block-kubio-pagination-nav-button__spacing oblixar-single__k__single-ACSe8L2gsX-spacing oblixar-local-736-spacing">
													<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer oblixar-single__k__single-ACSe8L2gsX-outer oblixar-local-736-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
														<a class="position-relative wp-block-kubio-pagination-nav-button__link oblixar-single__k__single-ACSe8L2gsX-link oblixar-local-736-link h-w-100 h-global-transition" href="<?php oblixar_get_navigation_button_link(); ?>">
															<span class="position-relative wp-block-kubio-pagination-nav-button__text oblixar-single__k__single-ACSe8L2gsX-text oblixar-local-736-text kubio-inherit-typography">
																<?php esc_html_e('Next', 'oblixar'); ?>
															</span>
														</a>
													</span>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endif; ?>
							<div class="wp-block wp-block-kubio-post-comments kubio-migration--1 position-relative wp-block-kubio-post-comments__commentsContainer oblixar-single__k__single-s5UQRGEAN-commentsContainer oblixar-local-737-commentsContainer" data-kubio="kubio/post-comments">
								<?php oblixar_post_comments(array (
  'none' => __('No responses yet', 'oblixar'),
  'one' => __('One response', 'oblixar'),
  'multiple' => __('{COMMENTS-COUNT} Responses', 'oblixar'),
  'disabled' => __('Comments are closed', 'oblixar'),
  'avatar_size' => __('32', 'oblixar'),
)); ?>
							</div>
							<div class="wp-block wp-block-kubio-post-comments-form  position-relative wp-block-kubio-post-comments-form__container oblixar-single__k__single-oXoikmHxB-container oblixar-local-738-container" data-kubio="kubio/post-comments-form">
								<?php comment_form(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
