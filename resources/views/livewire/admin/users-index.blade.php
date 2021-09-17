<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese el nombre o correo de un usuario">
        </div>
        @if ($users->count()) 
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                @foreach ($user->roles as $role)
                                    <td>{{$role->name}}</td>
                                @endforeach 
                                <td width="10px" class="float-righ">                                
                                    <a class="btn btn-primary float-right" href="{{route('admin.users.edit', $user)}}">Editar</a>
                                </td> 
                            </tr>                                  
                        @endforeach   
                    </tbody>
                </table>                
            </div>
            <div class="card-footer">
                {{$users->links()}}
            </div> 
        @else
            <div class="card-body">
                <strong>No existe ningún regristro</strong>
            </div>    
        @endif
    </div>
</div>
