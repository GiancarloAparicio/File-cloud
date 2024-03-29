@switch( Str::of($file->original_name)->after('.') )
    @case('mp3')
    <span
        class=" block bg-purple-400 p-4 text-3xl text-white text-center align-bottom rounded-lg object-cover ">{{ Str::of($file->original_name)->after('.') }}</span>

    @break

    @case('mp4')
    <span
        class=" block bg-pink-400 p-4 text-3xl text-white text-center align-bottom rounded-lg object-cover ">{{ Str::of($file->original_name)->after('.') }}</span>

    @break

    @case('pdf')
    <span
        class=" block bg-red-400 p-4 text-3xl text-white text-center align-bottom rounded-lg object-cover ">{{ Str::of($file->original_name)->after('.') }}</span>

    @break

    @case('ptt')
    <span
        class=" block bg-yellow-400 p-4 text-3xl text-white  w-full max-h-20 text-center align-bottom rounded-lg object-cover ">{{ Str::of($file->original_name)->after('.') }}</span>

    @break

    @case('png')
    <span
        class=" block bg-green-400 p-4 text-3xl text-white  w-full max-h-20 text-center align-bottom rounded-lg object-cover ">{{ Str::of($file->original_name)->after('.') }}</span>

    @break

    @case('jpeg')
    <span
        class=" block bg-green-400 p-4 text-3xl text-white  w-full max-h-20 text-center align-bottom rounded-lg object-cover ">{{ Str::of($file->original_name)->after('.') }}</span>

    @break

    @case('docx')
    <span
        class=" block bg-blue-400 p-4 text-3xl text-white  w-full max-h-20 text-center align-bottom rounded-lg object-cover ">{{ Str::of($file->original_name)->after('.') }}</span>

    @break

    @case('doc')
    <span
        class=" block bg-blue-400 p-4 text-3xl text-white  w-full max-h-20 text-center align-bottom rounded-lg object-cover ">{{ Str::of($file->original_name)->after('.') }}</span>

    @break

    @default
    <svg viewBox="0 0 1195 1195" {{ $attributes }} xmlns="http://www.w3.org/2000/svg">
        <path
            d="M722.333 192l195 218v669q0 3-4 6t-9 3h-614q-5 0-9-3t-4-6V201q0-3 4-6t9-3h432zm29-64h-461q-32 0-54.5 21.5t-22.5 51.5v878q0 30 22.5 51.5t54.5 21.5h614q32 0 54.5-21.5t22.5-51.5V385zm-26 256V128h-64v256q0 26 19 45t45 19h253v-64h-253z" />
    </svg>
@endswitch
