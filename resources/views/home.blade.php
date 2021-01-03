@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <br>

                <div class="card-body">
                    <div class="sub-header">
                        <strong><h5><a href="{{route('task.create')}}">Create New Task</a></h5></strong
                        <strong><h5><a href="{{route('task.all')}}">All Tasks</a></h5></strong>
                    </div>
                    <br>
                    <div>
                        <h3>Recent Task</h3>
                    </div>
                    @include('includes.tasks.list')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
