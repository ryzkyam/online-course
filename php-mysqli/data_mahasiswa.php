<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    include 'layouts/header.php';
    ?>
    <br>
    <br>
    <br>
    <table class="table mt-3 mx-auto">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NPM</th>
                <th scope="col">NAMA</th>
                <th scope="col">Alamat</th>
                <th scope="col">Fakultas</th>
                <!-- <th><button type="button" class="btn btn-success p-1">Success</button></th>
                <th><button type="button" class="btn btn-danger p-1 g-0">Danger</button></th>
                <tr><button type="button" class="btn btn-warning p-1">Warning</button></tr> -->
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <th scope="row">1</th>
                <td>11122255</td>
                <td>REZA RIZKI RAMADHAN</td>
                <td>DEPOK</td>
                <td>SISTEM INFORMASI</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2"></td>
                <td></td>
            </tr>
        </tbody>
    </table>


</body>

</html