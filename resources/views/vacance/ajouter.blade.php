<x-guest-layout>
    <h1 class="bg-gray-400">Ajouter des vacances</h1>

    <form action="{{route("vacances.store")}}" method="post" class="bg-gray-300">
        @csrf
        <div>
            <label for="debut_vacance">Début des vacances</label>
            <input name="debut_vacance" id="debut_vacance" type="date" required>
        </div>

        <div>
            <label for="fin_vacance">Fin des vacances</label>
            <input name="fin_vacance" id="fin_vacance" type="date" required>
        </div>

        <div>
            <label for="id_employe">L'employé</label>
            <select name="id_employe" id="id_employe" required>
                <option value="{{null}}">...</option>
                <option value="1">Employé 1</option>
                <option value="2">Employé 2</option>
                <option value="3">Employé 3</option>
            </select>
        </div>

        <button type="submit">Ajouter</button>
    </form>
</x-guest-layout>
