<?php
     
    $to = "v.struk9@gmail.com";
    $subject = "Посилка з мого сайту LK";
     

    if(isset($_POST["submit"])) 
    {
        if(!preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]

        +(?:.?[a-z0-9]+)?.[a-z]{2,5})$/i",trim($_POST["email"])))

        {
            $message = "<div id="message" class="error">

            Указанный email не соответствует формату!</div>";

        }

        else

        {

            $message = "<div id="message" class="success">

            Форма успешно отправленна!</div>";

        }
    }
 
?>
