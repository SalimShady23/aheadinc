<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blogs;
use App\Models\Comments;

class ViewPost extends Component
{
    public $postId, $postTitle, $postCategory, $postDescription, $postStatus, $postViews, $postLikes, $postComments, $postAuthor, $postCreatedAt;

    public $fullName, $email, $message;

    public $comments;

    //public $commentFullName, $commentCreatedAt;

    public function mount($id)
    {
        $this->postId = $id;
        $post = Blogs::find($this->postId);

        $this->postTitle        = $post->blogTitle;
        $this->postCategory     = $post->blogCategory;
        $this->postDescription  = $post->blogDescription;
        $this->postStatus       = $post->blogStatus;
        $this->postViews        = $post->blogViews;
        $this->postLikes        = $post->blogComments;
        $this->postAuthor       = $post->author;
        $this->postCreatedAt    = $post->created_at;

        $this->comments = Comments::where('post', $this->postId)->get();

    }

    public function comment()
    {
        $comment            = new Comments;
        $comment->fullName  = strtoupper($this->fullName);
        $comment->email     = strtoupper($this->email);
        $comment->message   = $this->message;
        $comment->post      = $this->postId;

        if ($comment->save()) {

            session()->flash('success-message', 'We appreciate your feedback');
            return redirect()->route('view-post', [$this->postId]);
        }
    }

    public function render()
    {
        return view('livewire.view-post');
    }
}
