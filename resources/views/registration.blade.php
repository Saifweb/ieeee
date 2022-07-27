<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/registration.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <!--header button!-->
  </head>
<body >
  <!--form registration-->
        <div class="wrapper" >
        <h2>Registration</h2>
      <form action="/create" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label" value="requried">Name</label>
          <input type="name" name="name" class="form-control" id="exampleInputName" aria-describedby="name" required>
          <div id="name" class="form-text">Full Name.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Phone</label>
          <input type="text"  name="phone"class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3">
        <label for="disabledSelect" class="form-label" >I will attend</label>
      <select id="disabledSelect" name="attend" class="form-select" required>
        <option>CO</option>
        <option>hack</option>
        <option>co&hack</option>
      </select>
        </div>
        <div class="mb-3">
      <label for="disabledSelect" class="form-label" >State</label>
      <select id="disabledSelect" name="state" class="form-select" required>
        <option>Student</option>
        <option>Teacher</option>
        <option>Employee</option>
      </select>
    </div >
            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="submit" >Submit</button>
            </div>
      </form>
      </div>
      <div id="particles-js" class="bago">
      <script src="/js/particles.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/particles.min.js"></script>
  </div>
</body>
</html>
