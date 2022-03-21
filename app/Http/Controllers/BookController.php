<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
class BookController extends Controller
{
    //
    public function getbook(){
        return response()->json(Book::all(), 200);
    }
    
    public function getidbook($id){
        $book = Book ::find ($id);
        if(is_null($book)){
            return response()->json(['message'=> 'Book Not Found', 404]);
        }
        return response()->json($book::find($id), 200);

    }

    public function addbook(Request $request){
        $book = Book::create($request->all());
        return response($book, 201);
    }

    public function update(Request $request, $id){
        $book = Book::find($id);
        if(is_null($book)){
            return response()->json(['message' => 'Book Not Found'], 404);
        }
        $book->update($request->all());
        return response($book, 200);
    }

    public function delete(Request $request, $id){
        $book = Book::find($id);
        if(is_null($book)){
            return response()->json(['message' => 'Book Not Found'], 404);
        }
        $book->delete();
        return response()->json(null, 204);
    }
}
