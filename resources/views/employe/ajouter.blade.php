<x-guest-layout>
<h1 class="bg-gray-300">Créer un employé</h1>
    <form action="{{route("employes.store")}}" method="post" class="bg-gray-400">
        @csrf
        <div>
            <label for="prenom">Prénom</label>
            <input name="prenom" id="prenom" type="text" required>
        </div>

        <div>
            <label for="nom">Nom de famille</label>
            <input name="nom" id="nom" type="text" required>
        </div>

        <div>
            <label for="email">Courriel</label>
            <input id="email" name="email" type="email" required>
        </div>

        <div>
            <label for="telephone">Téléphone</label>
            <input id="telephone" name="telephone" type="tel" required>
        </div>

        <div>
            <label for="numero_employe">Numéro d'employé</label>
            <input type="number" name="numero_employe" id="numero_employe" required>
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
        </div>

        <div>
            <label for="departement">Département</label>
            <input name="departement" id="departement" type="text" required>
        </div>

        <div>
            <label for="departement_surveillance">Surveillance du département</label>
            <input type="text" name="departement_surveillance" id="departement_surveillance" required>
        </div>

        <div>
            <label for="password">Mot de passe</label>
            <input name="password" id="password" type="password" required>
        </div>

        <button type="submit">Ajouter</button>
    </form>
</x-guest-layout>
