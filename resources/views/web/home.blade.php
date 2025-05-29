<x-app-layout>
    <div class="relative">
        @include('web.intro')
        
        @include('web.benefits')

        @livewire('class-list')

        @include('web.about')
    </div>
</x-app-layout>