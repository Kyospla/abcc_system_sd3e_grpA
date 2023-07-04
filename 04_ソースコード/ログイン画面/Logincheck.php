<?php
             session_start();
            $_SESSION['member'];
                 $pdo = new PDO('mysql:host=mysql213.phy.lolipop.lan;dbname=LAA1418543-hiroyuki;charset=utf8','LAA1418543', '12345hiroyuki');
                select *from member where login=? and pass=?
                $sql=$pdo->prepare(
                    'select *from member where login=? and pass=?');
                    [$_REQUEST['login'],$_REQUEST['password']];
                    foreach($sql->fetchAll()as $row){
                        [
                            'id'=$row['id'],'mail'=>$row['mail'],
                            'login'=$row['login'],'pass'=$row=['pass']
                        ];
                    }
                        if(isset($_SESSION['member'])){

                        }else{

                        }
                    
                 
                 

             ?>