<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="asos">
    <form action="{{ route('projects.store') }}" method="post">
    @csrf <!-- CSRF token -->

    <div class="form-outline mb-4">
        <input type="text" id="form2Example11" class="form-control" placeholder="Loyiha nomini kiriting" name="project_name">
        <label class="form-label" for="form2Example11">Loyiha nomi</label>
    </div>

    <div class="form-outline mb-4">
        <input type="text" id="form2Example22" class="form-control" placeholder="Loyiha haqida kiriting" name="project_about">
        <label class="form-label" for="form2Example22">Loyiha haqida kiriting</label>
    </div>

    <div class="text-center pt-1 mb-5 pb-1">
        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Loyiha yaratish</button>
    </div>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

