<?php

namespace App;

class Subscribe
{

    public function getItems($session)
    {
        if (!$session->has('items')) {
            $this->createDummyData($session);
        }

        return $session->get('items');
    }


    private function createDummyData($session)
    {
        $items = [
            [
                'type' => 'Sale',
                'title' => 'Learning Laravel',
                'description' => 'This blog post will get you right on track with Laravel',
                'price' => 50
            ],
            [
                'type' => 'New',
                'title' => 'Something else',
                'description' => 'Some other content',
                'price' => 50
            ]
        ];
        $session->put('items', $items);
    }
}
