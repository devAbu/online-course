<?php

namespace App;

class Post
{

    private function createItems($session)
    {
        $items = [
            [
                'title' => 'Learning Laravel',
                'content' => 'This blog post will get you right on track with Laravel'
            ],
            [
                'title' => 'Something else',
                'content' => 'Some other content'
            ]
        ];
        $session->put('items', $items);
    }

    public function getItems($session)
    {
        if (!$session->has('items')) {
            $this->createItems($session);
        }
        return $session->get('items');
    }

    public function addPost($session, $title, $content)
    {
        if (!$session->has('items')) {
            $this->createItems($session);
        }
        $items = $session->get('items');
        array_push($items, ['title' => $title, 'content' => $content]);
        $session->put('items', $items);
    }

    public function getItem($session, $id)
    {
        if (!$session->has('items')) {
            $this->createDummyData($session);
        }
        return $session->get('items')[$id];
    }

    public function editItem($session, $id, $title, $content)
    {
        if (!$session->has('items')) {
            $this->createDummyData($session);
        }
        $items = $session->get('items');
        $items[$id] = ['title' => $title, 'content' => $content];
        $session->put('items', $items);
    }
}
