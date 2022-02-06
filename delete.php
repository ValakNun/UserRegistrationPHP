<?php
/* Logic for deleting the entry from the database */
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete']))
{
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'record') or die("Connection Failed: " . mysqli_connect_error());
    $id_to_delete = $_POST['id_to_delete'];

    $delete_query = "DELETE FROM users WHERE ID = '$id_to_delete'";
    $send_query = mysqli_query($conn, $delete_query);
    echo $delete_query;

    if ($send_query)
    {
        header("location: http://localhost:8000");
        exit();
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
/* Form for editing the entry */
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit']))
{
    $id = $_POST['id_to_delete'];
    $firstname = $_POST['firstname_to_edit'];
    $lastname = $_POST['lastname_to_edit'];
    $usernanme = $_POST['username_to_edit'];
    $email = $_POST['email_to_edit'];
    $password = $_POST['password_to_edit'];
    echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="/css/form.css">
                    <title>Register</title>
                </head>
                <body>
                <main>
                <div class="form-style-2">
                <div class="form-style-2-heading">Provide your information</div>
                <form action="register.php" method="post">
                <label for="field1"><span>ID <span class="required">*</span></span><input readonly type="text" class="input-field" name="id_to_edit" value="' . $id . '" /></label> 
                <label for="field1"><span>First Name <span class="required">*</span></span><input type="text" class="input-field" name="firstname" value="' . $firstname . ' " /></label>
                <label for="field2"><span>Last Name <span class="required">*</span></span><input type="text" class="input-field" name="lastname" value="' . $lastname . '" /></label>
                <label for="field1"><span>User Name <span class="required">*</span></span><input type="text" class="input-field" name="username" value="' . $usernanme . '" /></label>
                <label for="field2"><span>Email <span class="required">*</span></span><input type="email" class="input-field" name="email" value="' . $email . '" /></label>
                <label for="field1"><span>Password<span class="required">*</span></span><input type="text" class="input-field" name="passwrd" value="' . $password . '" /></label>
                <label><span> </span><input type="submit" name="update" /></label>
                </form>
                </div>
                </main>
                </body>
                </html>';

}

?>
