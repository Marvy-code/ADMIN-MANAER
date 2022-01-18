<div>
    <x-loading />

    @if ($isBtnAddClicked)
        @include('livewire.personnels.create')
    @else

        @include('livewire.personnels.liste')
    @endif
</div>
