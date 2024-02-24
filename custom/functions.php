<?php

function aggiungiTesto() {
    echo "<p>Questo testo è stato aggiunto all'inizio del contenuto.</p>";
}

function get_data(){
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_theme';
    $sql = 'SELECT * FROM $table_name';
    $result = $wpdb->get_results($sql);
    echo "$result";
}

?>