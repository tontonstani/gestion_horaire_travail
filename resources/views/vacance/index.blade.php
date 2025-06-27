<x-guest-layout>
    <h1 class="bg-gray-400">Tous les vacances</h1>
    <a href="{{route("vacances.create")}}" class="bg-green-600">Ajouter des vacances</a>
    <table class="bg-white">
        <thead>
        <tr>
            <th>Id</th>
            <th>Début</th>
            <th>Fin</th>
            <th>Employé</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($vacances as $vacance)
            <tr>
                <td>{{$vacance->id}}</td>
                <td>{{$vacance->debut_vacance}}</td>
                <td>{{$vacance->fin_vacance}}</td>
                <td>{{$vacance->id_employe}}</td>
                <td>
                    <a href="{{route("vacances.edit",$vacance)}}">Modifier</a>
                    <a href="#">Supprimer</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-guest-layout>
