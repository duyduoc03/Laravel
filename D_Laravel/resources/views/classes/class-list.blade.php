@extends("layout")
@section("title","Classes List")
@section("content-header")
    <h1>Classes List
        <a href="{{url("/class/create")}}" class="btn btn-outline-info float-right">
            Create Class
        </a>
    </h1>
@endsection
@section("main")
    <div class="card">
        <div class="card-header">
            <form method="get" action="{{url("/class/list")}}">
                <div class="card-tools">
                    <div class="input-group input-group-sm">
                        <input type="text" name="name" value="{{app("request")->input("name")}}" class="form-control float-right" placeholder="Search Name">
                        <input type="text" name="room" value="{{app("request")->input("room")}}" class="form-control float-right" placeholder="Search Room">
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
                    <th>Room</th>
                    <th>Students Count</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($classes as $item)
                    <tr>
                        <td>{{$item->cid}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->room}}</td>
                        <td>{{$item->students_count}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            {!! $classes->appends(app("request")->input())->links() !!}
        </div>
        <!-- /.card-body -->
    </div>
@endsection
