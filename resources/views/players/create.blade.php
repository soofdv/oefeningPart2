<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add a Player
        </h2>
    </x-slot>
    <div class="container" style="margin-top: 4rem">
        <form action="{{route('players.store')}}" method="post">
            @csrf

            <input type="hidden" name="school_id" value="{{$school->id}}">

            <div class="mb-3">
                <label for="name" class="form-label">Player Name</label>
                <input type="text" class="form-control" name="name" placeholder="John Doe">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-app-layout>
