<x-site-layout>
    <div class="my-20 mx-32 p-5 bg-slate-100 h-full rounded-lg shadow-2xl flex">
        
        @foreach ($productos as $producto)
        <div class="w-full max-w-sm bg-white rounded-lg border-2">
            <a href="#">
                <img class="p-8 rounded-t-lg" src="{{asset('images/' . $producto->image)}}" alt="product image" />
            </a>
            <div class="px-5 pb-5">
                <h5 class="text-xl font-semibold  text-gray-900">{{$producto->nombre}}</h5>
                <p class="text-base font-semibold  text-gray-700">{{$producto->descripcion}}</p>
                <p class="text-base font-semibold  text-gray-700">Disponibles: <span class="text-gray-700">{{$producto->disponibles}}</span></p>
                <div class="flex justify-between items-center">
                    <span class="text-3xl font-bold text-gray-900 ">${{$producto->precio}}</span>
                    <form method="POST" action="/carrito/{{$producto->id}}">
                        @method('POST')
                        @csrf
                        <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Añadir al carrito</button>
                    </form>
                </div>
            </div>
        </div> 
        @endforeach
    </div>
</x-site-layout>