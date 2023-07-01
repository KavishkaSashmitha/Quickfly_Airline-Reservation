<?php
include 'header.php';
include 'imageSlider.php';



?>
<style>
    form{
        display: block;
        margin: auto;
        margin-top:20px;
        margin-bottom:20px;
        width: 50%;
        height:auto;
        background-color: #2C3333;
        color: #f2f2f2;
        padding:10px;
    }
    input{
        width:80%;
        height:35px;
        margin: auto;
        disdisplay: block;
        margin-left:50px;
        margin-bottom:20px;

    }
    button{
        width: 40%;
        height: auto;
        background-color: #ecf1f1;
        color: #0E8388;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        display: block;
        margin: auto;
        box-shadow:0 6px 20px 0 rgba(247, 245, 245, 0.5),
    0 6px 20px 0 rgba(247, 244, 244, 0.19);
    }
    button:hover{
        background-color:#0E8388;
        color:#ecf1f1;
    }

</style>

<form action="enquirieschange.php" method="post">
    <input name='email'type="email" placeholder='Enter Your Email'required>
    <button type='submit'>CHECK</button>
   
</form>


<?php



include 'footer.php';
?>
