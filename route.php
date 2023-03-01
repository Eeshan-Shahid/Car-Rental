<?php 
 session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>vehicle_management system</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

 
</head> 
<style>
    /* Center the loader 
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}   */ 
</style>


<body onload="myFunction()">
    <div id="loader"></div>
    
    <div id="myDiv">
      <?php include 'navbar.php';?>
      <br>
       <div class="page-header foo">
            <h1 style="text-align: center;">Bus Route</h1>      
      </div> 
       <div class="col-md-3"></div>
       <div class="col-md-6">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13274.851706171552!2d73.1219610815568!3d33.71637649117633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfc04b8cff92e7%3A0x4fc0ece5b8b9d8fb!2sLAKE%20VIEW%20PARK%2C%20Islamabad%2C%20Islamabad%20Capital%20Territory%2C%20Pakistan!5e0!3m2!1sen!2s!4v1673252180193!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d26574.65612507391!2d73.00229673651998!3d33.635597366147024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x38df943772a3b733%3A0x5c70a79b764e4daf!2sWestridge%20III%20Westridge%203%2C%20Rawalpindi!3m2!1d33.6178802!2d73.0154376!4m5!1s0x38df9547e73f14af%3A0xabd0a2f0e165cd6e!2sPlot%2083%2C%20M23C%2B7Q3%20Bahria%20University%20(BSEAS)%20Islamabad%20H-11%2F4%20Campus%2C%2084%2C%20H-11%2F4%20H%2011%2F4%20H-11%2C%20Islamabad%2C%20Islamabad%20Capital%20Territory%2C%20Pakistan!3m2!1d33.6517141!2d73.0217!5e0!3m2!1sen!2s!4v1671875901334!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d53145.158606913734!2d72.9051479669296!3d33.642327164015924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x38dfa28485d91c89%3A0x8c133d0f3681f412!2sD-17%2C%20Islamabad!3m2!1d33.659050799999996!2d72.8588506!4m5!1s0x38df9547e73f14af%3A0xabd0a2f0e165cd6e!2sPlot%2083%2C%20M23C%2B7Q3%20Bahria%20University%20(BSEAS)%20Islamabad%20H-11%2F4%20Campus%2C%2084%2C%20H-11%2F4%20H%2011%2F4%20H-11%2C%20Islamabad%2C%20Islamabad%20Capital%20Territory%2C%20Pakistan!3m2!1d33.6517141!2d73.0217!5e0!3m2!1sen!2s!4v1671875967234!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d106304.52739998032!2d73.01950775840163!3d33.630814658690085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x38dfed061bb8314d%3A0x887fee91733548aa!2sBahria%20Town%20Phase%20IV%20Phase%204%20Bahria%20Town%2C%20Rawalpindi!3m2!1d33.5497783!2d73.1305349!4m5!1s0x38dfbef8c137888d%3A0xc3ccfd031ad14ba6!2sBahria%20University%2C%20Shangrilla%20Road%2C%20E-8%2F1%20E%208%2F1%20E-8%2C%20Islamabad!3m2!1d33.7155886!2d73.0288246!5e0!3m2!1sen!2s!4v1671876077509!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d53134.203495189315!2d73.0247902670577!3d33.66007111273704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x38dfeb1646b1a581%3A0xc27c069b3e4ede8e!2sKhanna%20Pul%2C%20Khanna%20Bilal%20Town%20Khanna%2C%20Islamabad%2C%20Islamabad%20Capital%20Territory%2C%20Pakistan!3m2!1d33.6291327!2d73.11355549999999!4m5!1s0x38df9547e73f14af%3A0xabd0a2f0e165cd6e!2sPlot%2083%2C%20Bahria%20University%20(BSEAS)%20Islamabad%20H-11%2F4%20Campus%2C%20H-11%2F4%20H%2011%2F4%20H-11%2C%20Islamabad!3m2!1d33.6517141!2d73.0217!5e0!3m2!1sen!2s!4v1671876118882!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div> 
       <div class="col-md-3"></div> 
        
    </div> 
    
<script>
var myVar;

    //for fakeloader
function myFunction() {
    //myVar = setTimeout(showPage, 1500);
}

function showPage() {
  //document.getElementById("loader").style.display = "none";
  //document.getElementById("myDiv").style.display = "block";
}
</script>

<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>

</body>
</html>
