<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Sign up
        </h2>
    </x-slot>
    <div class="container" style="margin-top: 4rem">
        <form action="{{route('schools.store')}}" method="post">
            @csrf

            <input type="hidden" name="competition_id" value="{{$competition->id}}">

            <div class="mb-3">
                <label for="name" class="form-label">School Name</label>
                <input type="text" class="form-control" name="name" placeholder="Harvard">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="harvard@info.com">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-app-layout>
