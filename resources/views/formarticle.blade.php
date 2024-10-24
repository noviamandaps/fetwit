@extends('layouts.layout')
@section('content')
    {{-- CONTENT FORM --}}
    <div class="container mx-auto px-4 py-8 ">
        <div class="w-full bg-secondary rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-6">Create New Article</h2>
            <form id="postForm">
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium mb-2">Title</label>
                    <input type="text" id="title" name="title"
                        class="w-full bg-primary text-white rounded-lg border border-line p-3 focus:outline-none focus:border-link"
                        placeholder="Enter title">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium mb-2">Description</label>
                    <input type="text" id="description" name="description"
                        class="w-full bg-primary text-white rounded-lg border border-line p-3 focus:outline-none focus:border-link"
                        placeholder="Enter description">
                </div>
                <div class="mb-6">
                    <label for="body" class="block text-sm font-medium mb-2">Body</label>
                    <textarea id="body" name="body" rows="8"
                        class="w-full bg-primary text-white rounded-lg border border-line p-3 focus:outline-none focus:border-link resize-none"
                        placeholder="Enter body content"></textarea>
                </div>

                <a href="index.html" class="w-[200px]">
                    <span class="btn-blue cursor-pointer text-base font-bold">Submit Article</span>
                </a>
            </form>
        </div>
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
