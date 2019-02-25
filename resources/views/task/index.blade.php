@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                <a href = "{{ url('tasks/create') }}" class="btn btn-success float-right" > Create New Task </a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">

					  <tr>
					    <th>Tasks</th>
					    <th>Pic</th>
					    <th>Email</th>
					     <th>Phone</th>
					  </tr>
					  @foreach($tasks as $task)
					  <tr>
					    <td>{{ $task->name }}</td>
					    <td>{{ $task->pic }}</td>
					    <td>{{ $task->email }}</td>
					    <td>{{ $task->phone_no }}</td>
					  </tr>
					  @endforeach

					</table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

