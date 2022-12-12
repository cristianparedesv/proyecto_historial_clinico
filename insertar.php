<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "registro_pacientes";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

    /*$nHC = $_POST['nHC'];*/
    $dni = $_POST['dni'];
    $eProfesional = $_POST['eProfesional'];
    $apellidosNombres = $_POST['apellidosNombres'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $domicilio = $_POST['domicilio'];
    $procedencia = $_POST['procedencia'];
    $lugarNacimiento = $_POST['lugarNacimiento'];
    $telefono = $_POST['telefono'];
    $telefonoFamiliar = $_POST['telefonoFamiliar'];
    $religion = $_POST['religion'];



  $sql = "INSERT INTO datos_pacientes (dni, escuela_profesional, apellidos_nombres, edad, sexo, domicilio, procedencia, lugar_nacimiento, telefono, telefono_fa, religion) VALUES ('$dni', '$eProfesional', '$apellidosNombres', '$edad', '$sexo', '$domicilio', '$procedencia', '$lugarNacimiento',
    '$telefono', '$telefonoFamiliar', '$religion')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
?>