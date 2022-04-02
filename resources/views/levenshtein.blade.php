<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
<h1>Levenshtein</h1>
<form id="SubmitForm">
    @csrf
    <div class="row g-3 align-items-center">
    <div class="col-auto">
        <label for="first_levenshtein" class="form-label">First string</label>
        <input type="text" class="form-control" id="first_levenshtein" aria-describedby="emailHelp">
    </div>
    <div class="col-auto">
        <label for="second_levenshtein" class="form-label">Second string</label>
        <input type="text" class="form-control" id="second_levenshtein">
    </div>
        <div class="row-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="row-auto">
            <a href="/" class="btn btn-primary">Back to home page</a>
        </div>
    </div>

</form>
</body>
<script type="text/javascript">
    $('#SubmitForm').on('submit',function(e){
        e.preventDefault();

        let first_levenshtein = $('#first_levenshtein').val();
        let second_levenshtein = $('#second_levenshtein').val();

        $.ajax({
            url: "/api/levenshtein/submit",
            type:"POST",
            data:{
                "_token": "{{ csrf_token() }}",
                first_levenshtein:first_levenshtein,
                second_levenshtein:second_levenshtein,
            },
            success:function(response){
                alert(JSON.stringify(response))
            },
        });
    });
</script>
</html>
