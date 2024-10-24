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
    <title>Article Page</title>
</head>

<body class="max-w-8xl mx-auto bg-primary text-white font-poppins">
    <section class="px-[40px] min-w-fit flex justify-between">
        <aside class="sticky top-0 h-screen overflow-y-auto flex-shrink-0">
            <x-SidebarComponent />
        </aside>
        <main class="flex-1 min-h-screen overflow-y-auto">
            <div class="py-[30px]">
                @yield('content')
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
