@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    {{ Auth::user()->first_attemp }}
                        
                    @if (Auth::user()->roles == 'admin')
                    <ul>
                        @foreach ($users as $user)
                        <li class="py-2">{{ $user['email'] }} <form method="POST" action="{{ route('verify', $user->id) }}">@csrf<button name="submit" type="submit" class="btn btn-primary btn-sm">Verifikasi</button></form></li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
