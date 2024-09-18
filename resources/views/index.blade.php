<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite("resources/css/app.css")

</head>
<body class=" bg-slate-600">
<header class=" bg-white shadow-xl z-10">
    <nav class="flex p-6 justify-between px-8">
        <div class="flex flex-1">
            <div class="flex items-center gap-4">
                <img class="h-8 w-auto" src="{{url('logo.png')}}" alt="">
                <p class="text-md font-semibold text-gray-900">
                    INDIGO ZENITH PC
                </p>
            </div>
        </div>
        <div class="flex lg:hidden items-center">
            pp
        </div>

        <div class="hidden lg:flex lg:gap-12 lg:items-center">
            <a class="text-sm text-gray-900 font-semibold leading-6" href="#">Home</a>
            <a class="text-sm text-gray-900 font-semibold leading-6" href="#">Shop</a>
            <a class="text-sm text-gray-900 font-semibold leading-6" href="#">Contact</a>
        </div>
        <div class="justify-end hidden lg:flex lg:flex-1">
        </div>
    </nav>
</header>


<!-- 
    <div class="flex justify-center bg-purple-600">
        <p class="text-[6rem] ">
            
        </p>
    </div> -->


</body>
</html>