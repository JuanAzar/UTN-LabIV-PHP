<?php
    namespace DAO;

    use \PDO as PDO;
    use \Exception as Exception;
    use DAO\QueryType as QueryType;

    class Connection
    {
        private $pdo = null;
        private $pdoStatement = null;
        private static $instance = null;

        private function __construct()
        {
            try
            {
                $this->pdo = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASS);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(Exception $ex)
            {
                throw $ex;
            }
        }

        public static function GetInstance()
        {
            if(self::$instance == null)
                self::$instance = new Connection();

            return self::$instance;
        }

        public function Execute($query, $parameters = array(), $queryType = QueryType::Query)
	    {
            try
            {
                $this->Prepare($query);
                
                $this->BindParameters($parameters, $queryType);
                
                $this->pdoStatement->execute();

                return $this->pdoStatement->fetchAll();
            }
            catch(Exception $ex)
            {
                throw $ex;
            }
        }
        
        public function ExecuteNonQuery($query, $parameters = array(), $queryType = QueryType::Query)
	    {            
            try
            {
                $this->Prepare($query);
                
                $this->BindParameters($parameters, $queryType);

                $this->pdoStatement->execute();

                return $this->pdoStatement->rowCount();
            }
            catch(Exception $ex)
            {
                throw $ex;
            }        	    	
        }
        
        private function Prepare($query)
        {
            try
            {
                $this->pdoStatement = $this->pdo->prepare($query);
            }
            catch(Exception $ex)
            {
                throw $ex;
            }
        }
        
        private function BindParameters($parameters = array(), $queryType = QueryType::Query)
        {
            $i = 0;

            foreach($parameters as $parameterName => $value)
            {                
                $i++;

                if($queryType == QueryType::Query)
                    $this->pdoStatement->bindParam(":".$parameterName, $parameters[$parameterName]);
                else
                    $this->pdoStatement->bindParam($i, $parameters[$parameterName]);
            }
        }
    }
?>