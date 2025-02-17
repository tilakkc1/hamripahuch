$(document).ready(function() {
    const audio = document.getElementById('radio-player');
    const playPauseBtn = $('.play-pause-btn');
    const volumeSlider = $('.volume-slider');
    const equalizer = $('.equalizer span');
    let isPlaying = false;

    // Play/Pause functionality
    playPauseBtn.click(function() {
        if (isPlaying) {
            audio.pause();
            playPauseBtn.find('i').removeClass('fa-pause').addClass('fa-play');
            equalizer.css('animation-play-state', 'paused');
        } else {
            audio.play();
            playPauseBtn.find('i').removeClass('fa-play').addClass('fa-pause');
            equalizer.css('animation-play-state', 'running');
        }
        isPlaying = !isPlaying;
    });

    // Volume control
    volumeSlider.on('input', function() {
        const volume = $(this).val() / 100;
        audio.volume = volume;
        
        // Update volume icon based on level
        const volumeIcon = $('.volume-control i');
        if (volume === 0) {
            volumeIcon.removeClass().addClass('fas fa-volume-mute');
        } else if (volume < 0.5) {
            volumeIcon.removeClass().addClass('fas fa-volume-down');
        } else {
            volumeIcon.removeClass().addClass('fas fa-volume-up');
        }
    });

    // Handle audio loading states
    audio.addEventListener('waiting', function() {
        $('.status').text('Buffering...');
    });

    audio.addEventListener('playing', function() {
        $('.status').text('Now Playing');
    });

    audio.addEventListener('error', function() {
        $('.status').text('Error loading stream');
        isPlaying = false;
        playPauseBtn.find('i').removeClass('fa-pause').addClass('fa-play');
        equalizer.css('animation-play-state', 'paused');
    });

    // Metadata handling (if supported by the stream)
    audio.addEventListener('loadedmetadata', function() {
        if (audio.mozHasAudio || audio.webkitAudioDecodedByteCount) {
            $('.status').text('Stream loaded');
        }
    });

    // Initialize equalizer state
    equalizer.css('animation-play-state', 'paused');
}); 