<?php

Route::get('/', ['as' => 'home', 'uses' => 'TasksController@index']);
Route::post('/tasks', 'TasksController@store');
Route::patch('tasks/{id}', ['as' => 'tasks.update', 'uses' => 'TasksController@update']);

Route::get('{username}', 'UserTasksController@index');
Route::get('{username}/tasks', 'UserTasksController@index');


// Disable View of Individual Task
// Route::get('{username}/tasks/{id}', ['as' => 'user.tasks.show', 'uses' => 'UserTasksController@show']);