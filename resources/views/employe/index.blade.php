<x-guest-layout>
    <h1>Tous les employés</h1>
    <a class="bg-green-500" href="{{route("employes.create")}}">Ajouter un compte</a>
    @if(session("succes"))
        <p class="bg-green-200 text-green-700">{{session('succes')}}</p>
    @endif
    @foreach($employes as $employe)
        <x-employe.carte :employe="$employe"></x-employe.carte>
    @endforeach
</x-guest-layout>
