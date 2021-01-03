

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    {{--{{ __('You are logged in!') }}--}}

    @if(count($tasks) <= 0)
        you don't have any task yet! You can <a href="">Create Task</a>
    @else

            <br>
            <div class="row">
                @foreach($tasks as $task)
                    <div class="col-md-4">
                        <div class="card">

                            <div class="card-body">
                                <h5 class="card-title">{{$task->name}}</h5>
                                <p class="card-text">{{$task->description}}</p>
                                <span class="badge-light">Ends At: {{$task->end_time}}</span>

                                <div class="button" style="margin-top:10px">
                                    <a class="btn-sm btn-warning" href="{{route('task.edit', ['id' => $task->id])}}">Edit</a>
                                    <a class="btn-sm btn-danger" href="{{route('task.delete', ['id' => $task->id])}}">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    @endif

