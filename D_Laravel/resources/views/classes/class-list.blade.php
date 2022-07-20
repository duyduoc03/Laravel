@extends("layout")
@section("main")
    <h1>Classes List</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Responsive Hover Table</h3>

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
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
            {!! $classes->links() !!}
        </div>
        <!-- /.card-body -->
    </div>
@endsection