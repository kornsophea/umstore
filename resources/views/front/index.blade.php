@extends('front.layouts.master')

@section('content')
    <section
        class="relative bg-[url(https://www.newbalance.com/dw/image/v2/AAGI_PRD/on/demandware.static/-/Library-Sites-NBUS-NBCA/default/dw0cfc3423/images/page-designer/2023/september/16017_Comp_A_Desktop.jpg?sw=1616&sfrm=jpg)] bg-cover bg-center bg-no-repeat">
        <div
            class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l">
        </div>

        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8" data-aos="fade-right">
            <div class="max-w-xl ltr:sm:text-left rtl:sm:text-right">
                <h1 class="text-3xl font-extrabold sm:text-5xl text-white">
                    Let us find your

                    <strong class="block font-extrabold text-teal-700">
                        Forever Home.
                    </strong>
                </h1>

                <p class="mt-4 max-w-lg sm:text-xl/relaxed text-gray-300">
                    Shop the brand new New Balance Forest
                </p>

                <div class="mt-8 flex flex-wrap gap-4 text-center">
                    <a href="product.html"
                        class="block w-full rounded bg-teal-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-teal-700 focus:outline-none focus:ring active:bg-teal-500 sm:w-auto">
                        Shop Now
                    </a>

                    <a href="about.html"
                        class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-teal-600 shadow hover:text-teal-700 focus:outline-none focus:ring active:text-teal-500 sm:w-auto">
                        About Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    @if ( session()->has('msg') )
        <div class="alert alert-success">{{ session()->get('msg') }}</div>
    @endif


    <div class="row text-center">

    <main>
        <section class="logos">
            <div class="logos-slide">
                <img src="/assets/img/adidas.svg" alt="brand">
                <img src="/assets/img/jordan.svg" alt="brand">
                <img src="/assets/img/newbalance.svg" alt="brand">
                <img src="/assets/img/nike.svg" alt="brand">
                <img src="/assets/img/puma.svg" alt="brand">
                <img src="/assets/img/converse.svg" alt="brand">
                <img src="/assets/img/fila.svg" alt="brand">
                <img src="/assets/img/reebok.svg" alt="brand">
                <img src="/assets/img/adidas.svg" alt="brand">
                <img src="/assets/img/jordan.svg" alt="brand">
                <img src="/assets/img/newbalance.svg" alt="brand">
                <img src="/assets/img/nike.svg" alt="brand">
                <img src="/assets/img/puma.svg" alt="brand">
                <img src="/assets/img/converse.svg" alt="brand">
                <img src="/assets/img/fila.svg" alt="brand">
                <img src="/assets/img/reebok.svg" alt="brand">
            </div>
        </section>
        <section class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8" data-aos="fade-up">
            <div>
                <h2 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    New Collection
                </h2>

                <p class="max-w-md mx-auto mt-4 text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque
                    praesentium cumque iure dicta incidunt est ipsam, officia dolor fugit
                    natus?
                </p>
            </div>

            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8 lg:grid-cols-3">
                <li>
                    <a href="product.html" class="relative block group">
                        <img src="https://images.unsplash.com/photo-1618898909019-010e4e234c55?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                            alt=""
                            class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90 rounded-lg" />

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            <h3 class="text-xl font-medium text-white">Casual Trainers</h3>

                            <span
                                class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white rounded-lg">
                                Shop Now
                            </span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="product.html" class="relative block group">
                        <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1964&q=80"
                            alt=""
                            class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90 rounded-lg" />

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            <h3 class="text-xl font-medium text-white">Winter Jumpers</h3>

                            <span
                                class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white rounded-lg">
                                Shop Now
                            </span>
                        </div>
                    </a>
                </li>

                <li class="lg:col-span-2 lg:col-start-2 lg:row-span-2 lg:row-start-1 md:col-span-2">
                    <a href="product.html" class="relative block group">
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                            alt=""
                            class="object-cover w-full transition duration-500 aspect-square group-hover:opacity-90 rounded-lg" />

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            <h3 class="text-xl font-medium text-white">Skinny Jeans Blue</h3>

                            <span
                                class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white rounded-lg">
                                Shop Now
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        </section>
    </main>
    
     @foreach ($products as $product)
        <div class="py-4 col-lg-3 col-md-6 mb-4">
            <div class="card">
                <img class="card-img-top" src="{{ url('/uploads') . '/' . $product->image }}" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">
                       {{ $product->description }}
                    </p>
                </div>
                <div class="card-footer">
                    <strong>${{ $product->price }}</strong> &nbsp;
                    <form action="{{ route('/cart') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="image" value="{{ $product->image }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                    <button type="submit" class="btn btn-primary btn-outline-dark"><i class="fa fa-cart-plus "></i> Add To
                        Cart</button>
                    </form>
                </div>
            </div>
        </div>

        @endforeach

    
    
   
    <section class="bg-white px-16">
        <div class="mx-auto max-w-screen-l px-4 py-12 sm:px-6 lg:px-8 lg:py-16 p-16"  data-aos="fade-up">
            <h2 class="text-center text-4l font-bold tracking-tight text-gray-900 sm:text-5xl">
                Read trusted reviews from our customers
            </h2>

            <div class="mt-8 grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-8">
                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                    <div class="flex items-center gap-4">
                        <img alt="Man"
                            src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                            class="h-14 w-14 rounded-full object-cover" />

                        <div>
                            <div class="flex justify-center gap-0.5 text-green-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>

                            <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                        </div>
                    </div>

                    <p class="mt-4 text-gray-700">
                        I've been using the Nike for a few weeks now and I'm absolutely loving it! It's so easy to use and it's really helped me to walk really well.
                    </p>
                </blockquote>

                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                    <div class="flex items-center gap-4">
                        <img alt="Man"
                            src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                            class="h-14 w-14 rounded-full object-cover" />

                        <div>
                            <div class="flex justify-center gap-0.5 text-green-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>

                            <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                        </div>
                    </div>

                    <p class="mt-4 text-gray-700">
                        I would highly recommend this website to anyone who is looking for a high quality shoes. It's a great product and it's really worth the investment.
                    </p>
                </blockquote>

                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                    <div class="flex items-center gap-4">
                        <img alt="Man"
                            src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                            class="h-14 w-14 rounded-full object-cover" />

                        <div>
                            <div class="flex justify-center gap-0.5 text-green-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>

                            <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
                        </div>
                    </div>

                    <p class="mt-4 text-gray-700">
                        I've been using the New Balance for a few months now and I'm amazed at how much it's helped my feets. I used to have really bad feets, but now my feets is heal. Thanks to the New Balance is easy to use and it's gentle on my skin. I would highly recommend it to anyone who is struggling with feets.
                    </p>
                </blockquote>
            </div>
        </div>
    </section>
    </div>
@endsection