<?php
session_start();

/**
 * Connecting to the database
 */
try {
    $db = new PDO(
        'mysql:host=localhost;dbname=event_manager;charset=utf8',
        'user',
        'userpwd',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );
} catch (PDOException $PODError) {
    $_SESSION['error'] = "Connection to the database failed.";
    header('Location: error.php');
    exit;
}

/**
 * @param PDO $db
 * @return array
 *
 * Get the two most recents events
 */
function getRecentsTwoEvents(PDO $db):array {
    return $db->query('SELECT * FROM events ORDER BY event_date DESC LIMIT 2')->fetchAll();
}