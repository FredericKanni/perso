@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des utilisateurs</div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      @foreach ($users as $user )
                     
                      <tr>
                        <th scope="row">{{$user-> id}}</th>
                        <td>{{$user-> name}}</td>
                        <td>{{$user-> email}}</td>
                        <td>
                        <a href="{{route('admin.users.edit', $user-> id)}}"><button class="btn btn-primary">éditer</button></a>
                            <a href="{{route('admin.users.destroy', $user-> id)}}"><button class="btn btn-danger">supprimer</button></a>
                        </td>
                      </tr>
                          
                      @endforeach
                    </tbody>
                  </table>


              
            </div>
        </div>
    </div>
</div>
@endsection
