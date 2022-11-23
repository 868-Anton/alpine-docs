<?php


$config = require('config.php');
$db = new Database($config['database']);

$heading = 'My Notes';

$notes = $db->query('select * from notes where user_id=1')->fetchAll();



// $id = $_GET['id'];

// $query = 'select * from posts where id=?';

// $post = $db->query($query, [$id])->fetch();

// dd($post);
require "views/notes.view.php";