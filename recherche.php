<?php
session_start();
if(!isset($_SESSION['user']))
?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 </head>
 <body>
 <?php include('menu.php');?>
<div class="page_contenu">
    <h3 align="center">Recherche</h3>

        <div class="d_form">
            <input type="text" name="search_text" id="search_text" placeholder="alors?" class="form-control" />
        </div>

        <div id="resultat"></div>
    <button onclick="topFunction()" id="myBtn"><i class="far fa-arrow-alt-circle-up"></i></button>
    <script src="js/app.js"></script>
</div>

<?php include('menu2.php');?>

<script>
$(document).ready(function(){

 load_data();

    function load_data(query)
    {
    $.ajax({
        url:"script/fetch.php",
        method:"POST",
        data:{query:query},
        success:function(data)
    {
        $('#resultat').html(data);
    }
    });
    }
 $('#search_text').keyup(function(){
    var search = $(this).val();
        if(search != '')
        {
        load_data(search);
        }else
        {
        load_data();
        }
    });
});
</script>