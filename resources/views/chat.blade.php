@extends('layouts.admin')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ asset('js/app.js') }}" defer></script>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Scamanor Messenger</div>

                <div class="card-body" id="app">
                <chat-app :user="{{ auth()->user() }}" :testid="{{ $testid }}"></chat-app>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection