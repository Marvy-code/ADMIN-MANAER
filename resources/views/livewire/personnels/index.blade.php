<div wire:ignore.self>
    <x-loading />

    @if($currentPage == PAGECREATEFORM)
        @include('livewire.personnels.create')
    @endif

    @if($currentPage == PAGEEDITFORM)
        @include('livewire.personnels.edit')
    @endif

    @if($currentPage == PAGELISTE)
        @include('livewire.personnels.liste')
    @endif

</div>
