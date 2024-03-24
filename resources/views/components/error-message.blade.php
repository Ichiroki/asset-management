@props([
    'for'
])

@error($for)
    <div>
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">{{ $message }}</p>
    </div>
@enderror
