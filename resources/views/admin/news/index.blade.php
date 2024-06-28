@extends('layouts.adminapp')

@section('content')
    <div class="card mt-5">
        <h2 class="card-header">News</h2>
        <div class="card-body">

            @session('success')
            <div class="alert alert-success" role="alert"> </div>
            @endsession

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-success btn-sm" href="{{route('news.create')}}"> <i class="fa fa-plus"></i> Create News</a>
            </div>

            <table class="table table-bordered table-striped mt-4">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th width="250px">Action</th>
                </tr>
                </thead>

                <tbody>
                @forelse ($news as $new)
                    <tr>
                        <td>{{$new->id}}</td>
                        <td><img src="/images/produts/{{ $new->image }}" width="100px"></td>
                        <td>{{ $new->name }}</td>
                        <td>{{ $new->title }}</td>
                        <td>{{ $new->description }}</td>
                        <td>{{ $new->date }}</td>
                        <td>
                            <form action="" method="POST">

                                <a class="btn btn-info btn-sm" href=""><i class="fa-solid fa-list"></i> Show</a>

                                <a class="btn btn-primary btn-sm" href=""><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                @endforelse
                </tbody>

            </table>

{{--            {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}--}}

        </div>
    </div>
@endsection
