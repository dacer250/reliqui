@extends('layouts.master') 

@section('title', Auth::user()->name)

@section('dashboard-outpatients', 'active')

@section('menu')
    @include('partials.master.menu.users.dashboard')
@endsection
 
@section('content')
    <main class="col-md-8 offset-md-2 my-3 p-3">
        <div class="list-group">
            <h5 class="text-center mt-3">You have <strong>{{ $appointments->total() }}</strong> outpatients check-in today.</h5>

            @foreach ($appointments as $appointment)
                <a href="/people/outpatients/{{$appointment->token}}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center mt-3">
                    #With {{ $appointment->patient->full_name }}
                    
                    <span class="badge badge-info">
                        {{ \Carbon\Carbon::parse($appointment->preferred_time)->format('H:ia') }}
                    </span>
                </a> 
            @endforeach
        </div>
    </main>
@endsection