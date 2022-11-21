<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('asset')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('asset')}}/css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2" >
            <a href="{{route('home')}}" class="btn btn-warning mt-5">Add Blog</a>
            <div class="card mt-5">
                <div class="card-header">
                    <h3>Manage Blog</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Sl</th>
                            <th>Blog Title</th>
                            <th>Blog Category</th>
                            <th>Author Name</th>
                            <th>Description</th>
                        </tr>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td>{{ $blog->blog_title }}</td>
                            <td>{{ $blog->blog_category }}</td>
                            <td>{{ $blog->author_name }}</td>
                            <td>{{ $blog->description }}</td>
                        </tr>

                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('asset')}}/js/bootstrap.bundle.js"></script>
</body>
</html>
