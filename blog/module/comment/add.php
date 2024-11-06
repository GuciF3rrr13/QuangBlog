<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $content = $_POST['content'];
    $blog_id = $_GET['blog_id'];
}

?>
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Comment Box</title> 
    <style> 
        .comment-box { 
            width: 300px; 
            padding: 10px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            margin: 20px auto; 
            font-family: Arial, sans-serif; 
        } 
        .comment-box textarea { 
            width: 100%; 
            height: 100px; 
            margin-bottom: 10px; 
        } 
        .comment-box button { 
            padding: 10px; 
            background-color: #28a745; 
            color: white; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
        } 
        .comment-box button:hover { 
            background-color: #218838; 
        } 
    </style> 
</head> 
<body> 
 
<div class="comment-box"> 
    <h2>Leave a Comment</h2> 
    <form action="#" method="post"> 
        <textarea name="comment" placeholder="Write your comment here..." required></textarea> 
        <br> 
        <button type="submit">Submit</button> 
    </form> 
</div> 
 
</body> 
</html> 