<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="terminet.css">
</head>

<body>
    <?php
 include '../headers.php';
 ?>

    <div class="container">

        <div class="tabletermin">

            <table>
                <tr>
                    <th>Name & Surname</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Doktor</th>
                    <th class="createtermin"><button type="button">Create</button></th>
                </tr>

                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                    <td>FilanFisteku</td>
                    <td><button type="button" style="background-color:blue">Edit</button></td>
                    <td><button type="button" style="background-color:red">Delete</button></td>
                </tr>
                
            </table>
        </div>
    </div>

    <?php
 include '../footer.php';
 ?>
</body>

</html>