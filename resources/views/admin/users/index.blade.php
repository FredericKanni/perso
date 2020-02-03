@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des utilisateurs</div>
@foreach ($users as $user )
<p>{{$user-> name}}-{{$user-> email}}</p>

    
@endforeach
              
            </div>
        </div>
    </div>
</div>
@endsection
