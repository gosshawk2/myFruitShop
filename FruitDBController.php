<?php
class FruitDBController {
	private $host = "localhost";
	private $user = "root"; 
	private $password = "root";
	private $database = "shoppingcart";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
    function ExecSQLFile($SQLFile)
    {
        $query = file_get_contents($SQLFile);
        $result = mysqli_query($this->conn,$query);
        $stmt = $this->conn->prepare($query);
        if ($stmt->execute()) {
            return "Success";
        }
        else {
            return "Failed";
        }
    }

	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
		else
		{
			return "Execute Query Error";
		}
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>
