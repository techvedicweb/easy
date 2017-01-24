<!-- 
Go Back History Didnot work

// <script type="text/javascript">
//         window.history.forward();
//         function noBack()
//         {
//             window.history.forward();
//         }
// </script>
// <body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
//    <a href="index.php">sdfg</a> -->
<!DOCTYPE html>
<html>
<head>
<style>
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

button.accordion:after {
    content: '\02795';
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
}

button.accordion.active:after {
    content: "\2796";
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: 0.6s ease-in-out;
    opacity: 0;
}

div.panel.show {
    opacity: 1;
    max-height: 500px;
}
</style>
</head>
<body>
<div id="a">Mahendcer</div>
<h2>Accordion with symbols</h2>
<p>१. सुखी शादी के मन्त्र 
२. क्या कहना - इसलिए मैं आप सभी से अनुरोध करता हूँ की आप सभी  जो नए वैवाहिक जीवन मैं बंधने जा रहे हैं  वेदीक्षादि.कॉम पर रजिस्ट्रेशन करें और अपने वैवाहिक जीवन को सफल बनाये . धन्यवाद 
३. कृष्ण भावना मर्त मैं शादी का महत्व 
४. शादी के प्रति अन्य आचार्यो के विचार 
२. इस्क्कों के महान आचार्यो का शादी के प्रति विचार 
उतर - जीवन रूपी गाड़ी को चलाने के लिए पति व पत्नी दो पहियो के समान हैं . यदि एक भी पहिया (चक्र) मैं कमी है तो गाड़ी नही चल पायेगी . दूसरे का साथ दे कर जीवन को आगे बढाते हैं  और जीवन की सार्थकता को पूर्ण करते हैं .
" जीवन भागवान का एक अनुपम उपहार हैं  और पति - पत्नी इस उपहार के दो बीज हैं जो भगवान् के जीवन रूपी उपहार को आगे बढाते  हैं  "

६. विवाह की पद्धति - 
                               आधुनिक युग मैं विवाह अनगिनत विकल्पों और समझोतो का विषय बन गया हैं . लड़का और लड़की एक दूसरे को पसंद करते हैं  और स्वेच्छापूर्वक एक बंधन मैं बांध जाते हैं  जो विवाह की सही पद्वति नही है. 
सभी धर्मो मैं विवाह की अलग - अलग पद्धतिया है . जो सही व सत्य है . हमें इन्हें अपनाकर ही वैवाहिक जीवन को जीना चाहिए . हम यह सभी धर्मो के लोगो को जगरूप करके उन्ही की प्रथा के अनुसार उसका विवाह करने का परयह कर रहें है .
हमारे सभी धर्मवासियो से निवदेन है वह इसे किसी विशेष धर्म से  जोड़कर न देखें . हम धर्म से ऊपर उठकर  मानव जीवन के उद्देश्यों को कैसे पूरा करें ? से है | इसके लिए किन शिक्षाओ की आवश्यकता है इसे देने का प्रयास है |
६. वेदीक्षादि.कॉम ही क्यों ? -
 हरे कृष्ण , हमारे आस पास बहुत सी ऐसी संस्थाए है जो शादिया करवा रही हैं. उनका एकमात्र उदेशय शादी करवान और पैसे कमान है | कुछ संस्थाए युवक - युवतियों की मिलवाने का काम कर रहे हैं और बदले मैं पैसा ले रहें है . 
परंतु वैदिक शादी संस्था का मूल उद्देश्य हैं की नए  युवक - युवतियों  के कैसे प्रशिक्षण दें जिससे उनका वैवाहिक जीवन सुखमय हो सके | हमारे उद्दस्य हैं की ज्यादा से ज्याद युवक -युवतियों को उनकी पसंद के अनुसार मिलवाना और शाद्दी के महत्व को बताना |

" शादी एक सेक्स का साधन नही हैं | शादी का मतलब जीवन व समाज को सुचारू रूप से चलाने से हैं   "

शादी से ही जीवन रूपी ग्रस्थो को सुरुवात होती हैं  और यदि सुरुवात के ही समय यदि आप सही चुनाव नही कर पाए तो वह शादी नरक के समान हो जाती है  और यदि सही चुनाव कर लिया तो आप का जीवन स्वर्ग बन जाता है  और ऐसे जीवन की कामना देवता गण भी करते है.तो हम साधारण मनुष्य का जीवन अति सुखमय हो जायेगा . 
In this example we have added a "plus" sign to each button. When the user clicks on the button, the "plus" sign is replaced with a "minus" sign.</p>
<button class="accordion">Section 1</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 2</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">Section 3</button>
<div id="foo" class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<h2>Another Testing </h2>  

<form id="form">
////These row repeat. Total of 10 
<input name="agent_name" type="text"  id="PartQuantity" size="2" /> 
<select name="PartType"  id="PartType">
<option>MAhe</option>
	</select>
<input name="PartNumber[]" type="text"  id="PartNumber" size="10" />

<p class="showResults">Mahender</p>
</form>

<script>
$(document).ready(function(){
$('.showResults').click(function() {

//var postdata = $('#form').serialize(); 
$.ajax({
        type: "POST",
        url: "classes/AddAssets",
       data:$("#form").serialize(),
            
        success: function(html)
            {  
            //$("#res").html(html);
            alert(html)

                }
        });
 });

 });
 </script>

<!DOCTYPE html>
<html>
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<body>

<div id="mySidenav" class="sidenav" style="float:right;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<h2>Animated Sidenav Example</h2>
<p>Click on the element below to open the side navigation menu.</p>
<span style="font-size:30px;cursor:pointer;float:right" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
     
</body>
</html>

<!-- anpther one -->
<style type="text/css">

/** Style for the body **/
 body {
    font: 12px Tahoma, Arial, Helvetica, Sans-Serif;
}
/** Style for the button & div **/
 .myButton {
    padding: .2em 1em;
    font-size: 1em;
}
.mySelect {
    padding: .2em 0;
    font-size: 1em;
}
#myDiv {
    color:Green;
    background-color:#eee;
    border:2px solid #333;
    display:none;
    text-align:justify;
}
#myDiv p {
    margin: 15px;
    font-size: 0.917em;
}
/** Style for the cointainer **/
 #body {
    clear: both;
    margin: 0 auto;
    max-width: 534px;
}
html, body {
    background-color:White;
}
hr {
    margin-bottom:40px;
}
</style>
<script type="text/javascript">
$(".myButton").click(function () {

    // Set the effect type
    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: $('.mySelect').val() };

    // Set the duration (default: 400 milliseconds)
    var duration = 500;

    $('#myDiv').toggle(effect, options, duration);
});
</script>
<div id="body">
    
<h2>Slide toggle from right to left and left to right.</h2>

    <hr/>
    <p>
        <select class="mySelect">
            <option value="right">Right</option>
            <option value="left">Left</option>            
            <option value="up">Up</option>
            <option value="down">Down</option>
        </select>
        <button id="button" class="myButton">Run Effect</button>
    </p>
    <div id="myDiv">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    </div>
</div>
<br>
<script type="text/javascript">
$(document).ready(function(){

​var date = new Date();
var yesterday = date - 1000 * 60 * 60 * 24 * 2;   // current date's milliseconds - 1,000 ms * 60 s * 60 mins * 24 hrs * (# of days beyond one to go back)
yesterday = new Date(yesterday);
alert(yesterday);​
});

</script>
<?php
$a = "content a";
$b = "content b";

// Swap $a and $b
list($a, $b) = array($b, $a);

echo $a;
echo "<br>";
echo $b;
echo "<br>";
  function factorial($number) { 

        if ($number < 2) { 
            
            return 1; 
        } else { 
           
            return ($number * factorial($number-1)); 
        } 
    }
echo factorial(10);

echo "<br>";
$rows=10;
$cols=3;
echo "<table border=\"1\">";

        for ($r =1; $r < $rows; $r++){

            echo'<tr>';

            for ($c = 2; $c < $cols; $c++)
                echo '<td>' .$c*$r.'</td>';
           echo '</tr>'; // close tr tag here

        }

  echo"</table>";

?>
<p id="view">see here</p>
<!-- <iframe style="display:block;" id="data_iframe" width='750px' height='400px' frameborder='no' src='https://techvedic.wildapricot.org/widget/Sys/Profile'  onload='tryToEnableWACookies("https://techvedic.wildapricot.org");' ></iframe><br/>
 -->
<script type="text/javascript">
$(document).ready(function(){
    $("#view").click(function(){

var aa=$("#PAGEID_18004").html();
$("#a").html(aa);
alert(aa);
});
     
    });
    $(document).ready(function(){
        $.ajax(
        {
            //apikey-qzdvu0oe7wne7xjzj1r7zm2t9uj59y 
           // clintid-hcvh4lyjoy
           // secreate-aump03q1r5qnwxp6t3ph2awcdig8bd
           //localtest
           //tdymkjp663zeisb310vd3g14if4hnw 
           //localtest
           //od11sj9x8mj300ioj7glxflxrs2n3k
            url: "https://techvedic.wildapricot.org/sys/api/v2/accounts/1/contacts/me",
            type: "GET",
            dataType: "json",
            cache: false,
            async: true,     
            headers: { "clientId": "tdymkjp663zeisb310vd3g14if4hnw" },
            success: function (data, textStatus, jqXhr) {     
                //alert("Current contact id:" + data.Id + ". Contact email:" + data.Email);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                //alert(textStatus + " (" + jqXHR.status + ") : " + errorThrown);
             }
        });
    });


    $(document).ready(function(){
        $.ajax(
        {
            url: "https://techvedic.wildapricot.org/sys/api/v2/accounts/1/contacts/me",
            type: "GET",
            dataType: "json",
            cache: false,
            async: true,     
            headers: { "clientId": "localtest" },
            success: function (data, textStatus, jqXhr) {     
                //alert("Current contact id:" + data.Id + ". Contact email:" + data.Email);},
            error: function (jqXHR, textStatus, errorThrown) {
               // alert(textStatus + " (" + jqXHR.status + ") : " + errorThrown);}
        });
    });

</script>

<html>
<head>
<title>Sample PHP application for Wild Apricot API</title>
</head>
<body>
<p>
This application demonstrates how to use Wild Apricot API v2.

See http://help.wildapricot.com/display/DOC/API+Version+2 for detailed description of API.
<p>
<hr>
<style type="text/css">div.items p {
  display: none
}
div.items p:target {
  display: block
}
#stage {
  position: releative;
}
#stage>div {
  display: inline-block;
}
#stage .item {
  position: absolute;
  z-index: 10;
  display: none;
  left: 8px;
  width: 90%
}
#stage #item1 .item {
  display: block;
  z-index: 1;
}
#stage>div:target .item {
  display: block;
}
.tabbuttons {
  color: #fff;
  background-color: #3195c1;
  border: none;
  padding: 10px;
}
.tabbuttons:hover,
:target .tabbuttons {
  background-color: PURPLE;
}
.tabcontent {
  background: #ddd;
  min-height: 100px;
}</style>
<div id="stage">
  <div id="item1">
    <a href="#item1" class="tabbuttons">item 1</a>
    <div class="item">
      <p class="tabcontent">... item 1...</p>
    </div>
  </div>
  <div id="item2">
    <a href="#item2" class="tabbuttons">item 2</a>
    <div class="item">
      <p class="tabcontent">... item 2...</p>
    </div>
  </div>
  <div id="item3">
    <a href="#item3" class="tabbuttons">item 3</a>
    <div class="item">
      <p id="item3" class="tabcontent">...</p>
    </div>
  </div>

    <div id="item4">
    <a href="#item4" class="tabbuttons">item 4</a>
    <div class="item">
      <p id="item4" class="tabcontent">...IT$</p>
    </div>
  </div>

</div>

<script type="text/javascript">

$(function() {    
    $('.tabbuttons').on('click', function() {
        $('.tabbuttons').removeClass('activeTab'); /* solution for a. */
        $(this).addClass('activeTab'); /* solution for a. */
        var i = $(this).attr('href');
        $('.items p').hide();
        $(i).show();
    });
});
</script>

<ul class="tabs">
<li><a href="#welcome">welcome</a></li>
<li><a href="#one">tab 01</a></li>
<li><a href="#two">tab 02</a></li>
</ul>

<section class="tab_container">
<article id="welcome" class="tab_content"><p>content</p></article>
<article id="one" class="tab_content"><p>content</p></article>
<article id="two" class="tab_content"><p>content</p></article>
</section>

<script type="text/javascript">

$(document).ready(function() {

    //Default Action
    $(".tab_content").hide(); //Hide all content
    $("ul.tabs li:first").addClass("active").show(); //Activate first tab
    $(".tab_content:first").show(); //Show first tab content

    //On Click Event
    $("ul.tabs li").click(function() {
        $("ul.tabs li").removeClass("active"); //Remove any "active" class
        $(this).addClass("active"); //Add "active" class to selected tab
        $(".tab_content").hide(); //Hide all tab content
        var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
        $(activeTab).fadeIn(); //Fade in the active content
        return false;
    });

});
</script>

<?php
$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
    $details;

?>
