<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    protected $table = 'todo_items';

    protected $fillable = ['todo_list_id', 'content'];

    public function todoList()
    {
        return $this->belongsTo(TodoList::class);
    }
}
