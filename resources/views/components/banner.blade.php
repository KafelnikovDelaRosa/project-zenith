<div class="grid w-full h-screen grid-cols-1 my-auto mt-24 mb-8 md:grid-cols-2 xl:gap-14 md:gap-5 px-12">
        <div class="flex flex-col justify-center col-span-1 text-center lg:text-start">
            <!-- mobile view -->
            <div class="md:hidden items-center">
                <center>
                    <img class="w-4/5 rounded-md" src="{{asset('banner04.png')}}" alt="header image">
                </center>
            </div>
            <!-- /mobile view -->
            <div class="flex items-center justify-center mb-4 lg:justify-normal">
                <h4 class="text-sm font-bold tracking-widest text-primary uppercase">Explore Latest Services by yours truly</h4>
            </div>
            <h1 class="mb-8 text-4xl font-extrabold leading-tight lg:text-6xl text-dark-grey-900">The Zenith Team</h1>
            <p class="mb-6 text-base font-normal leading-7 lg:w-3/4 text-grey-900">
                Say goodbye to endless hours spent going from one place to another to look for quality pc products with affordable pricings. With limited offers
            </p>
            <div class="flex flex-col items-center gap-4 lg:flex-row">
                <button onclick="window.location.href='{{route('shop')}}'" class=" uppercase opacity-75 flex items-center py-4 px-4 text-md font-medium hover:bg-indigo-900 transition duration-300 rounded-xl bg-indigo-700 text-white">
                    my pc builds
                </button>
            </div>
        </div>
        <div class="items-center justify-end hidden col-span-1 md:flex">
            <img class="w-4/5 rounded-md" src="{{asset('banner04.png')}}" alt="header image">
        </div>
    </div>