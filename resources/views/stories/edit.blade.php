@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Ajout d'une Story

                <a href="{{ route('stories.index')}}" class="float-right">Back</a>
                </div>

                <div class="card-body">
                    
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                <form action="{{ route('stories.store') }}" method="POST">
                    @csrf
                    @include('stories.form')
                    <button class="btn btn-primary">Edit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
