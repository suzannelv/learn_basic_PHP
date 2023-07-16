<meta charset = "utf-8" />
<form action="./calc.php" method="post">
  <input type="text" name= "no1" placeholder="enter le premier chiffre">
  <select name="operator">
    <option value="add">+</option>
    <option value="sub">-</option>
    <option value="multiple">*</option>
    <option value="divise">/</option>
  </select>
  <input type="text" name="no2" placeholder="entrer le deuxième chiffres">
  <input type="submit" name="submit" value="=">
</form>