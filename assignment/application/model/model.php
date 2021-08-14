<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handler that points to the database connection, this will become a PDO object
	public $dbh;

	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
        $dir = 'sqlite:./db/data.db';
        $this->dbh = new PDO($dir, 'user','password', array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false,));
	}

	public function dbCreateTable()
	{

	}

	public function dbInsertData()
	{

	}

	public function dbGetData(){
      try{
            $query = 'SELECT * FROM desc';
            $stmt = $this->dbh->query($query);
            $result = null;
            $i=-0;
            while ($data = $stmt->fetch()) {
                $result[$i]['name'] = $data['name'];
                $result[$i]['content']= $data['content'];
                $i++;
            }
        }
        catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbh = NULL;
        ChromePhp::log($result);
        return $result;
	}
}
?>