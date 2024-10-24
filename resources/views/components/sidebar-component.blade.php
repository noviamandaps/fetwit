<!-- Sidebar -->
<div class="min-w-[230px] mr-4">
    <a href="{{ route('dashboard') }}">
        <h2 class="font-bold text-[28px] py-[30px]">twittr.</h2>
    </a>
    <div class="flex flex-col gap-[20px]">
        <a href="{{ route('dashboard') }}"
            class="flex items-center gap-4 px-4 py-2 rounded-full transition duration-300 ease-in-out hover:bg-blue-600 group">
            <img src="/images/home-hashtag.svg" alt="" class="w-7 h-7">
            <p class="text-xl group-hover:text-white">Home</p>
        </a>

        <a href="{{ route('article') }}"
            class="flex items-center gap-4 px-4 py-2 rounded-full transition duration-300 ease-in-out hover:bg-blue-600 group">
            <img src="/images/search-normal.svg" alt="" class="w-7 h-7">
            <p class="text-xl group-hover:text-white">Content</p>
        </a>

        <a href="{{ route('form') }}"
            class="flex items-center gap-4 px-4 py-2 rounded-full transition duration-300 ease-in-out hover:bg-blue-600 group">
            <img src="/images/notification.svg" alt="" class="w-7 h-7">
            <p class="text-xl group-hover:text-white">Form</p>
        </a>

        <a href="{{ route('profile') }}" id="btnVisitMyProfile"
            class="flex items-center gap-4 px-4 py-2 rounded-full transition duration-300 ease-in-out hover:bg-blue-600 group">
            <img src="/images/profile-circle.svg" alt="" class="w-7 h-7">
            <p class="text-xl group-hover:text-white">Profile</p>
        </a>
        <a href="{{ route('form') }}"
            class="flex items-center gap-4 px-4 py-2 rounded-full transition duration-300 ease-in-out hover:bg-blue-600 group">
            <img src="/images/sms.svg" alt="" class="w-7 h-7">
            <p class="text-xl group-hover:text-white">Messages</p>
        </a>

        <a href="{{ route('dashboard') }}"
            class="flex items-center gap-4 px-4 py-2 rounded-full transition duration-300 ease-in-out hover:bg-blue-600 group">
            <img src="/images/note-add.svg" alt="" class="w-7 h-7">
            <p class="text-xl group-hover:text-white">Bookmarks</p>
        </a>

        <a href="{{ route('dashboard') }}"
            class="flex items-center gap-4 px-4 py-2 rounded-full transition duration-300 ease-in-out hover:bg-blue-600 group">
            <img src="/images/crown-light.svg" alt="" class="w-7 h-7">
            <p class="text-xl group-hover:text-white">Communities</p>
        </a>


        <form action="{{ route('api.logout') }}" method="POST">
            @csrf
            <button type="submit"
                class="flex items-center gap-4 px-4 py-2 rounded-full transition duration-300 ease-in-out hover:bg-red-600 group w-full">
                <img src="/images/group.svg" alt="" class="w-7 h-7">
                <p class="text-xl group-hover:text-white">Sign Out</p>
            </button>
        </form>

        <a href="{{ route('form') }}" class="w-full">
            <span
                class="btn-blue cursor-pointer text-base font-bold w-full block text-center py-3 rounded-full hover:bg-blue-700 transition duration-300 ease-in-out">New
                Tweet</span>
        </a>
    </div>
</div>
