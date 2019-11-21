<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creating Arrays : Calendar Demo</title>
</head>
<body>
    <?php
      /*This script will create 3 pull-down(dropdown) menus
      for calendar
      --month
      --days
      --years
      $month = array('January','February','March','April','May','June',
      'July','August','September','October','November','December');
      
      var_dump($month);
      */
      //default zero-based index array for month
 
      $month = array(1=>'January','February','March','April','May','June',
      'July','August','September','October','November','December');
 
      //debug
      var_dump($month);
 
      //get the current month from the system current date)
      $curMonth = date("n");
 
      //debug
      //echo $curMonth;
 
      //1.Create manth dropdown for month
      
     
      echo '<select name="month" id="month">';
      foreach($month as $key=>$value){
          if($key==$curMonth) echo "<option value='$key' selected>$value</option>";
          echo "<option value='$key'>$value</option>";
 
      }
      echo '</select>';
      echo '<select name="days" id="days">';
      for($days=1;$days<=31;$days++){
        echo "<option value='$days'>$days</option>";
      }
      echo '</select>';
         

      //2. Create the dropdown for DAYS
      //    Note: for each purpose of the demo(keep simpe), there will be
      //    31 days
      

      //get the current day from server date
      $curDay = date("j");
      //debug
      //echo $curDay;

      echo '<select name="days" id="days">';
      for($days=1;$days<=31;$days++) {
          if($days==$curDay)  echo "<option value='$days' selected>$days</option>";
          echo "<option value='$days'>$days</option>";
      }
      echo '</select>';
                
      //3. Create the dropdown for YEARS
       $curYear = date("Y"); //2019 , where as "y" 19       
          
       //Get the end year (current year + 10 years in future)
       $endYear = $curYear + 10; //2029       

       //create an array using range
       $years = range($curYear, $endYear);

       echo '<select name="years" id="years">';
       foreach($years as $key=>$value){
               echo "<option value='$key'>$value</option>";
       }

       
       
       echo '</select>';

      //testing
      //$number = cal_days_in_month(CAL_GREGORIAN, 11, 2020);
      //echo "There were {$number} days in November 2019";
    ?>
     <!-- <select name="month" id="month"></select>
     <option value="1">January</option> -->
       
</body>
</html>