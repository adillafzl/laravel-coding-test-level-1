@if(session()->has('message'))
<div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 mb-8 shadow-md" role="alert">
    <div class="flex">
        <div class="px-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg></div>
        <div>
            <p class="font-bold">{{ session()->get('message') }}</p>
        </div>
    </div>
</div>
@endif