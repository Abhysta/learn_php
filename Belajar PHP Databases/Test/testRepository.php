<?php

use Model\Comment;

require_once "9-Repository/Repository.php";
require_once "connection/db-connection.php";


$connection = getConnection();

$repo = new CommentRepositoryImpl($connection);
$repo->insert(new Comment(email: "test@repositoy.com", comment: "HI"));

var_dump($repo->findById(27));

$connection = null;
