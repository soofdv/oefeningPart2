<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Sign up for
        </h2>
    </x-slot>

    <div class="container" style="margin-top: 4rem">
        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    @foreach($competitions as $competition)
                        <h3>{{$competition->name}}</h3>
                        <p>{{$competition->description}}</p>
                        <p>{{$competition->date}}</p>
                    @endforeach
                        <a class="btn btn-primary" href="{{route('schools.createFromCompetition' , $competition->id)}}">Sign us up!!</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

