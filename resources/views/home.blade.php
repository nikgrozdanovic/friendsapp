@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Friends list
                    <a href='{{ route('friends.create') }}' class="btn btn-sm btn-primary float-right">Add</a>
                </div>
                <div class="card-body">
                    
                    <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">E-mail</th>
                            <th scope="col" class='text-center'>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($friendlist as $fl)
                            <td>{{ $fl->friend->name }}</td>
                            <td>{{ $fl->friend->email }}</td>
                            <td class='text-center'>

                            </td>
                            @endforeach
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>

    <br />

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    List of invitations
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table table-dark">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">E-mail</th>
                            <th scope="col" class='text-center'>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($invites as $invite)
                            <td>{{ $invite->user->name }}</td>
                            <td>{{ $invite->user->email }}</td>
                            <td class='text-center'>
                                <form action="{{ route('invites.accept', ['invite' => $invite]) }}" method='POST' style='display: inline-block'>
                                    @csrf
                                    <button class="btn btn-success">Accept</button>
                                </form>
                                <form action="{{ route('invites.destroy', ['invite' => $invite]) }}" method='POST' style='display: inline-block'>
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Decline</button>
                                </form>
                            </td>
                            @endforeach
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
