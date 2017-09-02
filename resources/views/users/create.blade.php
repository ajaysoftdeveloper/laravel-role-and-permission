@extends('layouts.app')

@section('title', '| Add User')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='fa fa-user-plus'></i> Add User</h1>
    <hr>

    {!! Form::open(array('url' => 'users')) !!}

    <div class="form-group @if ($errors->has('name')) has-error @endif">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', '', array('class' => 'form-control')) !!}
    </div>

    <div class="form-group @if ($errors->has('email')) has-error @endif">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', '', array('class' => 'form-control')) !!}
    </div>

    <div class="form-group @if ($errors->has('roles')) has-error @endif">
        @foreach ($roles as $role)
            {!! Form::checkbox('roles[]',  $role->id ) !!}
            {!! Form::label($role->name, ucfirst($role->name)) !!}<br>

        @endforeach
    </div>

    <div class="form-group @if ($errors->has('password')) has-error @endif">
        {!! Form::label('password', 'Password') !!}<br>
        {!! Form::password('password', array('class' => 'form-control')) !!}

    </div>

    <div class="form-group @if ($errors->has('password')) has-error @endif">
        {!! Form::label('password', 'Confirm Password') !!}<br>
        {!! Form::password('password_confirmation', array('class' => 'form-control')) !!}

    </div>

    {!! Form::submit('Add', array('class' => 'btn btn-primary')) !!}

    {!! Form::close() !!}

</div>

@endsection