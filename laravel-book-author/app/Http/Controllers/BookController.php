<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->get();
        return response()->json([
            "success"=>true,
            "message"=>"Gett all resources",
            "data"=>$books
        ], 200);
    }
}
