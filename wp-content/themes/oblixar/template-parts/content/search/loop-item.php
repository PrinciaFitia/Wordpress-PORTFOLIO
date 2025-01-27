<div class="<?php oblixar_print_archive_entry_class('wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container oblixar-search__k__fx1L_l5Ny--container oblixar-local-590-container d-flex   '); ?>" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner oblixar-search__k__fx1L_l5Ny--inner oblixar-local-590-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-3 h-px-md-3 v-inner-md-3 h-px-3 v-inner-3">
		<div class="position-relative wp-block-kubio-query-loop-item__align oblixar-search__k__fx1L_l5Ny--align oblixar-local-590-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer oblixar-search__k__T2yqalWyM-metaDataContainer oblixar-local-591-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta">
				<span class="metadata-item">
					<span class="metadata-prefix">
						<?php esc_html_e('by', 'oblixar'); ?>
					</span>
					<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>">
						<?php echo esc_html(get_the_author_meta("display_name",get_post_field("post_author"))); ?>
					</a>
				</span>
			</div>
			<a class="position-relative wp-block-kubio-post-title__link oblixar-search__k__yndIzn0LAb-link oblixar-local-592-link d-block" href="<?php echo esc_url(get_the_permalink()); ?>">
				<h3 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container oblixar-search__k__yndIzn0LAb-container oblixar-local-592-container" data-kubio="kubio/post-title">
					<?php the_title(); ?>
				</h3>
			</a>
			<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text oblixar-search__k__fVTtKcA3Zp-text oblixar-local-593-text" data-kubio="kubio/post-excerpt">
				<?php oblixar_post_excerpt(array (
  'max_length' => 16,
)); ?>
			</p>
			<div class="position-relative wp-block-kubio-read-more-button__spacing oblixar-search__k__Nkoml9icTkj-spacing oblixar-local-594-spacing">
				<span class="wp-block wp-block-kubio-read-more-button  position-relative wp-block-kubio-read-more-button__outer oblixar-search__k__Nkoml9icTkj-outer oblixar-local-594-outer kubio-button-container" data-kubio="kubio/read-more-button">
					<a class="position-relative wp-block-kubio-read-more-button__link oblixar-search__k__Nkoml9icTkj-link oblixar-local-594-link h-w-100 h-global-transition" href="<?php echo esc_url(get_the_permalink()); ?>">
						<span class="position-relative wp-block-kubio-read-more-button__text oblixar-search__k__Nkoml9icTkj-text oblixar-local-594-text kubio-inherit-typography">
							<?php esc_html_e('Read more', 'oblixar'); ?>
						</span>
					</a>
				</span>
			</div>
		</div>
	</div>
</div>
