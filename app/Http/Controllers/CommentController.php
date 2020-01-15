<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Blog;
use App\User;
use App\Comment;
use Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::with(['userDetail'])->get();
       return view('admin.comment.index',compact('comments'));
    }

    public function approvefeedback($id)
    {
        $feedback = Comment::findOrFail($id);
        $feedback->status = 1;
        $feedback = $feedback->save();
       if(isset($feedback)) {
        echo 'update';
        }else{
           echo 'error';
        }
    }

    public function deletefeedback($id)
    {
        $feedback = Comment::findOrFail($id);
        $delete = $feedback->delete();
        if(isset($delete)) {
        echo 'delete';
        }else{
           echo 'error';
        }
    }
}
