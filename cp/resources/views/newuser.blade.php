<form action="{{ route('save') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">id</label>
        <input type="text" name="id" class="form-control" id="id" placeholder="id">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="password">
    </div>
    <input type="submit" value="Submit">
</form>