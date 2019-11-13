<?php
/*
Para obtener los datos de una select con el prepared statment
$result = $stmt->get_result();
*/
class OrmPlanetas{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "planetas";
    
    public function obtenerTodosPlanetas(){
        // Create connection
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT id, nombre, radio, peso FROM planetas";
        $result = $conn->query($sql);//statment sin preparar
        if ($result->num_rows > 0) {
            // output data of each row
            $planetas = [];
            while($row = $result->fetch_assoc()) {
                //var_dump($row);//solo para probar que funciona
                $planeta = new Planeta (
                    $row["nombre"],
                    $row["radio"],
                    $row["peso"]
                );
                $planeta->id = $row["id"];
                array_push($planetas, $planeta);
            }
            return $planetas;
        }
        $conn->close();
    }
}