@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">
    
        <div class="card-header">Cadastro de Sócio</div>

        <div class="card-body">

            <form method="POST" enctype="multipart/form-data" action="{{ route('users.store') }}">

                @csrf
            
                @include('Form.user')
            
            </form>
        
        </div>

    </div>

</div>

@endsection