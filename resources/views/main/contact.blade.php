@extends('layouts.main')
@section('content')
    <div class="grid w-full h-screen">
        <div class="container py-24 mx-auto flex gap-4 sm:flex-nowrap flex-wrap">
            <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d378.00103441616005!2d121.14320948722568!3d13.918161850889701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1ssampaguita%20homes%20lipa%20batangas!5e1!3m2!1sen!2sph!4v1727233043150!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                    <div class="lg:w-1/2 px-6">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                        <p class="mt-1">Blk. 6, Lot 57, Lauan St., Sampaguita Homes, Lipa City, Batangas</p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                        <a class="text-blue-800 leading-relaxed">company@example.com</a>
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                        <p class="leading-relaxed">09152010186</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="text-gray-900 text-5xl mb-1 font-bold title-font">Contact Us</h2>
                <form action="https://mvgcircle.com/contact" method="POST">
                    <input type="hidden" name="_token" value="FjxUX032d1b1af3Ph5F98sKETbfcDCOvFLuWuPWH" autocomplete="off"><p class="leading-relaxed mb-5 text-gray-600">Any questions or requests regarding PC builds don't hesitate to reach us.
                    </p>
                    <div class="relative mb-4">
                        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-blue-700 focus:ring-2 focus:ring-blue-600 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-blue-700 focus:ring-2 focus:ring-blue-600 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required="">
                    </div>
                    <div class="relative mb-4">
                        <label for="subject" class="leading-7 text-sm text-gray-600">Subject</label>
                        <input type="text" id="subject" name="subject" class="w-full bg-white rounded border border-gray-300 focus:border-blue-700 focus:ring-2 focus:ring-blue-600 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required="">
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-blue-700 focus:ring-2 focus:ring-blue-600 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out" required=""></textarea>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 border-0 py-2 px-12 focus:outline-none hover:bg-blue-600 rounded text-lg">Send</button>
                </form>
            </div>
        </div>
    </div>
@endsection