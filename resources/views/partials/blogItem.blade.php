<div class="post-card relative bg-white h-80 mb-8 overflow-hidden hover:shadow-2xl">
    <div class="post-img w-full h-full">
        <img src="{{ asset('images/blog/'.$post->image) }}" class="inset-y-0 absolute" alt="{{ substr(strip_tags($post->content), 0, 20) }}">
    </div>
    <div class="shadow-lg hover:shadow-inset bottom-0 absolute h-30 p-6 w-full" style="margin-top:-40px;">
        <h2 class="font-bebas text-xl  text-center text-gray-700 hover:text-black w-full">
            <a href="{{ route('blog.show', ['slug'=> $post->slug]) }}">
                {{ $post->title }}
            </a>
        </h2>
    </div>
</div>