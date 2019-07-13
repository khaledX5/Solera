@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Solera Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <label class="text-capitalize">User : {{$user->name}} </label>
                    <table class="table table-bordered table-primary">
                        <thead>
                          <tr>
                            <th scope="col" class="text-center">Current Reading</th>
                            <th scope="col" class="text-center">Current Balance</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">{{$data->reading}} KW</td>
                            <td class="text-center">{{$data->balance}} USD</td>
                          </tr>
                        </tbody>
                      </table>
                       
                </div>
            </div>
            <label class="text-capitalize">Last login at  : {{$user->last_login_at}} </label>
            
        </div>
    </div>
</div>

@endsection
