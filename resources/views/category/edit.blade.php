@extends('layouts.app')

@section("content")

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Edit Category
                    </div>

                    <div class="card-body">

                        <form action="{{ route("category.update",$category->id) }}" method="post" class="mb-4">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-4">
                                    <div class="">
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title',$category->title) }}">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="">
                                        <button class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                            @error('title')
                            <p class="invalid-feedback d-block">{{ $message }}</p>
                            @enderror
                        </form>

                        @include("category.list")

                        @if(session("status"))
                            <p class="alert alert-success">{{ session("status") }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
