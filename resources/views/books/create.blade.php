<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Books New</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="height: 100vh">
    <div class="d-flex justify-content-center align-items-center" style="height: 100%; padding-top: 56px;">
        <div class="card w-50">
            <div class="card-body">
                <h2 class="card-title">Create Books New</h2>
                <form action="/books/store" method="POST">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger">
                                {{ $errors->first() }}
                        </div>
                    @endif

                    <a type="button" class="btn btn-primary" href="/books">Trang chủ</a>

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                            value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author"
                            value="{{ old('author') }}">
                        @error('author')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="genre" class="form-label">Genre</label>
                        <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre" name="genre"
                            value="{{ old('genre') }}">
                        @error('genre')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" onclick="return confirm('Bạn có đồng ý tạo không?')"
                        class="btn btn-primary">Tạo mới</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+H6fG9X1Y8dE0LHeq6OW/LeJ/pc35" crossorigin="anonymous">
    </script>
</body>

</html>
