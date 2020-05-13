<?php

class ShareModel extends Model
{
    public function Index()
    {
        $this->query("SELECT * from shares");
        $rows = $this->resultSet();

        return $rows;
    }

    public function add()
    {
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $body = $_POST['body'];
            $link = $_POST['link'];
            $this->query("INSERT INTO shares(`user_id`, title, body, link) values (:user_id, :title, :body, :link)");
            $this->bind(':user_id', 1);
            $this->bind(':title', $title);
            $this->bind(':body', $body);
            $this->bind(':link', $link);

            $this->execute();
        }

        /* OVO NIKAD NE RADI */
        if ($this->lastInsertId()) {
            header("location: " . ROOT_URL . "share");
        }
    }
}
