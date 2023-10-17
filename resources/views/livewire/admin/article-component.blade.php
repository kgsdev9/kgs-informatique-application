<div>

    <form wire:submit.prevent="createArticle">

        <input type="text" wire:model="title">
        <div>@error('title') {{ $message }} @enderror</div>



        <textarea  wire:model="description" id="" cols="30" rows="10"></textarea>
        <div>@error('description') {{ $message }} @enderror</div>
        <input type="file" wire:model="image">
        <div>@error('image') {{ $message }} @enderror</div>


        @if ($image)
        Photo Preview:
        <img src="{{ $image->temporaryUrl() }}">
    @endif

        <div wire:ignore>
        <select wire:model="tag_id">
            @foreach ($allTags as $value)
                <option value="{{$value->id}}">{{$value->name}}</option>
            @endforeach
        </select>
         </div>
        <button type="submit">Créer un post </button>
    </form>


</div>
