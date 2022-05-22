<form method="POST" action="{{ route('events.store') }}">
    @csrf
    <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
        <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
    </div>
    <div class="mb-6">
        <label for="startAt" class="block mb-2 text-sm font-medium text-gray-900">Start At</label>
        <input type="datetime-local" name="startAt" id="startAt" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
    </div>
    <div class="mb-6">
        <label for="endAt" class="block mb-2 text-sm font-medium text-gray-900">End At</label>
        <input type="datetime-local" name="endAt" id="endAt" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
    </div>

    <button type="submit" class="text-white bg-indigo-500 border-0 py-2 px-4 hover:bg-indigo-600 rounded text-base text-center">Submit</button>
</form>