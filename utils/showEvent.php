<?php
function showEvent($event) {
    echo '<div class="card mb-5 text-start">'
        . '<div class="card-header bg-primary text-white lead">'
        . $event['event_name']
        . '</div>'
        . '<div class="card-body">'
        . '<p class="card-text">' . $event['event_desc'] . '</p>'
        . '</div>'
        . '<div class="card-footer text-body-secondary">'
        . $event['event_date']
        . ' - '
        . $event['event_place']
        . '</div>'
        . '</div>';
}