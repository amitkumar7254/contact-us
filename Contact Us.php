<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 50%;
  }
}
</style>
</head>
<body>

<h2>Responsive Contact Section</h2>

<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="../Contact Us/23.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="db2.php">
        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="Full_Name" placeholder="Your name..">
        <label for="email">Email</label>
        <input type="text" id="email" name="Email" placeholder="Your email..">
        <label for="country">Country</label>
        <select id="country" name="Country">
          <option value="ind">India</option>
          <option value="canada">Canada</option>
          <option value="indo">Indonesia</option>
          <option value="australia">Australia</option>
          <option value="usa">USA</option>
          <option value="nzland">New Zealand</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="Subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>
