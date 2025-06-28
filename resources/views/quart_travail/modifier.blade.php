<x-guest-layout>
    <h1 class="bg-gray-400">Modifier le quart du <strong>{{$quart->debut_quart}}</strong> - <strong>{{$quart->fin_quart}}</strong></h1>

    <form action="{{route("quart_travails.update",$quart)}}" method="post" class="bg-gray-300">
        @csrf
        @method("PUT")
        <div>
            <label for="debut_quart">Début du quart</label>
            <input name="debut_quart" id="debut_quart" type="datetime-local" required>
        </div>

        <div>
            <label for="fin_quart">Fin du quart</label>
            <input name="fin_quart" id="fin_quart" type="datetime-local" required>
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
