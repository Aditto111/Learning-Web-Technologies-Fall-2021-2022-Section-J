<?php
    
    require_once('db.php');

    function addProducts($product)
    {
        $con=getConnection();

        $sql="insert into products values('','{$product['name']}','{$product['buying']}','{$product['selling']}')" ;

                if(mysqli_query($con,$sql))
                {
                    return true;
                }
                else
                {
                    echo false;
                }
    }

    function getAllProduct()
    {
        $con=getConnection();

            $sql ="select * from products ";
            $result=mysqli_query($con, $sql);

            return $result;
                
    }

    function getProductById($id)
    {
        $con=getConnection();

        $sql="select * from products where id={$id}";
        $result=mysqli_query($con, $sql);
        $user= mysqli_fetch_assoc($result);

        return $user;
    }


    function editProduct($user)
    {
        $con=getConnection(); 

       
        $sql="update products set name='{$user['name']}',  buying='{$user['buying']}',selling='{$user['selling']}' where id='{$user['id']}' ";

                if(mysqli_query($con,$sql))
                {
                    return true;
                }
                else
                {
                    echo false;
                }
    }

    
    function deleteProduct($id)
    {
        $con=getConnection();

        $sql="delete from products where id={$id}";
        $result=mysqli_query($con, $sql);

        return $result;
    }



?>