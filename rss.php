<?php
// Create connection
 $con=mysqli_connect("localhost","root","root","rss");
// Check connection
 if (mysqli_connect_errno($con)) {
 echo "Database connection failed!: " . mysqli_connect_error();
 }
 
 $sql = "SELECT * FROM rss_info ORDER BY id DESC LIMIT 20";
 $query = mysqli_query($con,$sql);
 
 header( "Content-type: text/xml");
 
 echo "<?xml version='1.0' encoding='UTF-8'?>
 <rss version='2.0'>
 <channel>
 <title>google.com | Google</title>
 <link>/</link>
 <description>Google Cloud</description>
 <language>en-us</language>";
 
 while($row = mysqli_fetch_array($query)){
   $title=$row["title"];
   $link=$row["link"];
   $description=$row["description"];
 
   echo "<item>
   <title>$title</title>
   <link>$link</link>
   <description>$description</description>
   </item>";
 }
 echo "</channel></rss>";
?>
