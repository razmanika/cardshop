<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    #პოსტის შევსებისას აუცილებელი ველები, რომელიც ემატება ბაზაში, save,update ფუნქციის დროს.
    protected $fillable = [
        'title',
        'body'
    ];

    

    #ვაბრუნებთ ყველა დამატებულ პოსტს (ამას ვიძახებთ PostController_ში არსებულ posts ფუნქციაში)
    public function getPost()
    {
        return Post::all();
    }
}
