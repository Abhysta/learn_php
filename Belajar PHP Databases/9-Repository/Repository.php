<?php

require_once "connection/db-connection.php";
require_once "Model/Entity.php";

use Model\Comment;

interface CommentRepository
{

    function insert(Comment $comment): Comment;

    function findById(int $id): ?Comment;

    function findAll(): ?array;
}

class CommentRepositoryImpl implements CommentRepository
{

    public function __construct(private PDO $connection)
    {
    }

    function insert(Comment $comment): Comment
    {
        $sql = "INSERT INTO comments (email, comment) VALUES (?, ?)";
        $prepare = $this->connection->prepare($sql);
        $prepare->execute([$comment->getEmail(), $comment->getComment()]);
        $id = $this->connection->lastInsertId();

        $comment->setId($id);

        return $comment;
    }

    function findById(int $id): ?Comment
    {
        $sql = "SELECT * FROM comments WHERE id = ?";
        $prepare = $this->connection->prepare($sql);
        $prepare->execute([$id]);

        if ($row = $prepare->fetch()) {
            return new Comment($row["id"], $row["email"], $row["comment"]);
        } else {
            return null;
        }
    }

    function findAll(): ?array
    {
        $sql = "SELECT * FROM comments";
        $statement = $this->connection->query($sql);

        $array = [];

        while ($row = $statement->fetch()) {
            $array[] = $row;
        }

        return $array;
    }
}