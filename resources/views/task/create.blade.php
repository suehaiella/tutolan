@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('task') }}" method="POST">
                    <div class="form-group">
                    <label> Task Name </label>
                    <input type="text" name="Name" class="form-control">
                    </div>

                    <div class="form-group">
                    <label> Pic </label>
                    <input type="text" name="Pic" class="form-control">
                    </div>

                    <div class="form-group">
                    <label> Email </label>
                    <input type="text" name="Email" class="form-control">
                    </div>

                    <div class="form-group">
                    <label> Phone </label>
                    <input type="text" name="Phone" class="form-control">
                    </div>

                    <input type="submit" name="Submit" class="btn btn-block btn-primary">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
