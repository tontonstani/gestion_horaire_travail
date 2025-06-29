<x-guest-layout>
    <h1 class="bg-gray-300">Modifier {{$employe->prenom}} {{$employe->nom}}</h1>
    <form action="{{route("employes.update",$employe)}}" method="post" class="bg-gray-300">
        @csrf
        @method("PUT")
        <div>
            <label for="prenom">Prénom</label>
            <input name="prenom" id="prenom" type="text" required value="{{$employe->prenom}}">
            @error("prenom")
            <span class="bg-red-200 text-red-700">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="nom">Nom de famille</label>
            <input name="nom" id="nom" type="text" required value="{{$employe->nom}}">
            @error("nom")
            <span class="bg-red-200 text-red-700">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="email">Courriel</label>
            <input id="email" name="email" type="email" required value="{{$employe->email}}">
            @error("email")
            <span class="bg-red-200 text-red-700">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="telephone">Téléphone</label>
            <input id="telephone" name="telephone" type="tel" required value="{{$employe->telephone}}">
            @error("telephone")
            <span class="bg-red-200 text-red-700">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="numero_employe">Numéro d'employé</label>
            <input type="number" name="numero_employe" id="numero_employe" readonly value="{{$employe->numero_employe}}">
        </div>

        <div>
            <label for="travail">Travail</label>
            <select name="travail" id="travail" required>
                <option value="{{null}}">...</option>
                <option value="Concierge">Concierge</option>
                <option value="Mécanicien">Mécanicien</option>
                <option value="Médecin">Médecin</option>
                <option value="Gérant">Gérant</option>
            </select>
            @error("travail")
            <span class="bg-red-200 text-red-700">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="departement">Département</label>
            <input name="departement" id="departement" type="text" required value="{{$employe->departement}}">
            @error("departement")
            <span class="bg-red-200 text-red-700">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="departement_surveillance">Surveillance du département</label>
            <input type="text" name="departement_surveillance" id="departement_surveillance" required value="{{$employe->departement_surveillance}}">
            @error("departement_surveillance")
            <span class="bg-red-200 text-red-700">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="password">Mot de passe</label>
            <input name="password" id="password" type="password" required value="{{$employe->password}}">
            @error("password")
            <span class="bg-red-200 text-red-700">{{$message}}</span>
            @enderror
        </div>

        <button type="submit">Modifier</button>
    </form>
</x-guest-layout>
