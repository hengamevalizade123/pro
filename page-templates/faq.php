<?php
///* Template Name: Faq Page */
get_header();
?>
	<section class="o-section c-section--main-page pt-0">
		<div class="o-section__wrapper">
			<div class="c-breadcrumbs">
				<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
			</div>
			<h1 class="title title-left u-flex items-center gap-sm title-sec-content">
				<svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M17 18.4302H13L8.54999 21.3902C7.88999 21.8302 7 21.3602 7 20.5602V18.4302C4 18.4302 2 16.4302 2 13.4302V7.43018C2 4.43018 4 2.43018 7 2.43018H17C20 2.43018 22 4.43018 22 7.43018V13.4302C22 16.4302 20 18.4302 17 18.4302Z"
						stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
						stroke-linejoin="round"/>
					<path
						d="M12.0001 11.3599V11.1499C12.0001 10.4699 12.4201 10.1099 12.8401 9.81989C13.2501 9.53989 13.66 9.1799 13.66 8.5199C13.66 7.5999 12.9201 6.85986 12.0001 6.85986C11.0801 6.85986 10.3401 7.5999 10.3401 8.5199"
						stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M11.9955 13.75H12.0045" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
						  stroke-linejoin="round"/>
				</svg>
				ســـوالات
				<span>
					متــداول
				</span>
			</h1>
			<div class="c-faq u-flex u-flex--column gap-md">
				<div class="c-faq__content" id="not-interrupt">
					<div class="faq">
						<?php
						if (have_rows('faq')):
							while (have_rows('faq')) : the_row();
								$faq = get_sub_field('faq');
						?>
								<div class="faq-item">
									<div class="faq-item-content">
										<div class="faq-question">
											<?php echo $faq['question']?>
											<span class="faq-toggle"><svg width="24" height="24" viewBox="0 0 24 24"
																		  fill="none"
																		  xmlns="http://www.w3.org/2000/svg">
<path
	d="M12 16.8001C11.3 16.8001 10.6 16.5301 10.07 16.0001L3.55002 9.48014C3.26002 9.19014 3.26002 8.71014 3.55002 8.42014C3.84002 8.13014 4.32002 8.13014 4.61002 8.42014L11.13 14.9401C11.61 15.4201 12.39 15.4201 12.87 14.9401L19.39 8.42014C19.68 8.13014 20.16 8.13014 20.45 8.42014C20.74 8.71014 20.74 9.19014 20.45 9.48014L13.93 16.0001C13.4 16.5301 12.7 16.8001 12 16.8001Z"
	fill="#292D32"></path>
</svg></span>
										</div>
										<div class="faq-answer">
											<?php echo $faq['answer']?>
										</div>
									</div>
								</div>
							<?php
							endwhile;
						endif;
						?>
					</div>
				</div>

			</div>
		</div>
	</section>
<?php
get_footer();
