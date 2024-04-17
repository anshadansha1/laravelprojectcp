<form action="{{ route('Search.post') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="id" class="form-label">ID</label>
        <input type="text" name="id" class="form-control" id="id" placeholder="ID">
    </div>
    <input type="submit" value="search">
</form>
@if(isset($sample))
    <div>
        <h1>Record Found</h1>
        <p>ID: {{ $sample->id }}</p>
        <p>Name: {{ $sample->name }}</p>
        <p>Email: {{ $sample->email }}</p>
    </div>
@else
    <p>No record found</p>
@endif