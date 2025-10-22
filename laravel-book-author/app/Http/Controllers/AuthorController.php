<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // ✅ Menampilkan semua data author
    public function index()
    {
        return response()->json(Author::all());
    }

    // ✅ Menyimpan data author baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:authors,email',
            'bio' => 'nullable|string',
        ]);

        $author = Author::create($request->only(['name', 'email', 'bio']));

        return response()->json($author, 201);
    }

    // ✅ Menampilkan satu author berdasarkan ID
    public function show($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json(['message' => 'Author not found'], 404);
        }

        return response()->json($author);
    }

    // ✅ Mengupdate data author berdasarkan ID
    public function update(Request $request, $id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json(['message' => 'Author not found'], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:authors,email,' . $id,
            'bio' => 'nullable|string',
        ]);

        $author->update($request->only(['name', 'email', 'bio']));

        return response()->json($author);
    }

    // ✅ Menghapus data author berdasarkan ID
    public function destroy($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json(['message' => 'Author not found'], 404);
        }

        $author->delete();

        return response()->json(['message' => 'Author deleted successfully']);
    }
}
