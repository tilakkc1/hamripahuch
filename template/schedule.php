<?php
/*
 * Template Name: Program Schedule
 */
get_header();
?>

<div class="container py-4">
    <h2 class="text-center mt-4">रेडियो कार्यक्रम तालिका</h2>

    <!-- Bootstrap Nav Tabs -->
    <ul class="nav nav-tabs" id="scheduleTabs" role="tablist">
        <?php
        $days = ['sunday' => 'आइतबार','monday' => 'सोमबार','tuesday' => 'मंगलबार','wednesday' => 'बुधबार','thursday' => 'बिहीबार','friday' => 'शुक्रबार','saturday' => 'शनिबार',];
        $first = true;
        foreach ($days as $slug => $name): ?>
            <li class="nav-item">
                <a style="font-size: 18px; font-weight: 600; color: var(--tlt-primary)" class="nav-link <?php echo $first ? 'active' : ''; ?>"
                   id="<?php echo $slug; ?>-tab"
                   data-toggle="tab"
                   href="#<?php echo $slug; ?>"
                   role="tab"
                   aria-controls="<?php echo $slug; ?>"
                   aria-selected="<?php echo $first ? 'true' : 'false'; ?>">
                    <?php echo $name; ?>
                </a>
            </li>
        <?php $first = false; endforeach; ?>
    </ul>

    <!-- Tab Contents -->
    <div class="tab-content" id="scheduleTabsContent">
        <?php
        $first = true;
        foreach ($days as $slug => $name): ?>
            <div class="tab-pane fade <?php echo $first ? 'show active' : ''; ?>" id="<?php echo $slug; ?>" role="tabpanel" aria-labelledby="<?php echo $slug; ?>-tab">
                <div class="table-responsive mt-3">
                    <table class="table table-bordered table-striped text-center">
                        <thead class="table-info">
                            <tr>
                                <th>समय</th>
                                <th>कार्यक्रम</th>
                                <th>प्रस्तोता</th>
                                <th>सम्पर्क</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $args = array(
                                'post_type' => 'radio-programs',
                                'posts_per_page' => -1,
                                'orderby' => 'meta_value',
                                'order' => 'ASC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'radio-programs',
                                        'field' => 'slug',
                                        'terms' => $slug,
                                    ),
                                ),
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()):
                                while ($query->have_posts()):
                                    $query->the_post();
                                    $s_time = get_field('program_time_1');
                                    $e_time = get_field('program_time_2');
                                    $presenter = get_field('presenter_name');
                                    $contact = get_field('contact_number');
                                    ?>
                                    <tr>
                                        <td><?php echo esc_html($s_time); ?> - <?php echo esc_html($e_time); ?></td>
                                        <td><?php the_title(); ?></td>
                                        <td><?php echo esc_html($presenter); ?></td>
                                        <td><?php echo esc_html($contact); ?></td>
                                    </tr>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            else:
                                echo '<tr><td colspan="4">हाल कुनै कार्यक्रम छैन</td></tr>';
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php $first = false; endforeach; ?>
    </div>
</div>

<?php get_footer(); ?>
