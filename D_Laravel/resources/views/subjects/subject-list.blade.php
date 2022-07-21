@extends("layout")
@section("title","Subject List")
@section("content-header")
    <h1>Students List
        <a href="{{url("/subject/create")}}" class="btn btn-outline-info float-right">
            Create Subject
        </a>
    </h1>
@endsection
@section("main")
    <div class="card">
        <div class="card-header">
            <form method="get" action="{{url("/subject/list")}}">
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 200px">
                        <input type="text" name="name" value="{{app("request")->input("name")}}" class="form-control float-right" placeholder="Search Name">
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
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($subject as $item)
                    <tr>
                        <td>{{$item->sbid}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            {!! $subject->appends(app("request")->input())->links() !!}
        </div>
        <!-- /.card-body -->
    </div>
@endsection
