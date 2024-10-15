<?php require_once 'dbconfig.php'; ?>
<?php require_once 'models.php'; ?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=devide-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body {
                font-family: "Times New Roman";
            }
            input {
                font-size: 1.5em;
                height: 50px;
                width: 200px;
            }
        </style>
    </head>
    <body>
        <h3>WELCOME TO THE ARCHITECTURE INFORMATION RECORDS SYSTEM. Input your detailes here to register</h3>
        <form action="handleforms.php" method="POST">
            <P><label for="firstname">First Name</label> <input type="text" name="firstname"></p>
            <P><label for="lastname">Last Name</label> <input type="text" name="lastname"></p>
            <P><label for="Position">Position</label> <input type="text" name="position"></p>
            <P><label for="AGE">Age</label> <input type="text" name="age"></p>
            <P><label for="DesigningSkills rate	">DesigningSkills rate</label> <input type="text" name="DesigningSkills_rate"></p>
            <P><label for="Creativity rate">Creativity rate</label> <input type="text" name="Creativity_rate"></p>
            <P><label for="CommunicationSkills rate">CommunicationSkills rate</label> <input type="text" name="CommunicationSkills_rate"></p>
            <P><label for="Projectmanagement rate">Projectmanagement rate</label> <input type="text" name="Projectmanagement_rate">
            <input type="submit" name="insertNewArchiRecords">
        </p>
        </form>
          
    </body>
</html>
