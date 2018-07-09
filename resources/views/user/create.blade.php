@extends('layouts.app')

@section('content')

<div class="container">

    <div class="card">
    
        <div class="card-header">Cadastro de Sócio</div>

        <div class="card-body">

            <form>
            
                <div class="form-group">
                
                    <div class="form-row align-items-center">
                    
                        <div class="form-group col-md-6">
                        
                            <label for="user-fullname" id="fullname">Nome Completo</label>

                            <input type="text" class="form-control" name="user-fullname" id="user-fullname">
                        
                        </div>

                        <div class="form-group col-md-6">
                        
                            <label for="user-email">E-mail</label>

                            <input type="email" class="form-control" id="user-email" name="user-email">
                        
                        </div>

                        <div class="form-group col-md-6">
                        
                            <label for="user-phone">Telefone/Celular/Whatsapp</label>

                            <input type="text" id="user-phone" class="form-control" name="user-phone">

                        </div>

                        <div class="form-group col-md-6">
                        
                            <label for="user-address">Endereço</label>

                            <input type="text" id="user-address" class="form-control" name="user-address">
                        
                        </div>

                        <div class="form-group col-md-6">
                        
                            <label for="user-city">Cidade</label>

                            <input type="text" id="user-city" class="form-control" name="user-city">
                        
                        </div>

                        <div class="form-group col-md-6">
                        
                            <label for="user-state">Estado</label>

                            <input type="text" name="user-state" id="user-state" class="form-control">
                        
                        </div>

                        <div class="form-group col-md-6">
                        
                            <label for="user-membership-year">Ano de Filiação</label>

                            <input type="text" name="user-membership-year" id="user-membership-year" class="form-control">
                        
                        </div>

                        <div class="form-group col-md-6">
                        
                            <label for="user-birht-date">Data de nascimento</label>

                            <input type="text" name="user-birth-date" id="user-birth-date" class="form-control">
                        
                        </div>

                        <div class="form-group col-md-6">
                        
                            <label for="user-rg">RG</label>

                            <input type="text" name="user-rg" id="user-rg" class="form-control">
                        
                        </div>

                        <div class="form-group col-md-6">
                        
                            <label for="user-cpf">CPF</label>

                            <input type="text" name="user-cpf" id="user-cpf" class="form-control">
                        
                        </div>

                        <div class="form-group col-md-6">
                        
                            <label for="user-bloody-type">Tipo Sanguíneo</label>

                            <input type="text" name="user-bloody-type" id="user-bloody-type" class="form-control">
                        
                        </div>

                        <div class="form-group col-md-6">
                        
                            <label for="user-medical-assurence">Convênio</label>

                            <input type="text" name="user-medical-assurence" id="user-medical-assurence" class="form-control">
                        
                        </div>

                        <div class="form-group col-md-6">
                        
                            <label for="user-cbm">Particpou do Curso Básico de Montahismo?</label>

                            <select name="user-cbm" id="user-cbm" class="form-control">
                            
                                <option value="1">Sim</option>

                                <option value="0">Não</option>
                            
                            </select>
                        
                        </div>

                        <div class="form-group col-md-6">
                        
                            <label for="user-cbm-where">Em qual entidade?</label>

                            <input type="text" name="user-cbm-where" id="user-cbm-where" class="form-control">
                        
                        </div>

                        <div class="form-group col-md-6">
                        
                            <label for="user-picture">Incluir Foto</label>

                            <input type="text" name="user-picture" id="user-picture" class="form-control">
                        
                        </div>

                        <div class="form-group col-md-6">
                        
                            <label for="user-membership-number">Número GPM</label>

                            <input type="text" name="user-membership-number" id="user-membership-number" class="form-control">
                        
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>
                    
                    </div>        
                
                </div>
            
            </form>
        
        </div>

    </div>

</div>

@endsection