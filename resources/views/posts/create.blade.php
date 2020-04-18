@extends('layouts.app')
@section('content')
<h1>User Registration</h1>
<h3>(Please Enter Unique Email ID)</h3>
{!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
    
    <div class="form-group">
        {{Form::label('name','Name')}}
        {{Form::text('name','',['class' => 'form-control','placeholder' => 'Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('email','Email')}}
        {{Form::email('email','',['class' => 'form-control','placeholder' => 'Email ID'])}}
    </div>
    <div class="form-group">
        {{Form::label('pincode','Pincode')}}
        {{Form::text('pincode','',['class' => 'form-control','placeholder' => 'Pincode'])}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection