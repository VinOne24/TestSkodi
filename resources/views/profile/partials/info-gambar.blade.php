<section>

<div class="grid grid-rows-3 grid-flow-col gap-4 mx-24">
    
    <div class="row-span-3 ">

        <div class="">
            <img src="{{ asset('/assets/img/sebastian.jpg') }}" class=" h-48 w-48 rounded-full">
        </div>

    </div>
    <div class="col-span-2">
        <div class="text-2xl font-bold pt-0">
        </div>

    </div>
    <div class="row-span-2 col-span-2 ...">
    <div class="text-2xl font-bold pt-0 bm-8">
            <h3>{{ Auth::user()->name }}</h3>
        </div>
        <div class="text-1xl font-bold px-auto">
            <h3 class="text-sm py-2 font-light leading-normal">{{ Auth::user()->email }}</h3>
            <h3 class="text-sm font-light leading-normal">{{ Auth::user()->created_at }}</h3>
        </div>
    </div>
</div>
</section>
