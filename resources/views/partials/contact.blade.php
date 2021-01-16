{!! RecaptchaV3::initJs() !!}
<section class="bg-gray-400 p-6 lg:px-0" id="contact-us">
    <div class="container h-full  py-16 relative mx-auto">
        <h2 class="text-2xl">Contacto</h2>
        <form action="{{ route('contacto.store') }}" method="POST" class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            @csrf
            <div>
                <label for="name" class="text-black text-bold">Nombre</label>
                <input type="text" class="w-full mb-4 px-4 py-2 border border-gray-500 bg-platinum rounded-none focus:border-white focus:bg-silver" required name="name">

                <label for="name" class="text-black text-bold">Email</label>
                <input type="email" class="w-full mb-4 px-4 py-2 border border-gray-500 bg-platinum rounded-none focus:border-white   focus:bg-silver" required name="email">

                <label for="name" class="text-black text-bold">Teléfono <span class="text-sm">(opcional)</span></label>
                <input type="tel" class="w-full mb-4 px-4 py-2 border border-gray-500 bg-platinum rounded-none focus:border-white  focus:bg-silver"  name="phone">
            </div>
            <div>
                <label for="name" class="text-black text-bold">Mensaje</label>
                <textarea class="w-full mb-4 px-4 py-2 border border-gray-500 bg-platinum rounded-none focus:border-white focus:bg-silver" rows="7" required name="comments"></textarea>
                <button type="submit" class="bg-blue px-6 py-1 text-sm text-white  hover:bg-opacity-75">ENVIAR</button>
            </div>
            {!! RecaptchaV3::field('contacto') !!}
        </form>
    </div>
</section>
