<section class="o-section c-section--steps relative overflow-x-hidden">
	<div class="o-section__wrapper">
		<div class="c-home-steps">
			<div class="c-sec-title txt-center">
				<h2 class="title c-title">
					چــــــرا
					<span>
						 بـــرق‌آپ پـــــــرو
					</span>
				</h2>
				<h3 class="sub-title mb-0">
					آینده تجمیع و فــروش برق نیروگاههای مقیاس کوچک از اینجا شروع می شود...
				</h3>
			</div>
			<div class="c-home-steps__content relative w-100">
				<ul class="p-0 m-0 u-flex wrap gap-md space-between">
					<?php
					if (have_rows('home-reseon')):
						while (have_rows('home-reseon')): the_row();
								?>
								<li>
						<span>
							۰۱
						</span>
									<h4>
									<?php echo get_sub_field('reseon-item-01')['title-item-01']?>
									</h4>
									<p>
										<?php echo get_sub_field('reseon-item-01')['desc-item-01']?>
									</p>
								</li>
								<li>
						<span>
							۰۲
						</span>
									<h4>
										<?php echo get_sub_field('reseon-item-02')['title-item-02']?>
									</h4>
									<p>
										<?php echo get_sub_field('reseon-item-02')['desc-item-02']?>
									</p>
								</li>
								<li>
						<span>
							۰۳
						</span>
									<h4>
										<?php echo get_sub_field('reseon-item-03')['title-item-03']?>
									</h4>
									<p>
										<?php echo get_sub_field('reseon-item-03')['desc-item-03']?>
									</p>
								</li>
								<li>
						<span>
							۰۴
						</span>
									<h4>
										<?php echo get_sub_field('reseon-item-04')['title-item-04']?>
									</h4>
									<p>
										<?php echo get_sub_field('reseon-item-04')['desc-item-04']?>
									</p>
								</li>
								<li>
						<span>
							۰۵
						</span>
									<h4>
										<?php echo get_sub_field('reseon-item-05')['title-item-05']?>
									</h4>
									<p>
										<?php echo get_sub_field('reseon-item-05')['desc-item-05']?>
									</p>
								</li>
								<li>
						<span>
							۰۶
						</span>
									<h4>
										<?php echo get_sub_field('reseon-item-06')['title-item-06']?>
									</h4>
									<p>
										<?php echo get_sub_field('reseon-item-06')['desc-item-06']?>
									</p>
								</li>
							<li>
								<a class="u-flex" href="https://barghappro.com/login">
									<img class="img-video-bef img-video-left border-radius w-100"
										 src="<?php echo get_sub_field('img-item-07')['url']?>"
										 alt="<?php echo get_sub_field('img-item-07')['alt']?>">
								</a>
							</li>
							<?php
						endwhile;
					endif;
					?>
				</ul>
			</div>
		</div>
	</div>
	<img class="before-img" src="https://pro.barghapp.com/wp-content/uploads/2025/12/video-before.webp"
		 alt="برقآپ">
</section>
