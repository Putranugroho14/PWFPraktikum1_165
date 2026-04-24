<form action="{{ $url }}" method="POST"
    onsubmit="return confirm('Are you sure you want to delete this {{ strtolower($name) }}?')">
    @csrf
    @method('DELETE')
    <button type="submit" title="Delete {{ $name }}"
        class="p-2 rounded-lg text-gray-400 hover:text-red-600 hover:bg-red-50 transition-all duration-200 border border-transparent hover:border-red-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2"
                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
        </svg>
    </button>
</form>
