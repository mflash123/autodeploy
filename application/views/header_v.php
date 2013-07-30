<!DOCTYPE html>
<!-- важен правильный DOCTYPE (HTML5) -->
<html>
  <head>

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <[endif]-->
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <script type="text/javascript" src='http://code.jquery.com/jquery-1.7.2.min.js'></script>
    <script src="/js/bootstrap.min.js"></script>
  </head>
  <body>
<script type="text/javascript">
$(document).ready(function(){

$('#pullbranchapply').click(function(){
var branch=$('#branch').val();
var host=$('#host').val();
$(this).hide(100);
$('#result').html('<img src="http://www.vsemayki.ru/js/facebox/loading.gif">');
    $.ajax(
    {
      url: '/backend/pullbranchapply/'+branch+'/'+host,
      success: function(data) {
        $('#result').html(data);
        $('#pullbranchapply').show(100);
      }
    });
});

})
</script>
<center>
  <small>v0.1 alfa</small>
  <h1>Auto Deploy</h1>
</center>