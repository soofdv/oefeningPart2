<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$school->name}}
        </h2>
        <h3>{{$school->email}}</h3>
    </x-slot>

    <div class="container" style="margin-top: 4rem">
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    {{$school->competition->name}}
                </div>
                <p class="card-text">{{$school->competition->description}}</p>
                <a class="btn btn-primary" href="{{route('players.createFromSchool' , $school->id)}}">Add my player(s)</a>

                <ul style="margin-top: 3rem">
                    <il class="list-group-item active">My players</il>
                    @foreach($players as $player)
                        @if($player->school_id === $school->id)
                            <il class="list-group-item">{{$player->name}}</il>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
