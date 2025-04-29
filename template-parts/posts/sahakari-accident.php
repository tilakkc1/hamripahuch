<div class="my-3">
    <hr>
</div>
<div class="sahakari-accident-block mt-2">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            <?php $cat_id = 20; ?>
            <div class="accident-block">
                <div class="category_item">
                    <div class="cat-name">
                        <a href="<?php echo get_category_link($cat_id); ?>"><?php echo get_cat_name($cat_id); ?></a>
                    </div>
                </div>
                <div class="row">
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
                        <div class="col-lg-4 col-md-4 col-sm-12 col-6">
                            <div class="samaj_list_block mb-3">
                                <div class="samaj__feature">
                                    <a href="<?php the_permalink(); ?>">
                                        <figure class="image">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('medium');
                                            } else {
                                                default_image();
                                            }
                                            ?>
                                        </figure>
                                    </a>
                                </div>
                                <div class="smj__list__title">
                                    <h4>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="sahakari-block">
                <?php $cat_id = 19; ?>
                <div class="category_item">
                    <div class="cat-name">
                        <a href="<?php echo get_category_link($cat_id); ?>"><?php echo get_cat_name($cat_id); ?></a>
                    </div>
                </div>
                <div class="small_item_list">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'cat' => $cat_id,
                        'showposts' => '4',
                        'post_status' => 'publish',
                        'order' => 'DESC',
                        'orderby' => 'date',
                        'offset' => '1'
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()):
                        $loop->the_post();
                        ?>
                        <div class="raj_news_item media">
                            <div class="raj_sm_fets">
                                <figure class="image">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('thumbnail');
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
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
    </>