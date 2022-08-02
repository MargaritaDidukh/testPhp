<form method="post" >
    @csrf @method('DELETE')
    <div class="form-group">
        <label for="numberId">Password</label>
        <input type="number" class="form-control" id="numberId" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
