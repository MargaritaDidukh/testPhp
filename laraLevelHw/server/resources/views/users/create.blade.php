@extends('layouts.app')
@section('content')
<form method="post" >
    @csrf @method('put')
    <h3>Add users</h3>
    <div class="form-group">
        <label for="username">username</label>
        <input name="username" type="text" class="form-control"  placeholder="username">
        <label for="email">email</label>
        <input name="email" type="email" class="form-control" placeholder="email@gmail.com">
        <label for="first_name">first name</label>
        <input name="first_name" type="text" class="form-control" placeholder="Anna">
        <label for="last_name">last name</label>
        <input name="last_name" type="text" class="form-control" placeholder="Boyko">
        <label for="mobile">mobile</label>
        <input name="mobile" type="tel" class="form-control" placeholder="+3809469483">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection
