<?php

namespace App\Repositories;

use App\Interfaces\TaskRepositoryInterface;
use App\Models\Task;

class TaskRepository implements TaskRepositoryInterface {
  public function all() {
    return Task::all();
  }

  public function create(array $data) {
    return Task::create($data);
  }

  public function show($id) {
    return Task::find($id);
  }

  public function update($id, array $data) {
    $task = Task::find($id);
    if($task) {
      $task = Task::updated($data);
    }
    return $task;
  }

  public function delete($id) {
    $task = Task::find($id);
    return $task ? $task->delete() : false;
  }
}
