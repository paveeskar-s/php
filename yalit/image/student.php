<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    img {
      width: 80px; 
      height: auto; 
    }
  </style>
</head>
<body>



    <?php

    $fname="Sivakaran";
    $id="1005";
    $lname="pavi";
    $grade="10B";

    ?> 
    <iframe width="560" height="315" src="https://www.youtube.com/embed/fm_X4xE2vos?si=H-FHWwgb3_Fw_P9w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <a href="../page/pavi.html">My html</a>
    <table border="2">
    
     <tr >
    <th colspan="3">Student Information</th>
    </tr>
    <td rowspan="5">
                    
    <a href="../page/java.mp4"><img src="../page/pavi.jpg" alt="My img"> </a>
                      <img src="../image/student/yoth.jpg" alt="My"></a>   
   
                  
    </td>

    <tr>
        <th>Student Id</th>
        <td><?php echo $id ?></td>
     </tr> 
       
     <tr>
        <th>Father Name</th>
        <td><?php echo $fname ?></td>
     </tr> 
       
     <tr>
        <th>Student Name</th>
        <td><?php echo $lname ?></td>
     </tr> 
       
     <tr>
        <th>Grade</th>
        <td><?php echo $grade ?></td>
     </tr> 



     <?php

     $maths=75;
     $science=96;
     $english=50;

     function getResult($mark) {
      if ($mark >= 75) {
          return "A";
      } elseif ($mark >= 67) {
          return "B";
      } elseif ($mark >= 59) {
          return "C";
      } elseif ($mark >= 45) {
          return "D";
      } else {
          return "F";
      }
  }

      ?>
       
    <tr>
     <th colspan="3">Marks Information
          
   </tr>
   <tr>
      <th>Subject</th>
      <th>Marks</th>
      <th>Results</th>
   </tr>
   <tr>
      <td>Maths </td>
      <td><?php echo $maths; ?></td>
      <td><?php echo getResult($maths); ?></td>


   </tr>
   
   <tr>
      <td>Science </td>
      <td><?php echo $science; ?></td>
      <td><?php echo getResult($science); ?></td>
   </tr>
   <tr>
      <td>English</td>
      <td><?php echo $english; ?></td>
      <td><?php echo getResult($english); ?></td>
</tr>
      
</body>
</html>