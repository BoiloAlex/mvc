<?php
require_once 'config.php';
require_once 'db.php';

if ($db == null ){ // todo
    $db = new Database();
}


if (isset($_POST)){
    $result = array();
    if ($_POST['action'] == 'addComment'){
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $time = date('Y-m-d H:i:s');
        
        
        $db -> query('INSERT INTO guestbook (name, content, time) VALUES (:name, :content, :time )');
        $db->bind(':name', $_POST['name']);
        $db->bind(':content', $_POST['comment']);
        $db->bind(':time', $time );
        $result['success'] = ($db->execute()) ? true : false;
        ob_start();
        {
            include 'templates/addComment.php';
            $result['comment_html'] = ob_get_contents();
        }
        ob_end_clean();
        echo json_encode($result);
        die();
    }
}

