@extends('backend.layouts.main')

@section('content')
    <div class="section secondary-section ">
        <div class="triangle"></div>
        <div class="container">
            <div class=" title">
                <h1>Add menu</h1>
            </div>
            <div class="row-fluid single-project">
                @include('backend.menu.form')
            </div>
        </div>
    </div>
@endsection