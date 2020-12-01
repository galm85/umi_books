<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ספר חדש</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>

</head>
<body>

    <h1 class="display-4 mt-5 text-center">צור ספר חדש</h1>
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <form action="/store" method="POST" class="form-group">
                    @csrf
                    <input style="font-size:1.2rem;" class="form-control mt-4" type="text" name="book_name" placeholder="שם הספר">
                    <input style="font-size:1.2rem;" class="form-control mt-4" type="number" name="books_number" placeholder="מספר הספרים">
                    <input style="font-size:1.2rem;" class="form-control mt-4" type="number" name="pages_number" placeholder="מספר עמודים">
                    <input style="font-size:1.2rem;" class="form-control mt-4" type="text" name="spine" placeholder="שדרה">
                    <div class="text-center mt-5">

                        <input type="submit" name="submit" value="הכנס" class="btn btn-lg ml-5 btn-outline-primary">
                        <a href="/" class="btn btn-outline-danger btn-lg m-5">ביטול</a>
                    </div>
                </form>
            </div>

        </div>
    </div>


</body>
</html>
