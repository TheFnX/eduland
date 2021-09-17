<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese en nombre de un post">
    </div>

    @if ($posts->count())       
    
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->name}}</td>                           
                            <td width="10px">
                                <a class="btn btn-primary btn-sm float-right" href="{{route('admin.posts.edit', $post)}}">Editar</a>
                            </td>
                            <td width="10px">
                                @can('admin.tags.destroy', Model::class)
                                    <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm float-right" type="submit">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>                    
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{$posts->links()}}
        </div>       
    @else
        <div class="card-body">
            <strong>No existe ningún regristro</strong>
        </div>
    @endif
</div>
