<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
    <title>Create Skill</title>
</head>
<body>

    <h1 class="text-center mt-5">Create Skill (Admin)</h1>
    <hr>

    <div class="container justify-content-center mt-2 mb-5">

        <form action="{{route('admin.skills.store')}}" method="POST">
            @csrf

            <div class="form-group m-2 p-2">
                <label for="skill_name">Skills Name</label>
                <input type="text" name="technology" placeholder="Technology">
            </div>

            <div class="form-group m-2 p-2">
                <label for="skill_score">Skills Score</label>
                <input type="text" name="score" placeholder="Score">
            </div>


            <button class="btn btn-success" type="submit" value="submit">Add Skill</button>

        </form>

    </div>



</body>
</html>
