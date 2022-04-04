document.querySelector('.btn-sound-1').addEventListener('click', function() {
    const video = document.querySelector('#river-video');
    if (video.paused) {
        video.play();
        this.innerHTML = "<p class=btn-sound-text>Sonido on</p><img src=../resources/sound-on.svg>" ;
    } else{
        video.pause();
        this.innerHTML = "<p class=btn-sound-text>Sonido off</p><img src=../resources/sound-off.svg>";
    }
    

});

document.querySelector('.btn-sound-2').addEventListener('click', function() {
    const video = document.querySelector('#meditacion-video');
    if (video.paused) {
        video.play();
        this.innerHTML = "<p class=btn-sound-text>Sonido on</p><img src=../resources/sound-on.svg>" ;
    } else{
        video.pause();
        this.innerHTML = "<p class=btn-sound-text>Sonido off</p><img src=../resources/sound-off.svg>";
    }
    //if (video.muted) {
      //  video.muted = false;
        //this.innerHTML = "<p class=btn-sound-text>Sonido on</p><img src=../resources/sound-on.svg>" ;
   // } else{
     //   video.muted = true;
       // this.innerHTML = "<p class=btn-sound-text>Sonido off</p><img src=../resources/sound-off.svg>";
    //}
});
