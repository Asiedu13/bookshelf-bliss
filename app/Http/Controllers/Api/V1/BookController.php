<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Book;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // TODO: Find a way to not repeat yourself

      public function sendGoodResponse($data) 
    {
        return response()->json(
            [
                'status' => true,
                'data' => $data
            ], 200
            );
    }

    public function sendErrResponse($err)
    {
        return response()->json(
            [
                'status' => false,
                'messages' => $err
            ], 500
            );
    }

    public function index()
    {
        $books = Book::orderBy('id', 'desc')-> paginate(10);

        return $this->sendGoodResponse($books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
         $validatedRequest = Validator::make($request->all(), 
           [
                'author_id' => 'required|integer',
                'title' => 'required',
                'description' => 'required',
                'genre' => 'required',
                'language' => 'required',
                'url' => 'required',
                'editors' => 'required',
                'is_explicit' => 'required',
                'rating' => 'integer',
            ]
        );

        if ($validatedRequest->fails())
        {
           return $this->sendErrResponse($validatedRequest->messages());
        }

        $book = new book();

        $book->author_id = $request->input('author_id');
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->genre = $request->input('genre');
        $book->language = $request->input('language');
        $book->url = $request->input('url');
        $book->editors = $request->input('editors');
        $book->is_explicit = $request->input('is_explicit');
        $book->rating = $request->input('rating');

        $book->save();

        return $this->sendGoodResponse($book);
        
    }

    /**
     * Display the specified resource.
     */
    public function show($book)
    {
        $book = Book::find($book)->first();

        if(is_null($book))
        {
            return $this->sendErrResponse('Comment does not exist');
        }
        return $this->sendGoodResponse($book);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, $book)
    {
         $validatedRequest = Validator::make($request->all(), 
           [
                'author_id' => 'required|integer',
                'title' => 'required',
                'description' => 'required',
                'genre' => 'required',
                'language' => 'required',
                'url' => 'required',
                'editors' => 'required',
                'is_explicit' => 'required',
                'rating' => 'integer',
            ]
        );

        if ($validatedRequest->fails())
        {
           return $this->sendErrResponse($validatedRequest->messages());
        }

        $book = Book::find($book)->first;

        $book->author_id = $request->input('author_id');
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->genre = $request->input('genre');
        $book->language = $request->input('language');
        $book->url = $request->input('url');
        $book->editors = $request->input('editors');
        $book->is_explicit = $request->input('is_explicit');
        $book->rating = $request->input('rating');

        $book->update();

        return $this->sendGoodResponse($book);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book = Book::find($book);

        if(is_null($book))
        {
            return $this->sendErrResponse('Comment does not exist');
        }
        $book->delete();
       return $this->sendGoodResponse($book);
    }
}
