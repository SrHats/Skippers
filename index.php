 
<!DOCTYPE html>
<html>
<head>
<title>Lista de Empleados</title>
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
echo " <h1><u>Lista de empleados<u></h1>";
$servername = "oraclepr.uco.es";
$username = "";
$password = "";
$dbname = "";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
echo "Conectado correctamente";
echo "<p>";


$sql = "SELECT * from trabajadores";
$result = $conn->query($sql);


if ($result->num_rows > 0) 
{
    echo "<table>
    		<tr>
    			<th>EmpID</th>
    			<th>Nombre</th>
    			<th>Apellidos</th>
    			
    		</tr>";
    
    while($row = $result->fetch_assoc()) 
    {
        echo "<tr>
        <td> <a href=\"/empleados.php?q=$row[EmpID]\">$row[EmpID] </a> </td>
        <td>$row[Nombre] </td>
        <td>$row[Apellidos]</td>
      

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

</body>
</html>
