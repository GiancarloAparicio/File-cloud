<div class="relative mb-4">
    <label for={{ $name }} class="leading-7 text-sm text-gray-400">
        @lang( $label )
    </label>
    <input type={{ $type }} id={{ $id }} name={{ $name }} required :value="{{ old($name) }}" {{ $attributes }}
           autocomplete={{ $autocomplete }}
        class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
</div>
