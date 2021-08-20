<?php
// This class will manage the connection to the database
// It will be passed on the other classes who need it
abstract class DatabaseManager
{
    // These are private: only this class needs them
     // This one is public, so we can use it outside of this class
    // We could also use a private variable and a getter (but let's not make things too complicated at this point)
    public PDO $connection;

    protected function connect(): PDO
    {
        require_once 'config.php';

        $this->host =  $config['host'];
        $this->user = $config['user'];
        $this->password = $config['password'];
        $this->dbname = $config['dbname'];

        // TODO: make the connection to the database
        $dsn = 'mysql:host=' .$this->host .';dbname=' .$this->dbname;
        $this->connection = new PDO($dsn, $this->user, $this->password); // create new PDO connection with the nex parameters : mysql:host, db name, and user name and passwrod (all data are from config.php)

        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); //to set the default mode of returning data (ASSOC - Associative array)

        $this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);          //Note that when using PDO to access a MySQL database real prepared statements are not used by default.
                                                                                                    //To fix this you have to disable the emulation of prepared statements. An example of creating a connection using PDO is:
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //developer tool is not necessary

        return $this->connection; // to return connection
    }
}