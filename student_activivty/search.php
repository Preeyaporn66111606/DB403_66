<?php
require "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search product by category</title>
</head>
<body>
  <header>
    <form action="Country.php" method="get">
      <label for="Country">
        <select name="Country" id="Country">
<?php
$sql = "select distinct Country from customers order by Country"
$result = $coon->query($sql);
while($row = $result->fetch_assoc()) {
    echo "<option>Germany</option>"
}
?>
          <!-- add option hear ex.
          <option value="1">Beverages</option>
          -->
        </select>
      </label>
      <input type="submit" value="Search" name="submit">
    </form>
  </header>
</body>
</html>