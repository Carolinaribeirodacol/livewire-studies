<div class="d-flex justify-content-around gap-5 mb-3">
    <button wire:click="decrement" class="btn btn-danger">Subtrair</button>
    <h1>Count: {{ $count }}</h1>
    <button wire:click="increment" class="btn btn-success">Somar</button>
</div>
