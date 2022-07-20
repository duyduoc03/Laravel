@extends("layout")
@section("main")
    <h1>Students List</h1>
    <div class="card">
        <div class="card-header">
            <form method="get" action="{{url("/student/list")}}">
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <select name="classID" class="form-control float-right">
                            @foreach($classesList as $item)
                                <option value="{{$item->cid}}">
                                    {{$item->name}}
                                </option>
                            @endforeach
                        </select>
                        <input type="text" name="name" class="form-control float-right" placeholder="Search">

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
            {!! $students->links() !!}
        </div>
        <!-- /.card-body -->
    </div>
@endsection
