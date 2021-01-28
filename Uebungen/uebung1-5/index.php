
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['name'];
        echo "Hallo {$username}!";

    }
?>

<form method="POST" action="?">
    <input type="text" name="name" placeholder="Benutzername" required/>
    <input type="submit" value="Absenden"/>
</form>

<select name="Auswahl">
    <option value="value1">IMS</option>
    <option value="value2">WMS</option>
    <option value="value3">FMS</option>
</select>