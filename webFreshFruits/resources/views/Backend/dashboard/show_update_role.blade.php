<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form method="POST" action="/roles/{{ $role->id }}/update">
        @csrf
        <div class="container">
            <h2>Form nhập thông tin phân quyền</h2>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name='name' class="form-control"  value="{{ $role['name'] }}"/> <!--old là hàm để giữ lại value vừa nhập khi xảy ra lỗi-->
                     @error('name')
                    <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" name="cancel" class="btn btn-secondary">Cancel</button>
                </div>
</div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>