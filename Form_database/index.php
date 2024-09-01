<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forms</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
      <h1>Details form</h1>
      <form action="connect.php" method="POST">
        <div>
          <!-- <label for="name" name="name">Name</label> -->
          <input type="text" name="name" id="" autocomplete="off" placeholder="Name" required/>
        </div>
        <div>
          <!-- <label for="email" name="email">Email</label> -->
          <input type="email" name="email" id="" autocomplete="off" placeholder="Email" required/>
        </div>
        <div>
          <!-- <label for="mobile" name="mobile">Mobile</label> -->
          <input type="number" name="mobile" id="" min="1000000000" max="9999999999" autocomplete="off" placeholder="Mobile" required/>
        </div>
        <div>
          <!-- <label for="city" name="city">City</label> -->
          <input type="text" name="city" id="" autocomplete="off" placeholder="City" required/>
        </div>
        <div class="gender-container">
          <!-- <label for="gender" name="gender">Gender</label> -->
          <input type="radio" name="gender" id="" value="m" class="gender1" required/>Male
          <input type="radio" name="gender" id="" value="f" class="gender1"/>Female
          <!-- <input type="radio" name="gender" id="" value="o" class="gender1"/>Others -->
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>
