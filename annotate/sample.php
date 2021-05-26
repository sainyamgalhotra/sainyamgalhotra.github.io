<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>

</head>
<body>
<center><h2>Answer "yes" or "no" to the following question. Once you answer the question, you will be prompted with a new question. The more questions you answer, the better results we get :) So please answer as many as you can ! Thank you for volunteering ! </h2></center>

<?php
   // Read these values from the cities database or a txt file
 
   $cities = explode("\n", file_get_contents('cities.txt'));
   $states = explode("\n", file_get_contents('states.txt'));

   $len=count($cities);
   $l=range(0,$len-2);
   shuffle($l);
   $list=array_combine($l,range(0,$len-2));

   $city1=$cities[$list[0]];
   $city2=$cities[$list[1]];
   $city3=$cities[$list[2]];
   $city4=$cities[$list[3]];

   $state1=$states[$list[0]];
   $state2=$states[$list[1]];
   $state3=$states[$list[2]];
   $state4=$states[$list[3]];

?>

<form action="post.php" method="post">

 <pre>
  <br>Distance(<i>city1</i>, <i>city2</i>) denotes the distance between the two cities. <br> <br><br>
 <b>Q.  Is Distance(<i><?php echo $city1?>, <?php echo $city2?></i>) &lt Distance(<i><?php echo $city3?>, <?php echo $city4?></i>) ? </b> 
 <pre>

 <input type="submit" name="action" value="Yes"> <br>
 <input type="submit" name="action" value="No">

 <br>
 <i>Hint :</i> <br>
 <i><?php echo $state1?></i> is in <?php echo $state1?>, USA <br>
 <i><?php echo $state2?></i> is in <?php echo $state2?>, USA<br>
 <i><?php echo $state3?></i> is in <?php echo $state3?>, USA<br>
 <i><?php echo $state4?></i> is in <?php echo $state4?>, USA<br><br>
 
 <input type="hidden" name="city1" value=<?php echo $city1?>>
 <input type="hidden" name="city2" value=<?php echo $city2?>>
 <input type="hidden" name="city3" value=<?php echo $city3?>>
 <input type="hidden" name="city4" value=<?php echo $city4?>>
    					    
</form> 
  <!-- Customise the Thankyou Message People See when they submit the form: -->
  <div style="display:none;" id="thankyou_message">
    <h2><em>Thanks</em> for contacting us!
      We will get back to you soon!</h2>
  </div>

 <script data-cfasync="false" type="text/javascript"
  src="https://cdn.rawgit.com/dwyl/html-form-send-email-via-google-script-without-server/master/form-submission-handler.js"></script>
  <!-- <script data-cfasync="false" type="text/javascript"
  src="/form-submission-handler.js"></script> -->
<!-- END -->
</body>
</html>

