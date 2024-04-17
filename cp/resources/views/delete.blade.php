<form action="{{ route('delete.post') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input type="text" name="id" class="form-control" id="id" placeholder="ID">
    </div>
    <input type="submit" value="delete">
</form