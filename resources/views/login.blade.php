<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('login.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>

<body class="max-w-7xl mx-auto bg-primary text-white">

    <section class="px-[150px] w-full items-center flex justify-center items-center gap-x-[100px] h-screen">
        <div class="w-full h-fit">
            <div class="pb-[50px] flex flex-col gap-y-1">
                <h2 class="font-bold text-[38px]">Happening Today</h2>
                <p class="">What’s trend, what’s good for you.</p>
                <div id="instantFeedback"
                    class="mt-3 instant-feedback flex flex-row p-3 rounded-xl text-base bg-red-500 text-white font-bold">
                </div>
            </div>

            <form id="formManager">
                <div class="flex flex-col gap-4">

                    <div class="flex flex-col gap-2">
                        <label for="username" class="block text-base font-medium">Username</label>
                        <div class="flex items-center justify-start rounded-full bg-secondary">
                            <img src="/images/crown-blur.svg" alt="lock" srcset="" class="w-6 h-6 ml-4 mr-3">
                            <input type="text" placeholder="Username" id="username"
                                class="w-[484px] h-[48px] py-3 text-white bg-secondary text-base placeholder:text-base placeholder:text-paragraph rounded-full focus:outline-none focus:ring-0 focus:font-semibold" />
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="password" class="block text-base font-medium">Password</label>
                        <div class="flex items-center justify-start rounded-full bg-secondary">
                            <img src="/images/lock.svg" alt="lock" srcset="" class="w-6 h-6 ml-4 mr-3">
                            <input type="password" placeholder="Password" id="password"
                                class="w-[484px] h-[48px] py-3 text-white bg-secondary text-base placeholder:text-base placeholder:text-paragraph rounded-full focus:outline-none focus:ring-0 focus:font-semibold" />
                        </div>
                    </div>

                    <div class="flex flex-col gap-3.5 mt-[50px]">
                        <button><span class="btn-blue cursor-pointer text-base font-bold">Sign In</span></button>
                        <a href="register.html"><span class="btn-white cursor-pointer text-base font-bold">Create New
                                Account</span></a>
                    </div>

                </div>
            </form>
        </div>

        <div class=" w-fit h-fit">
            <h1 class="font-extrabold text-[120px]">
                twittr.
            </h1>
        </div>
    </section>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#010003',
                        secondary: '#121316',
                        paragraph: '#626262',
                        btn_blue: '#1880E8'
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
