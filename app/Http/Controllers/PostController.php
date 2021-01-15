<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts()
    {
        #ვქმნით პოსტის ობიექტს
        $posts = new Post();

        #ვაბრუნებთ პოსტების გვერდს და გადავცემთ მოდელებიდან წამოღებულ ყველა პოსტს
        return view('posts')->with('posts', $posts->getPost());
    }

    #გადავცემთ პოსტის აიდის და გამოდის ცალკეულ გვერდძე ეს პოსტი

    #ვაბრუნებთ პოსტის შექმნის ვიუს
    public function create()
    {
        return view('create');
    }

    #პოსტის დასეივების ფუნქცია
    public function save(SavePostRequest $request)
    {
        // $validated = $request->validate(['title','body']);
        #იქმნება პოსტის ობიექტი და გადაეცემა ის ინფორმაცია რომელიც შეივსება ფორმაში
        return $post = new Post($request->all());

        #გადაცემული ინფორმაცია ეწერება ბაზაში
        $post->save();

        # ვაბრუნებთ პოსტების გვერდზე + შეტყობინება
        // return redirect('posts')->with('message', 'Post added sucessfully !!');
        // return $request->title; #abrunebs dasabmitebul inpodan titles
    }

    #ედიტის გვერდის ჩატვირთვა
    public function edit(Post $post)
    {
        #ვაბრუნებთ ედიტის ბლეიდს, იგივე რაც create.blade ოღონდ + შევსებული ტექსტი.
        return view('edit')->with('post', $post);
    }

    #ედიტის გვერდიდან განახლების ფუნქცია
    public function update(Post $post, Request $request)
    {
        #ვააბდეითებთ ბაზაში
        $post->update($request->all());

        return redirect('posts');
    }

    public function delete(Post $post, Request $request)
    {
        #ბაზიდან ამოშლა
        $post->delete($request->all());

        return redirect()->back();
    }
}
