@extends('layouts.layout')
@section('content')
    <div class="container mx-auto px-4 py-8 ">
        <!-- Article Section -->
        <article class="mb-12 max-w-8xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-center">The Future of AI in Web Development</h1>
            <p class="text-username text-center mb-8">Posted by <span class="text-link">@johndoe</span> • 10 Apr
                2024</p>

            <div class="bg-secondary rounded-lg p-8 mb-8">
                <h2 class="text-2xl font-semibold mb-4">Desc</h2>
                <p class="text-lg mb-6 leading-relaxed text-justify">
                    The company reportedly began exploring a sale in May, amid poor reviews and poorer sales.
                    Beleaguered startup Humane drops Ai Pin price by $200. Humane on Wednesday announced a $200
                    price cut to its flagship product, the Ai Pin. The Bay Area startup, founded by two former Apple
                    executives, has reportedly struggled to sell the product, which
                </p>

                <h2 class="text-2xl font-semibold mb-4">Article</h2>
                <p class="text-lg mb-6 leading-relaxed text-justify">
                    The company reportedly began exploring a sale in May, amid poor reviews and poorer sales.
                    Beleaguered startup Humane drops Ai Pin price by $200. Humane on Wednesday announced a $200
                    price cut to its flagship product, the Ai Pin. The Bay Area startup, founded by two former Apple
                    executives, has reportedly struggled to sell the product, which
                    The company reportedly began exploring a sale in May, amid poor reviews and poorer sales.
                    Beleaguered startup Humane drops Ai Pin price by $200. Humane on Wednesday announced a $200
                    price cut to its flagship product, the Ai Pin. The Bay Area startup, founded by two former Apple
                    executives, has reportedly struggled to sell the product, whichThe device was poorly received by
                    reviewers. By August, returns of the Ai Pin had reportedly
                    begun to outpace sales, leaving some 7,000 to 8,000 devices in the hands of users.
                    The company reportedly began exploring a sale in May, amid poor reviews and poorer sales.
                    Beleaguered startup Humane drops Ai Pin price by $200. Humane on Wednesday announced a $200
                    price cut to its flagship product, the Ai Pin. The Bay Area startup, founded by two former Apple
                    executives, has reportedly struggled to sell the product, which
                    v
                </p>
            </div>


        </article>
        <!-- Comments Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6">Comments</h2>
            <div class="flex flex-wrap -mx-2">
                <!-- Comment Grid Container -->
                <div class="w-full md:w-1/2 px-2 mb-4">
                    <!-- Individual Comment -->
                    <div class="bg-secondary rounded-lg p-4 h-full">
                        <div class="flex items-center mb-2">
                            <div>
                                <p class="font-bold">Alice Smith</p>
                                <p class="text-username text-sm">@alice • 2 hours ago</p>
                            </div>
                        </div>
                        <p class="text-white">This is a fascinating topic! I'm curious about how AI will impact job
                            prospects for web developers in the future.</p>
                    </div>
                </div>

                <div class="w-full md:w-1/2 px-2 mb-4">
                    <!-- Individual Comment -->
                    <div class="bg-secondary rounded-lg p-4 h-full">
                        <div class="flex items-center mb-2">
                            <div>
                                <p class="font-bold">Bob Johnson</p>
                                <p class="text-username text-sm">@bob • 1 day ago</p>
                            </div>
                        </div>
                        <p class="text-white">Great article! I'd love to see more examples of AI being used in
                            real-world web development scenarios.</p>
                    </div>
                </div>

                <div class="w-full md:w-1/2 px-2 mb-4">
                    <!-- Individual Comment -->
                    <div class="bg-secondary rounded-lg p-4 h-full">
                        <div class="flex items-center mb-2">
                            <div>
                                <p class="font-bold">Bob Johnson</p>
                                <p class="text-username text-sm">@bob • 1 day ago</p>
                            </div>
                        </div>
                        <p class="text-white">Great article! I'd love to see more examples of AI being used in
                            real-world web development scenarios.</p>
                    </div>
                </div>


                <div class="w-full md:w-1/2 px-2 mb-4">
                    <!-- Another Comment -->
                    <div class="bg-secondary rounded-lg p-4 h-full">
                        <div class="flex items-center mb-2">
                            <div>
                                <p class="font-bold">Charlie Brown</p>
                                <p class="text-username text-sm">@charlie • 3 days ago</p>
                            </div>
                        </div>
                        <p class="text-white">I wonder how AI will change the way we approach responsive design and
                            accessibility in web development.</p>
                    </div>
                </div>

                <!-- You can add more comments here, they will automatically flow to the next row -->
            </div>
        </section>

        <!-- Comment Form -->
        <section>
            <h2 class="text-2xl font-bold mb-6">Add a Comment</h2>
            <form class="bg-secondary rounded-lg p-6">
                <div class="mb-4">
                    <label for="comment" class="block text-sm font-medium mb-2">Comment</label>
                    <textarea id="comment" name="comment" rows="4"
                        class="w-full bg-primary text-white rounded-lg border border-line p-3 focus:outline-none focus:border-link resize-none"
                        placeholder="Your comment"></textarea>
                </div>

                <a type="submit">
                    <span class="btn-blue cursor-pointer text-base font-bold">Comment</span>
                </a>


            </form>
        </section>
    </div>
@endsection
@push('scripts')
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#010003',
                        secondary: '#121316',
                        paragraph: '#626262',
                        btn_blue: '#1880E8',
                        username: '#5E6368',
                        link: '#1880E8',
                        line: '#1E1E1E',
                        like: '#F91880'
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
@endpush
