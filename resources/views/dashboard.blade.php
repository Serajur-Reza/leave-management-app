@extends('common')

@section('content')
    <h1>Hello to dashboard</h1>

    @if ($users)
            <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Name: {{$item->name}}</h5>
            <p class="card-text">Email: {{$item->email}}</p>
            <a href="{{ url('/leave') }}" class="btn btn-primary">Take Leave</a>
        </div>
    </div>
    @else
            <div class="card" style="width: 18rem;">
No user
    </div>
    @endif
    {{-- <h3>{{count($users)}}</h3> --}}
    {{-- @foreach ($users as $item)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Name: {{$item->name}}</h5>
            <p class="card-text">Email: {{$item->email}}</p>
            <a href="{{ url('/leave') }}" class="btn btn-primary">Take Leave</a>
        </div>
    </div>
    @endforeach --}}
    
@endsection