<?php
///* Template Name: About Us Page */
get_header();
?>
	<section class="o-section c-section--main-page pt-0">
		<div class="o-section__wrapper">
			<div class="c-breadcrumbs">
				<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
			</div>
			<h1 class="title title-left">
				<svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
						  stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					<path
						d="M18.3801 15.2702V7.58023C18.3801 6.81023 17.7601 6.25024 17.0001 6.31024H16.9601C15.6201 6.42024 13.5901 7.11025 12.4501 7.82025L12.3401 7.89026C12.1601 8.00026 11.8501 8.00026 11.6601 7.89026L11.5001 7.79025C10.3701 7.08025 8.34012 6.41023 7.00012 6.30023C6.24012 6.24023 5.62012 6.81025 5.62012 7.57025V15.2702C5.62012 15.8802 6.1201 16.4602 6.7301 16.5302L6.9101 16.5602C8.2901 16.7402 10.4301 17.4502 11.6501 18.1202L11.6801 18.1302C11.8501 18.2302 12.1301 18.2302 12.2901 18.1302C13.5101 17.4502 15.6601 16.7502 17.0501 16.5602L17.2601 16.5302C17.8801 16.4602 18.3801 15.8902 18.3801 15.2702Z"
						stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M12 8.1001V17.6601" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
						  stroke-linejoin="round"/>
				</svg>

				دربــاره ی بــرق آپ پرو
			</h1>
			<div class="c-about u-flex u-flex--column">
				<div class="c-about__desc">
					<h2 class="m-0 sub-title">
						برق‌آپ پــــرو، اولین سامانه هوشمند تجمیع و فــروش بــرق نیروگاهها در ایران
					</h2>
					<p class="txt-justify m-0">
						برقاپ پرو یک پلتفرم تخصصی در حوزه بازار برق است که با هدف تحلیل هوشمند داده‌ها، تجمیع منابع، افزایش شفافیت و پشتیبانی از تصمیم‌گیری حرفه‌ای برای بازیگران بازار برق راه‌اندازی شده است. تمرکز اصلی ما بر توانمندسازی نیروگاه‌های تجدیدپذیر و CHP و سایر فعالان کلیدی این بازار است.

						ما در برقاپ پرو بر این باوریم که آینده بازار برق، بدون دسترسی به داده‌های شفاف، تحلیل‌های دقیق و ابزارهای عملیاتی قابل اتکا و قابل تصور نیست. از همین رو، بستری یکپارچه طراحی کرده‌ایم که نیازهای واقعی نیروگاه‌ها، مشترکین بزرگ و فعالان بازار برق را به‌صورت هوشمند و عملیاتی پاسخ دهد و مسیر تصمیم‌سازی آگاهانه را هموار کند .
					</p>
				</div>
				<div class="c-about__slider"
					 data-flickity='{"wrapAround": true, "autoPlay": 5500,"pageDots":false,"prevNextButtons": false,"rightToLeft": true,"cellAlign": "right"}'>
					<div class="c-about__slide">
						<img class="border-radius h-100"
							 src="<?php echo get_template_directory_uri(); ?>/assets/images/namayeshgah-1.webp"
							 alt="برقآپ">
					</div>
					<div class="c-about__slide">
						<img class="border-radius h-100"
							 src="<?php echo get_template_directory_uri(); ?>/assets/images/namayeshgah-2.webp"
							 alt="برقآپ">
					</div>
					<div class="c-about__slide">
						<img class="border-radius h-100"
							 src="<?php echo get_template_directory_uri(); ?>/assets/images/namayeshgah-3.webp"
							 alt="برقآپ">
					</div>
					<div class="c-about__slide">
						<img class="border-radius h-100"
							 src="<?php echo get_template_directory_uri(); ?>/assets/images/namayeshgah-4.webp"
							 alt="برقآپ">
					</div>
					<div class="c-about__slide">
						<img class="border-radius h-100"
							 src="<?php echo get_template_directory_uri(); ?>/assets/images/namayeshgah-5.webp"
							 alt="برقآپ">
					</div>
					<div class="c-about__slide">
						<img class="border-radius h-100"
							 src="<?php echo get_template_directory_uri(); ?>/assets/images/namayeshgah-6.webp"
							 alt="برقآپ">
					</div>
					<div class="c-about__slide">
						<img class="border-radius h-100"
							 src="<?php echo get_template_directory_uri(); ?>/assets/images/namayeshgah-1.webp"
							 alt="برقآپ">
					</div>
				</div>
				<div class="c-about__desc">
					<h2 class="m-0 sub-title">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19 9C19 10.45 18.57 11.78 17.83 12.89C16.75 14.49 15.04 15.62 13.05 15.91C12.71 15.97 12.36 16 12 16C11.64 16 11.29 15.97 10.95 15.91C8.96 15.62 7.25 14.49 6.17 12.89C5.43 11.78 5 10.45 5 9C5 5.13 8.13 2 12 2C15.87 2 19 5.13 19 9Z" stroke="#696969" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M21.25 18.4699L19.6 18.8599C19.23 18.9499 18.94 19.2299 18.86 19.5999L18.51 21.0699C18.32 21.8699 17.3 22.1099 16.77 21.4799L12 15.9999L7.22996 21.4899C6.69996 22.1199 5.67996 21.8799 5.48996 21.0799L5.13996 19.6099C5.04996 19.2399 4.75996 18.9499 4.39996 18.8699L2.74996 18.4799C1.98996 18.2999 1.71996 17.3499 2.26996 16.7999L6.16996 12.8999C7.24996 14.4999 8.95996 15.6299 10.95 15.9199C11.29 15.9799 11.64 16.0099 12 16.0099C12.36 16.0099 12.71 15.9799 13.05 15.9199C15.04 15.6299 16.75 14.4999 17.83 12.8999L21.73 16.7999C22.28 17.3399 22.01 18.2899 21.25 18.4699Z" stroke="#696969" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M12.58 5.98L13.17 7.15999C13.25 7.31999 13.46 7.48 13.65 7.51L14.72 7.68999C15.4 7.79999 15.56 8.3 15.07 8.79L14.24 9.61998C14.1 9.75998 14.02 10.03 14.07 10.23L14.31 11.26C14.5 12.07 14.07 12.39 13.35 11.96L12.35 11.37C12.17 11.26 11.87 11.26 11.69 11.37L10.69 11.96C9.96997 12.38 9.53997 12.07 9.72997 11.26L9.96997 10.23C10.01 10.04 9.93997 9.75998 9.79997 9.61998L8.96997 8.79C8.47997 8.3 8.63997 7.80999 9.31997 7.68999L10.39 7.51C10.57 7.48 10.78 7.31999 10.86 7.15999L11.45 5.98C11.74 5.34 12.26 5.34 12.58 5.98Z" stroke="#696969" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						مأموریت ما
					</h2>
					<p class="txt-justify m-0">
						مأموریت برقاپ پرو، ساده‌سازی پیچیدگی‌های بازار برق و تسریع فرآیند تولید تا فروش انرژی الکتریکی در نیروگاه‌های تجدیدپذیر و CHP است. ما با تکیه بر تحلیل داده، ابزارهای هوشمند و تجمیع منابع، به کاربران خود کمک می‌کنیم تا:
					</p>
					<ul>
						<li>
							ریسک‌های عملیاتی و اقتصادی خود را به‌صورت مؤثرتری مدیریت کنند
						</li>
						<li>
							تصمیمات اقتصادی دقیق‌تر و آگاهانه‌تری اتخاذ نمایند
						</li>
						<li>
							از فرصت‌های موجود در بازار برق، حداکثر بهره‌برداری را داشته باشند.
						</li>
					</ul>
				</div>
				<div class="c-about__desc">
					<h2 class="m-0 sub-title">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.1499 16.5V18.6" stroke="#696969" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M7.1499 22H17.1499V21C17.1499 19.9 16.2499 19 15.1499 19H9.1499C8.0499 19 7.1499 19.9 7.1499 21V22V22Z" stroke="#696969" stroke-width="2" stroke-miterlimit="10"/>
							<path d="M6.1499 22H18.1499" stroke="#696969" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M12 16C8.13 16 5 12.87 5 9V6C5 3.79 6.79 2 9 2H15C17.21 2 19 3.79 19 6V9C19 12.87 15.87 16 12 16Z" stroke="#696969" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M5.47004 11.65C4.72004 11.41 4.06004 10.97 3.54004 10.45C2.64004 9.44998 2.04004 8.24998 2.04004 6.84998C2.04004 5.44998 3.14004 4.34998 4.54004 4.34998H5.19004C4.99004 4.80998 4.89004 5.31998 4.89004 5.84998V8.84998C4.89004 9.84998 5.10004 10.79 5.47004 11.65Z" stroke="#696969" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M18.53 11.65C19.28 11.41 19.94 10.97 20.46 10.45C21.36 9.44998 21.96 8.24998 21.96 6.84998C21.96 5.44998 20.86 4.34998 19.46 4.34998H18.81C19.01 4.80998 19.11 5.31998 19.11 5.84998V8.84998C19.11 9.84998 18.9 10.79 18.53 11.65Z" stroke="#696969" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>

						چشم‌انداز ما
					</h2>
					<p class="txt-justify m-0">
						چشم‌انداز برقاپ پرو، تبدیل شدن به مرجع حرفه‌ای تحلیل و مدیریت بازار برق و یکی از بازیگران اثرگذار در توسعه خدمات نوین انرژی برای نیروگاه‌های مقیاس کوچک و تجدیدپذیر است؛ به‌ویژه در حوزه تجمیع‌کنندگی و مدیریت یکپارچه منابع انرژی.
						برقاپ پرو در افق پیش‌رو می‌کوشد به مرجع اصلی معاملات انرژی الکتریکی تولیدی بخش عمده‌ای از نیروگاه‌های تجدیدپذیر و کوچک‌مقیاس کشور تبدیل شود و نقشی کلیدی در شفاف‌سازی، کارایی و پایداری بازار برق ایفا کند.
					</p>
				</div>
				<div class="logo-section">
					<div class="content-04__slider"
						 style="--width:90px; --height:90px; --quantity:13;">
						<div class="content-04__slider-list">
							<div class="content-04__slider-item" style="--position:1">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/iran-khodro.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/yazd.png" alt="برقآپ">
							</div>

							<div class="content-04__slider-item" style="--position:3">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/foolad.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:4">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sanaye.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:5">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/enteghal-ab.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:6">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/apadana.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:7">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sahami.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:8">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shahroud.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:9">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/saipa.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:10">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/kaleh.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:11">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shimiayi.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:12">
								<img class="white-filter" src="<?php echo get_template_directory_uri(); ?>/assets/images/siman.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:13">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/azam.png" alt="برقآپ">
							</div>
						</div>
					</div>
				</div>
				<div class="c-about__desc">
					<h2 class="m-0 sub-title">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M12.0001 7.89014L10.9301 9.75014C10.6901 10.1601 10.8901 10.5001 11.3601 10.5001H12.6301C13.1101 10.5001 13.3001 10.8401 13.0601 11.2501L12.0001 13.1101" stroke="#696969" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M8.30035 18.0402V16.8802C6.00035 15.4902 4.11035 12.7802 4.11035 9.90018C4.11035 4.95018 8.66035 1.07018 13.8004 2.19018C16.0604 2.69018 18.0404 4.19018 19.0704 6.26018C21.1604 10.4602 18.9604 14.9202 15.7304 16.8702V18.0302C15.7304 18.3202 15.8404 18.9902 14.7704 18.9902H9.26035C8.16035 19.0002 8.30035 18.5702 8.30035 18.0402Z" stroke="#696969" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M8.5 22.0002C10.79 21.3502 13.21 21.3502 15.5 22.0002" stroke="#696969" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>

						چرا برقاپ پرو
					</h2>
					<p class="txt-justify m-0">
						برقاپ پرو، همراه هوشمند نیروگاه‌های تجدیدپذیر و CHP در بازار برق است.
					</p>
					<ul>
						<li>
							شفافیت کامل در خرید و فروش انرژی
							کنترل و پایش دقیق معاملات در یک بستر قابل اعتماد.
						</li>
						<li>
							ابزارهای طراحی‌شده بر اساس نیاز واقعی نیروگاه‌ها
							راهکارهایی عملیاتی، نه تئوریک.
						</li>
						<li>
							گزارش‌های روزانه تولید و عملکرد نیروگاه
							تصمیم‌گیری سریع، دقیق و مبتنی بر داده.
						</li>
						<li>
							گزارش‌های مالی شفاف متناسب با میزان تولید
							درک روشن از درآمد، تعهدات و بازده اقتصادی.
							</li>
						<li>
							حداکثرسازی فروش انرژی و کاهش ریسک جرائم عدم تولید
							مدیریت هوشمند تعهدات پیش از دوره.
						</li>
						<li>
							هم‌راستا با آینده بازار برق ایران
							توسعه‌پذیر، منعطف و آماده نقش‌آفرینی در تجمیع‌کن
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
