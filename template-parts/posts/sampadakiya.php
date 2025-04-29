<div class="my-4">
    <hr>
</div>
<div class="feature_file feature mt-3">
    <?php $cat_id = 23; ?>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="category_item">
                <div class="cat-name">
                    <a href="<?php echo get_category_link($cat_id); ?>"><?php echo get_cat_name($cat_id); ?></a>
                </div>
            </div>
        </div>
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
</div>