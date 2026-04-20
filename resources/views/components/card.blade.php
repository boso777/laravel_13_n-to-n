<div class="card m-4" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$article->title}}</h5>
    <p class="card-text">{{$article->description}}</p>
    <a href="{{route('article.edit' , compact('article'))}}" class="card-link">Modify</a>
    <a href="#" class="card-link">Delete</a>
    <a href="{{route('article.show' , compact('article'))}}" class="card-link">Details</a>
  </div>
</div>