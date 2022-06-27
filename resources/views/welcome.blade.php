<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>TEST API</title>
</head>
<body>
    <div class="container mt-5">
        <button class="my-3"><a href="http://127.0.0.1:8000/api/produits">Produit</a></button>
        <form action="http://127.0.0.1:8000/api/familles" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nom</label>
                <input type="text" class="form-control" id="NOM" name="NOM">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Touche</label>
                <input type="text" class="form-control" id="touche" name="touche">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Groupe</label>
                <input type="text" class="form-control" id="touche" name="IDGROUPE">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form> 
    </div>
</body>
</html>