@extends('layouts.panel')
@section('title', 'Novo evento')
@section('content')
    <form action="{{ route('organization.events.update', $event->id) }}" method="POST" autocomplete="off">
        @method('PUT')
        @include('organization.events._partials.form')
    </form>
@endsection
