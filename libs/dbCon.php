<?php
    //this is for safe dbconnection
    class DbCon
    {
        public function connect()
        {
            $dbCD = parse_ini_file ("dbconfig.ini");
            $con = new mysqli($dbCD["host"], $dbCD["username"], $dbCD["password"], $dbCD["dbname"]);

            return $con;
        }
        public static function writeData($sql)
        {
            $oDbCon = new DbCon();
            $con = $oDbCon->connect();

            $results= mysqli_query($con, $sql);

            return $results;
        }
        public static function fetchData($sql)
        {
            // echo $sql."<br><BR>";
            $oDbCon = new DbCon();
            $con = $oDbCon->connect();

            $results= mysqli_query($con, $sql);
            $data = []; 
            while($row = mysqli_fetch_assoc($results))
            {
               
                $data[] = $row;
            }
            return $data;
            // mysql_free_result($results);
        }
    }
?>