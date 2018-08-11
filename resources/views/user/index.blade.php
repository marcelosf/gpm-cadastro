@extends('layouts.app')

@section('content')

    <div class="container">
    
        <div class="row justify-content-center">
        
            <div class="col-md-10">
            
                <div class="card">
                
                    <div class="card-header">Lista de Sócios</div>

                    <div class="card-body">
                    
                        <table class="table table-hover">
                        
                            <thead>
                            
                                <tr>
                                
                                    <th scope="coll">Nome</th>

                                    <th scope="coll">E-mail</th>

                                    <th scope="coll">Foto</th>

                                    <th scope="coll">Açoes</th>
                                
                                </tr>
                            
                            </thead>

                            @foreach($users as $user)

                                <tr scope="row">
                                
                                    <td>{{ $user->fullname }}</td>

                                    <td>{{ $user->email }}</td>

                                    <td><img src="{{ $user->register->picture }}"></td>

                                    <td>
                                        
                                        <a href="{{ route('users.show', ['id' => $user->id]) }}" class="btn btn-primary">
                                        
                                            Mais...
                                        
                                        </a>
                                    
                                    </td>
                                
                                </tr>

                            @endforeach
                        
                        </table>

                        {{ $users->links() }}
                    
                    </div>
                
                </div>
            
            </div>
    
        </div>
    
    </div>

@endsection