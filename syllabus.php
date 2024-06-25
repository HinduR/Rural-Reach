<?php
include './dashboard.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js" defer></script>
    <style>
        .c1-container {
    display: flex;
    flex-direction: row;
}

.c1 {
    margin: 20px;
    padding: 50px;
    position: relative;
    width: 200px;
    height: 200px;
    background-image: url('https://www.rsquareacademy.in/wp-content/uploads/2021/04/6f00c0ece2a11432f8a41df559dca793-6-removebg-preview-1.png');
    background-size: contain; 
    background-position: center center;
    background-repeat: no-repeat;
    width: 200px;
    border: solid black 2px;
}
.c2{
    margin: 20px;
    padding: 50px;
    position: relative;
    width: 200px;
    height: 200px;
    background-image: url('https://legalbots.in/uploads/exams/exam_images/upsc1.jpg');
    background-size: contain; 
    background-repeat: no-repeat;
    background-position: center center;
    width: 200px;
    border: solid black 2px;
}
.c3{
    margin: 20px;
    padding: 50px;
    position: relative;
    width: 200px;
    height: 200px;
    background-image: url('https://mycareersview.com/afile/mcv13828_mcv13681_JEEMAIN.jpg');
    background-size: contain; 
    background-repeat: no-repeat;
    background-position: center center;
    width: 200px;
    border: solid black 2px;
}
.c4{
    margin: 20px;
    padding: 50px;
    position: relative;
    width: 200px;
    height: 200px;
    background-image: url('https://www.seshaalinguatech.com/wp-content/uploads/2018/05/neet.jpg');
    background-size: contain; 
    background-repeat: no-repeat;
    background-position: center center;
    width: 200px;
    border: solid black 2px;
}
/* .overlay-button {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    background: none;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
} */
.overlay-button {
    position: absolute;
    bottom: 10px; /* Adjust this value to control the distance from the bottom */
    left: 50%;
    transform: translateX(-50%);
    padding: 10px 20px;
    background-color: white;
    color: black;
    border: none;
    cursor: pointer;
    border-radius: 4px;
    font-size: 16px;
}

.overlay-button:hover {
    background-color: #45a049;
}
    </style>
</head>
<body>
<div class="c1-container">
    <div class="c1">
        <!-- <button class="overlay-button">Send message</button> -->
        <form action='https://drive.google.com/file/d/1jXMxx0dvQ7scNjFOzfk7SIMEDA4Dc5_F/view?usp=sharing'>
    <button type='submit' class="overlay-button">Get syllabus</button>
</form>
</div>
<div class="c2">
    <!-- <button class="overlay-button">Send message</button> -->
    <form action='https://drive.google.com/file/d/1Lf57JO2vOWd1XkjnRR3TzCi08hcysX-l/view?usp=sharing'>
    <button type='submit' class="overlay-button">Get syllabus</button>
</form>
</div>
<div class="c3">
    <!-- <button class="overlay-button" onclick="">Send message</button> -->
    <form action='https://drive.google.com/file/d/1AiQ4600XPgZZzY7Yy-uwOeLCgUzyPX-p/view?usp=sharing'>
        <button type='submit' class="overlay-button">Get syllabus</button>
    </form>
</div>
<div class="c4">
    <!-- <button class="overlay-button">Send message</button> -->
        <form action='https://drive.google.com/file/d/1sYVqsF_kOBH6gVce6vjAjSkFPnonT9Wz/view?usp=sharing'>
        <button type='submit' class="overlay-button">Get syllabus</button>
  </form>
</div>

    
</div>

  
<!-- <form action='notify.php'> -->
<button onclick="Logout()" class="overlay-button">Logout</button>
  <!-- </form> -->

</body>
</html>