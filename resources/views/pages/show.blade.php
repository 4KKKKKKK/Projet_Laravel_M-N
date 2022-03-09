<section>

    <div class="w-75 mx-auto my-5">
        <h1 class="fw-bold">{{$show->titre}} </h1>
        <h4 class="my-3">{{$show->soustitre}} </h4>
        <p><span class="bg-primary text-white p-2 badge rounded-pill">{{$show->source}} </span> </p>
        <p class="fw-light fst-italic">{{$show->auteur}} </p>
        <div>
            <img src="{{$show->url}} " alt="">
        </div>
        <div class="w-100 mt-5">
            <p class="w-75 text-center">{{$show->texte}} </p>
        </div>

    </div>
    <div class="d-flex justify-content-center text-center mx-3 mb-5">
        <form action="/delete/{{ $show->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mx-2">Supprimer</button>
        </form>
        <button class="btn btn-primary">
            @csrf
            <a class="text-decoration-none text-white" href="/edit/{{ $show->id }} ">Modifier</a>
        </button>

    </div>
</section>
