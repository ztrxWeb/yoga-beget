<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @livewire('class-booking', ['classId' => $class->id])
        </div>
    </div>
</x-app-layout>