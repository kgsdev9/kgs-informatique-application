<div>

    <form wire:submit.prevent="createArticle">

        <input type="text" wire:model="title">
        <div>@error('title') {{ $message }} @enderror</div>


        <textarea  id="default" wire:model="description"></textarea>

        <div>@error('description') {{ $message }} @enderror</div>
        {{-- <input type="file" wire:model="image"> --}}
        <div>@error('image') {{ $message }} @enderror</div>

        <div wire:ignore>
        <select wire:model="tag_id[]">
            @foreach ($allTags as $value)
                <option value="{{$value->id}}">{{$value->name}}</option>
            @endforeach
        </select>
         </div>
        <button type="submit">Créer un post </button>
    </form>


</div>
