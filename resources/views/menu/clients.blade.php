@extends('layout')
@section('title', 'Clients')


@section('content')
    <section class="clients">
        <div class="main-container">
            <div class="title-center">
                <span></span>
                <h2>عملاء </h2>
                <span></span>
            </div>

            <div class="row">
                @include('menu.clients-logos')
            </div>

                {{$clients->links()}}
        </div>
    </section>
@endsection
