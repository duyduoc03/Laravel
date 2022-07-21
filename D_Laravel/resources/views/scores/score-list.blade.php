@extends("layout")
@section("title","Score List")
@section("content-header")
    <h1>Score List
        <a href="{{url("/score/create")}}" class="btn btn-outline-info float-right">
            Create Score
        </a>
    </h1>
@endsection
@section("main")
    <div class="card">
        <div class="card-header">
            <form method="get" action="{{url("/score/list")}}">
                <div class="card-tools">
                    <div class="input-group input-group-sm">
                        <select class="form-control float-right">
                            <option value="">Select Result...</option>
                            @foreach($scores as $item)
                                <option @if(app("request") == $item->scid) selected @endif value="{{$item->result}}">
                                    {{$item->result}}
                                </option>
                            @endforeach
                        </select>
                        <input type="text" name="namesv" value="{{app("request")->input("namesv")}}" class="form-control float-right" placeholder="Search Name Student">
                        <input type="text" name="namesb" value="{{app("request")->input("namesb")}}" class="form-control float-right" placeholder="Search Name Subject">
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
                    <th>Mark</th>
                    <th>Result</th>
                    <th>Name_Student</th>
                    <th>Name_Subject</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($scores as $item)
                    <tr>
                        <td>{{$item->scid}}</td>
                        <td>{{$item->mark}}</td>
                        <td>{{$item->result}}</td>
                        <td>{{$item->students->name}}</td>
                        <td>{{$item->subjects->name}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            {!! $scores->appends(app("request")->input())->links() !!}
        </div>
        <!-- /.card-body -->
    </div>
@endsection
