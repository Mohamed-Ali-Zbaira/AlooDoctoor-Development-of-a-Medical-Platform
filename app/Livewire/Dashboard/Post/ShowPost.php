<?php

namespace App\Livewire\Dashboard\Post;

use Livewire\Component;
use App\Models\Post;

class ShowPost extends Component
{
    public $post;

    protected $listeners = ['showPostDetails'];

    public function showPostDetails($postId)
    {
        // Récupérer les détails de l'article à partir de $postId
        $this->post = Post::find($postId);
    }

    public function render()
    {
        return view('livewire.dashboard.post.show-post');
    }
}
