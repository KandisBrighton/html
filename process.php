<!--process.php -->
<!DOCTPE html>
<html lang = "en">
<html>
  <head>
    <meta charset="utf-8">
    <title>Process</title>
  </head>
  <body>
  <?php
    function validName($string)
    {
      return ctype_alpha($string) AND !empty($string);
    }
    
    if (validName($_GET['first'])) {
         $firstName = $_GET['first'];
         echo "<p>Hello, $firstName!</p>";
    } else {
         echo "<p>First name is required.</p>";
    }
    
    function validYear($string)
    {
      
      return ( !empty($string) AND is_numeric($string)  AND
             strlen($string) == 4 AND $string>=1800 );
    }
    
    if (validYear($_GET['year']))
    {
      $year = $_GET['year'];
      print "<p>The year is, $year</p>";
    } else { 
      print "<p>Invalid year.<\p>";
    }
    
    function validCreditCard($string)
    {
      // easier way to replace characters
      $string = str_replace("-", "", $string);
      $string = str_replace(" ", "", $string);
 // for testing     print "<br>new ssn is $string";
      return (!empty($string) AND is_numeric($string));
    /*  $newString = $string;
      $newLength = 0;
      for ($i=0; $i<strlen($string); $i++)
      {
        if (is_numeric($string[$i]))
        {
          $newString[$newLength] = $string[$i];
          $newLength ++;
        }
      }
     */ 
  // for testing    print "<br>old string: $string old length: " . strlen($string);
  // for testing   print "<br>new string: " . substr($newString,0,$newLength) . "  new length: $newLength";
  //    return is_numeric(substr($newString,0,$newLength));
    }
    
    if (validCreditCard($_GET['ccnum']))
    {
      $ccnum = $_GET['ccnum'];
      echo "<br>Credit card number is " . $ccnum;
    } else {
      echo "<br>Invalid credit card number";
    }
        
    /*
    print "<pre>";
    print_r($_GET);
    print "</pre>";
    
    if (!empty($_GET['first'])) {
      $firstName= $_GET['first'];
       print "<p>Hello, $firstName</p>";
    } else {
       print "<p>First name is required.</p>";
    }
      
    */
  ?>
  </body>
</html>