<html>
<head>
<title>Compiler</title>
</head>
<body>
<?php
if($_POST!=NULL){
$n=$_POST['tf'];
$p=$_POST['ta'];
$myfile=fopen("input.txt","a");
$myfile2=fopen("i.txt","a");
file_put_contents("input.txt","");
file_put_contents("i.txt","");
file_put_contents("input.txt",$n."\n". $p,FILE_APPEND);
file_put_contents("i.txt",$p,FILE_APPEND);
}
?>
<form action="first.php" method ="post">
Enter the number of productions you want to enter:<br><br>
<input type="text" placeholder="No. of productions" id="textfield" name="tf" value="<?php if(isset($_POST['tf'])) echo $_POST['tf'];?>"><br><br>
Enter the productions:<br><br>
<textarea rows="15" cols="50" name="ta" placeholder="Enter The Grammar" id="textarea" onkeyup="success()">
<?php if(isset($_POST['ta'])) echo $_POST['ta'];?>
</textarea><br><br>
Choose any 1 language:
<input type="radio" value="Java" id="b1" name="yo" disabled>Java
<input type="radio" value="C" id="b2" name="yo" disabled>C &emsp;
	  
             <label>Select The Type: </label>
             <select id = "myList" name="drop">
               <option value = "1" name="first">First</option>
               <option value = "2" name="follow">Follow</option>
               <option value = "3" name="rd">Recursive Descent</option>
               <option value = "4" name="lr">Left Recursion</option>
		<option value = "5" name="lf">Left Factoring</option>
		<option value = "6" name="la">Lexical Analyzer</option>
             </select>
&emsp;
<button type="submit" id="b1" name="proceed" style="height:40px;width:100px">Proceed</button>      
<p>
<textarea rows="15" cols="50" name="ta2" placeholder="Answer" id="textarea2" readonly>

</textarea>
</p>
</form>
<script>
function success()
{
	 if(document.getElementById("textarea").value=="") { 
            document.getElementById('b1').disabled = true;
		document.getElementById('b2').disabled = true;
        } else { 
            document.getElementById('b1').disabled = false;
		document.getElementById('b2').disabled = false;
        }
}
</script>

</body>
</html>
