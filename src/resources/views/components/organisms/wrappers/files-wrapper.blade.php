{{--
    <x-organisms.wrappers.files-wrapper title='Home files:' :overflowHidden="false">
--}}

<section class="text-gray-800 body-font xl:pt-12">

    <div {{ $attributes->class(['overflow-hidden max-h-52 ' => $overflowHidden ??  true ])->merge(['class' => "container px-10 py-4 mx-auto" ]) }} >
        <p class="mb-10 text-2xl font-sans"> {{ $title ?? 'Default' }} </p>
        <div class="flex flex-wrap -m-4 gap-8">

            {{ $slot }}
        </div>
    </div>
</section>
