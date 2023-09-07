/*
Документація по роботі у шаблоні: 
Документація слайдера: https://swiperjs.com/
Сніппет(HTML): swiper
*/

// Підключаємо слайдер Swiper з node_modules
// При необхідності підключаємо додаткові модулі слайдера, вказуючи їх у {} через кому
// Приклад: { Navigation, Autoplay }
import Swiper, { Navigation, Pagination, EffectCards, EffectCube, Autoplay } from 'swiper';
/*
Основні модулі слайдера:
Navigation, Pagination, Autoplay, 
EffectFade, Lazy, Manipulation
Детальніше дивись https://swiperjs.com/
*/

// Стилі Swiper
// Базові стилі
import '../../scss/base/swiper.scss';
// Повний набір стилів з scss/libs/swiper.scss
import '../../scss/libs/swiper.scss';
// Повний набір стилів з node_modules
// import 'swiper/css';

// Ініціалізація слайдерів
function initSliders() {
	// Список слайдерів
	// Перевіряємо, чи є слайдер на сторінці
	if (document.querySelector('.highlights-swiper')) {
		// Вказуємо склас потрібного слайдера
		// Створюємо слайдер
		new Swiper('.highlights-swiper', {
			// Вказуємо склас потрібного слайдера
			// Підключаємо модулі слайдера
			// для конкретного випадку
			modules: [Navigation, Pagination],
			observer: true,
			observeParents: true,
			slidesPerView: 1,
			spaceBetween: 0,
			autoHeight: true,
			speed: 800,

			//touchRatio: 0,
			//simulateTouch: false,
			//loop: true,
			// preloadImages: false,
			// lazy: {
			// 	loadOnTransitionStart: false,
			// 	loadPrevNext: false,
			// },
			// watchSlidesProgress: true,
			// watchSlidesVisability: true,
			/*
			// Ефекти
			effect: 'fade',
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			*/

			// Пагінація

			pagination: {
				el: '.highlights-swiper-pagination',
				clickable: true,
				dynamicBullets: true,
				dynamicMainBullets: 1,
			},
			initialSlide: 1,
			// Скроллбар

			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},

			// Кнопки "вліво/вправо"
			navigation: {
				prevEl: '.highlights-swiper__prew',
				nextEl: '.highlights-swiper__next',
			},

			// Брейкпоінти
			breakpoints: {
				992: {
					slidesPerView: 1.2,
					spaceBetween: 20,
				},
			},

			// Події
			on: {},
		});
	}
	if (document.querySelector('.highlights-video-swiper')) {
		// Вказуємо склас потрібного слайдера
		// Створюємо слайдер
		new Swiper('.highlights-video-swiper', {
			// Вказуємо склас потрібного слайдера
			// Підключаємо модулі слайдера
			// для конкретного випадку
			modules: [Navigation, Pagination],
			observer: true,
			observeParents: true,
			slidesPerView: 1,
			spaceBetween: 0,
			autoHeight: true,
			speed: 800,

			//touchRatio: 0,
			//simulateTouch: false,
			//loop: true,
			// preloadImages: false,
			// lazy: {
			// 	loadOnTransitionStart: false,
			// 	loadPrevNext: false,
			// },
			// watchSlidesProgress: true,
			// watchSlidesVisability: true,
			/*
			// Ефекти
			effect: 'fade',
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			*/

			// Пагінація

			pagination: {
				el: '.highlights-video__swiper-pagination',
				clickable: true,
				dynamicBullets: true,
				dynamicMainBullets: 1,
			},
			// слайд з якого починається
			initialSlide: 0,
			// Скроллбар

			scrollbar: {
				el: '.swiper-scrollbar',
				draggable: true,
			},

			// Кнопки "вліво/вправо"
			navigation: {
				prevEl: '.highlights-video-swiper__prew',
				nextEl: '.highlights-video-swiper__next',
			},

			// Брейкпоінти
			breakpoints: {
				767: {
					slidesPerView: 2,
					spaceBetween: 20,
				},
				992: {
					slidesPerView: 2,
					spaceBetween: 20,
				},
			},

			// Події
			on: {},
		});
	}
	// if (document.querySelector('.tournament-result__slider')) {
	// 	// Вказуємо склас потрібного слайдера
	// 	// Створюємо слайдер
	// 	new Swiper('.tournament-result__slider', {
	// 		// Вказуємо склас потрібного слайдера
	// 		// Підключаємо модулі слайдера
	// 		// для конкретного випадку
	// 		modules: [Navigation, Pagination, EffectCube],
	// 		observer: true,
	// 		observeParents: true,
	// 		// delay: 100,
	// 		slidesPerView: 1,
	// 		spaceBetween: 0,
	// 		autoHeight: true,
	// 		speed: 1000,
	// 		slideToClickedSlide: false,
	// 		//touchRatio: 0,
	// 		//simulateTouch: false,
	// 		//loop: true,
	// 		// preloadImages: false,
	// 		// lazy: {
	// 		// 	loadOnTransitionStart: false,
	// 		// 	loadPrevNext: false,
	// 		// },
	// 		// watchSlidesProgress: true,
	// 		// watchSlidesVisability: true,
	// 		effect: 'cube',
	// 		shadow: true,
	// 		shadowOffset: 50,
	// 		shadowScale: 0.94,
	// 		slideShadows: true,
	// 		/*
	// 		// Ефекти
	// 		effect: 'fade',
	// 		autoplay: {
	// 			delay: 1000,
	// 			disableOnInteraction: false,
	// 		},
	// 		*/
	// 		// Пагінація

	// 		pagination: {
	// 			el: '.tournament-result__pagination',
	// 			clickable: true,
	// 			dynamicBullets: true,
	// 			dynamicMainBullets: 1,
	// 		},
	// 		// слайд з якого починається
	// 		initialSlide: 0,
	// 		// Скроллбар

	// 		// scrollbar: {
	// 		// 	el: '.swiper-scrollbar',
	// 		// 	draggable: true,
	// 		// },

	// 		// Кнопки "вліво/вправо"
	// 		navigation: {
	// 			prevEl: '.tournament-result__prev',
	// 			nextEl: '.tournament-result__next',
	// 		},

	// 		// Брейкпоінти
	// 		breakpoints: {
	// 			280: {
	// 				slidesPerView: 1,
	// 				// spaceBetween: 20,
	// 			},
	// 			// 992: {
	// 			// 	slidesPerView: 2,
	// 			// 	spaceBetween: 100,
	// 			// },
	// 		},

	// 		// Події
	// 		on: {},
	// 	});

	// 	new Swiper('.tournament-result-image__slider', {
	// 		modules: [Navigation, Pagination, EffectCards, Autoplay],
	// 		// курсор перетаскивания
	// 		grabCursor: true,
	// 		delay: 100,
	// 		pagination: {
	// 			el: '.tournament-result-image__pagination',
	// 			clickable: true,
	// 			dynamicBullets: true,
	// 			dynamicMainBullets: 2,
	// 		},
	// 		// slideToClickedSlide: false,
	// 		// Корректная работа перетаскивания/свайпа
	// 		nested: true,
	// 		effect: 'cards',
	// 		cardsEffect: {
	// 			slideShadows: true,
	// 			rotate: true,
	// 			perSlideRotate: 2,
	// 			perSlideOffset: 8,
	// 		},
	// 		// effect: 'fade',
	// 		// autoplay: {
	// 		// 	delay: 3000,
	// 		// 	disableOnInteraction: false,
	// 		// },
	// 	});
	// }
}
// Скролл на базі слайдера (за класом swiper scroll для оболонки слайдера)
function initSlidersScroll() {
	let sliderScrollItems = document.querySelectorAll('.swiper_scroll');
	if (sliderScrollItems.length > 0) {
		for (let index = 0; index < sliderScrollItems.length; index++) {
			const sliderScrollItem = sliderScrollItems[index];
			const sliderScrollBar = sliderScrollItem.querySelector('.swiper-scrollbar');
			const sliderScroll = new Swiper(sliderScrollItem, {
				observer: true,
				observeParents: true,
				direction: 'vertical',
				slidesPerView: 'auto',
				freeMode: {
					enabled: true,
				},
				scrollbar: {
					el: sliderScrollBar,
					draggable: true,
					snapOnRelease: false,
				},
				mousewheel: {
					releaseOnEdges: true,
				},
			});
			sliderScroll.scrollbar.updateSize();
		}
	}
}

window.addEventListener('load', function (e) {
	// Запуск ініціалізації слайдерів
	initSliders();
	// Запуск ініціалізації скролла на базі слайдера (за класом swiper_scroll)
	//initSlidersScroll();
});
