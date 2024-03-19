<div>
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->
    <form action="/register" method="post">
        @csrf
        <h1>Register</h1>
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
            @error('name')
                <p>{{$message}} </p>
            @enderror
        </div>

        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>

        <div>
            <label for="">Password</label>
            <input type="text" name="password">
        </div>

        <div>
            <label for="">Birthday</label>
            <input type="date" name="birthday">
        </div>

        <button type="submit">Send</button>
    </form>
</div>
