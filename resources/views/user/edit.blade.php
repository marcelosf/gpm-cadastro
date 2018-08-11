@extends('layouts.app')

@section('content')

<div class="card">
    
    <div class="card-header">Cadastro de Sócio</div>

    <div class="card-body">

        <form method="PUT" enctype="multipart/form-data" action="{{ route('users.update', ['id' => $user->id]) }}">

            @csrf
        
            <div class="form-group">
            
                <div class="form-row align-items-center">
                
                    <div class="form-group col-md-6">
                    
                        <label for="user-fullname" id="fullname">Nome Completo</label>

                    <input type="text" class="form-control" name="fullname" id="user-fullname" value="{{ $user->fullname }}">
                    
                    </div>

                    <div class="form-group col-md-6">
                    
                        <label for="user-email">E-mail</label>

                    <input type="email" class="form-control" id="user-email" name="email" value="{{ $user->email }}">
                    
                    </div>

                    <div class="form-group col-md-6">
                    
                        <label for="user-phone">Telefone/Celular/Whatsapp</label>

                    <input type="text" id="user-phone" class="form-control" name="phone" value="{{ $user->phone }}">

                    </div>

                    <div class="form-group col-md-6">
                    
                        <label for="user-address">Endereço</label>

                    <input type="text" id="user-address" class="form-control" name="address" value="{{ $user->address }}">
                    
                    </div>

                    <div class="form-group col-md-6">
                    
                        <label for="user-city">Cidade</label>

                    <input type="text" id="user-city" class="form-control" name="city" value="{{ $user->city }}">
                    
                    </div>

                    <div class="form-group col-md-6">
                    
                        <label for="user-state">Estado</label>

                    <input type="text" name="state" id="user-state" class="form-control" value="{{ $user->state }}">
                    
                    </div>

                    <div class="form-group col-md-6">
                    
                        <label for="user-membership-year">Ano de Filiação</label>

                    <input type="text" name="membership_year" id="user-membership-year" class="form-control" value="{{ $user->membership_year }}">
                    
                    </div>

                    <div class="form-group col-md-6">
                    
                        <label for="user-birht-date">Data de nascimento</label>

                    <input type="text" name="birth_date" id="user-birth-date" class="form-control" value="{{ $user->birth_date }}">
                    
                    </div>

                    <div class="form-group col-md-6">
                    
                        <label for="user-rg">RG</label>

                    <input type="text" name="rg" id="user-rg" class="form-control" value="{{ $user->rg }}">
                    
                    </div>

                    <div class="form-group col-md-6">
                    
                        <label for="user-cpf">CPF</label>

                        <input type="text" name="cpf" id="user-cpf" class="form-control" value="{{ $user->cpf }}">
                    
                    </div>

                    <div class="form-group col-md-6">
                    
                        <label for="user-bloody-type">Tipo Sanguíneo</label>

                        <input type="text" name="bloody_type" id="user-bloody-type" class="form-control" value="{{ $user->bloody_type }}">
                    
                    </div>

                    <div class="form-group col-md-6">
                    
                        <label for="user-medical-assurence">Convênio</label>

                        <input type="text" name="medical_assurence" id="user-medical-assurence" class="form-control"  value="{{ $user->medical_assurence }}">
                    
                    </div>

                    <div class="form-group col-md-6">
                    
                        <label for="user-cbm">Particpou do Curso Básico de Montahismo?</label>

                        <select name="cbm" id="user-cbm" class="form-control">
                        
                            <option value="1" @if($user->cbm) selected @endif>Sim</option>

                            <option value="0" @if(!$user->cbm) selected @endif>Não</option>
                        
                        </select>
                    
                    </div>

                    <div class="form-group col-md-6">
                    
                        <label for="user-cbm-where">Em qual entidade?</label>

                    <input type="text" name="cbm_where" id="cbm-where" class="form-control" value="{{ $user->cbm_where }}">
                    
                    </div>

                    <div class="form-group col-md-6">
                    
                        <label for="user-picture">Modificar Foto</label>

                        <input type="file" name="picture_file_name" id="picture" class="form-control" >
                    
                    </div>

                    <div class="form-group col-md-6">
                    
                        <label for="user-membership-number">Número GPM</label>

                    <input type="text" name="membership_number" id="user-membership-number" class="form-control" value="{{ $user->membership_number }}">
                    
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                
                </div>        
            
            </div>
        
        </form>
    
    </div>

</div>


@endsection