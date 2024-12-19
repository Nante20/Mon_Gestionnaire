@extends('tasks_view.app')
@section('content')
<h2>@if (empty($task))création @else modification @endif d'une tache</h2>
<form action="{{ empty($task) ? route('task.store') : route('task.update', $task->id) }}" method="POST" style="display:inline;">
    @csrf
    @if(!empty($task))
    @method('PUT')
    @endif
    <div class="mb-3">
         <label for="title" class="form-label">Titre</label>
         <input type="text" @if (!empty($task)) value = "{{ old('title', $task->title) }}" @endif name="title" class="form-control" id="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" class="form-control" id="description">
            {{ !empty($task) ? old('description', $task->description) : "" }}
        </textarea>
   </div>
   <div class="mb-3">
        <input type="checkbox" {{ !empty($task) && $task->status ? 'checked' : "" }}  name="status" class="form-check-input" id="form-check-label">
        <label for="form-check-label" class="form-label">Terminé?</label>
</div>
<button type="submit" class="btn btn-info">@if (empty($task))Ajouter @else Modifier @endif</button>
</form>
@endsection
