<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
<!-- Primary Navigation Menu -->
<nav class="fixed z-20 flex justify-between w-full py-1 text-black bg-white shadow-md">
    <div class="flex items-center w-full py-2 px-7 lg:px-12 ">
        <div class="flex">
            <a href="index.html">
                <h1 class="font-bold text-3xl">Home</h1>
            </a>
        </div>
        <!-- Nav Links -->
        <ul class="hidden px-4 mx-auto ml-10 space-x-20 lg:flex font-heading ">
            <li><a class="font-semibold hover:text-gray-300" href="index.html"></a></li>
            <li><a class="font-semibold hover:text-gray-300" href="#"></a></li>
            <li><a class="font-semibold hover:text-gray-300" href="#"></a></li>
        </ul>


        <!-- Header Icons -->
        <div class="items-center hidden mr-6 space-x-8 lg:flex">
            <a class="flex items-center hover:text-gray-200" href="#">
                <img src="" alt="">
                <h4>Promo</h4>
            </a>
            <a class="flex items-center hover:text-gray-200" href="detailpemesanan">
                <h4>Detail Pesanan</h4>
            </a>
            <a class="flex items-center hover:text-gray-200" href="#">
                <img src="" alt="">
                <h4>Profile</h4>
            </a> 
     
        </div>
    </div>

    <!-- Responsive -->
        <div class="fixed group z-100 lg:hidden">
            <div class="flex items-center group-hover:border-grey-light">
                <a class="self-center py-2 mr-10 navbar-burger hover:text-gray-100 xl:hidden" href="#">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
            <div class="absolute z-50 flex flex-col items-center invisible bg-white bg-cover border rounded-md w-36 right-12 group-hover:visible">
                <ul class="flex flex-col pb-2 pt-">
                    <li class="py-1"><a class="hover:text-gray-300" href="index .html"></a></li>
                    <li class="py-1"><a class="hover:text-gray-300" href="#"></a></li>
                    <li class="py-1"><a class="hover:text-gray-300" href="#"></a></li>
                </ul>
                <hr class="w-full border border-t-dark-400">
                <div class="flex flex-col py-2">
                <div class="items-center hidden mr-6 space-x-8 lg:flex">
            <a class="flex items-center hover:text-gray-200" href="#">
                <img src="" alt="">
                <h4>Promo</h4>
            </a>
            <a class="flex items-center hover:text-gray-200" href="#">
                <img src="" alt="">
                <h4>Detail Pesanan</h4>
            </a>
            <a class="flex items-center hover:text-gray-200" href="#">
                <img src="" alt="">
                <h4>Profile</h4>
            </a> 
     
        </div>
                        <i class="px-2 fa fa-sign-in" aria-hidden="true"></i>
                    </a>     
                </div>
            </div>
        </div>        
    </nav> 
</nav>

