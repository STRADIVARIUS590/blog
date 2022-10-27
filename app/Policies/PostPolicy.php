<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Post;
// los policies permiten crear relgas de autorizacion
class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function author(User $user, Post $post){
        return ($user->id == $post->user_id);
    }

    public function published(?User $user, Post $post){
        return ($post->status == '2'); // publicado = 2 borrador = 1
    }
}
