<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer oblixar-index__k__1MCYzfcZN-outer oblixar-local-370-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner oblixar-index__k__1MCYzfcZN-inner oblixar-local-370-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container oblixar-index__k__baLWB4dRKjp-container oblixar-local-371-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-3 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner oblixar-index__k__baLWB4dRKjp-inner oblixar-local-371-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-3 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container oblixar-index__k__kxeqsSpdy-n-container oblixar-local-372-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner oblixar-index__k__kxeqsSpdy-n-inner oblixar-local-372-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-0 h-px-md-2 v-inner-md-0 h-px-2 v-inner-0">
						<div class="position-relative wp-block-kubio-column__align oblixar-index__k__kxeqsSpdy-n-align oblixar-local-372-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container oblixar-index__k__CtKC_EuIZL-container oblixar-local-373-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container oblixar-index__k__vrf0UGkWrN-container oblixar-local-374-container gutters-row-lg-2 gutters-row-v-lg-3 gutters-row-md-2 gutters-row-v-md-3 gutters-row-0 gutters-row-v-3" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:&quot;1&quot;,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner oblixar-index__k__vrf0UGkWrN-inner oblixar-local-374-inner h-row">
										<?php oblixar_theme()->get('archive-loop')->render(array (
  'view' => 'content/index/loop-item',
)); ?>
									</div>
								</div>
								<?php if(oblixar_has_pagination()): ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container oblixar-index__k__vD7AVCTELY-container oblixar-local-384-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner oblixar-index__k__vD7AVCTELY-inner oblixar-local-384-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container oblixar-index__k__tBYU0uM8Xx-container oblixar-local-385-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner oblixar-index__k__tBYU0uM8Xx-inner oblixar-local-385-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align oblixar-index__k__tBYU0uM8Xx-align oblixar-local-385-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(oblixar_has_pagination_button(true)): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing oblixar-index__k__ELgmeRXRD--spacing oblixar-local-386-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer oblixar-index__k__ELgmeRXRD--outer oblixar-local-386-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link oblixar-index__k__ELgmeRXRD--link oblixar-local-386-link h-w-100 h-global-transition" href="<?php oblixar_get_navigation_button_link(true); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text oblixar-index__k__ELgmeRXRD--text oblixar-local-386-text kubio-inherit-typography">
																	<?php esc_html_e('Previous', 'oblixar'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container oblixar-index__k__P2OarhUKUK-container oblixar-local-387-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner oblixar-index__k__P2OarhUKUK-inner oblixar-local-387-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align oblixar-index__k__P2OarhUKUK-align oblixar-local-387-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer oblixar-index__k__tRiQFlrj8q-outer oblixar-local-388-outer" data-kubio="kubio/pagination-numbers">
														<?php oblixar_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container oblixar-index__k__2nd5yuWmz9-container oblixar-local-389-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner oblixar-index__k__2nd5yuWmz9-inner oblixar-local-389-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align oblixar-index__k__2nd5yuWmz9-align oblixar-local-389-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(oblixar_has_pagination_button()): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing oblixar-index__k__ACSe8L2gsX-spacing oblixar-local-390-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer oblixar-index__k__ACSe8L2gsX-outer oblixar-local-390-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link oblixar-index__k__ACSe8L2gsX-link oblixar-local-390-link h-w-100 h-global-transition" href="<?php oblixar_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text oblixar-index__k__ACSe8L2gsX-text oblixar-local-390-text kubio-inherit-typography">
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>