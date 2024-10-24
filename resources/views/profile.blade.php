@extends('layouts.layout')
@section('content')
    <div class="flex flex-row">
        <!-- Feeds -->
        <div class="flex-grow max-w-5xl border-2 border-line">
            <div class="relative border-b-2 border-line">

                <div class="bg-cover bg-center w-full h-[200px]" style="background-image: url(/images/cover.png)"></div>

                <div class="absolute pl-5 top-[140px]">
                    <img src="/images/bwa-profile.png" id="ownerPhoto" alt="" srcset=""
                        class="object-cover w-[120px] h-[120px] rounded-full border-4 border-black">
                </div>

                <div class="px-5">
                    <div class="flex flex-col justify-start gap-3.5 px-[5] pt-[70px]">
                        <div class="flex justify-between items-center">
                            <div class="">
                                <h3 id="userProfileName" class="text-[22px] font-bold">BuildWithAngga<img
                                        src="/images/verify.png" alt="" srcset=""
                                        class="inline w-6 h-6 rounded-full">
                                </h3>
                                <p id="userProfileUsername" class="text-username text-sm">@buildwithangga</p>
                            </div>

                            <a href="#">
                                <span href="#" class="btn-white-small cursor-pointer">Follow</span>
                            </a>
                        </div>

                        <p class="leading-[26px] text-sm">Tempat belajar skills Product Design & Software Development
                            bersama mentor berpengalaman dengan komunitas yang supportive.</p>

                        <div class="flex gap-5">
                            <div class="flex gap-1.5">
                                <img src="/images/briefcase.svg" alt="" srcset="" class="w-[20px] h-[20px]">
                                <p class="text-base text-username">UX Designer</p>
                            </div>

                            <div class="flex gap-1.5">
                                <img src="/images/location.svg" alt="" srcset="" class="w-[20px] h-[20px]">
                                <p class="text-base text-username">Indonesia</p>
                            </div>
                        </div>

                        <div class="flex gap-5">
                            <div>
                                <span class="font-bold text-base">12</span>
                                <span class="text-base text-username">Following</span>
                            </div>

                            <div>
                                <span class="font-bold text-base">18,309</span>
                                <span class="text-base text-username">Followers</span>
                            </div>
                        </div>

                        <div class="flex justify-between px-[10px]">
                            <a href="#" class="px-2.5 pb-3.5 text-base font-bold border-b-4 border-link">Posts</a>
                            <a href="#" class="px-2.5 pb-3.5 text-base text-username">Replies</a>
                            <a href="#" class="px-2.5 pb-3.5 text-base text-username">Highlights</a>
                            <a href="#" class="px-2.5 pb-3.5 text-base text-username">Media</a>
                            <a href="#" class="px-2.5 pb-3.5 text-base text-username">Likes</a>
                        </div>

                    </div>
                </div>

            </div>
            <div id="twittsWrapper">
                <div class="bg-primary p-4 border-b-2 border-line">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center justify-start">
                            <img src="/images/bwa-profile.png" alt="search" srcset=""
                                class="object-cover w-[46px] h-[46px] rounded-full">
                            <div class="pl-2">
                                <div class="flex gap-1">
                                    <p class="text-base font-bold inline-block">Angga Risky <img src="/images/verify.png"
                                            alt="" srcset="" class="inline w-5 h-5 rounded-full"> </p>
                                </div>
                                <p class="text-username text-sm">@buildwithangga • 5 Mar 2024</p>
                            </div>
                        </div>
                        <div class="flex justify-center items-center rounded-full px-3 py-1.5 border-line border-2 gap-1.5">
                            <p class="text-sm font-semibold">🤩 Happy</p>
                        </div>
                    </div>

                    <p class="pl-[55px] py-2.5 leading-7 text-base">
                        The company reportedly began exploring a sale in May, amid poor reviews and poorer sales.
                        Beleaguered startup Humane drops Ai Pin price by $200. Humane on Wednesday announced a $200
                        price cut to its flagship product, the Ai Pin. The Bay Area startup, founded by two former Apple
                        executives, has reportedly struggled to sell the product, which
                    </p>

                    <div class="flex justify-between items-center pl-[55px] w-[484px]">
                        <div class="flex justify-center items-center gap-2.5 pr-[250px]">
                            <a href="#" class="cursor flex justify-start items-center w-[93px] gap-1.5">
                                <img class="like-icon" src="/images/heart.svg" alt="heart">
                                <p class="text-sm font-normal text-like">0 Likes
                                </p>
                            </a>
                            <a href="#" class="flex justify-start items-center w-[93px] gap-1.5">
                                <img src="/images/warning-2.svg">
                                <p class="text-sm font-normal text-username">Update</p>
                            </a>
                            <a href="#" class="cursor flex justify-start items-center w-[93px] gap-1.5">
                                <img src="/images/trash.svg" alt="heart">
                                <p class="text-sm font-normal text-username">Delete</p>
                            </a>

                        </div>
                    </div>
                </div>

            </div>
            <div id="twittsWrapper">
                <div class="bg-primary p-4 border-b-2 border-line">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center justify-start">
                            <img src="/images/bwa-profile.png" alt="search" srcset=""
                                class="object-cover w-[46px] h-[46px] rounded-full">
                            <div class="pl-2">
                                <div class="flex gap-1">
                                    <p class="text-base font-bold inline-block">Angga Risky <img src="/images/verify.png"
                                            alt="" srcset="" class="inline w-5 h-5 rounded-full"> </p>
                                </div>
                                <p class="text-username text-sm">@buildwithangga • 5 Mar 2024</p>
                            </div>
                        </div>
                        <div
                            class="flex justify-center items-center rounded-full px-3 py-1.5 border-line border-2 gap-1.5">
                            <p class="text-sm font-semibold">🤩 Happy</p>
                        </div>
                    </div>

                    <p class="pl-[55px] py-2.5 leading-7 text-base">
                        The company reportedly began exploring a sale in May, amid poor reviews and poorer sales.
                        Beleaguered startup Humane drops Ai Pin price by $200. Humane on Wednesday announced a $200
                        price cut to its flagship product, the Ai Pin. The Bay Area startup, founded by two former Apple
                        executives, has reportedly struggled to sell the product, which
                    </p>

                    <div class="flex justify-between items-center pl-[55px] w-[484px]">
                        <div class="flex justify-center items-center gap-2.5 pr-[250px]">
                            <a href="#" class="cursor flex justify-start items-center w-[93px] gap-1.5">
                                <img class="like-icon" src="/images/heart.svg" alt="heart">
                                <p class="text-sm font-normal text-like">0 Likes
                                </p>
                            </a>
                            <a href="#" class="flex justify-start items-center w-[93px] gap-1.5">
                                <img src="/images/warning-2.svg">
                                <p class="text-sm font-normal text-username">Update</p>
                            </a>
                            <a href="#" class="cursor flex justify-start items-center w-[93px] gap-1.5">
                                <img src="/images/trash.svg" alt="heart">
                                <p class="text-sm font-normal text-username">Delete</p>
                            </a>

                        </div>
                    </div>
                </div>

            </div>
            <div id="twittsWrapper">
                <div class="bg-primary p-4 border-b-2 border-line">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center justify-start">
                            <img src="/images/bwa-profile.png" alt="search" srcset=""
                                class="object-cover w-[46px] h-[46px] rounded-full">
                            <div class="pl-2">
                                <div class="flex gap-1">
                                    <p class="text-base font-bold inline-block">Angga Risky <img src="/images/verify.png"
                                            alt="" srcset="" class="inline w-5 h-5 rounded-full"> </p>
                                </div>
                                <p class="text-username text-sm">@buildwithangga • 5 Mar 2024</p>
                            </div>
                        </div>
                        <div
                            class="flex justify-center items-center rounded-full px-3 py-1.5 border-line border-2 gap-1.5">
                            <p class="text-sm font-semibold">🤩 Happy</p>
                        </div>
                    </div>

                    <p class="pl-[55px] py-2.5 leading-7 text-base">
                        The company reportedly began exploring a sale in May, amid poor reviews and poorer sales.
                        Beleaguered startup Humane drops Ai Pin price by $200. Humane on Wednesday announced a $200
                        price cut to its flagship product, the Ai Pin. The Bay Area startup, founded by two former Apple
                        executives, has reportedly struggled to sell the product, which
                    </p>

                    <div class="flex justify-between items-center pl-[55px] w-[484px]">
                        <div class="flex justify-center items-center gap-2.5 pr-[250px]">
                            <a href="#" class="cursor flex justify-start items-center w-[93px] gap-1.5">
                                <img class="like-icon" src="/images/heart.svg" alt="heart">
                                <p class="text-sm font-normal text-like">0 Likes
                                </p>
                            </a>
                            <a href="#" class="flex justify-start items-center w-[93px] gap-1.5">
                                <img src="/images/warning-2.svg">
                                <p class="text-sm font-normal text-username">Update</p>
                            </a>
                            <a href="#" class="cursor flex justify-start items-center w-[93px] gap-1.5">
                                <img src="/images/trash.svg" alt="heart">
                                <p class="text-sm font-normal text-username">Delete</p>
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
                    <img src="/images/search-normal-dim.svg" alt="search" srcset="" class="w-26 h-26 pl-4 mr-3">
                    <input type="text" placeholder="Search" id="search"
                        class="w-[484px] h-[48px] py-3 text-white bg-secondary text-base placeholder:text-base placeholder:text-paragraph rounded-full focus:outline-none focus:ring-0 focus:font-semibold" />
                </div>

                <div class="flex flex-col p-3.5 rounded-[16px] bg-secondary">
                    <div class="flex flex-col gap-6">
                        <h2 class="font-bold text-lg">You might like</h2>
                        <div class="flex justify-between items-center">
                            <div class="flex">
                                <img src="/images/girl1.png" alt="" class="w-[46px] h-[46px] rounded-full">
                                <div class="pl-2">
                                    <p class="text-base font-bold">Shayna <img src="/images/verify.png" alt=""
                                            srcset="" class="inline w-5 w-5 rounded-full"></p>
                                    <p class="text-username text-sm">@shayna</p>
                                </div>
                            </div>

                            <a href="#">
                                <span href="#" class="btn-white-small cursor-pointer">Follow</span>
                            </a>
                        </div>

                        <div class="flex justify-between items-center">
                            <div class="flex">
                                <img src="/images/man1.png" alt="" class="w-[46px] h-[46px] rounded-full">
                                <div class="pl-2">
                                    <p class="text-base font-bold">Masayoshi <img src="/images/verify.png" alt=""
                                            srcset="" class="inline w-5 w-5 rounded-full"></p>
                                    <p class="text-username text-sm">@masayoshi</p>
                                </div>
                            </div>

                            <a href="#">
                                <span href="#" class="btn-white-small cursor-pointer">Follow</span>
                            </a>
                        </div>

                        <div class="flex justify-between items-center">
                            <div class="flex">
                                <img src="/images/girl2.png" alt="" class="w-[46px] h-[46px] rounded-full">
                                <div class="pl-2">
                                    <p class="text-base font-bold">Ramina <img src="/images/verify.png" alt=""
                                            srcset="" class="inline w-5 w-5 rounded-full"></p>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

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
