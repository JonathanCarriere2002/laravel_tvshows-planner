<!--@author Jonathan Carrière-->
<x-app-layout>
    <h1 class="text-center mt-4">Ajouter un Personnage</h1>
    <p class="text-center custom-font-size2 italic text-danger">* Veuillez remplir les champs requis</p>
    <form method="post" enctype="multipart/form-data" action="{{route('personnages.store')}}">
        @csrf
        <div class="row mt-3">
            <label for="nom" class="form-label">Nom<sup class="text-danger">*</sup></label>
            <input id="nom" name="nom" class="form-control" type="text" minlength="2" maxlength="50" required>
            @error('nom')
                <div class="text-danger text-bold mt-1">* {{$message}}</div>
            @enderror
        </div>
        <div class="row mt-3">
            <label for="image" class="form-label">Image<sup class="text-danger">*</sup></label>
            <input id="image" name="image" class="form-control" type="file" accept="image/png, image/jpg, image/jpeg" required>
            @error('image')
                <div class="text-danger text-bold mt-1">* {{$message}}</div>
            @enderror
        </div>
        <div class="row mt-3">
            <label for="description" class="form-label">Description<sup class="text-danger">*</sup></label>
            <textarea id="description" name="description" class="form-control" type="text" minlength="10" maxlength="500" rows="3" cols="50" required></textarea>
            @error('description')
                <div class="text-danger text-bold mt-1">* {{$message}}</div>
            @enderror
        </div>
        <div class="row mt-3">
            <label for="anime_id" class="form-label">Anime<sup class="text-danger">*</sup></label>
            <select class="form-select" id="anime_id" name="anime_id" required>
                @foreach($animes as $anime)
                    <option value="{{$anime->id}}">{{$anime->titre}}</option>
                @endforeach
            </select>
            @error('anime_id')
                <div class="text-danger text-bold mt-1">* {{$message}}</div>
            @enderror
        </div>
        <div class="row mt-3">
            <label for="doubleurs_id" class="form-label">Doubleur<sup class="text-danger">*</sup></label>
            <select class="form-select" id="doubleurs_id" name="doubleurs_id" required>
                @foreach($doubleurs as $doubleur)
                    <option value="{{$doubleur->id}}">{{$doubleur->nom}}, {{$doubleur->prenom}}</option>
                @endforeach
            </select>
            @error('doubleurs_id')
                <div class="text-danger text-bold mt-1">* {{$message}}</div>
            @enderror
        </div>
        <div class="row mt-3">
            <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
        </div>
    </form>
</x-app-layout>
