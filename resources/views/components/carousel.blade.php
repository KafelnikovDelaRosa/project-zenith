<div class="grid w-full h-screen grid-cols-1 my-auto mb-8 md:grid-cols-2 xl:gap-14 md:gap-5 px-12 bg-indigo-900 bg-opacity-80 text-white">
    <div class="items-center hidden col-span-1 md:flex px-4">
        <div class="relative w-2xl overflow-hidden ">
            <div class="h-[750px] flex items-center justify-center">
                <img id="0" class="object-cover w-full h-full animate-showcase pics rounded-lg" src="{{asset('banner01.jpg')}}" alt="">
                <img id="1" class="hidden object-cover w-full h-full animate-showcase pics rounded-lg " src="{{asset('banner02.jpg')}}" alt="">
                <img id="2" class="hidden object-cover w-full h-full animate-showcase pics rounded-lg" src="{{asset('banner03.jpg')}}" alt="">
                <img id="3" class="hidden object-cover w-full h-full animate-showcase pics rounded-lg" src="{{asset('banner04.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="flex flex-col justify-center  col-span-1 text-center lg:text-start">
        <!-- mobile view -->
        <div class="md:hidden items-center">
            <center>
                <img class="w-4/5 rounded-md" src="{{asset('banner04.png')}}" alt="header image">
            </center>
        </div>
        <!-- /mobile view -->
        <h1 class="mb-8 text-4xl font-extrabold leading-tight lg:text-6xl text-dark-grey-900">My Previous Builds</h1>
        <p class="mb-6 text-base font-normal leading-7 lg:w-3/4 text-grey-900 ">
            Say goodbye to endless hours spent going from one place to another to look for quality pc products with affordable pricings. With limited offers
        </p>
    </div>
</div>
<script>
    let prev = 0;
    let next = 0;
    let images = document.querySelectorAll('.pics');
    function reload(){
        images[next].classList.remove('hidden');
        images[prev].classList.add('hidden');
        prev = next;
    }
    function nextImage(){
        if(next > images.length-1){
            next = 0;
            reload();
            return;
        }   
        next += 1;
        reload();
    }
    setInterval(() => {
        nextImage()
    }, 4000);
</script>