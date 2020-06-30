<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class PostController extends Controller
{
    public function getItems(Store $session)
    {
        $post = new Post();
        $items = $post->getItems($session);
        return view('admin.index', ['items' => $items]);
    }

    public function postAdminCreate(Store $session, Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);
        $post = new Post();
        $post->addPost($session, $request->input('title'), $request->input('content'));
        return redirect()->route('admin.index')->with('info', 'Post created, Title is: ' . $request->input('title'));
    }

    public function getEdit(Store $session, $id)
    {
        $post = new Post();
        $item = $post->getItem($session, $id);
        return view('admin.edit', ['item' => $item, 'itemId' => $id]);
    }

    public function postEdit(Store $session, Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);
        $post = new Post();
        $post->editItem($session, $request->input('id'), $request->input('title'), $request->input('content'));
        return redirect()->route('admin.index')->with('info', 'Post ' . $request->input('id') . ' edited, new Title is: ' . $request->input('title'));
    }
}
