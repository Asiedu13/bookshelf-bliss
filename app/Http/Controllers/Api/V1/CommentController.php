<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Comment;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        $comments = Comment::orderBy('id', 'desc')-> paginate(10);

        return $this->sendGoodResponse($comments);
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
    public function store(StoreCommentRequest $request)
    {
        $validatedRequest = Validator::make($request->all(), 
           [
                'user_id' => 'required|integer',
                'book_id' => 'required|integer',
                'content' => 'required'
            ]
        );

        if ($validatedRequest->fails())
        {
           return $this->sendErrResponse($validatedRequest->messages());
        }

        $comment = new Comment();

        $comment->user_id = $request->input('user_id');

        $comment->book_id = $request->input('book_id');
        $comment->content = $request->input('content');

        $comment->save();

        return $this->sendGoodResponse($comment);
        
    }

    /**
     * Display the specified resource.
     */
    public function show($comment)
    {
        $comment = Comment::find($comment)->first();

        if(is_null($comment))
        {
            return $this->sendErrResponse('Comment does not exist');
        }
        return $this->sendGoodResponse($comment);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, $comment)
    {
         $validatedRequest = Validator::make($request->all(), [
                'user_id' => 'required|integer',
                'book_id' => 'required|integer',
                'content' => 'required'
            ] );

        if ($validatedRequest->fails())
        {
           return $this->sendErrResponse($validatedRequest->messages());
        }

        $comment = Comment::find($comment)->first();
        $comment->user_id = $request->input('user_id');

        $comment->book_id = $request->input('book_id');
        $comment->content = $request->input('content');

        $comment->update();

        return $this->sendGoodResponse($comment);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($comment)
    {
        $comment = Comment::find($comment);

        if(is_null($comment))
        {
            return $this->sendErrResponse('Comment does not exist');
        }

        $comment->delete();
       return $this->sendGoodResponse($comment);
    }
}
