document.querySelector('.btn-sound-1').addEventListener('click', function() {
    const video = document.querySelector('#river-video');
    if (video.muted) {
        video.muted = false;
        this.innerHTML = "<p class=btn-sound-text>Sonido on</p><img src=./resources/sound-on.svg>" ;
    } else{
        video.muted = true;
        this.innerHTML = "<p class=btn-sound-text>Sonido off</p><img src=./resources/sound-off.svg>";
    }
});

document.querySelector('.btn-sound-2').addEventListener('click', function() {
    const video = document.querySelector('#meditacion-video');
    if (video.muted) {
        video.muted = false;
        this.innerHTML = "<p class=btn-sound-text>Sonido on</p><img src=./resources/sound-on.svg>" ;
    } else{
        video.muted = true;
        this.innerHTML = "<p class=btn-sound-text>Sonido off</p><img src=./resources/sound-off.svg>";
    }
});
