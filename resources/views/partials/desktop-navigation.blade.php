<div class="hoverable py-10">
    <label for="mega-menu" class="button p-6">Fotos</label>
    <div class="mega-menu shadow-xl bg-gray-800">
        <div class="container mx-auto w-full  justify-between mx-auto  grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
            <ul class="p-6 mx-auto">
                <li>
                    <h3 class="font-bebas text-xl text-white  mb-2">Fotografía de Autor</h3>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'autor', 'serie'=>'cuerpos-libres']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Cuerpos
                    Libres</a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'autor', 'serie'=>'desnudos']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Desnudos</a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'autor', 'serie'=>'notables']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Notables</a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'autor', 'serie'=>'retratos']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Retratos</a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'autor', 'serie'=>'viajes']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Viajes</a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'autor', 'serie'=>'miscelaneas']) }}"
                        class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Miscelaneas</a>
                    </li>
                </ul>
                <ul class="p-6 mx-auto">
                    <li>
                        <h3 class="font-bebas text-xl text-white  mb-2">Publicaciones</h3>
                    </li>
                    <li>
                        <a href="{{ route('fotos.serie', ['category'=> 'publicaciones', 'serie'=>'editorial']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Editorial</a>
                    </li>
                    <li>
                        <a href="{{ route('fotos.serie', ['category'=> 'publicaciones', 'serie'=>'envases']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Envases</a>
                    </li>
                    <li>
                        <a href="{{ route('fotos.serie', ['category'=> 'publicaciones', 'serie'=>'grafica']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Gráfica</a>
                    </li>
                    <li>
                        <a href="{{ route('fotos.serie', ['category'=> 'publicaciones', 'serie'=>'via-publica']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Vía
                        Pública</a>
                    </li>
                </ul>
                <ul class="p-6 mx-auto">
                    <li>
                        <h3 class="font-bebas text-xl text-white  mb-2">Publicidad</h3>
                    </li>
                    <li>
                        <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'bebidas-cervezas']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Bebidas
                        Cervezas</a>
                    </li>
                    <li>
                        <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'bebidas-clientes']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Bebidas
                        Clientes</a>
                    </li>
                    <li>
                        <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'bebidas-splashes']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Bebidas
                        Splashes</a>
                    </li>
                    <li>
                        <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'bebidas-vinos']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Bebidas
                        Vinos</a>
                    </li>
                    <li>
                        <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'comida-clientes']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Comida
                        Clientes</a>
                    </li>
                    <li>
                        <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'comida-helados']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Comida
                        Helados</a>
                    </li>
                    <li>
                        <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'comida-rapida']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Comida
                        Rápida</a>
                    </li>
                    <li>
                        <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'comida-tapas']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Comida
                        Tapas</a>
                    </li>
                    <li>
                        <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'modelos']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Modelos</a>
                    </li>
                    <li>
                        <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'productos']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">Productos</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <a href="{{ route('spots') }}" class="button p-6">FadiSpots</a>
{{--<a href="{{ route('blog.index') }}" class="button p-6">Blog</a>
<a href="{{ route('escuela') }}" class="button p-6">Escuela</a> --}}
