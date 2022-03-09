<section class=" flex-wrap d-flex justify-content-evenly">

    @foreach ($articles as $item)
    <a class="text-decoration-none text-dark" href="/show/{{$item->id}}">
        <div class="card m-3" style="width: 18rem;">
            <img src="{{$item->url}} " class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$item->titre}} </h5>
              <p class="card-text">{{substr($item->texte, 0, 35)}} ... </p>
            </div>
          </div>
    </a>

        @endforeach
</section>
