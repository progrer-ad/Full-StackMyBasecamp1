<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Projects</title>
</head>
<body>
    <div class="card--container">
        <h3 class="main--title">PROGRESS CHANCE GROUP</h3>
        <div class="size1">
            <div class="card--wrapper">
                <div class="maxsulottable">
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>
