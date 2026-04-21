<x-layout>
    <div class="container mt-5">
        <div class="row d-flex align-content-center justify-content-center">
            <div class="col-12 col-md-6">
                <x-message></x-message>
            </div>
        </div>
    </div>
<div class="d-flex align-items-center justify-content-center">
    
    @foreach ($articles as $article)
    <x-card :$article></x-card>
    @endforeach
</div>
</x-layout>