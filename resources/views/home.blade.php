<x-app-layout>
     <div class="flex bg-white px-20" style="height:600px;">
        <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
            <div>
                <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">Welcome to <span class="text-indigo-600">YourShop!</span></h2>
                <p class="mt-2 text-sm text-gray-500 md:text-base">At YourShop, we bring you a diverse range of high-quality products tailored to meet all your needs. Whether you're looking for the latest fashion trends, cutting-edge electronics, or home essentials, we've got you covered. Founded with the mission to deliver exceptional value and service, YourShop is your go-to destination for all things shopping.</p>
                <p class="mt-4 text-sm text-gray-500 md:text-base">Explore our wide selection of products, enjoy seamless shopping experiences, and take advantage of exclusive offers. From trendy apparel to innovative gadgets and stylish home decor, YourShop is committed to providing a shopping experience that exceeds expectations.</p>
                <p class="mt-4 text-sm font-bold text-gray-800 md:text-base">Join us at YourShop and experience the joy of finding exactly what you need, all in one place.</p>
                <div class="flex justify-center lg:justify-start mt-6">
                    <a class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800" href="/shop">Start Shopping</a>
                    <a class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400" href="/about-us">Learn More</a>
                </div>
            </div>
        </div>
        <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
            <img src="{{asset('images/new_logo.svg')}}" alt="YourShop Logo" style="filter: invert(100%); transform: scale(0.9);" class="pl-40 object-cover">
        </div>
    </div>

    <!-- use the date passed by the controller to display the blog to the section -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach ($blogs as $blog)
                    <div class="p-4 md:w-1/3">
                        <div class="h-full rounded-xl shadow-lg bg-white overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center scale-110 transition-all duration-400 hover:scale-100"
                                src="{{ $blog->getTeaserImage() }}" alt="{{ $blog->title }}">
                            <div class="p-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                    {{ $blog->publish_at }}</h2>
                                <h1 class="title-font text-lg font-medium text-gray-600 mb-3">{{ $blog->title }}</h1>
                                <!-- limit the description to 100 characters -->
                                <p class="leading-relaxed mb-3">{{ substr($blog->content, 0, 100) }}</p>
                                <div class="flex items
                            -center flex-wrap ">
                                    <a href="{{ route('blog', $blog->slug) }}"
                                        class="bg-gradient-to-r from-cyan-600 to-blue-600 hover:scale-105 drop-shadow-md shadow-lg px-4 py-1 rounded-lg text-white transition duration-500 ease-in-out">Read
                                        more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
