<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('dashboard.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>

<body class="max-w-8xl mx-auto bg-primary text-white">

    <section class="px-[40px] min-w-fit flex justify-between">
        <!-- Sidebar -->
        <aside class="sticky top-0 h-screen overflow-y-auto flex-shrink-0">
            <x-SidebarComponent />
        </aside>
        <main class="flex-1 min-h-screen overflow-y-auto">
            <div class="py-[30px]">
                <div class="flex flex-row">
                    <!-- Feeds -->
                    <div class="flex-grow max-w-5xl h-fit border-l-2 border-r-2 border-line">
                        <div class="flex justify-center gap-[150px] pt-[20px] border-b-2 border-line">
                            <a href="#" class="px-2.5 pb-3.5 text-base font-bold border-b-4 border-link">For
                                You</a>
                            <a href="#" class="px-2.5 pb-3.5 text-base font-bold text-username">Following</a>
                        </div>

                        <div class="bg-primary pt-[20px] pb-[16px] px-4 border-b-2 border-line">
                            <form id="twittForm">
                                <div class="flex items-start justify-start">
                                    <img src="/images/bwa-profile.png" id="ownerPhoto"
                                        class="object-cover w-[46px] h-[46px] rounded-full mr-3" />

                                    <textarea placeholder="What is happening ?!" id="twittContent"
                                        class="flex-grow h-[100px] py-3 text-white bg-primary text-base placeholder:text-lg focus:outline-none focus:ring-0 focus:font-semibold resize-none focus:border-transparent overflow-hidden"></textarea>
                                </div>

                                <div class="w-[90%] flex justify-between items-center ml-[54px] mr-4 pt-[17px]">
                                    <div class="flex justify-center items-center gap-2.5">
                                        <div data-feeling="🤩 Happy"
                                            class="item-feeling cursor-pointer border-line flex justify-center items-center rounded-full px-3 py-1.5 border-2 gap-1.5">
                                            <p>🤩</p>
                                            <p class="text-sm font-semibold">Happy</p>
                                        </div>
                                        <div data-feeling="😥 Sad"
                                            class="item-feeling cursor-pointer flex justify-center items-center rounded-full px-3 py-1.5 border-line border-2 gap-1.5">
                                            <p>😥</p>
                                            <p class="text-sm font-semibold">Sad</p>
                                        </div>
                                        <div data-feeling="🤯 Shocked"
                                            class="item-feeling cursor-pointer flex justify-center items-center rounded-full px-3 py-1.5 border-line border-2 gap-1.5">
                                            <p>🤯</p>
                                            <p class="text-sm font-semibold">Shocked</p>
                                        </div>
                                    </div>
                                    <button>
                                        <span class="btn-blue cursor-pointer font-bold">Post</span>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div id="twittsWrapper">
                            <div class="bg-primary p-4 border-b-2 border-line">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center justify-start">
                                        <img src="/images/bwa-profile.png" alt="search" srcset=""
                                            class="object-cover w-[46px] h-[46px] rounded-full">
                                        <div class="pl-2">
                                            <div class="flex gap-1">
                                                <p class="text-base font-bold inline-block">Angga Risky <img
                                                        src="/images/verify.png" alt="" srcset=""
                                                        class="inline w-5 h-5 rounded-full"> </p>
                                            </div>
                                            <p class="text-username text-md pt-2">AI TECHNOLOGI</p>
                                        </div>
                                    </div>
                                    <a href="{{ route('content') }}"
                                        class="inline-flex justify-center items-center rounded-full px-3 py-1.5 border-2 border-line gap-1.5 transition-colors duration-300 ease-in-out hover:bg-white group">
                                        <p class="text-sm font-semibold group-hover:text-black">Read More</p>
                                    </a>
                                </div>

                                <p class="pl-[55px] py-2.5 leading-7 text-base">
                                    The company reportedly began exploring a sale in May, amid poor reviews and poorer
                                    sales.
                                    Beleaguered startup Humane drops Ai Pin price by $200. Humane on Wednesday announced
                                    a
                                    $200
                                    price cut to its flagship product, the Ai Pin. The Bay Area startup, founded by two
                                    former Apple
                                    executives, has reportedly struggled to sell the product, which
                                </p>

                                <div class="flex justify-between items-center pl-[55px] w-[484px]">
                                    <div class="flex justify-center items-center gap-2.5 pr-[250px]">
                                        <a href="#"
                                            class="cursor flex justify-start items-center w-[93px] gap-1.5">
                                            <img class="like-icon" src="/images/heart.svg" alt="heart">
                                            <p class="text-sm font-normal text-like">0 Likes
                                            </p>
                                        </a>
                                        <a href="#"
                                            class="cursor flex justify-start items-center w-[93px] gap-1.5">
                                            <img src="/images/trash.svg" alt="heart">
                                            <p class="text-sm font-normal text-username">Delete</p>
                                        </a>
                                        <a href="#" class="flex justify-start items-center w-[93px] gap-1.5">
                                            <img src="/images/warning-2.svg">
                                            <p class="text-sm font-normal text-username">Report</p>
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>

                    <!-- Browse -->
                    <div class="max-w-[320px]">
                        <div class="pl-[30px] flex flex-col gap-5 py-[30px]">
                            <div class="flex items-center justify-start rounded-full bg-secondary">
                                <img src="/images/search-normal-dim.svg" alt="search" srcset=""
                                    class="w-26 h-26 ml-4 mr-3">
                                <input type="text" placeholder="Search" id="search"
                                    class="w-[484px] h-[48px] py-3 text-white bg-secondary text-base placeholder:text-base placeholder:text-paragraph rounded-full focus:outline-none focus:ring-0 focus:font-semibold" />
                            </div>

                            <div class="flex flex-col p-3.5 rounded-[16px] bg-secondary">
                                <div class="flex flex-col gap-6">
                                    <h2 class="font-bold text-lg">You might like</h2>
                                    <div class="flex justify-between items-center">
                                        <div class="flex">
                                            <img src="/images/girl1.png" alt=""
                                                class="w-[46px] h-[46px] rounded-full">
                                            <div class="pl-2">
                                                <p class="text-base font-bold">Shayna <img src="/images/verify.png"
                                                        alt="" srcset=""
                                                        class="inline w-5   rounded-full">
                                                </p>
                                                <p class="text-username text-sm">@shayna</p>
                                            </div>
                                        </div>

                                        <a href="#">
                                            <span href="#" class="btn-white-small cursor-pointer">Follow</span>
                                        </a>
                                    </div>

                                    <div class="flex justify-between items-center">
                                        <div class="flex">
                                            <img src="/images/man1.png" alt=""
                                                class="w-[46px] h-[46px] rounded-full">
                                            <div class="pl-2">
                                                <div>
                                                    <p class="text-base font-bold">Masayoshi <img
                                                            src="/images/verify.png" alt="" srcset=""
                                                            class="inline w-5 rounded-full"></p>

                                                </div>
                                                <p class="text-username text-sm">@masayoshi</p>
                                            </div>
                                        </div>

                                        <a href="#">
                                            <span href="#" class="btn-white-small cursor-pointer">Follow</span>
                                        </a>
                                    </div>

                                    <div class="flex justify-between items-center">
                                        <div class="flex">
                                            <img src="/images/girl2.png" alt=""
                                                class="w-[46px] h-[46px] rounded-full">
                                            <div class="pl-2">
                                                <p class="text-base font-bold">Ramina <img src="/images/verify.png"
                                                        alt="" srcset=""
                                                        class="inline w-5 rounded-full">
                                                </p>
                                                <p class="text-username text-sm">@ramina</p>
                                            </div>
                                        </div>

                                        <a href="#">
                                            <span href="#" class="btn-white-small cursor-pointer">Follow</span>
                                        </a>
                                    </div>

                                    <a href="#" class="text-base font-medium text-link pl-2">Show more</a>
                                </div>
                            </div>

                            <div class="flex flex-col rounded-[16px] bg-secondary">
                                <div class="flex flex-col py-3.5">
                                    <h2 class="font-bold text-lg pb-[7px] px-3.5">Indonesia trends</h2>

                                    <a href="#" class="flex justify-between items-center hover:bg-gray-800">
                                        <div class="flex px-3.5 py-[7px]">
                                            <div class="">
                                                <p class="text-username text-sm">1 • Trending</p>
                                                <p class="text-base font-bold">belajar javascript di bwa</p>
                                                <p class="text-username text-sm">14K posts</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="flex justify-between items-cente hover:bg-gray-800">
                                        <div class="flex px-3.5 py-[7px]">
                                            <div class="">
                                                <p class="text-username text-sm">2 • Trending</p>
                                                <p class="text-base font-bold">kerja remote itu asik</p>
                                                <p class="text-username text-sm">14K posts</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="flex justify-between items-center hover:bg-gray-800">
                                        <div class="flex px-3.5 py-[7px]">
                                            <div class="">
                                                <p class="text-username text-sm">3 • Trending</p>
                                                <p class="text-base font-bold">bwa banyak kelas gratis</p>
                                                <p class="text-username text-sm">14K posts</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="flex justify-between items-center hover:bg-gray-800">
                                        <div class="flex px-3.5 py-[7px]">
                                            <div class="">
                                                <p class="text-username text-sm">4 • Trending</p>
                                                <p class="text-base font-bold">mengapa coding sulit</p>
                                                <p class="text-username text-sm">14K posts</p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="flex justify-between items-center hover:bg-gray-800">
                                        <div class="flex px-3.5 py-[7px]">
                                            <div class="">
                                                <p class="text-username text-sm">5 • Trending</p>
                                                <p class="text-base font-bold">diskon bwa besar banget</p>
                                                <p class="text-username text-sm">14K posts</p>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>


    </section>


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

</body>



</html>
