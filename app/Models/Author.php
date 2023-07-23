<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    private static $author, $image, $imageNewName, $directory, $imgUrl;
    public static function saveAuthor($request){
        if ($request->id){
            self::$author = Author::find($request->id);
            self::$author->author_name = $request->author_name;
            if ($request->file('image')){
                if (self::$author->image){
                    if (file_exists(self::$author->image)){
                        unlink(self::$author->image);
                        self::$author->image = self::saveImage($request);
                    }
                }else{
                    self::$author->image = self::saveImage($request);
                }
            }
        }else{
            self::$author = new Author();
            self::$author->author_name = $request->author_name;
            self::$author->image = self::saveImage($request);
        }
        self::$author->save();
    }

    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = 'author-'.rand().'.'.self::$image->Extension();
        self::$directory = 'admin-asset/upload-image/author/';
        self::$imgUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);
        return self::$imgUrl;
    }


    public static function statusAuthor($id){
        self::$author = Author::find($id);
        if (self::$author->status == 1){
            self::$author->status = 0;
        }else{
            self::$author->status = 1;
        }
        self::$author->save();
    }


    public static function deleteAuthor($request){
        self::$author = Author::find($request->id);
            if (self::$author->image){
                if (file_exists(self::$author->image)){
                    unlink(self::$author->image);
                    self::$author->delete();
                }
            }else
            self::$author->delete();
    }

}
