<x-layout>
  <h2>All Tasks</h2>
  @if (session('success'))
      {{ session('success') }}
  @endif
  <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="px-6 py-3">Title</th>
            <th scope="col" class="px-6 py-3">Body</th>
            <th scope="col" class="px-6 py-3">Status</th>
          </tr>
      </thead>
      <tbody>
          @foreach($tasks as $task)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $task->title }}</th>
              <td class="px-6 py-4">{{ $task->description }}</td>
                <td class="px-6 py-4">
                    <form action="{{ route('tasks.update', $task) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit">{{ $task->completed ? 'Completed' : 'Uncomplete' }}</button>
                    </form>
                </td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </div>
</x-layout>
