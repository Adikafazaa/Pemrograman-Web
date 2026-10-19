<html>
<head>
<title> Form Login </title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<form method="POST" action="ceklogin.php">
<div class="mb-3">
  <label>username</label>
  <input type="text" class="form-control form-control-sm" id="exampleFormControlInput1" placeholder="masukan username anda" name="username" required>
</div>
<div class="mb-3">
  <label>password</label>
  <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="masukan password anda" name="password" required>
</div>
<button type="submit"  class="btn btn-outline-success">Login</button>
<button type="button" class="btn btn-warning">Batal</button>
</form>
</body>

</html>