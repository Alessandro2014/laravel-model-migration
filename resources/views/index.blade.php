@extends('layouts.main')

@section('title', 'traveller')
@section('content')
<div>
    @forelse ($travels as $travel)
        <div>
            {{ $travel->title }}
        </div>
        <div>
            {{ $travel->price }}
        </div>
    @empty
        
    @endforelse
</div>
@endsection