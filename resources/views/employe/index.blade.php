<x-guest-layout>
    <h1>Tous les employés</h1>
    @foreach($employes as $employe)
        <x-employe.carte :employe="$employe"></x-employe.carte>
    @endforeach
</x-guest-layout>
