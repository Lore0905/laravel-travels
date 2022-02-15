@extends('layout.app');

@section('page_title')
Homepage
@endsection

@section('main-content')
    <ul>
        @foreach ($travels as $travel)
            <li>
                {{ $travel->name }}
            </li>    
        @endforeach
    </ul>
@endsection