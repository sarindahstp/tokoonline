<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index',['book'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //add data
        Book::create($request->all());

        // if true, redirect to index
        return redirect()->route('books.index')
            ->with('success', 'Add data success!');
            
            if($request->file('photo')){
                $image_name = $request->file('photo')->store('images','public');
                }
            $book = Book::find($id);
            $book->kode_buku = $request->kode_buku;
            $book->judul = $request->judul;
            $book->tahun_terbit = $request->tahun_terbit;
            $book->keterangan = $request->keterangan;
            $book->photo = $image_name;
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book= Book::find($id);
        return view('books.edit',['book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->kode_buku = $request->kode_buku;
        $book->judul = $request->judul;
        $book->tahun_terbit = $request->tahun_terbit;
        $book->keterangan = $request->keterangan;
        if($book->photo && file_exists(storage_path('app/public/' 
. $student->photo)))
 {
 \Storage::delete('public/'.$book->photo);
 }
 $image_name = $request->file('photo')->store('images', 
'public');
 $book->photo = $image_name;
        $book->save();
        return redirect()->route('books.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books.index');
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $book = Book::where('kode_buku', 'judul', "%" . $keyword . "%")->paginate(5);
        return view('books.index', compact('book'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
