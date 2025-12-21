<section class="o-section c-section--main-page pt-0 relative">
	<img class="after-img" src="https://pro.barghapp.com/wp-content/uploads/2025/12/video-after.webp"
		 alt="برقآپ">
	<div class="o-section__wrapper">
		<div class="c-faq u-flex u-flex--column gap-md">
			<div class="c-sec-title txt-center">
				<h2 class="title c-title">
					ســـــوالات
					<span>
						متــــداول
					</span>
				</h2>
				<h3 class="sub-title mb-0">
					آینده تجمیع و فــروش برق نیروگاههای مقیاس کوچک از اینجا شروع می شود...
				</h3>
			</div>
			<div class="c-faq__content">

				<div class="faq">
					<?php

					if (have_rows('home-faq')):

						while (have_rows('home-faq')) : the_row(); ?>
							<div class="faq-item">
								<div class="faq-item-content">
									<div class="faq-question">
										<?php echo
										get_sub_field('question');
										?>
										<span class="faq-toggle">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										 xmlns="http://www.w3.org/2000/svg"> <path
											d="M12 16.8001C11.3 16.8001 10.6 16.5301 10.07 16.0001L3.55002 9.48014C3.26002 9.19014 3.26002 8.71014 3.55002 8.42014C3.84002 8.13014 4.32002 8.13014 4.61002 8.42014L11.13 14.9401C11.61 15.4201 12.39 15.4201 12.87 14.9401L19.39 8.42014C19.68 8.13014 20.16 8.13014 20.45 8.42014C20.74 8.71014 20.74 9.19014 20.45 9.48014L13.93 16.0001C13.4 16.5301 12.7 16.8001 12 16.8001Z"
											fill="#292D32"></path> </svg>
								</span>
									</div>
									<div class="faq-answer txt-justify">
										<p>
											<?php echo
											get_sub_field('answer');
											?>
										</p>
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
