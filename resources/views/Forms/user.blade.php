<div class="form-group">
            
    <div class="form-row align-items-center">
    
        <div class="form-group col-md-4">
        
            <label for="user-fullname" id="fullname">Nome Completo</label>

            <input type="text" class="form-control" name="fullname" id="user-fullname" value="{{ isset($user) ? $user->fullname : '' }}">
        
        </div>

        <div class="form-group col-md-4">
        
            <label for="user-email">E-mail</label>

            <input type="email" class="form-control" id="user-email" name="email" value="{{ isset($user) ? $user->email : '' }}">
        
        </div>

        <div class="form-group col-md-4">
        
            <label for="user-password">Senha</label>

            <input type="password" class="form-control" id="user-password" name="password">
        
        </div>

        <div class="form-group col-md-6">
        
            <label for="user-phone">Telefone/Celular/Whatsapp</label>

            <input type="text" id="user-phone" class="form-control phone" name="phone" value="{{ isset($user) ? $user->register->phone : '' }}">

        </div>

        <div class="form-group col-md-3">
        
            <label for="user-address">Endereço</label>

            <input type="text" id="user-address" class="form-control" name="address" value="{{ isset($user) ? $user->register->address : '' }}">
        
        </div>

        <div class="form-group col-md-1">
        
            <label for="user-address-number">Nº</label>

            <input type="text" id="user-address-number" class="form-control" name="address_number" value="{{ isset($user) ? $user->register->address_number : ''}}">
        
        </div>

        <div class="form-group col-md-2">
        
            <label for="user-cep">CEP</label>

            <input type="text" id="user-cep" class="form-control cep" name="zip_code" value="{{ isset($user) ? $user->register->zip_code : '' }}">
        
        </div>

        <div class="form-group col-md-6">
        
            <label for="user-city">Cidade</label>

            <input type="text" id="user-city" class="form-control" name="city" value="{{ isset($user) ? $user->register->city : '' }}">
        
        </div>

        <div class="form-group col-md-6">
        
            <label for="user-state">Estado</label>

            <input type="text" name="state" id="user-state" class="form-control" value="{{ isset($user) ? $user->register->state : ''}}">
        
        </div>

        <div class="form-group col-md-6">
        
            <label for="user-membership-year">Ano de Filiação</label>

            <input type="text" name="membership_year" id="user-membership-year" class="form-control year" value="{{ isset($user) ? $user->register->membership_year : '' }}">
        
        </div>

        <div class="form-group col-md-6">
        
            <label for="user-birht-date">Data de nascimento</label>

            <input type="text" name="birth_date" id="user-birth-date" class="form-control date" value="{{ isset($user) ? $user->register->birth_date->format('d/m/Y') : '' }}">
        
        </div>

        <div class="form-group col-md-6">
        
            <label for="user-rg">RG</label>

            <input type="text" name="rg" id="user-rg" class="form-control rg" value="{{ isset($user) ? $user->register->rg : ''}}">
        
        </div>

        <div class="form-group col-md-6">
        
            <label for="user-cpf">CPF</label>

            <input type="text" name="cpf" id="user-cpf" class="form-control cpf" value="{{ isset($user) ? $user->register->cpf : ''}}">
        
        </div>

        <div class="form-group col-md-6">
        
            <label for="user-bloody-type">Tipo Sanguíneo</label>

            <input type="text" name="bloody_type" id="user-bloody-type" class="form-control" value="{{ isset($user) ? $user->register->bloody_type : '' }}">
        
        </div>

        <div class="form-group col-md-6">
        
            <label for="user-medical-assurence">Convênio</label>

            <input type="text" name="medical_assurence" id="user-medical-assurence" class="form-control"  value="{{ isset($user) ? $user->register->medical_assurence : ''}}">
        
        </div>

        <div class="form-group col-md-6">
        
            <label for="user-emergency-number">Contato de emergência</label>

            <input type="text" name="emergency_number" id="user-emergency-number" class="form-control phone"  value="{{ isset($user) ? $user->register->emergency_number : '' }}">
        
        </div>

        <div class="form-group col-md-6">
        
            <label for="user-emergency-name">Nome para contato de emergência</label>

            <input type="text" name="emergency_name" id="user-emergency-name" class="form-control"  value="{{ isset($user) ? $user->register->emergency_name : ''}}">
        
        </div>



        <div class="form-group col-md-6">
        
            <label for="user-cbm">Participou do Curso Básico de Montahismo?</label>

            <select name="cbm" id="user-cbm" class="form-control">
            
                <option value="1" @if(isset($user) && $user->register->cbm) selected @endif>Sim</option>

                <option value="0" @if(isset($user) && !$user->register->cbm) selected @endif>Não</option>
            
            </select>
        
        </div>

        <div class="form-group col-md-6">
        
            <label for="user-cbm-where">Em qual entidade?</label>

            <input type="text" name="cbm_where" id="user-cbm-where" class="form-control" value="{{ isset($user) ? $user->register->cbm_where : ''}}">
        
        </div>

        <div class="form-group col-md-6">
        
            <label for="user-picture">Foto</label>

            <input type="file" name="picture" id="user-picture" class="form-control" >
        
        </div>

        <div class="form-group col-md-6">
        
            <label for="user-membership-number">Número GPM</label>

            <input type="text" name="membership_number" id="user-membership-number" class="form-control" value="{{ isset($user) ? $user->register->membership_number : ''}}">
        
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    
    </div>        

</div>