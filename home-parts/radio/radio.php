<div class="container radio-container mt-4">
    <div class="row">
        <div class="col-md-8">
            <?php if (get_theme_mod('check_url', false)): ?>
                <?php
                $video_id = get_theme_mod('video_url');
                if (!empty($video_id)): ?>
                    <iframe
                        src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FHamropahunch%2Fvideos%2F<?php echo esc_attr($video_id); ?>%2F&show_text=false&width=560&t=0"
                        width="100%" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                        allowFullScreen="true" style="width: 100%"></iframe>
                <?php endif; ?>
            <?php else: ?>
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
                    <audio id="radio-player" src="https://live.itech.host:8693/stream"></audio>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-md-4">
            Sidebar
        </div>
    </div>
</div>