<?php get_header();
/*
 *Template Name: Hamro Team
 */
?>
<section class="team-member-block py-5">
    <div class="container" style="max-width: 1000px !important;">
        <div class="team_member bg-white">
            <h2 class="text-center mt-2"><?php echo esc_html('हाम्रो टिम'); ?></h2>
            <hr>
        </div>
        <div class="team_member_list text-center">
            <?php
            $team_args = array(
                'post_type' => 'teams',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'ASC'
            );
            $team_loop = new WP_Query($team_args);
            if ($team_loop->have_posts()):
                while ($team_loop->have_posts()):
                    $team_loop->the_post();
                    ?>
                    <div class="team_member_item">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <h4 class="name" style="font-size: 20px !important; font-weight: 500"><?php the_title(); ?></h4>
                        <span class="position"><?php echo get_field('position'); ?></span>
                        <div class="social_links my-2">
                            <ul class="list-unstyled mb-0">
                                <li class="d-inline-block mr-3"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="d-inline-block"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>

<style type="text/css">
    .team_member_list {
        display: grid;
        grid-gap: 24px;
        grid-template-columns: repeat(12, 1fr);
    }

    .team_member_item:first-child {
        grid-column: span 12;
    }

    .team_member_item {
        grid-column: span 4;
    }

    .team_member_item img {
        width: 140px;
        height: 140px;
        object-fit: cover;
        -webkit-border-radius: 100% !important;
        border-radius: 100% !important;
        margin: 0 0 13px;
        text-align: center;
    }
</style>