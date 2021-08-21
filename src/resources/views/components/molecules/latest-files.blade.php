<x-organisms.wrappers.files-wrapper title="Quick Access:">
    @foreach($files as $file)
        <x-molecules.resource-drive name="{{ $file->original_name }}" type=" {{ Str::of($file->original_name)->after('.') }} ">
            <x-slot name="icon">
                <x-particles.file-icon :file="$file"  width="60" height="60" />
            </x-slot>
        </x-molecules.resource-drive>
    @endforeach

    <x-molecules.resource-drive name="Item" type="file">
        <x-slot name="icon">
            <img alt="ecommerce" class="object-cover object-center w-full max-h-16"
                src="https://dummyimage.com/420x260">
        </x-slot>
    </x-molecules.resource-drive>

</x-organisms.wrappers.files-wrapper>
