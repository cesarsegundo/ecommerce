<x-site-layout>
    <div class="my-20 mx-32 p-5 bg-slate-200 h-full rounded-lg shadow-2xl">
        <table>
            <thead class="bg-gray-50 border">
                <tr>
                    <th scope="col" class="py-3 px-6">Nombre</th>
                    <th scope="col" class="py-3 px-6">Imagen</th>
                    <th scope="col" class="py-3 px-6">Disponibles</th>
                    <th scope="col" class="py-3 px-6">Precio</th>
                    <th scope="col" class="py-3 px-6">Editar</th>
                    <th scope="col" class="py-3 px-6">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr class="bg-white border-b-2">
                        <td class="py-4 px-6">{{ $producto->nombre }}</td>
                        <td class="py-4 px-6">
                            <img class="p-8 rounded-t-lg w-28" src="{{asset('images/' . $producto->image)}}" alt="product image" />
                        </td>
                        <td class="py-4 px-6">{{ $producto->disponibles }}</td>
                        <td class="py-4 px-6">${{ $producto->precio }}</td>
                        <td>
                            <form>
                                <button class="p-2 rounded bg-green-500 text-white">Editar</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('product.delete.admin', ['producto' => $producto->id])}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="p-2 rounded bg-red-500 text-white">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-site-layout>