window.addEventListener('load', function () {

    video = document.getElementById('video');
    play = document.getElementById('play');
    progress = document.getElementById('progress-bar');
    progBar = document.getElementById('progressBar');
    time = document.getElementById('time-field');
    sound = document.getElementById('sound');
    soundBar = document.getElementById('soundBar');
    sound_bar = document.getElementById('sound-bar');
    full = document.getElementById('full');
    screenPlay = document.getElementById('screenPlay');


    video.load();
    video.addEventListener('canplay', function () {
        play.addEventListener('click', playOrPause, false);
        progBar.addEventListener('click', skip, false);
        updatePlayer();
        sound.addEventListener('click', mute, false);
        soundBar.addEventListener('click', updateSound, false);
        full.addEventListener('click', fullScreen, false);
        screenPlay.addEventListener('click', playOrPause, false);
    }, false);
}, false);


function playOrPause() {
    if (video.paused) {
        video.play();
        play.src = "images/Pause.png";
        screenPlay.style.opacity = 0;
        update = setInterval(updatePlayer, 30);
    } else {
        video.pause();
        play.src = "images/play.png";
        screenPlay.style.opacity = 1;
        window.clearInterval('update');
    }
}

function updatePlayer() {
    var percentage = (video.currentTime / video.duration) * 100;
    progress.style.width = percentage + '%';
    time.innerHTML = getTime();
    if (video.ended) {
        play.src = "images/replay.png";
        window.clearInterval('update');
        screenPlay.style.opacity = 1;
        screenPlay.style.background = "white";
        screenPlay.src = "images/replay.png";
    } else if (video.paused) {
        play.src = "images/play.png";
        screenPlay.src = "images/play.png";
    }
}

function skip(ev) {
    var mouseX = ev.pageX - progBar.offsetLeft;
    var width = window.getComputedStyle(progBar).getPropertyValue('width');
    width = parseFloat(width.substr(0, width.length - 2));

    video.currentTime = (mouseX / width) * video.duration;
    updatePlayer();
}

function getTime() {
    var sec = Math.round(video.currentTime);
    var min = Math.floor(sec / 60);

    if (min > 0) {
        sec -= min * 60;
    }

    if (sec.toString().length == 1) {
        sec = '0' + sec;
    }

    var totalSec = Math.round(video.duration);
    var totalMin = Math.floor(totalSec / 60);

    if (totalMin > 0) {
        totalSec -= totalMin * 60;
    }

    if (totalSec.toString().length == 1) {
        totalSec = '0' + totalSec;
    }


    return min + ":" + sec + " / " + totalMin + ":" + totalSec;
}

function mute() {
    if (!video.muted) {
        video.muted = true;
        sound.src = "images/mute.png";
        sound_bar.style.opacity = 0.3;
    } else {
        video.muted = false;
        sound.src = "images/sound.png";
        sound_bar.style.opacity = 1;
    }
}

function updateSound(ev) {
    var mouseX = ev.pageX - sound_bar.offsetLeft;
    var width = window.getComputedStyle(soundBar).getPropertyValue('width');
    width = parseFloat(width.substr(0, width.length - 2));

    video.volume = (mouseX / width);
    sound_bar.style.width = (mouseX / width) * 100 + '%';
    video.muted = false;
    sound.src = "images/sound.png";
    sound_bar.style.opacity = 1;

    if (video.volume == 0) {
        sound.src = "images/mute.png";
    }
}

function fullScreen() {
    if (video.requestFullscreen) {
        video.requestFullscreen();
    } else if (video.webkitRequestFullscreen) {
        video.webkitRequestFullscreen();
    } else if (video.mozRequestFullscreen) {
        video.mozRequestFullscreen();
    } else if (video.msRequestFullscreen) {
        video.msRequestFullscreen();
    }
}