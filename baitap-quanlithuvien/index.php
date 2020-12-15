<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table ,th ,td{
            border: 1px solid black;
            border-collapse: collapse;
        }th, td {
             padding: 5px;
         }
        th {
            text-align: left;
        }
    </style>
</head>
<body>
<div class="container">
    <div class = "card">

        <div class="card-header">
            <h1>Library Manager</h1>
        </div>
        <hr>
        <div class="card-header">
            <a href="">Home|</a>
            <a href="">Book|</a>
            <a href="">Borrow books|</a>
            <a href="">Author|</a>
            <a href="">Categories</a>
        </div>

    </div>
    <hr>
    <h2>Categories List</h2>
    <table style="width: 100%">
        <tr>
            <th>code</th>
            <th>Categoriname</th>
            <th></th>
        </tr><tr>
            <td>C01</td>
            <td>Childrens Books</td>
            <td>
                <a href="">update|</a>
                <a href="">Delete</a>
            </td>
        </tr><tr>
            <td>C02</td>
            <td>Comics</td>
            <td>
                <a href="">update|</a>
                <a href="">Delete</a>
            </td>
        </tr><tr>
            <td>C03</td>
            <td>Compuling internet</td>
            <td>
                <a href="">update|</a>
                <a href="">Delete</a>
            </td>
        </tr><tr>
            <td>C04</td>
            <td>Education</td>
            <td>
                <a href="">update|</a>
                <a href="">Delete</a>
            </td>
        </tr><tr>
            <td>C05</td>
            <td>Food - Drink</td>
            <td>
                <a href="">update|</a>
                <a href="">Delete</a>
            </td>
        </tr>
    </table>
    <div class="card-header">
        <a href="">Add new category</a>
    </div>
    <hr>

    <h2>Edit category</h2>
    <table>
        <tr>
            <th>Category name </th>
            <th>Chidrens Books</th>
        </tr>
        <tr>
            <td></td>
            <td>
                <a href="">update</a>
            </td>
        </tr>
    </table>

    <h2>Add new category</h2>
    <table>
        <tr>
            <th>Code</th>
            <th></th>
        </tr>
        <tr>
            <td>Category name :</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <a href="">Add</a>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
