@extends('layouts.master')
@section('title', 'Activiteiten aanmaken')

@section('content')
    <p>test</p>

    <div class="row">
        <div class="col-xs-12">
            <form method="post" action="{{ route('register') }}" class="form-horizontal">
                {!! csrf_field() !!}

                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
                    <label for="first_name" class="control-label col-sm-4">Voornaam *</label>
                    <div class="col-sm-8">
                        <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" class="form-control">
                        {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>


            </form>
        </div>
    </div>
@endsection
