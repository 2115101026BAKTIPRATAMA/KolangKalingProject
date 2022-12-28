<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Kokal_Local</title>
	<meta name="author" content="name">
  <meta name="description" content="description here">
	<meta name="keywords" content="keywords,here">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet"> <!--Totally optional :) -->

</head>
<body class="bg-gray-400 font-sans leading-normal tracking-normal">

	<nav class="flex items-center justify-between flex-wrap bg-gray-800 p-6 fixed w-full z-10 top-0">
		<div class="flex items-center flex-shrink-0 text-white mr-6">
			<a class="text-white no-underline hover:text-white hover:no-underline" href="#">
				<span class="text-2xl pl-2"><i class="em em-grinning"></i> Kokal_Local</span>
			</a>
		</div>

		<div class="block lg:hidden">
			<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-white hover:border-white">
				<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			</button>
		</div>

		<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden  pt-6 lg:pt-0" id="nav-content">
			<ul class="list-reset lg:flex justify-end flex-1 items-center">
				<li class="mr-3">
					<a class="inline-block py-2 px-4 text-white no-underline" href="#">Beranda</a>
				</li>
				<li class="mr-3">
					<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#">Pemesanan</a>
				</li>
				<li class="mr-3">
					<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#">Tentang Kokal</a>
				</li>
				<li class="mr-3">
					<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#">Kontak</a>
				</li>
			</ul>
		</div>
	</nav>

	<!--Container-->
	<div class="container shadow-lg mx-auto bg-white mt-24 md:mt-18">

	</div>

	<script>
		//Javascript to toggle the menu
		document.getElementById('nav-toggle').onclick = function(){
			document.getElementById("nav-content").classList.toggle("hidden");
		}
	</script>

<!-- <section class="bg-gray-100 border-b py-8"> -->

      <div class="container max-w-5xl mx-auto m-8">
        <h2
          class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800"
        >
          Kokal_Local
        </h2>
        <div class="w-full mb-4">
          <div
            class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"
          ></div>
        </div>

        <div class="flex flex-wrap">
          <div class="w-5/6 sm:w-1/2 p-6">
            <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
              Kolang-Kaling_Local
            </h3>
            <p class="text-gray-600 mb-8">
              Kolang Kaling Merupakan suatu buah yang dapat di gunakan untuk banyak keperluan selain digunakan untuk bahan 
			  makanan juga digunakan untuk manisan .<br /><br />

            </p>
          </div>
		 
	<!-- </section> -->
	<div><img class="rounded-full" src="https://th.bing.com/th/id/OIP.KSmpsgEKlB9PsuyI8JSFowHaEf?pid=ImgDet&rs=1" alt=""> 
		</div>
		<!-- <div><h2
           class="w-full my-2 text-5xl font-black leading-tight text-center text-gray-800"
        >
          Kokal_Local
        </h2> 
		</div> 
		<br> -->
@foreach( $admin as $key=>$item)
			 <div class="w-full md:w-1/2 xl:w-1/2 p-6 flex flex-col">
                <a href="#">
				<div class="flex">
 				<div class="rounded-lg shadow-lg bg-white max-w-sm">
  						<a href="#!" data-mdb-ripple="true" data-mdb-ripple-color="light">
						  <img src="{{asset('storage/'.$item->gambar)}}" class="w-30"alt="">
    					</a>
    				<div class="p-6">
      					<h5 class="text-gray-900 text-xl font-medium mb-2">{{$item->title}}</h5>
						  <h5 class="text-gray-900 text-xl font-medium mb-2">Rp.{{$item->rate}}</h5>
      					<p class="text-gray-700 text-base mb-4">
						  {{$item->desc}}
      					</p>
      					<button type="button" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Booking</button>
    				</div>
  				</div>
			</div>  
                </a>
            </div>

			@endforeach
			
</body>
</html>