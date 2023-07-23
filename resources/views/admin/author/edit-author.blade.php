@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">AuthorForm</h6>
                        {{ session('message') }}
                        <hr/>
                        <form action="{{ route('author.update') }}" method="post" class="row g-3" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $author->id }}">
                            <div class="col-12">
                                <label class="form-label">Author Name</label>
                                <input type="text" name="author_name" value="{{ $author->author_name }}" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" name="image" class="form-control">
                                <img src="{{ asset($author->image) }}" class="img-fluid" style="height: 50px; width: 50px" alt="">
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
