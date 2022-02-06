<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'record') or die("Connection Failed: " . mysqli_connect_error());
/* For adding new entry to the database */
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
{

    if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['passwrd']) && isset($_POST['email']))
    {
        $id = (string)uniqid();
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['passwrd'];
        $email = $_POST['email'];

        $insert_query = "INSERT INTO  users (ID, FirstName, LastName, UserName, Password, Email) 
                    VALUES('$id', '$firstname', '$lastname', '$username', '$password', '$email')";

        $send_query = mysqli_query($conn, $insert_query);

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
}
/* For updating entry in the database */
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update']))
{

    if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['passwrd']) && isset($_POST['email']))
    {
        $id = $_POST['id_to_edit'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['passwrd'];
        $email = $_POST['email'];

        $insert_query = "UPDATE users
                                SET FirstName = '$firstname', LastName = '$lastname', UserName = '$username', Password = '$password', Email = '$email'
                                WHERE ID = '$id'";
        $send_query = mysqli_query($conn, $insert_query);

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
}

?>
