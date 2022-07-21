@extends("layout")
@section("title","Add Class")
@section("content-header")
    <h1>Create a Class
        <a href="{{url("/class/list")}}" class="btn btn-outline-info float-right">
            Back to list
        </a>
    </h1>
@endsection
@section("main")
<div>
    <form role="form" method="post"action="{{"/class/create"}}">
        @csrf
        @method("post")
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input type="text" name="cid" class="form-control" id="exampleInputEmail1" placeholder="Enter ID">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Room</label>
                <input type="text" name="room" class="form-control" id="exampleInputPassword1" placeholder="Enter Room">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
