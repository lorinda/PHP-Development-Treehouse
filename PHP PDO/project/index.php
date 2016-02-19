<?php
//remove before release to production
//displaying errors turned on
ini_set('display_errors','On');

//instantiate PDO object (dsn absolute path on disk)
$dsn = 'mysql:host=localhost;dbname=codelouisville';
$user = 'root';
$password = '';
$db = new PDO($dsn, $user, $password);
var_dump($db);
//stops the rest of the file from loading

$stmt = $db->prepare('INSERT INTO students(name, email) VALUES (:name, :email)');
$stmt->bindParam(':name',$name);
$stmt->bindParam(':email',$email);
$name='Lorinda';
$email='l@l.com';
$stmt->execute();


$results = $db->query('SELECT * FROM students');
var_dump($results);


die();

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <title>PHP Data Objects</title>
  <link rel="stylesheet" href="style.css">

</head>

<body id="home">

  <h1>Sakila Sample Database</h1>

  <h2>Films by Title</h2>

  <ol>
      <li><i class="lens"></i>Film One</li>
      <li><i class="lens"></i>Film Two</li>
      <li><i class="lens"></i>Film Three</li>
      <li><i class="lens"></i>Film Four</li>
  </ol>

</body>

</html>


