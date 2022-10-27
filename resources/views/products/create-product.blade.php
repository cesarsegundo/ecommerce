<x-site-layout>
    <div class="my-20 mx-32 p-5 bg-slate-200 h-full rounded-lg shadow-2xl">
        <form action="/productos/crear" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 ">Nombre</label>
                <input name="nombre" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 ">Descripción</label>
                <input name="descripcion" type="text" class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-medium text-gray-900 ">Subir imagen</label>
                <input accept="image/*" name="image" type="file" class="block p-4 text-gray-900 rounded-lg border " required>
            </div>
            <div class="flex justify-around">
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 ">Disponibles</label>
                    <input name="disponibles" min="1" max="100" type="number" class="block p-4 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 ">Precio: $</label>
                    <input name="precio" min="0.50" max="1000" step="0.01" type="number" class="block p-4 text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500" required>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-medium text-gray-900 ">Categoria</label>
                    <select name="categoria_id" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm py-4 pr-8 rounded-lg focus:ring-blue-500 focus:border-blue-500 block">
                        <option value="">Seleccionar...</option>
                        <option value="1">Comestibles</option>
                        <option value="2">Limpieza</option>
                        <option value="3">Higiene</option>
                    </select>
                </div>
            </div>
            <div class="mb-6">
                <button type="submit">Registrar</button>
            </div>
        </form>
    </div>
</x-site-layout>