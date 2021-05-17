@extends('layouts.master')
@section('back', route('user.index'))
@section('title', __('Gebruiker toevoegen'))

@section('content')
    <div class="row">
        <div class="col-xs-12">
            {!! Form::open(['url' => 'gebruikers', 'class' => 'form-horizontal']) !!}

            <div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
                    {!! Form::label('first_name', __('Voornaam').' *', ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('name_prefix') ? 'has-error' : ''}}">
                    {!! Form::label('name_prefix', __('Tussenvoegsel'), ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('name_prefix', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name_prefix', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
                    {!! Form::label('last_name', __('Achternaam').' *', ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <hr>

            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', __('E-mail adres').' *', ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : ''}}">
                {!! Form::label('phone_number', __('Telefoonnummer'), ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('phone_number', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <hr>

            <div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
                {!! Form::label('address', __('Adres').' *', ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('address', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('zip_code') ? 'has-error' : ''}}">
                {!! Form::label('zip_code', __('Postcode').' *', ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('zip_code', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('zip_code', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
                {!! Form::label('city', __('Stad').' *', ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::text('city', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('city', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <hr>

            <div class="form-group {{ $errors->has('shirt_size') ? 'has-error' : ''}}">
                {!! Form::label('shirt_size', __('Shirt maat'), ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::select('shirt_size', ['XS' => 'XS', 'S' => 'S', 'M' => 'M', 'L' => 'L' , 'XL' => 'XL'], null, ['class' => 'form-control']) !!}
                    {!! $errors->first('shirt_size', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <hr>

            <div class="form-group {{ $errors->has('account_type') ? 'has-error' : ''}}">
                {!! Form::label('account_type', 'Account type *', ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::select('account_type', ['user' => 'Gebruiker', 'admin' => 'Administrator'], null, ['class' => 'form-control']) !!}
                    {!! $errors->first('account_type', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('activated') ? 'has-error' : ''}}">
                {!! Form::label('activated', 'Account status *', ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::select('activated', [1 => 'Geactiveerd', 0 => 'Gedeactiveerd'], null, ['class' => 'form-control']) !!}
                    {!! $errors->first('activated', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('user_category_alias') ? 'has-error' : ''}}">
                {!! Form::label('user_category_alias', __('Gebruikerscategorie').' *', ['class' => 'col-sm-4 control-label']) !!}
                <div class="col-sm-8">
                    {!! Form::select('user_category_alias', array_replace(['' => 'Geen lid'], $user_categories_values), null, ['class' => 'form-control']) !!}
                    {!! $errors->first('user_category_alias', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    {!! Form::button(__('Gebruiker aanmaken'), ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                </div>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
