<?php session_start();
        if ( //　csrf対策
          isset($_SESSION['token'], $_POST['token'])
          &&  $_SESSION['token'] == $_POST['token']
        )

          foreach ($_POST as $key => $value) {
            $post[$key] = htmlspecialchars($value, ENT_QUOTES);
          }


        mb_language("ja");
        mb_internal_encoding("UTF-8");
        //複数のメルアドがある場合はカンマ（,）で区切る
        $site_name = 'たぐちの宿';
        $admin_email = 't@gmail.com'; //管理者
        $mailto   = "$admin_email , $post[mail]";
        $subject = "メールタイトル";
        $header = "From: " . mb_encode_mimeheader($site_name) . "<{$admin_email}>";

        mb_send_mail($mailto, $subject, $post['comment'], $header);

        header('Location: ./thanks.html');
