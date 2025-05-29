<x-app-layout>
<div class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Контакты</h1>
            <p class="text-xl text-gray-600">Мы всегда рады ответить на ваши вопросы</p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12 mb-16">
            <div>
                <h2 class="text-2xl font-bold mb-6">Наш адрес</h2>
                <div class="space-y-4">
                    <p class="flex items-start text-gray-600">
                        <svg class="w-6 h-6 mr-3 text-[#a1d2f3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        +7 (123) 456-78-90
                    </p>
                    <p class="flex items-start text-gray-600">
                        <svg class="w-6 h-6 mr-3 text-[#a1d2f3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        mail@mail.ru
                    </p>
                </div>
                
                <h2 class="text-2xl font-bold mt-8 mb-6">Часы работы</h2>
                <div class="space-y-2 text-gray-600">
                    <p class="flex justify-between max-w-xs">
                        <span>Понедельник - Пятница</span>
                        <span>8:00 - 22:00</span>
                    </p>
                    <p class="flex justify-between max-w-xs">
                        <span>Суббота - Воскресенье</span>
                        <span>9:00 - 20:00</span>
                    </p>
                </div>
            </div>
            
            <div class="bg-gray-50 p-6 rounded-xl">
                <h2 class="text-2xl font-bold mb-6">Напишите нам</h2>
                <form>
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 mb-2">Ваше имя</label>
                        <input type="text" id="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a1d2f3]">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a1d2f3]">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 mb-2">Сообщение</label>
                        <textarea id="message" rows="4" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a1d2f3]"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-[#a1d2f3] text-white font-bold py-2 px-4 rounded-lg transition duration-200 cursor-pointer">
                        Отправить
                    </button>
                </form>
            </div>
        </div>
        
    </div>
</div>
</x-app-layout>