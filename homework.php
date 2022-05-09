<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="submit.php" method="post">
<div>GRADE
<select name="grade">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select><br><br>

DEPARTMENT
<input type="radio" name="department" value="MM">MM
<input type="radio" name="department" value="IC">IC
<input type="radio" name="department" value="CS">CS  
<input type="radio" name="department" value="EE">EE
<br><br>
COURSES<br>
<input type="checkbox" id="course[]" name="course[]" value="JAVA">
<label for="course[]">JAVA</label>
<input type="checkbox" id="course[]" name="course[]" value="Security">
<label for="course[]">Security</label><br>
<input type="checkbox" id="course[]" name="course[]" value="Network">
<label for="course[]">Network</label>
<input type="checkbox" id="course[]" name="course[]" value="C++">
<label for="course[]">C++</label><br>
<input type="checkbox" id="course[]" name="course[]" value="Web Design">
<label for="course[]">Web Design</label>
<input type="checkbox" id="course[]" name="course[]" value="Circuit">
<label for="course[]">Circuit</label>

<br>

</div>

<div>
<br>
<input type="char" name="name"></div>
<input type="submit" name="submit" value="SUBMIT"> <br>

</form>
</body>
</html>