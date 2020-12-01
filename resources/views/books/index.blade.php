<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UMI Books</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
<!-- font awosome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<!--css-->
<link rel="stylesheet" href="css/style.css">

</head>
<body>
    <h1 class="text-center mt-5 display-2">ספרי רכב UMI</h1>

    <div class="row justify-content-center mt-5">
        <div class="col-10">
            <table class="table table-hover table-dark shadow">
                <thead>
                    <tr style="text-align:center;">
                        <th>#</th>
                        <th>שם הספר</th>
                        <th>מספר ספרים</th>
                        <th>מספר עמודים</th>
                        <th><b>מספר עותקים</b></th>
                        <th>סה״כ A3</th>
                        <th>עותקים שהודפסו</th>
                        <th>מספר כריכות להדפסה</th>
                        <th>כריכות שהודפסו</th>
                        <th>שידרה</th>
                        <th>ערוך</th>
                        <th>מחק</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($books as $key=>$book)
                        <tr class="{{$book->copies_number > $book->books_printed ? '':'bg-success'}} text-center">

                            <td>{{$key+1}}</td>

                            @if ($book->books_printed>1 && $book->books_printed < $book->copies_number )
                                <td>{{$book->book_name}} <span class="text-danger" style="font-size:1.5rem;"> * </span></td>
                            @else
                                <td>{{$book->book_name}}</td>

                            @endif

                            <td>{{$book->books_number}}</td>
                            <td>{{$book->pages_number}}</td>
                            <td style="font-size:1.2rem;text-decoration: underline;;"><b>{{$book->copies_number}}</b></td>
                            <td><?=number_format($book->total_pages_to_print);?></td>
                            <td style="font-size:1.2rem;text-decoration: underline;;"><b>{{$book->books_printed}}</b></td>
                            <td>{{$book->covers_number}}</td>
                            <td>{{$book->covers_printed}}</td>
                            <td>{{$book->spine}}</td>
                            <td><a href="/show/{{$book->id}}" class="btn btn-warning"><i class="far fa-edit"></i></a></td>
                            <td>
                            <form action="/delete/{{$book->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"><i class="far fa-trash-alt"></i></button>

                            </form>


                        </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
    </div>


    <div class="row text-center mt-5">
        <div class="col-12">
            <a href="/create" class="btn btn-lg btn-primary">צור ספר חדש</a>
        </div>
    </div>
</body>
</html>
