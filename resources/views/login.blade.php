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

<body class="max-w-7xl mx-auto bg-primary text-white font-poppins">

    <section
        class="px-4 sm:px-6 md:px-8 lg:px-[150px] w-full flex flex-col lg:flex-row justify-center items-center gap-y-8 lg:gap-x-[100px] min-h-screen py-8">
        <!-- Logo untuk tampilan mobile -->
        <div class="lg:hidden w-full text-center mb-8">
            <h1 class="font-extrabold text-5xl sm:text-6xl md:text-7xl">
                twittr.
            </h1>
        </div>
        <div class="w-full lg:w-1/2">
            <div class="pb-6 lg:pb-[50px] flex flex-col gap-y-1">
                <h2 class="font-bold text-2xl sm:text-3xl lg:text-[38px]">Happening Today</h2>
                <p class="text-sm sm:text-base">What's trend, what's good for you.</p>
            </div>

            <form id="formManager">
                <div class="flex flex-col gap-4">
                    <div class="flex flex-col gap-2">
                        <label for="username" class="block text-sm sm:text-base font-medium">Email</label>
                        <div class="flex items-center justify-start rounded-full bg-secondary">
                            <img src="/images/crown-blur.svg" alt="lock" srcset=""
                                class="w-5 h-5 sm:w-6 sm:h-6 ml-3 sm:ml-4 mr-2 sm:mr-3">
                            <input name="email" type="text" placeholder="Email" id="username"
                                class="w-full h-10 sm:h-[48px] py-2 sm:py-3 text-white bg-secondary text-sm sm:text-base placeholder:text-sm sm:placeholder:text-base placeholder:text-paragraph rounded-full focus:outline-none focus:ring-0 focus:font-semibold" />
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="password" class="block text-sm sm:text-base font-medium">Password</label>
                        <div class="flex items-center justify-start rounded-full bg-secondary">
                            <img src="/images/lock.svg" alt="lock" srcset=""
                                class="w-5 h-5 sm:w-6 sm:h-6 ml-3 sm:ml-4 mr-2 sm:mr-3">
                            <input name="password" type="password" placeholder="Password" id="password"
                                class="w-full h-10 sm:h-[48px] py-2 sm:py-3 text-white bg-secondary text-sm sm:text-base placeholder:text-sm sm:placeholder:text-base placeholder:text-paragraph rounded-full focus:outline-none focus:ring-0 focus:font-semibold" />
                        </div>
                    </div>

                    <div class="flex flex-col gap-3.5 mt-6 lg:mt-[50px]">
                        <button><span class="btn-blue cursor-pointer text-sm sm:text-base font-bold">Sign
                                In</span></button>
                        <a href="register.html"><span
                                class="btn-white cursor-pointer text-sm sm:text-base font-bold">Create New
                                Account</span></a>
                    </div>

                </div>
            </form>
        </div>

        <!-- Logo untuk tampilan desktop -->
        <div class="hidden lg:block w-fit h-fit">
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
