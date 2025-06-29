<x-guest-layout>
    <h1 class="bg-gray-400">Modifier les vacances du <strong>{{$vacance->debut_vacance}}</strong> - <strong>{{$vacance->fin_vacance}}</strong></h1>

    <form action="{{route("vacances.update",$vacance)}}" method="post" class="bg-gray-300">
        @csrf
        @method("PUT")
        <div>
            <label for="debut_vacance">Début des vacance</label>
            <input name="debut_vacance" id="debut_vacance" type="date" required value="{{$vacance->debut_vacance ??old("debut_vacance")}}">
            @error('debut_vacance')
                <span class="bg-red-300 text-red-700">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="fin_vacance">Fin des vacances</label>
            <input name="fin_vacance" id="fin_vacance" type="date" required value="{{$vacance->fin_vacance ?? old("fin_vacance")}}">
            @error('fin_vacance')
                <span class="bg-red-300 text-red-700">{{$message}}</span>
            @enderror
        </div>

        <div>
            <label for="id_employe">L'employé</label>
            <select name="id_employe" id="id_employe" required>
                <option value="{{null}}">...</option>
                <option value="1">Employé 1</option>
                <option value="2">Employé 2</option>
                <option value="3">Employé 3</option>
            </select>
            @error('id_employe')
                <span class="bg-red-300 text-red-700">{{$message}}</span>
            @enderror
        </div>

        <button type="submit">Modifier</button>
    </form>
</x-guest-layout>
