<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booklist</title>
</head>
<body>
    <table width="2px">
        <tbody>
            <tr>
            <td>
                Title
            </td>
            <td>Tutor</td>
            <td>Lecture</td>
            </tr>
        </tbody>
        <?php foreach ($books as $title => $book) {
            echo "<tr><td>$book->title</td><td>$book->tutor</td><td>$book->lecture</td><tr>";
        }?>
    </table>
</body>
</html>