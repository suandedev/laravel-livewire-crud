<div>
    {{$body}}
    <textarea
        wire:model="body"
        class="shadow appearance-none border rounded w-full p-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow"
         id="" rows="3"></textarea>
    <div class="flex justify-end">
        <button wire:click="createPost" class="bg-indigo-500 px-4 py-3">
            post
        </button>
    </div>
</div>
