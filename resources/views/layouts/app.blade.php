<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Центр йоги Дыхание</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="js/script.js" defer></script>
  </head>
    @livewireStyles
</head>
<body class="bg-gray-50 h-screen flex flex-col justify-between">
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-xl font-bold text-[#a1d2f3]">Дыхание</a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-[#a1d2f3] transition">Главная</a>
                    <a href="{{ route('classes') }}" class="text-gray-700 hover:text-[#a1d2f3] transition">Занятия</a>
                    <a href="{{ route('contacts') }}" class="text-gray-700 hover:text-[#a1d2f3] transition">Контакты</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button class="text-gray-700 focus:outline-none z-11" onclick="myFunc()" id="btn">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <div class="menu h-[100vh] w-[100vw] bg-white absolute top-0 left-0 z-10 hidden" id="menu">
                        <div class="flex bg-white h-[100vh] w-[100vw] flex-col items-center justify-center gap-5">
                            <a href="{{ route('home') }}" class="text-gray-700 hover:text-[#a1d2f3] transition text-xl">Главная</a>
                            <a href="{{ route('classes') }}" class="text-gray-700 hover:text-[#a1d2f3] transition text-xl">Занятия</a>
                            <a href="{{ route('contacts') }}" class="text-gray-700 hover:text-[#a1d2f3] transition text-xl">Контакты</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="">
        {{ $slot }}
    </main>

    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-bold mb-4">Дыхание</h3>
                    <p class="text-gray-300">Профессиональные занятия йогой.</p>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Контакты</h3>
                    <p class="text-gray-300">+7 (123) 456-78-90</p>
                    <p class="text-gray-300">mail@mail.ru</p>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Часы работы</h3>
                    <p class="text-gray-300">Пн-Пт: 8:00 - 22:00</p>
                    <p class="text-gray-300">Сб-Вс: 9:00 - 20:00</p>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} Все права защищены.</p>
            </div>
        </div>
    </footer>

    @livewireScripts
    <script>
        function myFunc() {
            menu.classList.toggle('hidden')
        }
    </script>
</body>
</html>