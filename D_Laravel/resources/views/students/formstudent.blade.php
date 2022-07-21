@extends("layout")
@section("title","Add Student")
@section("content-header")
    <h1>Create a student
        <a href="{{url("/student/list")}}" class="btn btn-outline-info float-right">
            Back to list
        </a>
    </h1>
@endsection
@section("main")
<div>
    <form role="form" method="post"action="{{"/student/create"}}">
        @csrf
        @method("post")
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input type="text" name="sid" class="form-control" id="exampleInputEmail1" placeholder="Enter ID">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Birthday</label>
                <input type="date" name="birthday" class="form-control" id="exampleInputPassword1" placeholder="Enter Birthday">
            </div>
            <div class="form-group">
                <label>Class</label>
                <select name="cid" class="form-control">
                    @foreach($classesList as $item)
                        <option value="{{$item->cid}}">
                            {{$item->name}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
