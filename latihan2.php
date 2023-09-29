<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">DAFTAR NAMA & UMUR DI KELAS MI02NR</h1> <br>
    <?php
    $fn1 = "muhammad luthfi";
    $fn2 = "muhammad irgi";
    $fn3 = "irfan febriawan";
    $fn4 = "al faisal";
    $data = ['haisyam', 'irvan', 'irgi', 'luthfi', 'faisal']
    ?>
<div class="container text-center">
  <div class="row">
      <div class="col h4">
      <?php echo $fn1; ?>
      </div>
      <div class="col h4">
      <?php echo $fn2; ?>
      </div>
      <div class="col h4">
      <?php echo $fn3; ?>
      </div>
      <div class="col h4">
      <?php echo $fn4; ?>
      </div>
 </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>