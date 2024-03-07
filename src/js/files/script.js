// Підключення функціоналу "Чертоги Фрілансера"
import { isMobile } from './functions.js';
// Підключення списку активних модулів
import { flsModules } from './modules.js';
// Підключення маски
import IMask from 'imask';
import Inputmask from 'inputmask';
{
	/* <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>; */
}

var videos = document.getElementsByClassName('.highlights-video-slide__video');

for (var i = 0; i < videos.length; i++) {
	var video = videos[i];
	var playBtn = video.getElementsByClassName('play-btn')[0];

	video.addEventListener('click', function () {
		playBtn.classList.add('hide-play-btn');
	});
}

function formInput() {
	const labels = document.querySelectorAll('.form-control label');

	labels.forEach((label) => {
		label.innerHTML = label.innerText
			.split('')
			.map((letter, index) => `<span style="transition-delay:${index * 20}ms">${letter}</span>`)
			.join('');
	});
}
formInput();
if (document.title === 'UACOD: Україномовна спільнота Call of Duty: Warzone та Warzone 2 Discord UA') {
	let isChromeiOS = /CriOS/.test(navigator.userAgent) && /iP(hone|od|ad)/.test(navigator.userAgent);
	if (isChromeiOS) {
		let slideImages = document.querySelectorAll('.tournament-result-image__slide img');
		for (let i = 0; i < slideImages.length; i++) {
			slideImages[i].style.maxWidth = '85%';
		}
	}
}
if (document.title === 'UACOD - Tournament') {
	// Ваш код тут
	function showMaskInForm() {
		const element = document.getElementById('mask');
		let maskOptions = {
			mask: '+{38}(000)000-00-00',
			lazy: true,
		};
		let mask = new IMask(element, maskOptions);
	}
	showMaskInForm();

	function getMaxLetterTextarea() {
		const textarea = document.getElementById('myTextarea');
		const maxWords = 30; // Максимальна кількість слів

		textarea.addEventListener('input', () => {
			let words = textarea.value.trim().split(/\s+/); // Розділяємо введений текст на слова
			let wordCount = words.length;

			if (wordCount > maxWords) {
				words = words.slice(0, maxWords); // Обмежуємо кількість слів
				textarea.value = words.join(' '); // Записуємо обрізаний текст у поле вводу
				wordCount = maxWords;
			}
		});
	}
	getMaxLetterTextarea();
}

// document.addEventListener('DOMContentLoaded', function () {
// 	const form = document.querySelector('.form-register.form');
// 	const inputMask = document.getElementById('phoneInput');

// 	function initializeInputMask(inputElement) {
// 		if (inputElement) {
// 			let im = new Inputmask('+38(099) 999-99-99', { showMaskOnHover: false });
// 			im.mask(inputElement);
// 			const form = inputElement.closest('form');
// 			if (form) {
// 				form.addEventListener('submit', function (event) {
// 					const maskedValue = inputElement.inputmask.unmaskedvalue();
// 					if (maskedValue.length < 9) {
// 						event.preventDefault();
// 						// alert('Пожалуйста, введите полный номер телефона.');
// 					}
// 				});
// 			}
// 		}
// 	}

// 	if (form && inputMask) {
// 		initializeInputMask(inputMask);
// 	}
// });
