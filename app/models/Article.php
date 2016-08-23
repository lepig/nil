<?php

/**
* Article
*/
class Article
{
    
    public static function first()
    {
        $link = new PDO('mysql:host=106.75.28.190;dbname=nil', 'nil', 'nil1860');
        if (! $link) {
            die('Could not connect: ' . mysql_error());
        }

        // foreach ($link->query("SELECT * FROM articles limit 0,1") as $row) {
        //     echo '<h1>'.$row["title"].'</h1>';
        //     echo '<p>'.$row["content"].'</p>';
        // }
        // $result = $link->query("SELECT * FROM articles limit 0,1");

        // dump($result);exit;


        foreach ($link->query("SELECT * FROM articles limit 0,2") as $row) {
            return $row;
            echo '<h1>'.$row["title"].'</h1>';
            echo '<p>'.$row["content"].'</p>';
        }
    }    

}
