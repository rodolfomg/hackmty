@extends('layouts.main')

@section('content')
<style>
.parallax { 
    /* The image used */
    background-image: url("/assets/img/mty.jpg");

    /* Set a specific height */
    height: 1000px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<!-- Container element -->
<div class="parallax">
  <br>
    <img src="/assets/img/turismo.png">
  <center>
    <br><br>
    <font style="font-size: 80px;color:white;"> 
    <b>MONTERREY</b>
    </font>
  </center>
</div>
@stop