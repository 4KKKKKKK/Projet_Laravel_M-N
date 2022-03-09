<section class="w-50 mx-auto mb-5">
    <div class="bg-secondary py-5">
        <h1 class="text-center text-white">Créer un Grand article</h1>

        <form class="w-75 mx-auto" action="/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Titre</label>
                <input name="titre" type="text" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addSmallerInputName" class="form-label">Sous titre</label>
                <input name="soustitre" type="text" class="form-control" id="addSmallerInputName"
                    aria-describedby="addSmallerInputNameHelp">
            </div>
            <div class="mb-3">
                <label for="addTreeInputLatin" class="form-label">Auteur</label>
                <input name="auteur" type="text" class="form-control" id="addTreeInputLatin"
                    aria-describedby="addTreeInputLatinHelp">
            </div>
            <div class="mb-3">
                <label for="addTreeInputMax" class="form-label">Source</label>
                <input name="source" type="text" class="form-control" id="addTreeInputMax"
                    aria-describedby="addTreeInputMaxHelp">
            </div>
            <div class="mb-3">
                <label for="addTreeInputMin" class="form-label">Texte</label>
                <textarea name="texte" type="text" class="form-control" id="addTreeInputMin"
                    aria-describedby="addTreeInputMinHelp"></textarea>
            </div>

            <div class="mb-3">
                <label for="addTreeInputUrl" class="form-label">URL</label>
                <input name="url" type="text" class="form-control" id="addTreeInputUrl"
                    aria-describedby="addTreeInputUrlHelp">
            </div>
            <button type="submit" class="btn btn-success">Ajouter</button>
        </form>
    </div>
</section>
<section class="mb-5">
    <div class="w-75 mx-auto">
        <table class="table table-striped table-danger">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Source</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $item)
                    <tr>
                        <th scope="row">{{ $item->id }} </th>
                        <td>{{ $item->titre }} </td>
                        <td>{{ $item->source }} </td>
                        <td>{{ $item->auteur }} </td>
                        <td>
                            <div class="d-flex justify-content-center text-center mx-3 mb-5">
                                <form action="/delete/{{ $item->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger mx-2">Supprimer</button>
                                </form>
                                <button class="btn btn-primary">
                                    @csrf
                                    <a class="text-decoration-none text-white"
                                        href="/edit/{{ $item->id }} ">Modifier</a>
                                </button>

                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</section>
