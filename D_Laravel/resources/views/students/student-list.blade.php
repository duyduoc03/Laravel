@extends("layout")
@section("title","Student List")
@section("content-header")
    <h1>Students List
        <a href="{{url("/student/create")}}" class="btn btn-outline-info float-right">
            Create Student
        </a>
    </h1>
@endsection
@section("main")
    <div class="card">
        <div class="card-header">
            <form method="get" action="{{url("/student/list")}}">
                <div class="card-tools">
                    <div class="input-group input-group-sm">
                        <select name="classID" class="form-control float-right">
                            <option value="">Select Class...</option>
                            @foreach($classesList as $item)
                                <option @if(app("request")->input("classID") == $item->cid) selected @endif value="{{$item->cid}}">
                                    {{$item->name}}
                                </option>
                            @endforeach
                        </select>
                        <input type="text" name="name" value="{{app("request")->input("name")}}" class="form-control float-right" placeholder="Search Name">
                        <input type="date" name="fdate" value="{{app("request")->input("fdate")}}" class="form-control float-right" placeholder="First Date">
                        <input type="date" name="ldate" value="{{app("request")->input("ldate")}}" class="form-control float-right" placeholder="Last Date">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>BirthDay</th>
                    <th>Class</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $item)
                    <tr>
                        <td>{{$item->sid}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->birthday}}</td>
                        <td>{{$item->classes->name}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            {!! $students->appends(app("request")->input())->links() !!}
        </div>
        <!-- /.card-body -->
    </div>
@endsection
