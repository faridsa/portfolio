<div class="mobile-navigation bg-black p-6 w-full" id="menu" >
    <div  x-data="{ isOpen: false }" class="px-6 mx-auto">
        <button  class="font-bebas text-xl text-white button "   @click="isOpen = !isOpen">Fotos</button>
        <div  x-data="{ isOpen: false }" class="py-3">
            <h3 class="font-bebas text-lg text-white py-1"  @click="isOpen = !isOpen">Fotografía de Autor</h3>
            <ul x-show="isOpen" >
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'autor', 'serie'=>'cuerpos-libres']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">
                        Cuerpos Libres
                    </a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'autor', 'serie'=>'desnudos']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">
                        Desnudos
                    </a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'autor', 'serie'=>'notables']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">
                        Notables
                    </a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'autor', 'serie'=>'retratos']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">
                        Retratos
                    </a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'autor', 'serie'=>'viajes']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">
                        Viajes
                    </a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'autor', 'serie'=>'miscelaneas']) }}"
                        class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">
                        Miscelaneas
                    </a>
                </li>
            </ul>
        </div>
        <div  x-data="{ isOpen: false }"  class="py-3">
            <h3 class="font-bebas text-lg text-white py-1" @click="isOpen = !isOpen">Publicaciones</h3>
            <ul x-show="isOpen">
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'publicaciones', 'serie'=>'editorial']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">
                        Editorial
                    </a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'publicaciones', 'serie'=>'envases']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">    Envases
                    </a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'publicaciones', 'serie'=>'grafica']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">    Gráfica
                    </a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'publicaciones', 'serie'=>'via-publica']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">
                        Vía Pública
                    </a>
                </li>
            </ul>
        </div>
        <div x-data="{ isOpen: false }"  class="py-3">
           <h3 class="font-bebas text-lg text-white py-1"   @click="isOpen = !isOpen">Publicidad</h3>
           <ul x-show="isOpen">
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'bebidas-cervezas']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">
                        Bebidas Cervezas
                    </a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'bebidas-clientes']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">
                        Bebidas Clientes
                    </a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'bebidas-splashes']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">
                        Bebidas Splashes
                    </a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'bebidas-vinos']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">
                        Bebidas Vinos
                    </a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'comida-clientes']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">
                        Comida Clientes
                    </a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'comida-helados']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">
                        Comida Helados
                    </a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'comida-rapida']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">
                        Comida Rápida
                    </a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'comida-tapas']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">
                        Comida Tapas
                    </a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'modelos']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">
                     Modelos
                    </a>
                </li>
                <li>
                    <a href="{{ route('fotos.serie', ['category'=> 'publicidad', 'serie'=>'productos']) }}" class="block p-3 hover:bg-gray-600 text-gray-300 hover:text-white">
                        Productos
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <a href="{{ route('spots') }}" class="px-6 font-bebas text-xl text-white mb-4">FadiSpots</a>

</div>
