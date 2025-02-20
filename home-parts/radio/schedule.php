<?php
get_header();
function radio_schedule_shortcode() {
    ob_start();
    ?>
    <div class="container">
        <h2 class="text-center mt-4">रेडियो कार्यक्रम तालिका</h2>
        <table class="table table-bordered table-striped text-center">
            <thead class="thead-dark">
                <tr>
                    <th>समय</th>
                    <th>कार्यक्रम</th>
                    <th>प्रस्तोता</th>
                    <th>सम्पर्क</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>6:00 AM - 7:00 AM</td>
                    <td>सांगीतिक बिहानी</td>
                    <td>राम थापा</td>
                    <td>9800000000</td>
                </tr>
                <tr>
                    <td>8:00 AM - 9:00 AM</td>
                    <td>समाचार र छलफल</td>
                    <td>सीता गुरुङ</td>
                    <td>9800000001</td>
                </tr>
                <tr>
                    <td>10:00 AM - 11:00 AM</td>
                    <td>स्वास्थ्य सुझाव</td>
                    <td>डॉ. गोविन्द केसी</td>
                    <td>9800000002</td>
                </tr>
                <tr>
                    <td>5:00 PM - 6:00 PM</td>
                    <td>लोकदोहोरी कार्यक्रम</td>
                    <td>कृष्ण खड्का</td>
                    <td>9800000003</td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('radio_schedule', 'radio_schedule_shortcode');
get_footer(); ?>
