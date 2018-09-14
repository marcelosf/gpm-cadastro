@extends('layouts.app')

@section('content')

<div class="card">
    
    <div class="card-header">Cadastro de Sócio</div>

    <div class="card-body">

        <form method="POST" enctype="multipart/form-data" action="{{ route('users.update', ['id' => $user->id]) }}">

            @method('put')
            @csrf
        
            @include('Forms.user')
        
        </form>
    
    </div>

</div>


@endsection