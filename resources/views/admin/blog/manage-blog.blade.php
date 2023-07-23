@extends('admin.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class="mb-0 text-uppercase">All Blog</h6>
                        {{ session('message') }}
                        <hr/>
                        <table class="table table-bordered table-hover table-striped text-center">
                            <tr>
                                <th>sl</th>
                                <th>Blog Title</th>
                                <th>Slug</th>
                                <th>Category Name</th>
                                <th>Author Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>

                            @php $i=1 @endphp
                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $blog->blog_title }}</td>
                                <td>{{ $blog->slug }}</td>

{{--                                for database relation work process Eloquent ORM--}}
                                <td>{{ $blog->category->category_name }}</td>
{{--                                ekhane category-> and author-> hocche function name--}}
                                <td>{{ $blog->author->author_name }}</td>
{{--                                for database relation work process Eloquent ORM--}}



                                <td>{{ $blog->description }}</td>
                                <td>
                                    <img src="{{ asset($blog->image) }}" style="height: 50px; width: 50px" class="img-fluid" alt="img">
                                </td>
                                <td class="btn-group">
                                    <a href="{{ route('blog.edit',['id'=>$blog->id]) }}" class="btn btn-primary btn-sm mx-1">Edit</a>

                                    <form action="{{ route('blog.delete') }}" method="post" onclick="return confirm('Do you really want to delete this !!')">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $blog->id }}">
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
