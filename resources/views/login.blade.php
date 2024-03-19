<x-layout>
    <h1>LOG IN</h1>
    <form action="/login" method="POST">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="text" name="email">
            @error('email')
            <p> {{$message}} </p>
            @enderror
        </div>

        <div>
            <label for="password">Email</label>
            <input type="text" name="password">
            @error('password')
            <p> {{$message}} </p>
            @enderror
        </div>

        <button type="submit"> Log in </button>

    </form>
</x-layout>




