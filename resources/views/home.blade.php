@extends('layouts.admin')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @role('admin')

                    {{ __('Bienvenido CEO, ' . auth()->user()->nombre . '!') }}

                    @else

                    {{ __('Bienvenido usuario, ' . auth()->user()->nombre . '!') }}

                    @endrole

                    </div>
                </div>
            </div>
        </div>
        @endsection