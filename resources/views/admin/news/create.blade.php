@extends('layouts.adminapp')

@section('content')
    <div class="card mt-5">
        <h2 class="card-header">Add New Product</h2>
        <div class="card-body">

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary btn-sm" href="{{ route('news.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
            </div><br>

            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>Name:</strong></label>
                    <input
                        type="text"
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        id="inputName"
                        placeholder="Name">
                    @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="inputImage" class="form-label"><strong>Image:</strong></label>
                    <input
                        type="file"
                        name="image"
                        class="form-control @error('image') is-invalid @enderror"
                        id="inputImage">
                    @error('image')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>Title:</strong></label>
                    <input
                        type="text"
                        name="title"
                        class="form-control @error('title') is-invalid @enderror"
                        id="inputName"
                        placeholder="Title">
                    @error('title')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="inputDetail" class="form-label"><strong>Short Description:</strong></label>
                    <textarea
                        class="form-control @error('description') is-invalid @enderror"
                        style="height:150px"
                        name="description"
                        id="inputDetail"
                        placeholder="Description"></textarea>
                    @error('description')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="inputName" class="form-label"><strong>Date:</strong></label>
                    <input
                        type="text"
                        name="date"
                        class="form-control @error('date') is-invalid @enderror"
                        id="inputName"
                        placeholder="Date">
                    @error('date')
                    <div class="form-text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
            </form>
        </div>
    </div>
@endsection
