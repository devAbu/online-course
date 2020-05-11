<?php

class Post
{
    private $name;

    public function __set($key, $value)
    {
        echo 'setting ' . $key . ' to ' . $value . ' <br>';
        $this->name = $value;
    }

    public function __get($key)
    {
        echo 'getting ' . $key . ' from ' . $this->name  . ' <br>';
    }

    public function __isset($key)
    {
        echo 'Is ' . $key . ' set?' . ' <br>';
        return isset($this->name);
    }
}

$post = new Post;
$post->key = 'abu'; /* SET */
echo $post->key; /* GET */
var_dump(isset($post->key));
