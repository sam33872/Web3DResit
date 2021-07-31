<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/main.db';
		$user = 'user';
		$pass = 'password';
		$options = [
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
			PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
		];
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, $user, $pass, $options);
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOEXception $e) {
			echo "can't connect to the database!";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}

	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Texts (Id INTEGER AUTO INCREMENT PRIMARY KEY, desc TEXT)");
			return "Model_3D table is successfully created inside main.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Texts (Id, desc) 
				VALUES ('1 / 3', 'A Fanta Motto', 
						'2 / 3', 'Halloween Edition,
						'3 / 3', 'Mystery Flavour'); ");
			
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData(){
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM Texts';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
				// echo '</br>' . $data['x3dModelTitle'];
				// Write the database conetnts to the results array for sending back to the view
				$result[$i]['desc'] = $data['desc'];
				
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}
	
	//Method to simulate the model data
	public function model3D_info()
	{
		// Simulate the model's data
		return array(
			'model_1' => 'Coke Can 3D Image 1',
			'image3D_1' => 'coke_1',

			'model_2' => 'Coke Can 3D Image 2',
			'image3D_2' => 'coke_2',

			'model_3' => 'Sprite Bottle 3D Image 1',
			'image3D_3' => 'sprite_1',

			'model_4' => 'Sprite Bottle 3D Image 2',
			'image3D_4' => 'sprite_2',

			'model_5' => 'Dr Pepper Cup 3D Image 1',
			'image3D_5' => 'pepper_1',

			'model_6' => 'Dr Pepper Cup 3D Image 2',
			'image3D_6' => 'pepper_2'
		);
	}
}
?>