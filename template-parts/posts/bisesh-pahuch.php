<section class="pahuch-headline mt-4">
    <div class="headling-block p-3" style="background: #c6cff696">
        <div class="row">
            <?php $cat_id = 9; ?>
            <div class="col-md-12">
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
                'showposts' => '6',
                'post_status' => 'publish',
                'order' => 'DESC',
                'orderby' => 'date',
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()):
                $loop->the_post();
                ?>
                <div class="col-lg-4 col-md-4 col-sm-12 headline">
                    <div class="small_item_list samaj">
                        <div class="raj_news_item media">
                            <div class="raj_sm_fet">
                                <figure class="image">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('small_130_90');
                                    } else {
                                        default_image();
                                    }
                                    ?>
                                </figure>
                            </div>
                            <div class="raj_sm_title media-body">
                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>