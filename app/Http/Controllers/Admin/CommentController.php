<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{
    Comment,
    User
};
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class CommentController extends Controller
{
    protected $comment;
    protected $user;

    public function __construct(Comment $comment, User $user)
    {
        $this->comment = $comment;
        $this->user = $user;
    }

    public function index($userId)
    {
        if (!$user = $this->user->find($userId)) {
            return redirect()->back();
        }

        $comments = $user->comments()->get();

        return view('users/comments/index', compact('user', 'comments'));
    }

    public function create($userId)
    {
        if (!$user = $this->user->find($userId)) {
            return redirect()->back();
        }

        return view('users/comments/create', compact('user'));
    }

    public function store(Request $request, $userId)
    {
        if (!$user = $this->user->find($userId)) {
            return redirect()->back();
        }

        $dataComment = [
            'body' => $request->body,
            'visible' => isset($request->visible)
        ];

        $user->comments()->create($dataComment);

        return redirect()->route('comments.index', $user->id);
    }

    public function edit($userId, $commentId)
    {
        if (!$comment = $this->comment->find($commentId)) {
            return redirect()->back();
        }

        $user = $comment->user;

        return view('users.comments.edit', compact('user', 'comment'));
    }

    public function update(Request $request, $commentId)
    {
        if (!$comment = $this->comment->find($commentId)) {
            return redirect()->back();
        }

        $dataComment = [
            'body' => $request->body,
            'visible' => isset($request->visible)
        ];

        $comment->update($dataComment);
        return redirect()->route('comments.index', $comment->user_id);
    }

    public function delete($commentId)
    {
        if (!$comment = $this->comment->find($commentId)) {
            return redirect()->back();
        }

        $user = $comment->user;

        $comment->delete($commentId);
        return redirect()->route('comments.index', $user);
    }
}
