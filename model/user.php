<?php
        function insert_user($email,$user,$pass){
            $sql="insert into user(email,user,pass) values('$email','$user','$pass')";
            pdo_execute($sql);
        }
        function check_user($user,$pass){
            $sql="select * from user where user='".$user."' and pass='".$pass."' ";
            $sp=pdo_query_one($sql);
            return $sp;
        }
        function check_email($email){
            $sql="select * from user where email='".$email."'";
            $sp=pdo_query_one($sql);
            return $sp;
        }