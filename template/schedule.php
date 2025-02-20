<?php
/*
 * Template Name: Program Schedule
 */
get_header(); 
?>

<div class="container">
    <h2 class="text-center mt-4">रेडियो कार्यक्रम तालिका</h2>
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
            // Custom Post Type Query
            $args = array(
                'post_type'      => 'radio_programs',
                'posts_per_page' => -1,
                'orderby'        => 'meta_value',
                'order'          => 'ASC',
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $s_time = get_field('program_time_1'); 
                    $e_time = get_field('program_time_1'); 
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
            else :
                echo '<tr><td colspan="4">हाल कुनै कार्यक्रम छैन</td></tr>';
            endif;
            ?>
        </tbody>
    </table>
</div>

<?php get_footer(); ?>
