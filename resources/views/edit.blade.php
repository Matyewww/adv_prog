<h1>User Edit ID</h1>
<p>This is where you edit</p>

<div class="row">
    <div class="col-6">
<form action="{{url ('users'), $id }}"method="POST">
@csrf
<div class="form-group">
    <label for="fullname" class="form-label">Fullname</label>
    <input type="text" class="form-control" id="fullname" name="fullname" />
</div>
<div class="form-group">
    <button class="btn btn-primary" type="submit">Submit</button>
</div>
</form>
</div>
</div>

<form action="{{ url('user', $id}}" method="post">
@csrf
@method('Delete')
<div class="form-group">
    <button class="btn btn-primary" type="submit">Delete</button>
</div>
</form>