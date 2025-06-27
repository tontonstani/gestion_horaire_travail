<x-guest-layout>
    <h1 class="bg-gray-400">Tous les quarts de travails</h1>
    <a href="{{route("quart_travails.create")}}" class="bg-green-600">Ajouter un quart</a>
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
        @foreach($quarts as $quart)
            <tr>
                <td>{{$quart->id}}</td>
                <td>{{$quart->debut_quart}}</td>
                <td>{{$quart->fin_quart}}</td>
                <td>{{$quart->id_employe}}</td>
                <td>
                    <a href="{{route("quart_travails.edit",$quart)}}">Modifier</a>
                    <a href="#">Supprimer</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-guest-layout>
