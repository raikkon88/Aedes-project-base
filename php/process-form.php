<?php 

  if($_POST){
    echo("<h1>We have received and processed the next parameters : </h1>");

    if($_POST["name"]){
      echo("<h3>Name : </h3>");
      echo("<p>" . $_POST["name"] . "</p>");
    }
    if($_POST["email"]){
      echo("<h3>Email : </h3>");
      echo("<p>" . $_POST["email"] . "</p>");
    }
    if($_POST["phone"]){
      echo("<h3>Phone : </h3>");
      echo("<p>" . $_POST["phone"] . "</p>");
    }
    if($_POST["text"]){
      echo("<h3>Text : </h3>");
      echo("<p>" . $_POST["text"] . "</p>");
    }
  }
  else{
    echo("<h1>Error, contact with your administrator</h1>");
  }

?> 