@extends('layouts.master')

@section('content')

<div class="col-md-6">
<h1>All Tasks</h1>
<ul class="list-group">

@foreach($tasks as $task)
	<li class="list-group-item {{ $task->completed ? 'completed' : '' }}">
		<a href="/{{ $task->user->username }}/tasks"><img src="{{ gravatar_url($task->user->email) }}" alt="{{ $task->user->username }}"></a>
		{{ $task->title }}

		{{ Form::model($task, ['id' => 'task-update-form', 'method' => 'PATCH', 'route' => ['tasks.update', $task->id]]) }}
			{{ Form::checkbox('completed') }}
			{{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
		{{ Form::close() }}
	</li>
@endforeach

</ul>
</div>

<div class="col-md-6">
@if (isset($users))
<h3>Add New Task</h3>
@include('tasks/partials/_form')
@endif
</div>

@stop