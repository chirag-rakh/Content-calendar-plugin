<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function print_schedule() {
    ?>

    <h1 class = "tab-title">Upcoming Events</h1>

    <?php

    global $wpdb;
    $table_name = $wpdb->prefix . 'events';

    $results = $wpdb->get_results("SELECT * FROM $table_name WHERE date >= DATE( NOW() ) ORDER BY date");

    echo '<table id="table" >';
    echo '<thead><tr><th>ID</th><th>Date</th><th>Occasion</th><th>Post Title</th><th>Author</th><th>Reviewer</th></tr></thead>';
    foreach ( $results as $row ) {
        echo '<tr>';
        echo '<td>' . $row->id . '</td>';
        echo '<td>' . $row->date . '</td>';
        echo '<td>' . $row->occassion . '</td>';
        echo '<td>' . $row->post_title . '</td>';
        echo '<td>' . get_userdata($row->author)->user_login . '</td>';
        echo '<td>' . get_userdata($row->reviewer)->user_login . '</td>';
        echo '</tr>';
    }
    echo '</table>';


    ?>
    <h1 class="tab-title">Closed Events</h1>
    <?php

    global $wpdb;
    $table_name = $wpdb->prefix . 'events';

    $data = $wpdb->get_results("SELECT * FROM $table_name WHERE date < DATE(NOW()) ORDER BY date DESC");

    echo '<table id="table">';
    echo '<thead><tr><th>ID</th><th>Date</th><th>Occasion</th><th>Post Title</th><th>Author</th><th>Reviewer</th></tr></thead>';
    foreach ($data as $row) {
        echo '<tr>';
        echo '<td>' . $row->id . '</td>';
        echo '<td>' . $row->date . '</td>';
        echo '<td>' . $row->occassion . '</td>';
        echo '<td>' . $row->post_title . '</td>';
        echo '<td>' . (get_userdata($row->author) ? get_userdata($row->author)->user_login : 'N/A') . '</td>';
        echo '<td>' . (get_userdata($row->reviewer) ? get_userdata($row->reviewer)->user_login : 'N/A') . '</td>';
        echo '</tr>';
    }
    echo '</table>';

}

print_schedule();
?>
</body>
</html>