@extends('layouts.landing')

@section('title', 'Services')

@section('content')

    <h1>Services</h1>



    @component('_components.card')
        @slot('title', 'Services 1')
        @slot('content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. ')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Services 2')
        @slot('content', 'Amet consectetur adipisicing elit. ')
    @endcomponent
    @component('_components.card')
        @slot('title', 'Services 3')
        @slot('content', 'Lorem ipsum dolor sit amet.')
    @endcomponent

@endsection
