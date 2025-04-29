<section class="feature_file feature mt-3">
    <?php $cat_id = 22; ?>
    <div class="row">
        <?php
        $args = array(
            'post_type' => 'post',
            'cat' => $cat_id,
            'showposts' => '4',
            'post_status' => 'publish',
            'order' => 'DESC',
            'orderby' => 'date',
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()):
            $loop->the_post();
            ?>
            <div class="col-md-3 col-6 mb-4">
                <div class="repeat-img-list clearfix">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('full'); ?>
                    </a>
                    <div class="title text-center">
                        <h4><a class="text-light" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
                    </div>
                </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
</section>