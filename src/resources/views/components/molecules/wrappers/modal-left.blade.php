<div x-data="{ isOpenModal : false}">
    <button x-on:click=" isOpenModal = !isOpenModal">
      {{ $button }}
    </button>
   <div class="fixed inset-0 overflow-hidden" x-show.transition.opacity="isOpenModal">
      <div class="absolute inset-0 overflow-hidden" >
         <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

         <section class="absolute inset-y-0 left-0 flex max-w-full" aria-labelledby="slide-over-heading" >
            <div class="relative w-screen max-w-md" x-on:click.away=" isOpenModal = false">
               <div class="flex flex-col h-full py-6 bg-white">
                  <div class="flex px-4 sm:px-6">
                     <button class="w-5 text-gray-400 rounded-md hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-white transition" x-on:click="isOpenModal = false">
                        <span class="sr-only">Close panel</span>
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                     </button>
                      <h2 id="slide-over-heading" class="font-mono flex-1 text-lg font-medium text-right text-gray-900">
                        {{ $title }}
                     </h2>
                  </div>
                  <div class="relative flex-1 px-4 mt-6 sm:px-6">
                     <div class="absolute inset-0 px-4 sm:px-6">
                        {{ $content }}
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </div>
</div>
