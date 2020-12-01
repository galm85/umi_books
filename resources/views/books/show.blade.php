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

    <h1>עדכן ספר</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="/update/{{$book->id}}" method="POST" class="form-group text-right " >
                    @csrf
                    <label for="book_name" class="mt-3">שם הספר:</label>
                    <input style="font-size:1.2rem;" id="book_name" class="form-control" type="text" name="book_name" placeholder="שם הספר" value={{$book->book_name}}>

                    <label for="books_number"class="mt-3">מספר הספרים:</label>
                    <input style="font-size:1.2rem;" id="books_number" class="form-control" type="number" name="books_number" placeholder="מספר הספרים" value={{$book->books_number}}>

                    <label for="pages_number"class="mt-3">מספר עמודים:</label>
                    <input style="font-size:1.2rem;" id="pages_number" class="form-control" type="number" name="pages_number" placeholder="מספר עמודים" value={{$book->pages_number}}>

                    <label for="books_printed"class="mt-3">ספרים שהודפסו:</label>
                    <input style="font-size:1.2rem;" id="books_printed" class="form-control" type="number" name="books_printed" placeholder="ספרים שהודפסו" value={{$book->books_printed}}>

                    <label for="spine"class="mt-3">שדרה:</label>
                    <input style="font-size:1.2rem;" id="spine" class="form-control" type="number" name="spine" placeholder="שדרה" value={{$book->spine}}>
                    <div class="text-center">
                    <input  type="submit" name="submit" value="הכנס" class="btn btn-outline-primary btn-lg m-5 text-center">
                    <a href="/" class="btn btn-outline-danger btn-lg m-5">ביטול</a>
                </div>
                </form>
            </div>

        </div>
    </div>


</body>
</html>
