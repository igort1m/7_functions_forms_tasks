<?php

function save_comments($comment){
    return file_put_contents('comments.txt',serialize($comment));
   }
function get_comments(){
    return unserialize(file_get_contents('comments.txt'));
}
if (file_exists('comments.txt')){
    $comments=get_comments();
}
$form_was_send=false;
if (isset($_POST['submit'])){
    $form_was_send=true;
    $comment=[
        'user'=>$_POST['user'],
        'comment'=>$_POST['comment']
    ];

//    echo "<pre>";
//    print_r($comment);
//    echo "</pre>";

   foreach ($comment as $v){
       $comment['comment']=strip_tags($comment['comment'], '<b>');
   }
    $comments[]=$comment;
    save_comments($comments);
//    echo "<pre>";
//    print_r($comments);
//    echo "</pre>";
}
include '7.html';