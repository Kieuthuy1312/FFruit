<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm người dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>

</style>

<body>
<form method="POST" action="/roles">
    @csrf
        <div class="container">
                <h2>Form nhập thông tin phân quyền</h2>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" name='name' class="form-control" value="{{ old('name') }}">
                        @error('name')
                            <p>{{ $message }}</p>
                          @enderror
                        <!-- <div class="invalid-feedback">
                            Trường không được để trống
                        </div> -->
                    </div>
                    <div class="mb-3">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" name="cancel" class="btn btn-secondary">Cancel</button>
                    </div>
            </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- <script>
        $(function() {
            $("#a").click(function(e) {
                let hasError = false
                const name = $("#name");
                const birthday = $("input[name=birthday]");
                const created_at = $("input[name=created_at]");
                const gender = $("input[type=radio][name=gender]");
                if (name.val().trim().length == 0) {
                    name.addClass('is-invalid');
                    hasError =true;
                }
                if (birthday.val().trim().length == 0) {
                    birthday.addClass('is-invalid');
                    hasError =true;
                }
                if (created_at.val().trim().length == 0) {
                    created_at.addClass('is-invalid');
                    hasError =true;
                }
                if($('input[type=radio][name=gender]:checked').length == 0) {
                    gender.addClass('is-invalid')
                    $("#b").removeClass('invalid-feedback d-none');
                    hasError =true;
                }
                if(!hasError){
                    $(this).unbind(); //dùng để loại bỏ event submit
                    $(this).submit(); //tiến hành submit lại 1 lần nữa
                }else{
                    e.preventDefault();
                }
            })
        })
    </script> -->
</body>

</html>