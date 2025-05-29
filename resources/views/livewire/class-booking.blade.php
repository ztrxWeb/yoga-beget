<div>
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">{{ $yogaClass->title }}</h2>
        
        <div class="grid md:grid-cols-2 gap-8">
            <div>
                <div class="mb-4">
                    <p class="text-gray-600"><span class="font-semibold">Тренер:</span> {{ $yogaClass->trainer->name }}</p>
                    <p class="text-gray-600"><span class="font-semibold">Дата и время:</span> {{ $yogaClass->start_time->format('d.m.Y H:i') }} - {{ $yogaClass->end_time->format('H:i') }}</p>
                    <p class="text-gray-600"><span class="font-semibold">Уровень:</span> 
                        @if($yogaClass->difficulty_level == 'beginner') Начинающий
                        @elseif($yogaClass->difficulty_level == 'intermediate') Средний
                        @else Продвинутый
                        @endif
                    </p>
                    <p class="text-gray-600"><span class="font-semibold">Цена:</span> {{ $yogaClass->price }} руб.</p>
                </div>
                
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-2">Описание:</h3>
                    <p class="text-gray-700">{{ $yogaClass->description }}</p>
                </div>
            </div>
            
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="text-xl font-bold mb-4">Записаться на занятие</h3>
                
                <form wire:submit.prevent="bookClass">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 mb-2">Ваше имя*</label>
                        <input type="text" id="name" wire:model="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a1d2f3]">
                        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 mb-2">Email*</label>
                        <input type="email" id="email" wire:model="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a1d2f3]">
                        @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 mb-2">Телефон*</label>
                        <input type="tel" id="phone" wire:model="phone" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a1d2f3]">
                        @error('phone') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="comments" class="block text-gray-700 mb-2">Комментарии (необязательно)</label>
                        <textarea id="comments" wire:model="comments" rows="3" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#a1d2f3]"></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-[#a1d2f3] text-white font-bold py-2 px-4 rounded-lg transition duration-200 cursor-pointer">
                        Записаться
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>