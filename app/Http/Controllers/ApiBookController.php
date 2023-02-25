<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class ApiBookController extends Controller
{
    public function index(){

        $books = Book::get();
        return response()->json($books);
    }

    public function show($id)
    {
        $book = Book::with('categories')->findOrFail($id);
        return response()->json($book);
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:100',
            'desc' => 'required|string',
            'img' => 'required|image|mimes:jpg,png,jpeg',
            // 'category_ids'=> 'required',
            // 'category_ids.*'=>'exists:categories,id'
        ]);

        $img = $request->file('img');
        $ext = $img->getClientOriginalExtension();
        $name = "book-" . uniqid() . ".$ext";
        $img->move(public_path('uploads/books'), $name);



       $book = Book::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'img' => $name

        ]);
        $book->categories()->sync($request->category_ids);
        
        return response()->json([
            'message'=>'Book Added Successfully'
        ]); 
    }
}
