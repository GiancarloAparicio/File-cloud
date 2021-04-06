<div class="flex-1 pt-1 px-2">
    <div class="flex justify-between lg:justify-end ">
        <div class="w-10 lg:hidden cursor-pointer ">
            <x-molecules.wrappers.modal-left title="File cloud">
                <x-slot name="button">
                    <div class="w-10 lg:hidden cursor-pointer ">
                        <x-particles.menu-icon width="30" height="30" />
                    </div>
                </x-slot>
                <x-organisms.aside-menu class="justify-center flex" />
            </x-molecules.wrappers.modal-left>
        </div>

        <div class="w-10 xl:hidden cursor-pointer">
            <x-molecules.wrappers.modal-right title="Preview">
                <x-slot name="button">
                    <x-particles.photo-icon width="30" height="30" />
                </x-slot>
                <x-organisms.aside-preview class="justify-center flex" />
            </x-molecules.wrappers.modal-right>
        </div>

    </div>

    <div>
        <x-molecules.latest-files />
        <x-molecules.folders />
        <x-molecules.all-files />
    </div>
</div>
