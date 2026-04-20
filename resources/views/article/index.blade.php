<x-layout>
<div class="d-flex align-items-center justify-content-center">
    @foreach ($articles as $article)
    <x-card :$article></x-card>
    @endforeach
</div>
</x-layout>