<section class="text-gray-800 body-font xl:pt-12">

    <div class="container px-10 py-4 mx-auto overflow-hidden max-h-52 ">
        <p class="mb-10 text-2xl font-sans"> {{ $title ?? 'Default' }} </p>
        <div class="flex flex-wrap -m-4 gap-8">

            {{ $slot }}
        </div>
    </div>
</section>
