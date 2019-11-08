<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Star Rating Animation</title>
  <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css'>
   <link rel='stylesheet' href='./font-awesome.min.css'>
<link rel="stylesheet" href="./style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div class="rating" data-vote="0" >

  <div class="star hidden">
    <span class="full"data-value="0"></span>
   
  </div>

  <div class="star">

    <span class="full" data-value="1"></span>
    
    <span class="selected"></span>

  </div>

  <div class="star">

    <span class="full" data-value="2"></span>
    
    <span class="selected"></span>

  </div>

  <div class="star">

    <span class="full" data-value="3"></span>
    
    <span class="selected"></span>

  </div>

  <div class="star">

    <span class="full" data-value="4"></span>
   
    <span class="selected"></span>

  </div>

  <div class="star">

    <span class="full" data-value="5"></span>
   
    <span class="selected"></span>

  </div>

  <div class="score">
    <span class="score-rating js-score">0</span>
    <span>/</span>
    <span class="total">5</span>
  </div>
</div>
    
 
</div>
  
<div class="average">
  <span class="text">Your average score is</span><div class=" score-average js-average"></div>
</div>
<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="./script.js"></script>

</body>
</html>


<?php

?> 