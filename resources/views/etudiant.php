<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

    echo '
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">CLCLEUNIK</th>
                    <th scope="col">tchnog</th>
                    <th scope="col">cltype</th>
                    <th scope="col">clclavier</th>
                    <th scope="col">racorcie_clavier</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while (odbc_fetch_into($etudiants, $rowt)){
                        echo '
                            <tr>
                                <th scope="row">'.$rowt[0].'</th>
                                <td>'.$rowt[1].'</td>
                                <td>'.$rowt[2].'</td>
                                <td>'.$rowt[3].'</td>
                                <td>'.$rowt[4].'</td>
                            </tr>
                        ';
                    }
                ?>
            </tbody>
        </table>
</body>
</html>