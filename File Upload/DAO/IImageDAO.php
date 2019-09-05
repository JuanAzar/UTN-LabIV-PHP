<?php
    namespace DAO;

    use Models\Image as Image;

    interface IImageDao
    {
        function Add(Image $image);
        function GetAll();
        function GetByImageId($imageId);
    }
?>