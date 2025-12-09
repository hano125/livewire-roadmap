<div>
    <input type="text" wire:model ="todo">
    <button wire:click="add">add</button>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
