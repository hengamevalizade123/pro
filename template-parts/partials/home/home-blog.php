<section class="o-section c-section--home-blog pt-0">
	<div class="o-section__wrapper">
		<div class="c-home-blog">
			<div class="c-sec-title txt-center">
				<h2 class="title c-title">
					مقالات و اخبار
					<span>
						 برق‌آپ پــــرو
					</span>
				</h2>
				<h3 class="sub-title mb-0">
					بــــروز تــــرین آمــــوزش ها و اخبــار صــنــعــت بــــرق
				</h3>
			</div>
			<div class="carousel c-slider-blogs h-100"
				 data-flickity='{"wrapAround": true, "autoPlay": 3500,"prevNextButtons": false,"cellAlign": "right","groupCells": true}'>
<!--				--><?php
//				$args = array(
//					'post_type' => 'post',
//					'posts_per_page' => 8,
//					'orderby' => 'date',
//					'order' => 'DESC'
//				);
//
//				$latest_posts = new WP_Query($args);
//
//				if ($latest_posts->have_posts()) :
//					while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
<!--						<div class="carousel-cell w-100 border-radius">-->
<!--							<div class="border-box w-100 padding-md u-flex u-flex--column h-100">-->
<!--								<div class="item-before-content u-flex gap-md u-flex--column relative w-100">-->
<!--									<a class="c-blog__img u-flex w-100" href="--><?php //the_permalink(); ?><!--">-->
<!--										<img class="w-100 border-radius cover"-->
<!--											 src="--><?php //echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?><!--"-->
<!--											 alt="--><?php //the_title_attribute(); ?><!--">-->
<!--									</a>-->
<!--									<div class="c-home-blog__item-info u-flex gap-md u-flex--column">-->
<!--										<div class="txt-overflow c-blog__meta u-flex gap-sm space-between">-->
<!--											<p class="m-0 u-flex gap-sm">-->
<!--												<svg width="18" height="18" viewBox="0 0 24 24" fill="none"-->
<!--													 xmlns="http://www.w3.org/2000/svg">-->
<!--													<path-->
<!--														d="M20.75 13.25C20.75 18.08 16.83 22 12 22C7.17 22 3.25 18.08 3.25 13.25C3.25 8.42 7.17 4.5 12 4.5C16.83 4.5 20.75 8.42 20.75 13.25Z"-->
<!--														stroke="#42465399" stroke-width="1.5"-->
<!--														stroke-linecap="round"-->
<!--														stroke-linejoin="round"/>-->
<!--													<path d="M12 8V13" stroke="#42465399" stroke-width="1.5"-->
<!--														  stroke-linecap="round" stroke-linejoin="round"/>-->
<!--													<path d="M9 2H15" stroke="#42465399" stroke-width="1.5"-->
<!--														  stroke-miterlimit="10" stroke-linecap="round"-->
<!--														  stroke-linejoin="round"/>-->
<!--												</svg>-->
<!--												مطالعه :-->
<!--												--><?php //echo reading_time()?>
<!---->
<!--											</p>-->
<!--											<p class="m-0 u-flex gap-sm">-->
<!--												<svg width="18" height="18" viewBox="0 0 24 24" fill="none"-->
<!--													 xmlns="http://www.w3.org/2000/svg">-->
<!--													<path d="M8 2V5" stroke="#42465399" stroke-width="1.5"-->
<!--														  stroke-miterlimit="10" stroke-linecap="round"-->
<!--														  stroke-linejoin="round"/>-->
<!--													<path d="M16 2V5" stroke="#42465399" stroke-width="1.5"-->
<!--														  stroke-miterlimit="10" stroke-linecap="round"-->
<!--														  stroke-linejoin="round"/>-->
<!--													<path d="M3.5 9.09H20.5" stroke="#42465399"-->
<!--														  stroke-width="1.5"-->
<!--														  stroke-miterlimit="10" stroke-linecap="round"-->
<!--														  stroke-linejoin="round"/>-->
<!--													<path-->
<!--														d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"-->
<!--														stroke="#42465399" stroke-width="1.5"-->
<!--														stroke-miterlimit="10"-->
<!--														stroke-linecap="round" stroke-linejoin="round"/>-->
<!--													<path d="M15.6947 13.7H15.7037" stroke="#42465399"-->
<!--														  stroke-width="2"-->
<!--														  stroke-linecap="round" stroke-linejoin="round"/>-->
<!--													<path d="M15.6947 16.7H15.7037" stroke="#42465399"-->
<!--														  stroke-width="2"-->
<!--														  stroke-linecap="round" stroke-linejoin="round"/>-->
<!--													<path d="M11.9955 13.7H12.0045" stroke="#42465399"-->
<!--														  stroke-width="2"-->
<!--														  stroke-linecap="round" stroke-linejoin="round"/>-->
<!--													<path d="M11.9955 16.7H12.0045" stroke="#42465399"-->
<!--														  stroke-width="2"-->
<!--														  stroke-linecap="round" stroke-linejoin="round"/>-->
<!--													<path d="M8.29431 13.7H8.30329" stroke="#42465399"-->
<!--														  stroke-width="2"-->
<!--														  stroke-linecap="round" stroke-linejoin="round"/>-->
<!--													<path d="M8.29431 16.7H8.30329" stroke="#42465399"-->
<!--														  stroke-width="2"-->
<!--														  stroke-linecap="round" stroke-linejoin="round"/>-->
<!--												</svg>-->
<!--												--><?php //echo get_the_date('j F Y'); ?>
<!--											</p>-->
<!--										</div>-->
<!--										<div class="c-blog__info u-flex u-flex--column gap-md">-->
<!--											<a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a>-->
<!--											<p class="clamp m-0 txt-justify">--><?php //echo wp_trim_words(get_the_excerpt(), 30, '...'); ?><!--</p>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div class="c-btn-read-more relative items-center u-flex justify-end">-->
<!--									<a href="--><?php //the_permalink(); ?><!--" type="submit"-->
<!--									   class="c-btn-primary p-0 u-flex items-center w-100">-->
<!--										<span>ادامه مطلب</span>-->
<!--									</a>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					--><?php //endwhile;
//					wp_reset_postdata();
//				else : ?>
<!--					<div>هیچ مطلبی یافت نشد.</div>-->
<!--				--><?php //endif; ?>
				<div class="carousel-cell w-100 border-radius">
					<div class="border-box w-100 padding-md u-flex u-flex--column h-100">
						<div class="item-before-content u-flex gap-md u-flex--column relative w-100">
							<a class="c-blog__img u-flex w-100" href="https://pro.barghapp.com/news/instruction-compiler/">
								<img class="w-100 border-radius cover"
									 src="https://pro.barghapp.com/wp-content/uploads/2025/12/Screenshot-2025-12-23-084319.png"
									 alt="دستورالعمل تجمیع کننده">
							</a>
							<div class="c-home-blog__item-info u-flex gap-md u-flex--column">
								<div class="txt-overflow c-blog__meta u-flex gap-sm space-between">
									<p class="m-0 u-flex gap-sm">
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
											 xmlns="http://www.w3.org/2000/svg">
											<path
												d="M20.75 13.25C20.75 18.08 16.83 22 12 22C7.17 22 3.25 18.08 3.25 13.25C3.25 8.42 7.17 4.5 12 4.5C16.83 4.5 20.75 8.42 20.75 13.25Z"
												stroke="#42465399" stroke-width="1.5"
												stroke-linecap="round"
												stroke-linejoin="round"/>
											<path d="M12 8V13" stroke="#42465399" stroke-width="1.5"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M9 2H15" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
										</svg>
										مطالعه :
										۴ دقیقه
									</p>
									<p class="m-0 u-flex gap-sm">
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
											 xmlns="http://www.w3.org/2000/svg">
											<path d="M8 2V5" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path d="M16 2V5" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path d="M3.5 9.09H20.5" stroke="#42465399"
												  stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path
												d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
												stroke="#42465399" stroke-width="1.5"
												stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.6947 13.7H15.7037" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.6947 16.7H15.7037" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11.9955 13.7H12.0045" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11.9955 16.7H12.0045" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8.29431 13.7H8.30329" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8.29431 16.7H8.30329" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
										۲ دی ۱۴۰۴
									</p>
								</div>
								<div class="c-blog__info u-flex u-flex--column gap-md">
									<a href="https://pro.barghapp.com/news/instruction-compiler/">دستورالعمل تجمیع کننده
									</a>
									<p class="clamp m-0 txt-justify">
										دستورالعمل عرضه و تبادل برق تجدیدپذیر از طریق نیروگاه مجازی (تجمیع کننده) در تابلوی برق سبز بورس انرژی
									</p>
								</div>
							</div>
						</div>
						<div class="c-btn-read-more relative items-center u-flex justify-end">
							<a href="https://pro.barghapp.com/news/instruction-compiler/" type="submit"
							   class="c-btn-primary p-0 u-flex items-center w-100">
								<span>ادامه مطلب</span>
							</a>
						</div>
					</div>
				</div>
				<div class="carousel-cell w-100 border-radius">
					<div class="border-box w-100 padding-md u-flex u-flex--column h-100">
						<div class="item-before-content u-flex gap-md u-flex--column relative w-100">
							<a class="c-blog__img u-flex w-100" href="https://barghapp.com/news/barghapp-digital-systems-launch/">
								<img class="w-100 border-radius cover"
									 src="https://pro.barghapp.com/wp-content/uploads/2025/11/samane.gif"
									 alt="برق آپ پرو">
							</a>
							<div class="c-home-blog__item-info u-flex gap-md u-flex--column">
								<div class="txt-overflow c-blog__meta u-flex gap-sm space-between">
									<p class="m-0 u-flex gap-sm">
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
											 xmlns="http://www.w3.org/2000/svg">
											<path
												d="M20.75 13.25C20.75 18.08 16.83 22 12 22C7.17 22 3.25 18.08 3.25 13.25C3.25 8.42 7.17 4.5 12 4.5C16.83 4.5 20.75 8.42 20.75 13.25Z"
												stroke="#42465399" stroke-width="1.5"
												stroke-linecap="round"
												stroke-linejoin="round"/>
											<path d="M12 8V13" stroke="#42465399" stroke-width="1.5"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M9 2H15" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
										</svg>
										مطالعه :
										<?php echo reading_time()?>
									</p>
									<p class="m-0 u-flex gap-sm">
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
											 xmlns="http://www.w3.org/2000/svg">
											<path d="M8 2V5" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path d="M16 2V5" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path d="M3.5 9.09H20.5" stroke="#42465399"
												  stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path
												d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
												stroke="#42465399" stroke-width="1.5"
												stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.6947 13.7H15.7037" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.6947 16.7H15.7037" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11.9955 13.7H12.0045" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11.9955 16.7H12.0045" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8.29431 13.7H8.30329" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8.29431 16.7H8.30329" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
										آبان ۲۲, ۱۴۰۴
									</p>
								</div>
								<div class="c-blog__info u-flex u-flex--column gap-md">
									<a href="https://barghapp.com/news/barghapp-digital-systems-launch/">رونمایی از چهار سامانه هوشمند برق‌آپ در حضور وزیر نیرو </a>
									<p class="clamp m-0 txt-justify">در نخستین روز از بیست‌و‌پنجمین نمایشگاه بین‌المللی صنعت برق ایران، که از
										سه‌شنبه ۲۰ آبان تا جمعه ۲۳ آبان در
										محل دائمی نمایشگاه‌های بین‌المللی تهران برگزار شد...
									</p>
								</div>
							</div>
						</div>
						<div class="c-btn-read-more relative items-center u-flex justify-end">
							<a href="https://barghapp.com/news/barghapp-digital-systems-launch/" type="submit"
							   class="c-btn-primary p-0 u-flex items-center w-100">
								<span>ادامه مطلب</span>
							</a>
						</div>
					</div>
				</div>
				<div class="carousel-cell w-100 border-radius">
					<div class="border-box w-100 padding-md u-flex u-flex--column h-100">
						<div class="item-before-content u-flex gap-md u-flex--column relative w-100">
							<a class="c-blog__img u-flex w-100" href="https://barghapp.com/news/transformation-of-digital-electricity/">
								<img class="w-100 border-radius cover"
									 src="https://pro.barghapp.com/wp-content/uploads/2025/11/220816521322dc0.gif"
									 alt="برقآپ گام بزرگ در تحول دیجیتال صنعت برق ایران">
							</a>
							<div class="c-home-blog__item-info u-flex gap-md u-flex--column">
								<div class="txt-overflow c-blog__meta u-flex gap-sm space-between">
									<p class="m-0 u-flex gap-sm">
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
											 xmlns="http://www.w3.org/2000/svg">
											<path
												d="M20.75 13.25C20.75 18.08 16.83 22 12 22C7.17 22 3.25 18.08 3.25 13.25C3.25 8.42 7.17 4.5 12 4.5C16.83 4.5 20.75 8.42 20.75 13.25Z"
												stroke="#42465399" stroke-width="1.5"
												stroke-linecap="round"
												stroke-linejoin="round"/>
											<path d="M12 8V13" stroke="#42465399" stroke-width="1.5"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M9 2H15" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
										</svg>
										مطالعه :
										<?php echo reading_time()?>
									</p>
									<p class="m-0 u-flex gap-sm">
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
											 xmlns="http://www.w3.org/2000/svg">
											<path d="M8 2V5" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path d="M16 2V5" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path d="M3.5 9.09H20.5" stroke="#42465399"
												  stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path
												d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
												stroke="#42465399" stroke-width="1.5"
												stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.6947 13.7H15.7037" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.6947 16.7H15.7037" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11.9955 13.7H12.0045" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11.9955 16.7H12.0045" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8.29431 13.7H8.30329" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8.29431 16.7H8.30329" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
										آبان ۱۲, ۱۴۰۴
									</p>
								</div>
								<div class="c-blog__info u-flex u-flex--column gap-md">
									<a href="https://barghapp.com/news/transformation-of-digital-electricity/">برقآپ گام بزرگ در تحول دیجیتال صنعت برق ایران </a>
									<p class="clamp m-0 txt-justify">
										ما در برقآپ گام بزرگی در مسیر تحول دیجیتال صنعت برق ایران برداشته‌ایم.
										در آستانه برگزاری بیست و پنجمین نمایشگاه بین‌المللی صنعت برق ایران، نام برقآپ بیش از ...
									</p>
								</div>
							</div>
						</div>
						<div class="c-btn-read-more relative items-center u-flex justify-end">
							<a href="https://barghapp.com/news/transformation-of-digital-electricity/" type="submit"
							   class="c-btn-primary p-0 u-flex items-center w-100">
								<span>ادامه مطلب</span>
							</a>
						</div>
					</div>
				</div>
				<div class="carousel-cell w-100 border-radius">
					<div class="border-box w-100 padding-md u-flex u-flex--column h-100">
						<div class="item-before-content u-flex gap-md u-flex--column relative w-100">
							<a class="c-blog__img u-flex w-100" href="https://barghapp.com/news/degree-certificate/">
								<img class="w-100 border-radius cover"
									 src="https://pro.barghapp.com/wp-content/uploads/2025/11/certifcate.gif"
									 alt="انجام نخستین معامله گواهی ظرفیت با مشارکت فعال خرده‌فروش برق‌آپ">
							</a>
							<div class="c-home-blog__item-info u-flex gap-md u-flex--column">
								<div class="txt-overflow c-blog__meta u-flex gap-sm space-between">
									<p class="m-0 u-flex gap-sm">
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
											 xmlns="http://www.w3.org/2000/svg">
											<path
												d="M20.75 13.25C20.75 18.08 16.83 22 12 22C7.17 22 3.25 18.08 3.25 13.25C3.25 8.42 7.17 4.5 12 4.5C16.83 4.5 20.75 8.42 20.75 13.25Z"
												stroke="#42465399" stroke-width="1.5"
												stroke-linecap="round"
												stroke-linejoin="round"/>
											<path d="M12 8V13" stroke="#42465399" stroke-width="1.5"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M9 2H15" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
										</svg>
										مطالعه :
										۴ دقیقه
									</p>
									<p class="m-0 u-flex gap-sm">
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
											 xmlns="http://www.w3.org/2000/svg">
											<path d="M8 2V5" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path d="M16 2V5" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path d="M3.5 9.09H20.5" stroke="#42465399"
												  stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path
												d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
												stroke="#42465399" stroke-width="1.5"
												stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.6947 13.7H15.7037" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.6947 16.7H15.7037" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11.9955 13.7H12.0045" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11.9955 16.7H12.0045" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8.29431 13.7H8.30329" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8.29431 16.7H8.30329" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
										آبان ۲۸, ۱۴۰۴
									</p>
								</div>
								<div class="c-blog__info u-flex u-flex--column gap-md">
									<a href="https://barghapp.com/news/degree-certificate/">انجام نخستین معامله گواهی ظرفیت با مشارکت فعال خرده‌فروش برق‌آپ</a>
									<p class="clamp m-0 txt-justify">
										با پیگیری‌ها و هماهنگی‌های انجام‌شده توسط «برق‌آپ»، نخستین معامله گواهی ظرفیت با نقش‌آفرینی یک خرده‌فروش در کشور نهایی شد....
									</p>
								</div>
							</div>
						</div>
						<div class="c-btn-read-more relative items-center u-flex justify-end">
							<a href="https://barghapp.com/news/degree-certificate/" type="submit"
							   class="c-btn-primary p-0 u-flex items-center w-100">
								<span>ادامه مطلب</span>
							</a>
						</div>
					</div>
				</div>
				<div class="carousel-cell w-100 border-radius">
					<div class="border-box w-100 padding-md u-flex u-flex--column h-100">
						<div class="item-before-content u-flex gap-md u-flex--column relative w-100">
							<a class="c-blog__img u-flex w-100" href="https://plus.barghapp.com/blog/purpose-of-retailing-electricity/">
								<img class="w-100 border-radius cover"
									 src="https://pro.barghapp.com/wp-content/uploads/2025/11/SE-Vehicle-to-Grid-1.gif"
									 alt="هدف از خرده فروشی برق چیست؟">
							</a>
							<div class="c-home-blog__item-info u-flex gap-md u-flex--column">
								<div class="txt-overflow c-blog__meta u-flex gap-sm space-between">
									<p class="m-0 u-flex gap-sm">
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
											 xmlns="http://www.w3.org/2000/svg">
											<path
												d="M20.75 13.25C20.75 18.08 16.83 22 12 22C7.17 22 3.25 18.08 3.25 13.25C3.25 8.42 7.17 4.5 12 4.5C16.83 4.5 20.75 8.42 20.75 13.25Z"
												stroke="#42465399" stroke-width="1.5"
												stroke-linecap="round"
												stroke-linejoin="round"/>
											<path d="M12 8V13" stroke="#42465399" stroke-width="1.5"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M9 2H15" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
										</svg>
										مطالعه :
										۴ دقیقه
									</p>
									<p class="m-0 u-flex gap-sm">
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
											 xmlns="http://www.w3.org/2000/svg">
											<path d="M8 2V5" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path d="M16 2V5" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path d="M3.5 9.09H20.5" stroke="#42465399"
												  stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path
												d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
												stroke="#42465399" stroke-width="1.5"
												stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.6947 13.7H15.7037" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.6947 16.7H15.7037" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11.9955 13.7H12.0045" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11.9955 16.7H12.0045" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8.29431 13.7H8.30329" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8.29431 16.7H8.30329" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
										آبان ۲۸, ۱۴۰۴
									</p>
								</div>
								<div class="c-blog__info u-flex u-flex--column gap-md">
									<a href="https://plus.barghapp.com/blog/purpose-of-retailing-electricity/">هدف از خرده فروشی برق چیست؟</a>
									<p class="clamp m-0 txt-justify">
										هدف از خرده ‌فروشی برق بهبود فرآیند خرید و فروش برق برای مصرف‌کنندگان و فروشندگان است. این مدل به مصرف‌کنندگان این امکان را می‌دهد که انتخاب های خود را در مورد منبع برق، نرخ قیمت و خدمات مرتبط با برق انجام دهند...
									</p>
								</div>
							</div>
						</div>
						<div class="c-btn-read-more relative items-center u-flex justify-end">
							<a href="https://plus.barghapp.com/blog/purpose-of-retailing-electricity/" type="submit"
							   class="c-btn-primary p-0 u-flex items-center w-100">
								<span>ادامه مطلب</span>
							</a>
						</div>
					</div>
				</div>
				<div class="carousel-cell w-100 border-radius">
					<div class="border-box w-100 padding-md u-flex u-flex--column h-100">
						<div class="item-before-content u-flex gap-md u-flex--column relative w-100">
							<a class="c-blog__img u-flex w-100" href="https://barghapp.com/news/transformation-of-digital-electricity/">
								<img class="w-100 border-radius cover"
									 src="https://pro.barghapp.com/wp-content/uploads/2025/11/220816521322dc0.gif"
									 alt="برقآپ گام بزرگ در تحول دیجیتال صنعت برق ایران">
							</a>
							<div class="c-home-blog__item-info u-flex gap-md u-flex--column">
								<div class="txt-overflow c-blog__meta u-flex gap-sm space-between">
									<p class="m-0 u-flex gap-sm">
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
											 xmlns="http://www.w3.org/2000/svg">
											<path
												d="M20.75 13.25C20.75 18.08 16.83 22 12 22C7.17 22 3.25 18.08 3.25 13.25C3.25 8.42 7.17 4.5 12 4.5C16.83 4.5 20.75 8.42 20.75 13.25Z"
												stroke="#42465399" stroke-width="1.5"
												stroke-linecap="round"
												stroke-linejoin="round"/>
											<path d="M12 8V13" stroke="#42465399" stroke-width="1.5"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M9 2H15" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
										</svg>
										مطالعه :
										<?php echo reading_time()?>
									</p>
									<p class="m-0 u-flex gap-sm">
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
											 xmlns="http://www.w3.org/2000/svg">
											<path d="M8 2V5" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path d="M16 2V5" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path d="M3.5 9.09H20.5" stroke="#42465399"
												  stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path
												d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
												stroke="#42465399" stroke-width="1.5"
												stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.6947 13.7H15.7037" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.6947 16.7H15.7037" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11.9955 13.7H12.0045" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11.9955 16.7H12.0045" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8.29431 13.7H8.30329" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8.29431 16.7H8.30329" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
										آبان ۱۲, ۱۴۰۴
									</p>
								</div>
								<div class="c-blog__info u-flex u-flex--column gap-md">
									<a href="https://barghapp.com/news/transformation-of-digital-electricity/">برقآپ گام بزرگ در تحول دیجیتال صنعت برق ایران </a>
									<p class="clamp m-0 txt-justify">
										ما در برقآپ گام بزرگی در مسیر تحول دیجیتال صنعت برق ایران برداشته‌ایم.
										در آستانه برگزاری بیست و پنجمین نمایشگاه بین‌المللی صنعت برق ایران، نام برقآپ بیش از ...
									</p>
								</div>
							</div>
						</div>
						<div class="c-btn-read-more relative items-center u-flex justify-end">
							<a href="https://barghapp.com/news/transformation-of-digital-electricity/" type="submit"
							   class="c-btn-primary p-0 u-flex items-center w-100">
								<span>ادامه مطلب</span>
							</a>
						</div>
					</div>
				</div>
				<div class="carousel-cell w-100 border-radius">
					<div class="border-box w-100 padding-md u-flex u-flex--column h-100">
						<div class="item-before-content u-flex gap-md u-flex--column relative w-100">
							<a class="c-blog__img u-flex w-100" href="https://barghapp.com/news/barghapp-digital-systems-launch/">
								<img class="w-100 border-radius cover"
									 src="https://pro.barghapp.com/wp-content/uploads/2025/11/samane.gif"
									 alt="برق آپ پرو">
							</a>
							<div class="c-home-blog__item-info u-flex gap-md u-flex--column">
								<div class="txt-overflow c-blog__meta u-flex gap-sm space-between">
									<p class="m-0 u-flex gap-sm">
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
											 xmlns="http://www.w3.org/2000/svg">
											<path
												d="M20.75 13.25C20.75 18.08 16.83 22 12 22C7.17 22 3.25 18.08 3.25 13.25C3.25 8.42 7.17 4.5 12 4.5C16.83 4.5 20.75 8.42 20.75 13.25Z"
												stroke="#42465399" stroke-width="1.5"
												stroke-linecap="round"
												stroke-linejoin="round"/>
											<path d="M12 8V13" stroke="#42465399" stroke-width="1.5"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M9 2H15" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
										</svg>
										مطالعه :
										<?php echo reading_time()?>
									</p>
									<p class="m-0 u-flex gap-sm">
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
											 xmlns="http://www.w3.org/2000/svg">
											<path d="M8 2V5" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path d="M16 2V5" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path d="M3.5 9.09H20.5" stroke="#42465399"
												  stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path
												d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
												stroke="#42465399" stroke-width="1.5"
												stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.6947 13.7H15.7037" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.6947 16.7H15.7037" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11.9955 13.7H12.0045" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11.9955 16.7H12.0045" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8.29431 13.7H8.30329" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8.29431 16.7H8.30329" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
										آبان ۲۲, ۱۴۰۴
									</p>
								</div>
								<div class="c-blog__info u-flex u-flex--column gap-md">
									<a href="https://barghapp.com/news/barghapp-digital-systems-launch/">رونمایی از چهار سامانه هوشمند برق‌آپ در حضور وزیر نیرو </a>
									<p class="clamp m-0 txt-justify">در نخستین روز از بیست‌و‌پنجمین نمایشگاه بین‌المللی صنعت برق ایران، که از
										سه‌شنبه ۲۰ آبان تا جمعه ۲۳ آبان در
										محل دائمی نمایشگاه‌های بین‌المللی تهران برگزار شد...
									</p>
								</div>
							</div>
						</div>
						<div class="c-btn-read-more relative items-center u-flex justify-end">
							<a href="https://barghapp.com/news/barghapp-digital-systems-launch/" type="submit"
							   class="c-btn-primary p-0 u-flex items-center w-100">
								<span>ادامه مطلب</span>
							</a>
						</div>
					</div>
				</div>
				<div class="carousel-cell w-100 border-radius">
					<div class="border-box w-100 padding-md u-flex u-flex--column h-100">
						<div class="item-before-content u-flex gap-md u-flex--column relative w-100">
							<a class="c-blog__img u-flex w-100" href="https://barghapp.com/news/degree-certificate/">
								<img class="w-100 border-radius cover"
									 src="https://pro.barghapp.com/wp-content/uploads/2025/11/certifcate.gif"
									 alt="انجام نخستین معامله گواهی ظرفیت با مشارکت فعال خرده‌فروش برق‌آپ">
							</a>
							<div class="c-home-blog__item-info u-flex gap-md u-flex--column">
								<div class="txt-overflow c-blog__meta u-flex gap-sm space-between">
									<p class="m-0 u-flex gap-sm">
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
											 xmlns="http://www.w3.org/2000/svg">
											<path
												d="M20.75 13.25C20.75 18.08 16.83 22 12 22C7.17 22 3.25 18.08 3.25 13.25C3.25 8.42 7.17 4.5 12 4.5C16.83 4.5 20.75 8.42 20.75 13.25Z"
												stroke="#42465399" stroke-width="1.5"
												stroke-linecap="round"
												stroke-linejoin="round"/>
											<path d="M12 8V13" stroke="#42465399" stroke-width="1.5"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M9 2H15" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
										</svg>
										مطالعه :
										۴ دقیقه
									</p>
									<p class="m-0 u-flex gap-sm">
										<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
											 xmlns="http://www.w3.org/2000/svg">
											<path d="M8 2V5" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path d="M16 2V5" stroke="#42465399" stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path d="M3.5 9.09H20.5" stroke="#42465399"
												  stroke-width="1.5"
												  stroke-miterlimit="10" stroke-linecap="round"
												  stroke-linejoin="round"/>
											<path
												d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
												stroke="#42465399" stroke-width="1.5"
												stroke-miterlimit="10"
												stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.6947 13.7H15.7037" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M15.6947 16.7H15.7037" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11.9955 13.7H12.0045" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M11.9955 16.7H12.0045" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8.29431 13.7H8.30329" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
											<path d="M8.29431 16.7H8.30329" stroke="#42465399"
												  stroke-width="2"
												  stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
										آبان ۲۸, ۱۴۰۴
									</p>
								</div>
								<div class="c-blog__info u-flex u-flex--column gap-md">
									<a href="https://barghapp.com/news/degree-certificate/">انجام نخستین معامله گواهی ظرفیت با مشارکت فعال خرده‌فروش برق‌آپ</a>
									<p class="clamp m-0 txt-justify">
										با پیگیری‌ها و هماهنگی‌های انجام‌شده توسط «برق‌آپ»، نخستین معامله گواهی ظرفیت با نقش‌آفرینی یک خرده‌فروش در کشور نهایی شد....
									</p>
								</div>
							</div>
						</div>
						<div class="c-btn-read-more relative items-center u-flex justify-end">
							<a href="https://barghapp.com/news/degree-certificate/" type="submit"
							   class="c-btn-primary p-0 u-flex items-center w-100">
								<span>ادامه مطلب</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
