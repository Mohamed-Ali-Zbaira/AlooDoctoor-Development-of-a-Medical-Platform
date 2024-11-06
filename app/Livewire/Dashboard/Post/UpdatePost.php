<?php

namespace App\Http\Livewire\Dashboard\Post;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class UpdatePost extends Component
{
    use WithFileUploads;

    public $postId;
    public $title;
    public $category;
    public $body;
    public $image;
    public $posts;
    public $selected_post;
    public $searchTerm;

    protected $listeners = ['closeModal'];

    public function mount()
    {
        $userId = Auth::id();
        $user = User::find($userId);
        $this->posts = $user->posts;
    }

    public function updatePost()
    {
        $this->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'body' => 'required|string',
            'image' => 'image|max:1024',
        ]);

        $post = Post::find($this->selected_post);
        if ($post) {
            $post->update([
                'title' => $this->title,
                'category' => $this->category,
                'body' => $this->body,
            ]);

            if ($this->image) {
                $imageName = time() . '.' . $this->image->getClientOriginalExtension();
                $this->image->storeAs('public/images', $imageName);
                $post->image = 'storage/images/' . $imageName;
                $post->save();
            }

            session()->flash('success', 'Post updated successfully!');
            return back();
        }
    }

    public function deletePost()
    {
        $post = Post::find($this->selected_post);
        if ($post) {
            $post->delete();
            session()->flash('success', 'Post deleted successfully!');
            return back();
        }
    }

    public function closeModal()
    {
        $this->emit('closeModal');
    }

    public function render()
    {
        return view('livewire.dashboard.post.update-post');
    }

    public function setSelectedPost($value)
    {
        $this->selected_post = $value;
    }

    public function getDataSelectedPost()
    {
        return Post::where('id', $this->selected_post)->first();
    }

    public function search()
    {
        $userId = Auth::id();
        $user = User::find($userId);

        $this->posts = $user->posts()
            ->where(function ($query) {
                $query->where('title', 'like', '%' . $this->searchTerm . '%')
                    ->orWhere('category', 'like', '%' . $this->searchTerm . '%')
                    ->orWhere('body', 'like', '%' . $this->searchTerm . '%');
            })->get();
    }
}
