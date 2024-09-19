<header class=" bg-white shadow-xl z-10">
    <nav class="flex p-6 justify-between px-8">
        <!-- Logo -->
        <div class="flex flex-1">
            <div class="flex items-center gap-4">
                <img class="h-8 w-auto" src="{{url('logo.png')}}" alt="">
                <p class="text-md font-semibold text-gray-900">
                    INDIGO ZENITH PC
                </p>
            </div>
        </div>
        <!-- Hamburger icon -->
        <div class="flex lg:hidden items-center">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
            </svg>
        </div>
        <!-- Nav Links -->
        <div class="hidden lg:flex lg:gap-12 lg:items-center">
            <a class="text-sm text-gray-900 font-semibold leading-6" href="{{route('home')}}">HOME</a>
            <a class="text-sm text-gray-900 font-semibold leading-6" href="{{route('shop')}}">SHOP</a>
            <a class="text-sm text-gray-900 font-semibold leading-6" href="{{route('contact')}}">CONTACT</a>
        </div>
        <div class="justify-end hidden lg:flex lg:flex-1">
        </div>

        <!-- Mobile View nav -->
        <div class= "fixed bg-white right-0 top-0 w-full h-full hidden lg:hidden p-6">
            <div class="flex flex-col">
                <div class="flex justify-between items-center">
                    <img class="h-12 w-auto" src="{{url('logo.png')}}" alt="logo">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
                <div class="py-8 flex flex-col gap-12">
                    <a class="text-md text-gray-900 font-semibold leading-6" href="#">HOME</a>
                    <a class="text-md text-gray-900 font-semibold leading-6" href="#">SHOP</a>
                    <a class="text-md text-gray-900 font-semibold leading-6" href="#">CONTACT</a>
                </div>
                <div class="border"></div>
            </div>
        </div>
    </nav>
</header>