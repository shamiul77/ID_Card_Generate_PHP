<!DOCTYPE html>
<html>
<style>
  body{
    margin: 50px;
  }

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


input[type=submit]:hover {
  background-color: #45a049;
}


div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

  <h3>Student Info Form</h3>

  <div>
    <form action="id.php" method="post">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Type Your Name..">

      <label for="email">Email</label>
      <input type="text" id="email" name="email" placeholder="Type Your Email...">

      <label for="id">Id</label>
      <input type="text" id="id" name="id" placeholder="Type Your Id...">

      <label for="department">Department</label>
      <input type="text" id="department" name="department" placeholder="Type Your Department...">

      <input type="submit" name="submit" value="Submit">
    </form>
  </div>

</body>
</html>
