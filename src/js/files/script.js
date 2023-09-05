// Підключення функціоналу "Чертоги Фрілансера"
import {isMobile} from './functions.js';
// Підключення списку активних модулів
import {flsModules} from './modules.js';
// Підключення маски
import IMask from 'imask';
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
if (document.title === 'Warzone UA') {
	let isChromeiOS = /CriOS/.test(navigator.userAgent) && /iP(hone|od|ad)/.test(navigator.userAgent);
	if (isChromeiOS) {
		let slideImages = document.querySelectorAll('.tournament-result-image__slide img');
		for (let i = 0; i < slideImages.length; i++) {
			slideImages[i].style.maxWidth = '85%';
		}
	}
}
if (document.title === 'Warzone UA - Tournaments') {
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
// const form = document.querySelector('.form-register');
// form.addEventListener('submit', function (e) {
// 	e.preventDefault();
// 	sendMessage(form);
// });
// async function sendMessage(form) {
// 	const formData = new FormData(form);
// 	if (formData) {
// 		const url = 'files/sendtotelegram.php';
// 		const response = await fetch(url, {
// 			method: 'POST',
// 			body: formData,
// 		});
// 		if (response.ok) {
// 			form.reset();
// 			alert('Form sent');
// 		} else {
// 			alert('Error!');
// 		}
// 	}
// }
