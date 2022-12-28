<!DOCTYPE html>
<html>
<title>Detail Produk</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://badoystudio.com/cloudme.fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

<!-- The Grid -->
<div class="w3-row-padding">

<!-- Left Column -->
<div class="w3-third">

<div class="w3-white w3-text-grey w3-card-4">
<div class="w3-display-container">
<div class="w3-display-bottomleft w3-container w3-text-black">
</div>
</div>
<div class="w3-container">
<p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Gianyar</p>
<p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>ex@mail.com</p>
<p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>1224435534</p>
<hr>

<p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Review</b></p>
<p>Show</p>
<div class="w3-light-grey w3-round-xlarge w3-small">
<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
</div>
<p>Photography</p>
<div class="w3-light-grey w3-round-xlarge w3-small">
<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
<div class="w3-center w3-text-white">80%</div>
</div>
</div>
<p>facility</p>
<div class="w3-light-grey w3-round-xlarge w3-small">
<div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
</div>
<br>


<br>
</div>
</div><br>

<!-- End Left Column -->
</div>

<!-- Right Column -->
<div class="w3-twothird">

<div class="w3-container w3-card w3-white w3-margin-bottom">
<h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Ketersedian Produk</h2>
@foreach ($admin as $item)
<div class="w3-container">
    <h5 class="w3-opacity"><b>{{$item->title}}</b></h5>
    <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>{{$item->desc}}</h6>
    <!-- <p>{{$item->desc}}</p> -->
    <tr>
        <td>Category</td>
        <td>:</td>
        <td class="w3-large"><b>{{$item->Olahan_id}}</b></>
    </tr>
    <hr>
</div>
@endforeach


<center>
<div class="flex flex-auto space-x-4">
    <a href="{{ url('order') }}">
        <button class="h-10 px-6 font-semibold rounded-full bg-cyan-600 text-white" type="button">
            Order Now
        </button>
    </a>
</div><br>
</center>
</div>
</div>

<!-- End Right Column -->
</div>

<!-- End Grid -->
</div>

<!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p>Support by <a href="https://www.tripadvisor.co.id/Attraction_Review-g297701-d2056776-Reviews-Kecak_Fire_Trance_Dance_Pura_Dalem_Taman_Kaja-Ubud_Gianyar_Regency_Bali.html" target="_blank">tripadvisor</a></p>
    </footer>

</body>
</html>