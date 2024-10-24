@extends('layouts.layout')
@section('content')
    <div class="container mx-auto px-4 py-8 ">
        <!-- Article Section -->
        <article class="mb-12 max-w-8xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 text-center">{{ $data->title }}</h1>
            <p class="text-username text-center mb-8">Posted by <span class="text-link">@ {{ $data->user->name }}</span> •
                {{ $data->created_at }}</p>

            <div class="bg-secondary rounded-lg p-8 mb-8">
                <h2 class="text-2xl font-semibold mb-4">Desc</h2>
                <p class="text-lg mb-6 leading-relaxed text-justify">
                    {{ $data->description }}
                </p>

                <h2 class="text-2xl font-semibold mb-4">Article</h2>
                <p class="text-lg mb-6 leading-relaxed text-justify">
                    {{ $data->body }}
                </p>
            </div>


        </article>

        <!-- Comments Section -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6">Comments</h2>
            <div class="flex flex-wrap -mx-2">
                <!-- Comment Grid Container -->
                @foreach ($data->comments as $comment)
                    <div class="w-full md:w-1/2 px-2 mb-4">
                        <!-- Individual Comment -->
                        <div class="bg-secondary rounded-lg p-4 h-full">
                            <div class="flex justify-between items-start mb-2">
                                <div class="flex items-center">
                                    <div>
                                        <p class="font-bold">Alice Smith</p>
                                        <p class="text-username text-sm">{{ $comment->created_at }}</p>
                                    </div>
                                </div>
                                <button class="text-red-500 hover:text-red-700 transition duration-300 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                            <p class="text-white">{{ $comment->body }}</p>
                        </div>
                    </div>
                @endforeach

                <!-- You can add more comments here, they will automatically flow to the next row -->
            </div>
        </section>




        <!-- Comment Form -->
        <section>
            <h2 class="text-2xl font-bold mb-6">Add a Comment</h2>
            <form action="{{ route('api.createComment') }}" method="post" class="bg-secondary rounded-lg p-6">
                @csrf
                <div class="mb-4">
                    <label for="comment" class="block text-sm font-medium mb-2">Comment</label>
                    <input type="hidden" name="article_id" value="{{ $data->id }}">
                    <textarea id="comment" name="body" rows="4"
                        class="w-full bg-primary text-white rounded-lg border border-line p-3 focus:outline-none focus:border-link resize-none"
                        placeholder="Your comment"></textarea>
                </div>

                <button type="submit">
                    <span class="btn-blue cursor-pointer text-base font-bold">Comment</span>
                </button>


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
