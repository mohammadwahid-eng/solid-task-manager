<x-layout>
    <h2>Add a task</h2>
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div class="mb-2">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="border border-indigo-950" value="{{ old('title') }}">
            @error('title')
            {{ $message }}
            @enderror
        </div>
        <div class="mb-2">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" class="border border-indigo-950" value="{{ old('description') }}">
            @error('description')
            {{ $message }}
            @enderror
        </div>
        <button type="submit" class="bg-indigo-950 text-white px-4 py-2">Create task</button>
    </form>
</x-layout>
