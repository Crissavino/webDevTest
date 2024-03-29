<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
    <title>Remote</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card col-4">
            <div class="card-header d-block">
                Remote Channel Controller
            </div>
            <div class="card-body container">
                <div class="d-block m-2">
                    <form action="" method="post">
                        <button type="submit" class="btn btn-primary btn-block ch1 move" id="ch1">WD_CH_1</button>
                    </form>
                </div>

                <div class="d-block m-2">
                    <form action="" method="post">
                        <button type="submit" class="btn btn-primary btn-block ch2 move">WD_CH_2</button>
                    </form>
                </div>

                <div class="d-block m-2">
                    <form action="" method="post">
                        <button type="submit" class="btn btn-primary btn-block ch3 move">WD_CH_3</button>
                    </form>
                </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="scripts.js"></script>
</body>
</html>