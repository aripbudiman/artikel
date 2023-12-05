<div class="p-5 grid grid-cols-2 gap-5">
    @foreach ($articles as $item)
    <livewire:card :article="$item" />
    @endforeach
</div>
