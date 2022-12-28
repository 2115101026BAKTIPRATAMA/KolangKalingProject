<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>shopping cart</title>
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
  </head>
  <body>

    <div class="container p-8 mx-auto mt-12 bg-white">
      <div class="w-full overflow-x-auto">
        <div class="my-2">
          <h3 class="text-xl font-bold tracking-wider">Shopping Cart </h3>
        </div>
        <table class="w-full shadow-inner">
          <thead>
            <tr class="bg-gray-100">
              <th class="px-6 py-3 font-bold whitespace-nowrap">Product</th>
              <th class="px-6 py-3 font-bold whitespace-nowrap">Qty</th>
              <th class="px-6 py-3 font-bold whitespace-nowrap">Price</th>

            </tr>
          </thead>
          <tbody>
          <?php $total = 0?>
    @if(session('cart'))
    @foreach(session('cart') as $id => $details)
    <?php $total += $details['rate_id'] * $details['Qty'] ?>
    
            <tr>
              <td  class="p-4 px-6 text-center whitespace-nowrap">{{$details['title']}}</td>
              <td class="p-4 px-6 text-center whitespace-nowrap">
                <div>
                  
                  <input
                    type="number"
                    name="Qty"
                    value="1"
                    class="w-12 text-center bg-gray-100 outline-none"
                  />
                  
                </div>
              </td>
              <td class="p-4 px-6 text-center whitespace-nowrap">{{$details['rate_id']}}</td>

              

            </tr>
            <!-- <tr>
              <td class="p-4 px-6 text-center whitespace-nowrap">Iphone 12</td>
              <td class="p-4 px-6 text-center whitespace-nowrap">
                <div>
                  <button class="px-2 py-0 shadow">-</button>
                  <input
                    type="text"
                    name="qty"
                    value="1"
                    class="w-12 text-center bg-gray-100 outline-none"
                  />
                  <button class="px-2 py-0 shadow">+</button>
                </div>
              </td>
              <td class="p-4 px-6 text-center whitespace-nowrap">$12,00</td>
              <td class="p-4 px-6 text-center whitespace-nowrap">
                <button class="px-2 py-0 text-red-100 bg-red-600 rounded">
                  x
                </button>
              </td>
            </tr>
            <tr>
              <td class="p-4 px-6 text-center whitespace-nowrap">Iphone 13</td>
              <td class="p-4 px-6 text-center whitespace-nowrap">
                <div>
                  <button class="px-2 py-0 shadow">-</button>
                  <input
                    type="text"
                    name="qty"
                    value="1"
                    class="w-12 text-center bg-gray-100 outline-none"
                  />
                  <button class="px-2 py-0 shadow">+</button>
                </div>
              </td>
              <td class="p-4 px-6 text-center whitespace-nowrap">$1,300</td>
              <td class="p-4 px-6 text-center whitespace-nowrap">
                <button class="px-2 py-0 text-red-100 bg-red-600 rounded">
                  x
                </button>
              </td>
            </tr>
            <tr> -->
            @endforeach
            @endif  

             
          </tbody>
        </table>
        
        <div class="flex justify-end mt-4 space-x-2">
        <div> <a href="{{url('KOKAL')}}"><button 
            class="
              px-6
              py-3
              text-sm text-white
              bg-indigo-500
              hover:bg-indigo-600
            "
          >
            Home
          </button></a>
        </div>

          <button
            class="
              px-6
              py-3
              text-sm text-gray-800
              bg-gray-200
              hover:bg-gray-400
            "
          >
            Cancel
          </button>
          <button
            class="
              px-6
              py-3
              text-sm text-white
              bg-indigo-500
              hover:bg-indigo-600
            "
          >
            Checkout
          </button>
        </div>
      </div>
    </div>
  </body>
</html>