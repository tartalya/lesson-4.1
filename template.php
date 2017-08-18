<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>

        <style>

            table td {

                border: 1px solid;
                padding: 5px;


            }


        </style>

        <table>
            <tr>
                <th>Номер</th>
                <th>Название</th>
                <th>автор</th>
                <th>Год</th>
                <th>ISBN</th>
                <th>Жанр</th>
            </tr>


            <?php foreach ($arr as $value): ?> 

                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['author'] ?></td>
                    <td><?= $value['year'] ?></td>
                    <td><?= $value['isbn'] ?></td>
                    <td><?= $value['genre'] ?></td>

                </tr>



            <?php endforeach; ?>

        </table>





    </body>



</html>