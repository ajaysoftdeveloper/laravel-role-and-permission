@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Posts Management</h3></div>
                    <div class="panel-heading">Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</div>
                        <div class="panel-body">                           
                             <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Body</th>                  
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->body }}</td>                   
                    <td>
                    @can('editPost')
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info pull-left">Edit</a>
                    @endcan

                    @can('deletePost')
                    {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                    @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

  
                        </div>
                    </div>
                    <div class="text-center">
                        {!! $posts->render() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection