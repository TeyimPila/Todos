@extends('layout')

@section('content')
    <div class="row">
        <div class="col-sm-8 center-block">
            <ul class="list-group">
                @forelse($todos as $todo)
                    <div class="row">
                        <div class="list-group-item">
                            <a class="col-sm-8 " href="{{route('todos.show', ['id'=>$todo->id])}}">
                                {{$todo->todo}}
                            </a>
                            <span class="btn btn-info btn-sm">i</span>
                            <span class="btn btn-success btn-sm">√</span>
                        </div>
                    </div>

                @empty
                    No todos
                @endforelse
            </ul>
        </div>
        <div class="col-lg-8 details"><h3></h3></div>
    </div>
@endsection