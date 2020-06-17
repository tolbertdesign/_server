<div>
    <input wire:model="name" type="text">
    <input wire:model.lazy="name" type="text">
    <input wire:model="loud" type="checkbox">
    <select wire:model="greeting">
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>
    </select>

    <select wire:model="languages" multiple>
        <option>JavaScript</option>
        <option>PHP</option>
        <option>Java</option>
        <option>Swift</option>
        <option>Go</option>
        <option>Ruby</option>
        <option>Python</option>
    </select>
    {{ $greeting }} {{ $name }}@if ($loud) ! @endif
    <br>
    {{ implode(', ', $languages) }}
    <button wire:mouseenter="resetName('Bingo Button')">Reset Name</button>

    <form action="" wire:submit.prevent="resetName('Bingo Form')">
        <button>Reset Name</button>
    </form>
</div>
