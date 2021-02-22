@extends('layouts.app')

@section('content')


    <div class="row justify-content-center">
    
                <link rel="stylesheet" type="text/css" href="css/style.css"> 
                <div class="links">
                    <a href="home">home</a>
                    <a href="about">about</a>
                    <a href="Crud">carlisting</a>
                    <a href="contact_us">contact us</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif 
                </div>
                
        </div>
    </div>
@endsection
