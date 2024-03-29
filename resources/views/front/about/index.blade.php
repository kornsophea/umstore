 @extends('front.layouts.master')

@section('content')
 <section
        class="overflow-hidden bg-white pt-24 sm:pt-8 inset-0 h-full w-full bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:100px_100px]">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="grid max-w-3xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pr-8 lg:pt-4">
                    <div class="lg:max-w-lg">
                        <h2 class="text-base font-semibold leading-7 text-teal-600">Shop with</h2>
                        <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Umbrella Store
                        </p>
                        <p class="mt-6 text-lg leading-8 text-gray-600 text-justify indent-12">Umbrella Store is a popular e-commerce store that
                            specializes in providing authentic Shoes products to customers all over the world. The
                            online store offers a wide range of shoes. Customers can browse through an extensive
                            selection of high-quality items sourced from Japan and purchase them with ease via Umbrella
                            Shop's user-friendly website. The store prides itself on providing exceptional customer
                            service, quick delivery times, and competitive pricing.</p>
                    </div>
                </div>
                <img src="https://images.unsplash.com/photo-1508599589920-14cfa1c1fe4d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2003&q=80"
                    loading="lazy" alt="Product screenshot" class="w-[48rem] rounded-lg mt-8" width="2432"
                    height="1442" data-aos="fade-up">
            </div>
        </div>
    </section>
@endsection