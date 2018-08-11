@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="card">

        <div class="card-header"><b>Dados do Sócio</b></div>

        <div class="card-body">

            <div class="row">
                        
                <div class="col md-2 sm-2">

                    <img class="img-thumbnail rounded" src="{{ $user->register->picture }}" alt="Foto do sócio">

                </div>

                <div class="col-md-10">

                <h2>{{ title_case($user->name) }} - {{ $user->register->membership_number }}</h2>

                    <div class="row mt-4">

                        <div class="col-md-6 col-sm-6">
            
                            <h5><b>E-mail:</b> {{ $user->email }}</h5>
            
                        </div>

                        <div class="col-md-3 col-sm-3">
            
                            <h5><b>Telefone:</b> {{ $user->register->phone }}</h5>
            
                        </div>

                        <div class="col-md-6 col-sm-6">
            
                            <h5><b>RG:</b> {{ $user->register->rg }}</h5>
            
                        </div>

                        <div class="col-md-6 col-sm-6 mt-4">
            
                                <h5><b>Data de nascimento:</b> {{ $user->register->birth_date }}</h5>
                
                        </div>
            
                    </div>

                    <div class="row mt-4">

                        <div class="col-md-6 col-sm-6 mt-4">
            
                            <h5><b>Endereço:</b> {{ $user->register->address }}</h5>
            
                        </div>

                        <div class="col-md-6 col-sm-6 mt-4">
            
                            <h5><b>Número:</b> {{ $user->register->address_number }}</h5>
            
                        </div>

                        <div class="col-md-6 col-sm-6 mt-4">
            
                            <h5><b>Complemento:</b> {{ $user->register->address_complement }}</h5>
            
                        </div>

                    </div>

                    <div class="row mt-4">

                        <div class="col-md-6 col-sm-6">
            
                            <h5><b>Bairro:</b> {{ $user->register->district }}</h5>
            
                        </div>

                        <div class="col-md-6 col-sm-6">
            
                            <h5><b>CEP:</b> {{ $user->register->zip_code }}</h5>
            
                        </div>

                    </div>

                    <div class="row mt-4">

                        <div class="col-md-6 col-sm-6">
            
                            <h5><b>Cidade:</b> {{ $user->register->city }}</h5>
            
                        </div>

                        <div class="col-md-6 col-sm-6">
            
                            <h5><b>Estado:</b> {{ $user->register->state }}</h5>
            
                        </div>

                    </div>

                    <div class="row mt-4">

                        <div class="col-md-3 col-sm-3">
            
                            <h5><b>Tipo Sangíneo:</b> {{ $user->register->bloody_type }}</h5>
            
                        </div>

                    </div>

                    <div class="row mt-4">

                        <div class="col-md-12 col-sm-12 mt-4">
            
                            <h5><b>Ano de associação:</b> {{ $user->register->membership_year }}</h5>
            
                        </div>

                        <div class="col-md-6 col-sm-6 mt-4">
            
                            <h5>
                                
                                <b>Fez CBM?: </b>

                                @if($user->register->cbm)

                                    Sim

                                @else
                                
                                    Não

                                @endif
                            
                            </h5>
            
                        </div>

                        <div class="col-md-6 col-sm-6 mt-4">
            
                                <h5><b>Onde?: </b> {{ $user->register->cbm_where }}</h5>
                
                        </div>

                        <div class="col-md-12 col-sm-12 mt-4">
            
                                <h5><b>Convênio Médico: </b> {{ $user->register->medical_assurence }}</h5>
                
                        </div>

                        <div class="col-md-12 col-sm-12 mt-4">
            
                                <h5><b>Contato Emergência:</b> {{ $user->register->emergency_number }} - {{ $user->register->emergency_name }}</h5>
                    
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection