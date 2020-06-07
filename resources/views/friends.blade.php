@extends('layouts.app')

@section('content')

<div class="container">
    
    <form action='{{ route('friends.invite', ['user' => $user->id]) }}' method='post'>
        @csrf
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <div class="card">
                    <div class="card-header">
                        New friend
                    </div>
                    
                        <div class="card-body">

                                <div class='form-group'>
                                    <label for='email'>E-mail</label>
                                    <input type='email' class='form-control' name='email' id='email' value='{{ old('email') }}'>
                                </div>

                        </div>

                </div>

            </div>
        </div>
        <br />
        <div class="row justify-content-center">
            <div class="col-md-8">
                
                <div class="card">
                    
                    <div class="card-body">
                        <button type="submit" class="btn btn-danger">Send invite</button>
                    </div>

                </div>

            </div>
        </div>
    </form>
</div>
@endsection