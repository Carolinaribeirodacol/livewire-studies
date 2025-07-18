<x-layouts.main-layout>
    <div class="display-6 text-center">Livewire</div>

    <hr>

    <livewire:counter />

    <hr>

    <p>Inline component</p>

    @php
        $php_value = 'valor php_value';
    @endphp

    <livewire:inline-component value="teste com variável value" :php_value="php_value"/>
</x-layouts.main-layout>
