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
            <a href="{{route('manage.blog')}}" class="btn btn-warning mt-5">Manage Blog</a>
            <div class="card mt-5">
                <div class="card-header">
                    <h3>Add Form</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('new.blog')}}" method="post" class="form-control">
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Blog Title</label>
                            <input type="text" name="blog_title" class="form-control" id="" placeholder="blog_title">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Blog Category</label>
                            <input type="text" name="blog_category" class="form-control" id="" placeholder="blog_category">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Author Name</label>
                            <input type="text" name="author_name" class="form-control" id="" placeholder="author_name">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Description</label>
                            <textarea type="text" name="description" class="form-control" id="" placeholder="description"></textarea>
                        </div>

                        <div class="mb-3">
                            <input type="submit" value="Submit" class="form-control btn btn-danger">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('asset')}}/js/bootstrap.bundle.js"></script>
</body>
</html>
