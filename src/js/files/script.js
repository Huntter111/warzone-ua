// Підключення функціоналу "Чертоги Фрілансера"
import {isMobile} from './functions.js';
// Підключення списку активних модулів
import {flsModules} from './modules.js';

var videos = document.getElementsByClassName('.highlights-video-slide__video');

for (var i = 0; i < videos.length; i++) {
	var video = videos[i];
	var playBtn = video.getElementsByClassName('play-btn')[0];

	video.addEventListener('click', function () {
		playBtn.classList.add('hide-play-btn');
	});
}
