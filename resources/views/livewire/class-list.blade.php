
<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="mb-8">
                    <h1 class="text-3xl font-bold text-center mb-6">Расписание занятий</h1>
                    
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($classes as $class)
                                <div class="bg-white p-6 rounded-lg h-full shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                                        <div class="">
                                            <h3 class="text-xl font-bold">{{ $class->title }}</h3>
                                            <span class="px-2 py-1 bg-[#bde1f9]/20 text-[#a1d2f3] text-xs font-medium rounded">
                                                @if($class->difficulty_level == 'beginner') Начинающий
                                                @elseif($class->difficulty_level == 'intermediate') Средний
                                                @else Продвинутый
                                                @endif
                                            </span>
                                        </div>
                                        
                                        <div>
                                            <p class="text-gray-600 mb-2"><span class="font-semibold">Тренер:</span> {{ $class->trainer->name }}</p>
                                            <p class="text-gray-600 mb-2"><span class="font-semibold">Дата:</span> {{ $class->start_time->format('d.m.Y') }}</p>
                                            <p class="text-gray-600 mb-2"><span class="font-semibold">Время:</span> {{ $class->start_time->format('H:i') }} - {{ $class->end_time->format('H:i') }}</p>
                                            <p class="text-gray-600 mb-4"><span class="font-semibold">Цена:</span> {{ $class->price }} руб.</p>
                                        </div>
                                        
                                        <p class="text-gray-700 mb-4 line-clamp-3">{{ $class->description }}</p>
                                        
                                        <a 
                                            href="{{ route('class.show', $class->id) }}" 
                                            class="block w-full text-center bg-[#a1d2f3] text-white font-medium py-2 px-4 rounded-lg transition duration-200"
                                        >
                                            Подробнее и запись
                                        </a>
                                </div>
                            @endforeach
                        </div>
                        
                </div>
            </div>
        </div>
    </div>
</div>