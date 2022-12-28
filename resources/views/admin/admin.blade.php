
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>


    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
    </style>
</head>
<body class="bg-gray-100 font-family-karla flex">

    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
            <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <a href="admin" class="flex items-center  text-white py-4 pl-6 nav-item">
                <i class="fas fa-tachometer-alt mr-3"></i>
                Dashboard
            </a>
            <!-- <a href="{{route('admin.index')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-sticky-note mr-3"></i>
                items
                </a> -->
            <a href="{{url('olahankokal')}}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                <i class="fas fa-sticky-note mr-3"></i>
                Jenis Olahan 
            </a>
            
        </nav>
    </aside>

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <!-- <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12  hover:border-gray-300 focus:border-gray-300 focus:outline-none">profile
                    <img src="">
                </button>
                <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
                </div>
            </div>
        </header> -->

        

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="index.html" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="blank.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                    items
                </a>
                <a href="blank.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
                    <i class="fas fa-sticky-note mr-3"></i>
                    Category
                </a>
                
        
            </nav>
            <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
        </header>
    
        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Dashboard</h1>
                <a href="{{route('admin.index')}}">
                <button type="button" class="inline-block px-6 py-2.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-500 active:shadow-lg transition duration-150 ease-in-out">Home</button>
                </a>
                <a href="{{route('admin.create')}}">
                <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Tambah</button>
                </a>
                

    <form action="{{route('admin.index')}}" method="GET" class="flex justify-end">

    <div class=" w-1/2 flex justify-end"> 
                <input type="search" name="katakunci" value="{{Request::get('katakunci')}}" class="form-control relative flex-auto min-w-0 blo w-1/2 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon3">
                <!-- <select name="katakunci" value="{{Request::get('katakunci')}}" class="form-control relative flex-auto min-w-0 blo w-1/2 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Search" aria-label="Search" aria-describedby="button-addon3">
                  <option value="">Search</option>
                  @foreach($Olahan as $item) 
                    <option name="katakunci" value="{{Request::get('katakunci')}}">{{$item->jenis_olahan}}</option>
                    @endforeach
                  </select> -->
                 <button class="btn inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" type="submit" id="button-addon3">Search</button>                  
    </div>



    




    </form> 
                 
    
                
            
            
                <!-- <div class="col-span-6 p-4">
                    <input type="text" class="px-4 py-2 focus:ring-indigo-500 ">
                </div> -->
                          
    <table class="min-w-full border-collapse block md:table">
		<thead class="block md:table-header-group">
			<tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">No</th>
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nama </th>
                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Harga </th>
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Deskripsi</th>
                <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">jenis_olahan</th>
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Gambar</th>
				<th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Aksi</th>
			</tr>
		</thead>
		<tbody class="block md:table-row-group">
            <?php $no=1;?>
            @foreach( $admin as $item )
			<tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold"></span>{{$no}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold"></span>{{$item->title}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold"></span>{{$item->rate_id}}</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold"></span>{{$item->desc}}</td>
              
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold"></span>{{$item->Olahan_id}}</td> 
                
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold"></span>
                <img src="{{asset('storage/'.$item->gambar)}}" class="w-16"alt="">

                </td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
					<span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                    <div class="flex flex-row">
                    <a href="{{route('admin.edit',$item->id)}}"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button></a>
                    <form action="{{route('admin.destroy',$item->id)}}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
                    </form>
                    </div>
				</td>
			</tr>
            <?php $no++;?>
            @endforeach
         
            
			<!-- <tr class="bg-white border border-grey-500 md:border-none block md:table-row">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Name</span>Erwin Campbell</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">User Name</span>ecampbell088</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Email Address</span>ecampbell088@hotmail.com</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Mobile</span>318-685-X414</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
					<span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
					<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button>
					<button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
				</td>
			</tr>
			<tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Name</span>Lillie Clark</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">User Name</span>lillie</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Email Address</span>lillie.clark@gmail.com</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Mobile</span>505-644-84X4</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
					<span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
					<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button>
					<button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
				</td>
			</tr>
			<tr class="bg-white border border-grey-500 md:border-none block md:table-row">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Name</span>Maribel Koch</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">User Name</span>maribelkoch</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Email Address</span>mkoch@yahoo.com</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Mobile</span>582-400-3X36</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
					<span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
					<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button>
					<button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
				</td>
			</tr>			 -->
		</tbody>
	</table> 
</main>
</div>

    
            <footer class="w-full bg-white text-right p-4">
               
            </footer>
</div>
        


    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    <script>
        var chartOne = document.getElementById('chartOne');
        var myChart = new Chart(chartOne, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var chartTwo = document.getElementById('chartTwo');
        var myLineChart = new Chart(chartTwo, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>
