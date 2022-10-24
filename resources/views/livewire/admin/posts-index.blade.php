<div class="card">
   {{--   {{$search}} --}}
{{-- {{$posts}} --}}
     <div class="card-header">
          <input class="form-control" type="text" placeholder="Ingrese al nombre del post" wire:model='search'>

     </div>
     @if ($posts->count())
     <div class="card-body">
          <table class="table table-striped">
               <thead>
                    <tr>
                         <th>ID</th>
                         <th>NAME</th>
                         <th colspan="2"></th>
                    </tr>
               </thead>
               <tbody>
                    @foreach ($posts as $post)
                        <tr>
                              <td>{{$post->id}}</td>
                              <td>
                                   <a style="color:black" href="{{route('posts.show', $post)}}">{{$post->name}}</a>
                              </td>   
                              <td width='10px'>
                                   <a class="btn btn-primary btn-sm" href="{{route('admin.posts.edit', $post)}}">Editar</a>
                              </td>
                              <td width='10px'>
                                   <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input class="btn btn-danger btn-sm" type="submit" value="Eliminar">
                                   </form>
                              </td>
                         </tr>
                    @endforeach
               </tbody>
          </table>
     </div>
     <div>
          {{$posts->links()}}
     </div>
     @else
          <div class="card-body">
               <strong>No se encuentran registros</strong>
          </div>
     @endif
    
</div>
