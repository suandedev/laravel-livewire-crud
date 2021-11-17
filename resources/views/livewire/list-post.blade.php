<div class="bg-gray-50 px-4">
    @foreach($posts as $post)
        <div class="bg-grey-50 shadow my-2 p-4">
            <div>
                <span>{{$post->user->name}}</span>
                <span>{{$post->created_at}}</span>
                <button wire:click="showUpdateForm({{$post->id}})" class="bg-indigo-400 p3">edit</button>
                <button
                    wire:click="delete({{$post->id}})"
                    class="bg-red-500 px-4 py-3">
                    delete
                </button>
            </div>
            <p>{{$post->body}}</p>
        </div>
        <div>K
            @if($updateStateId  != $post->id)
                <span>{{$post->body}}</span>
            @endif
            @if($updateStateId === $post->id)
                <textarea
                    wire:model="body"
                    class="shadow appearance-none border rounded w-full p-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow"
                    id="" rows="3"></textarea>
                <button
                    wire:click="update({{$post->id}})"
                    class="bg-green-500 px-4 py-3">
                    update
                </button>
            @endif
        </div>
    @endforeach
</div>
