<?php

// Form Submmition

function form_submit() {
    global $wpdb;

    if( isset( $_POST['date'] ) && isset( $_POST['occassion'] ) && isset( $_POST['post_title'] ) && isset( $_POST['author'] ) && isset( $_POST['reviewer'] ) ) {
        $table_name = $wpdb->prefix . "events";
        $date = sanitize_text_field( $_POST['date'] );
        $occassion = sanitize_text_field( $_POST['occassion'] );
        $post_title = sanitize_text_field( $_POST['post_title'] );
        $author = sanitize_text_field( $_POST['author'] );
        $reviewer = sanitize_text_field( $_POST['reviewer'] );

        $wpdb->insert(
            $table_name,
            array(
                'date'       => $date,
                'occassion'  => $occassion,
                'post_title' => $post_title,
                'author'     => $author,
                'reviewer'   => $reviewer
            )
        );
    }
}


add_action( 'init', 'submitBtn' );

function submitBtn() {
    echo "Chirag Rakh";
    if( isset( $_POST['submit'] ) ) {
        echo "Chirag Rakh";
        form_submit();
    }
}




?>