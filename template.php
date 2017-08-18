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


        <form method="GET">
            <input type="text" name="isbn" placeholder="ISBN" id="1" />
            <input type="text" name="name" placeholder="Название книги" id="2" />
            <input type="text" name="author" placeholder="Автор книги" id="3" />
            <input type="submit" value="Поиск" />
        </form>

        <br>
        <br>
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


        <script type="text/javascript">

            document.getElementById('1').value = '<?php echo $_GET['isbn'] ?>';
            document.getElementById('2').value = '<?php echo $_GET['name'] ?>';
            document.getElementById('3').value = '<?php echo $_GET['author'] ?>';



        </script>



    </body>



</html>