@extends("layout")
@section("title","Add Subject")
@section("content-header")
    <h1>Create a Subject
        <a href="{{url("/subject/list")}}" class="btn btn-outline-info float-right">
            Back to list
        </a>
    </h1>
@endsection
@section("main")
<div>
    <form role="form" method="post"action="{{"/subject/create"}}">
        @csrf
        @method("post")
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input type="text" name="sbid" class="form-control" id="exampleInputEmail1" placeholder="Enter ID">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
