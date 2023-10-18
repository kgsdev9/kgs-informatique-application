<div class="flex flex-row flex-grow mb-4">
    <div class="py-3 flex-1">
        <h3 class="text-lg">Entrées </h3>

        <form wire:submit.prevent="save">


        <textarea wire:model="markdown" class="border h-32 w-full p-2 h-full">

        </textarea>
        <button type="submit">ENVOYER</button>
    </form>

    </div>
    <div class="p-3 flex-1">
        <h3 class="text-lg">Sortie</h3>
        <div class="border h-32 w-full p-2 h-full">
            @markdom($markdown)
        </div>
    </div>
</div>
