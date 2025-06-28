<x-guest-layout>
    <h1>Tous les employés</h1>
    <a class="bg-green-500" href="{{route("employes.create")}}">Ajouter un compte</a>
    @foreach($employes as $employe)
        <x-employe.carte :employe="$employe"></x-employe.carte>
    @endforeach
</x-guest-layout>
