<x-layout>
    
    <div class="container vh-100">
        <div class="row d-flex h-75 align-content-center justify-content-center">
            <div class="col-12 col-md-6">
                <form>
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" type="text" class="form-control" id="description"></textarea>
                    </div>
<div class="container">
    <div class="row d-flex align-content-center justify-content-center">
                        @foreach ($tags as $tag)
                            <div class="mb-3 form-check col-3">
                                <input value="{{$tag->tag}}" type="checkbox" class="form-check-input" id="{{$tag->tag}}">
                                <label class="form-check-label" for="exampleCheck1">{{$tag->tag}}</label>
                            </div>
                        @endforeach                    
    </div>
    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>