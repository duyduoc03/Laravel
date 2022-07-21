@extends("layout")
@section("title","Add Score")
@section("content-header")
    <h1>Create a Score
        <a href="{{url("/score/list")}}" class="btn btn-outline-info float-right">
            Back to list
        </a>
    </h1>
@endsection
@section("main")
<div>
    <form role="form" method="post"action="{{"/score/create"}}">
        @csrf
        @method("post")
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input type="text" name="scid" class="form-control" id="exampleInputEmail1" placeholder="Enter ID">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mark</label>
                <input type="text" name="mark" class="form-control" id="exampleInputEmail1" placeholder="Enter Mark">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Result</label>
                <input type="text" name="result" class="form-control" id="exampleInputPassword1" placeholder="Enter Result">
            </div>
            <div class="form-group">
                <label>Student</label>
                <select name="sid" class="form-control">
                    @foreach($studentList as $item)
                        <option value="{{$item->sid}}">
                            {{$item->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Subject</label>
                <select name="sbid" class="form-control">
                    @foreach($subjectList as $item)
                        <option value="{{$item->sbid}}">
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
