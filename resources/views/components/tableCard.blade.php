<tr>
    <th scope="row">{{ $index }}</th>
    <td scope="col">{{ $announce->name }}</td>
    <td scope="col">{{ $announce->category->name }}</td>
    <td scope="col">{{ $announce->price }}€</td>
    <td scope="col">{{ $announce->created_at }}</td>
    <td scope="col">
        @if ($announce->is_accepted == true)
            Approvato
        @elseif ($announce->is_accepted == false)
            Rifiutato
        @elseif ($announce->is_accepted == null)
            In attesa
        @endif
    </td>
    <td scope="col" class="text-center"><a href="{{ route('announce_detail', $announce->id) }}"
            class="btn btn-ann">Dettagli</a></td>
    @if ($announce->user_id == Auth::id() && Auth::check())
        <td scope="col" class="text-center"><a href="{{ route('edit_announce', compact('announce')) }}"
                class="btn btn-ann px-1">Modifica</a></td>
        <td scope="col" class="text-center">@livewire('delete-announce', compact('announce'))</td>
    @endif
    </td>
</tr>
