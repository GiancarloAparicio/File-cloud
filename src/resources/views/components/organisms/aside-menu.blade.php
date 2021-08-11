<aside {{ $attributes->merge(['class' => 'bg-white items-baseline']) }}>

    <form class="flex flex-col items-center" action="{{ route('home.store') }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
        @csrf
        <label
            class="inline-flex items-center items-center px-4 py-2 font-bold text-blue-200 bg-blue-500 rounded hover:bg-blue-400">
            <x-particles.download-icon />
            <input class="hidden" type="file" name="file" onchange="form.submit()" />
            <span>Add</span>
        </label>
            @if (session('status'))

               <div class="text-green-500 px-4 relative " role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @if($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

    </form>

</aside>
