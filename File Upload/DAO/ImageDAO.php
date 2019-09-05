<?php
    namespace DAO;

    use DAO\IImageDAO as IImageDAO;
    use DAO\QueryType as QueryType;
    use Models\Image as Image;

    class ImageDao implements \DAO\IImageDao
    {
        private $tableName = "images";

        public function Add(Image $image)
        {
            try
            {
                $query = "CALL images_add(?);";
                
                $parameters["name"] = $image->getName();

                $this->connection = Connection::GetInstance();

                $this->connection->ExecuteNonQuery($query, $parameters, QueryType::StoredProcedure);
            }
            catch(Exception $ex)
            {
                throw $ex;
            }
        }

        public function GetAll()
        {
            try
            {
                $imageList = array();

                $query = "SELECT imageId, name FROM ".$this->tableName;

                $this->connection = Connection::GetInstance();

                $resultSet = $this->connection->Execute($query);
                
                foreach ($resultSet as $row)
                {                
                    $image = new Image();
                    $image->setImageId($row["imageId"]);
                    $image->setName($row["name"]);

                    array_push($imageList, $image);
                }

                return $imageList;
            }
            catch(Exception $ex)
            {
                throw $ex;
            }
        }

        function GetByImageId($imageId)
        {
            try
            {
                $image = null;

                $query = "SELECT * FROM ".$this->tableName." WHERE imageId = :imageId";

                $parameters["imageId"] = $imageId;

                $this->connection = Connection::GetInstance();

                $resultSet = $this->connection->Execute($query, $parameters);
                
                foreach ($resultSet as $row)
                {                
                    $image = new Image();
                    $image->setImageId($row["imageId"]);
                    $image->setName($row["name"]);
                }

                return $image;
            }
            catch(Exception $ex)
            {
                throw $ex;
            }
        }
    }
?>