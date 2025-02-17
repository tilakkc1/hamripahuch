<div class="container radio-container mt-4">
    <div class="row">
        <div class="col-md-8">
            <div class="radio-player-card">
                <div class="now-playing">
                    <h2 class="text-light">Radio Hamro Pauch</h2>
                    <div class="equalizer">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <p class="status text-light">Now Playing</p>
                </div>

                <div class="player-controls">
                    <button class="play-pause-btn">
                        <i class="fa fa-play"></i>
                    </button>
                    <div class="volume-control">
                        <i class="fa fa-volume-up"></i>
                        <input type="range" class="volume-slider" min="0" max="100" value="80">
                    </div>
                </div>

                <audio id="radio-player" src="https://radio-broadcast.ekantipur.com/stream"></audio>
            </div>
        </div>
        <div class="col-md-4">
            Sidebar
        </div>
    </div>
</div>