interface DBConnctionInterface
{
	public function connect();
}

class MySQLConnection implements DBConnctionInterface
{
	public function connect()
	{
		// handle the database connection
		return 'Database connection';
	}
}

class PasswordReminder
{
	private $dbConnection;

	public function __construct(DBConnctionInterface $dbConnection)
	{
		$this->dbConnection = $dbConnection;
	}
}
