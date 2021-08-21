<x-organisms.wrappers.files-wrapper title='Home Files:' :overflowHidden="false">

    <div class="m-auto">

        <table>
            <thead class="justify-between">
                <tr class="bg-gray-800">
                    <th class="px-16 py-2" colspan="2">
                        <span class="text-gray-300">Name</span>
                    </th>
                    <th class="px-16 py-2">
                        <span class="text-gray-300">Location</span>
                    </th>
                    <th class="px-16 py-2">
                        <span class="text-gray-300">Modified</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-gray-200">
                @foreach ($files as $file)
                <tr class="bg-white border-4 border-gray-200">
                    <td class="px-16 py-2 flex flex-row items-center">
                        <x-molecules.icon-table-file :file="$file" />
                    </td>
                    <td>
                        <span class="text-center ml-2 font-semibold">{{ $file->original_name }}</span>
                    </td>
                    <td class="px-16 py-2">
                        {{ $file->route->route }}
                    </td>
                    <td class="px-16 py-2">
                        <span> {{  $file->updated_at->format('Y-m-d') }} </span>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</x-organisms.wrappers.files-wrapper>
