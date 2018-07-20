<?php 

class Sql
{
	private $my_dbhost;
	private $my_dbname;
	private $my_dbuser;
	private $my_dbpass;
	private $conn;

    public function __construct($host, $user, $pass)
    {
		$this->my_dbhost = $host;
		$this->my_dbuser = $user;
		$this->my_dbpass = $pass;
		$this->getConnection();
	}
	
    public function getConnection()
    {
        if (!isset($this->conn))
        {
			if(!isset($this->my_dbname))
			{
				$this->conn = new PDO(
					'mysql:host='.$this->my_dbhost.'; charset=utf8mb4',
					$this->my_dbuser,
					$this->my_dbpass
				);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			{
				$conn = new PDO(
					'mysql:host='.$this->my_dbhost.'; dbname='.$this->my_dbname.'; charset=utf8mb4',
					$this->my_dbuser,
					$this->my_dbpass
				);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
        }
        return $this->conn;
    }
	
	public function createDatabase($dbname)
	{
		$query = $this->conn->prepare("CREATE DATABASE " . $dbname . ";");
		$query->execute();
		$this->useDatabase($dbname);
	}	
	
	public function fetchAllDatabase()
	{
		$query = $this->conn->prepare("SHOW DATABASES;");
		$query->execute();
		$result = $query->fetchAll();
		echo '<select class="form-control" id="all-databases" name="dbname">';
		foreach ($result as $row)
		{
			echo '<option>'.$row['Database'].'</option>';
		}
		echo '</select>';
		
	}

	public function useDatabase($dbname)
	{
		$this->my_dbname = $dbname;
		$this->getConnection();
	}

	public function deleteDatabase()
	{
		$query = $this->conn->prepare("DROP DATABASE " . $this->my_dbname. ";");
		$query->execute();
		unset($this->my_dbname);
	}


	public function renameDatabase($dbnewname)
	{
		echo shell_exec('mysqldump -u '.$this->my_dbuser.' -p'.$this->my_dbpass.' -v '.$this->my_dbname.' > /tmp/dump.sql');
		echo shell_exec('mysqladmin -u '.$this->my_dbuser.' -p'.$this->my_dbpass.' create '.$dbnewname.'');
		echo shell_exec('mysql -u '.$this->my_dbuser.' -p'.$this->my_dbpass.' '.$dbnewname.' < /tmp/dump.sql');
		$this->deleteDatabase($this->my_dbname);
		$this->useDatabase($dbnewname);
	}

	public function statsDatabase()
	{
		if (isset($this->my_dbname))
		{
			$query = $this->conn->prepare("SELECT table_schema, create_time, count(*), Round(Sum(data_length + index_length) /1024/1024, 2)
			From INFORMATION_SCHEMA.Tables
			WHERE table_schema ='" .$this->my_dbname."';");
			$query->execute();
			$result = $query->fetch();
			echo '
			<div class="alert alert-info" role="alert">
			<h4 class="alert-heading">'.$result[0].'</h4>
			<strong>Date de création</strong> '.$result[1].'
			<strong>Nombre de table</strong> '.$result[2].'
			<strong>Taile de la base de donnée</strong> '.$result[3].'
			</div>
			';
		}
		else
		{
			error("DB NAME UNDEFINED ".$this->my_dbname);
			die();
		}
	}
	public function statsDatabases()
	{
			$query = $this->conn->prepare("SELECT table_schema, create_time, count(*), Round(Sum(data_length + index_length) /1024/1024, 2)
			From INFORMATION_SCHEMA.Tables;");
			$query->execute();
			$result = $query->fetchAll();
			foreach ($result as $row)
			{
				echo '
				<div class="alert alert-info" role="alert">
				<h4 class="alert-heading">'.$row[0].'</h4>
				<strong>Date de création</strong> '.$row[1].'</br>
				<strong>Nombre de table</strong> '.$row[2].'</br>
				<strong>Taile de la base de donnée</strong> '.$row[3].'
				</div></br></br>
				';
			}
	}

	public  function exec($cmd)
    {
		$query = $this->conn->prepare($cmd);
		$query->execute();
		//$result = $query->fetchAll();
        //return $result;
    }

	public function __destruct()
    {
		$this->conn = null;
	}

}

?>