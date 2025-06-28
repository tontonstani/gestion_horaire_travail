<x-guest-layout>
    <h1 class="bg-gray-400">Modifier les vacances du <strong>{{$vacance->debut_vacance}}</strong> - <strong>{{$vacance->fin_vacance}}</strong></h1>

    <form action="{{route("vacances.update",$vacance)}}" method="post" class="bg-gray-300">
        @csrf
        @method("PUT")
        <div>
            <label for="debut_vacance">Début des vacance</label>
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

        <button type="submit">Modifier</button>
    </form>
</x-guest-layout>
