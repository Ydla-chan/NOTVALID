<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login </title>

  <link rel="stylesheet" href="/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/vendors/feather/feather.css">
  <link rel="stylesheet" href="/vendors/base/vendor.bundle.base.css">
  <link rel="stylesheet" href="/css/style.css">

  
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <center> <strong><h4>E-SPMI Polibatam</strong> </center>
                <form class="pt-3" method="POST" action="/logini">
                  @csrf <!-- Laravel CSRF protection -->
                  <div class="form-group">
                    <label for="exampleInputEmail">Username</label>
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="mdi mdi-account-outline text-info"></i>
                        </span>
                      </div>
                      <input type="text" class="form-control form-control-lg border-left-0" id="username" placeholder="Masukan Username" name="username">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="mdi mdi-lock-outline text-info"></i>
                        </span>
                      </div>
                      <input type="password" class="form-control form-control-lg border-left-0" id="password" placeholder="Masukan Kata Sandi" name="password">                        
                    </div>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    
                  </div>
                  <div class="my-3">
                    <button type="submit" name="submit" class="btn btn-block btn-info btn-lg font-weight-medium auth-form-btn">Masuk</button>
                  </div>
                </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">© 2024 Politeknik Negeri Batam</p>
          </div>
        </div>
      </div>

    </div>

  </div>
  <script src="/vendors/base/vendor.bundle.base.js"></script>

  <script src="/js/hoverable-collapse.js"></script>
  <script src="/js/template.js"></script>
 
</body>

</html>
