<div class="card m-4" style="width: 18rem;">
  <div class="card-body">
    <div class="container">
      <div class="row d-flex align-content-center justify-content-center">
        <div class="col-12 col-md-6">
          
        </div>
      </div>
    </div>
    
    <h5 class="card-title">{{$article->title}}</h5>
    <p class="card-text">{{$article->description}}</p>
    
    @foreach ($article->tags as $tag)

    <span class="badge rounded-pill text-bg-primary ">{{$tag->tag}}</span>
        
    @endforeach


    <div class="container mt-4">
      <div class="row d-flex align-content-center justify-content-center">
        <div class="col-12 col-md-4">
          <a href="{{route('article.edit' , compact('article'))}}" class="card-link">Modify</a>
        </div>
        
          <form action="{{route('article.delete' , compact('article'))}}" method="POST" class="col-12 col-md-4 d-flex justify-content-center align-items-center">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-link p-0 m-0">Delete</button>
          </form>
        
        <div class="col-12 col-md-4">
          <a href="{{route('article.show' , compact('article'))}}" class="card-link">Details</a>
        </div>
      </div>
    </div>
    
    
    
    
    
  </div>
</div>