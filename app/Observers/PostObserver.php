<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Facades\Storage;
class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function created(Post $post)// se ejecuta despues de crear el post
    {
        //
    }

    public function creating(Post $post) // se ejecuta antes de crear el post
    {
        if(! \App::runningInConsole()){// si creamos posts con uun seeder, no hay un usuario autentiificado, entonces se evalua que no se estè usando la consola (seeders) para crear posts
            $post ->user_id = auth()->user()->id;
        }
    }

    /**
     * Handle the Post "updated" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        //
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function deleted(Post $post) // se activa despues de eliminar el post
    {
        
    }

    public function deleting(Post $post){ // se ejecuta antes de eliminar el post
        if($post->image){
            Storage::delete($post->image->url);
        }
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }
}
