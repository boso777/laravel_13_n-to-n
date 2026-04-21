<x-layout>
    <div class="container mt-5">
        <div class="row d-flex align-content-center justify-content-center">
            <div class="col-12 col-md-6">
                
                <form action="{{route('tag.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="tag" class="form-label">New Tag</label>
                        <input name="tag" type="text" class="form-control" id="tag" aria-describedby="emailHelp">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>
    </div>
    
    
</x-layout>