 
<!DOCTYPE html>
<html>
<head>
<style>
 th {
    background-color: #4CAF50;
    color: white;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
td {
    height: 50px;
    vertical-align: bottom;
}
</style>
</head>
<body>


 <?php

$servername = "oraclepr.uco.es";
$username = "";
$password = "";
$dbname = "";
$empleado = $_GET['q'];

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
echo "Conectado correctamente";
echo "<p>";


$sql = "SELECT * from trabajadores where EmpID='$empleado'";
$result = $conn->query($sql);


if ($result->num_rows > 0) 
{
    echo "<table>
    		<tr>
    			<th>EmpID</th>
    			<th>Nombre</th>
    			<th>Apellidos</th>
    			<th>DNI</th>
    			<th>Fecha de nacimiento </th>
    			<th>Fecha de contratación </th>
    			<th>Departamento </th>
    			<th>Salario</th>
    		</tr>";
    
    while($row = $result->fetch_assoc()) 
    {
        echo "<tr>
        <td>".$row["EmpID"]."</td>
        <td>".$row["Nombre"]." 
        <td>".$row["Apellidos"]."</td>
        <td>".$row["DNI"]."</td>
        <td>".$row["Fecha de nacimiento"]."</td>
        <td>".$row["Fecha de contratacion"]."</td>
        <td>".$row["Departamento"]."</td>
        <td>".$row["Salario"]."</td>

        </tr>";
    }
    echo "</table>";
} 
else 
{
    echo "0 resultados";
}
$conn->close();
?>
<p>
<p>
<td><a href="index.php"><img src="/home/i52lalua/Desktop/3INFORMATICA/PW/P2/b.png " width="120" height="120"></img></a></td> 
</body>
</html>
