<div class="bg-gray-300 mb-3">
    <h1>{{$employe->prenom}} {{$employe->nom}}</h1>
    <p>Numéro d'employé: {{$employe->numero_employe}}</p>
    <a href="{{route("employes.edit",$employe)}}">Modifier</a>
    <form action="{{route("employes.destroy",$employe)}}" method="post">
        @csrf
        @method("DELETE")
        <button type="submit">Supprimer</button>
    </form>
</div>
