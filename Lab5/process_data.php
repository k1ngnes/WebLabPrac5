<html>
<body>
<?php
  $connection = new mysqli("localhost", "root", "D%emin071202D%D", "socialsite");
  if ($connection->connect_error) 
  {
    die("Ошибка: " . $connection->connect_error);
  }
    echo "Подключение успешно установлено<br><br>";
  $login = "anonym";
  $password = "qwertyqwerty";
  $city = "Saint-Petersburg";
  $email = "qwerty@gmail.com";
  $age = "junior";
  $hobby = "computers";

  if(isset($_POST["login"])) 
  {
    $login = $_POST["login"];
  }
  if(isset($_POST["password"])) 
  {
    $password = $_POST["password"];
    $password = crypt($password, "ksfksjf92q384kjnrwa3243j");
  }
  if(isset($_POST["optionSelect"])) 
  {
    $city = $_POST["optionSelect"];
  }
  if(isset($_POST["email"])) 
  {
    $email = $_POST["email"];
  }
  if(isset($_POST["ageInput"])) 
  {
    $age = $_POST["ageInput"];
  }
  if(isset($_POST["hobbyInput"])) 
  {
    $hobby = $_POST["hobbyInput"];
  }

  $sql = "INSERT INTO users_1lab(login, password, city, email, age, hobby) VALUES ('$login', '$password', '$city', '$email', '$age', '$hobby')";

  if ($connection->query($sql)) 
  {
    echo "Данные успешно добавлены<br><br>";
  } 
  else 
  {
    echo "Ошибка: " . $connection->error;
  }

  $sql = "SELECT id, login, email FROM users_1lab";
  $result = $connection->query($sql);

  if ($result->num_rows > 0) 
  {
    while($row = $result->fetch_assoc()) 
    {
      echo "Номер пользователя: " . $row["id"]. "<br> Имя: " . $row["login"]. "<br> Почта: " . $row["email"]. "<br><br>";
    }
  }
  else 
  {
    echo "0 результатов";
  }

  $connection->close();
?>
</body>
</html>