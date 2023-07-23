<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function addAuthor(){
        return view('admin.author.add-author');
    }

    public function saveAuthor(Request $request){
        Author::saveAuthor($request);
        Return back()->with('message','Author Info Saved');
    }


    public function manageAuthor(){
        return view('admin.author.manage-author',[
            'authors'=>Author::all()
        ]);
    }

    public function statusAuthor($id){
        Author::statusAuthor($id);
        Return back()->with('message','Status Updated');
    }

    public function editAuthor($id){
        return view('admin.author.edit-author',[
            'author'=>Author::find($id)
        ]);
    }

    public function updateAuthor(Request $request){
        Author::saveAuthor($request);
        return back()->with('message','Author info edited');
    }

    public function deleteAuthor(Request $request){
        Author::deleteAuthor($request);
        Return back()->with('message','Author info deleted');
    }






}
