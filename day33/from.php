<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <title></title>
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form method="get" action="insert.php" >
  
              <div class="row">
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
                    <input type="text" id="firstName" name="name" class="form-control form-control-lg" required />
                    <label class="form-label" for="firstName">Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline">
                    <input type="text" id="phone" name="phone" class="form-control form-control-lg"required />
                    <label class="form-label" for="phone">phone </label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div data-mdb-input-init class="form-outline datepicker w-100">
                    <input type="text" class="form-control form-control-lg" id="Email" name="email" required />
                    <label for="Email" class="form-label">email</label>
                  </div>

                </div>
                <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div data-mdb-input-init class="form-outline">
                    <input type="text" id="address" name="address" class="form-control form-control-lg" />
                    <label class="form-label" for="address">address</label>
                  </div>

                </div>
                 </div>
              </div>

              <div class="row">
                <div class="col-12">

                 

                </div>
              </div>

              <div class="mt-4 pt-2">
                <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>