<?php require_once '../controllers/authController.php'; ?>
<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta3
* @link https://tabler.io
* Copyright 2018-2021 The Tabler Authors
* Copyright 2018-2021 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign up - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="../static/dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="../static/dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="../static/dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="../static/dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="../static/dist/css/demo.min.css" rel="stylesheet"/>
  </head>
  <body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
      <div class="container-tight py-4">
        <div class="text-center mb-4">
          <a href="."><img src="./static/logo.svg" height="36" alt=""></a>
        </div>
        <form class="card card-md" action="register.php" method="post">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Lezzet Dünyamıza Katıl!</h2>
            
            <?php if(count($errors)>0):?>
					    <div class="alert alert-danger">
					      	<?php foreach($errors as $errors):?>
						      <li><?php echo $errors;?></li>
						    <?php endforeach;?>
					    </div>
				    <?php endif; ?>

            <div class="mb-2">
					<label class="form-label"for="username">Kullanıcı adı</label>
					<input type="text" name="username" value="<?php echo $username; ?>"placeholder="Kullanıcı adı" class="form-control">
				</div>
        <div class="mb-2">
					<label class="form-label"for="email">Email</label>
					<input type="email" name="email" value="<?php echo $email; ?>"placeholder="E-mail"class="form-control">
				</div>
            <div class="mb-2">
              <label class="form-label"for="password">Şifre</label>
              <div class="input-group input-group-flat">
                <input type="password" name="password" class="form-control"  placeholder="Şifre"  autocomplete="off">
              </div>
            </div>
            <div class="mb-2">
              <label class="form-label"for="passwordConf">Şifre(Tekrar)</label>
              <div class="input-group input-group-flat">
                <input type="password"name="passwordConf" class="form-control"  placeholder="Şifre (Tekrar)"  autocomplete="off">
              </div>
            </div>
            <div class="mb-3">
              <label class="form-check">
                <input type="checkbox" class="form-check-input"/>
                <span class="form-check-label">Agree the <a href="./terms-of-service.html" tabindex="-1">terms and policy</a>.</span>
              </label>
            </div>
            <div class="form-footer">
              <button type="submit" name="signup-btn" class="btn btn-primary w-100">Kayıt Ol</button>
            </div>
          </div>
        </form>
        <div class="text-center text-muted mt-3">
        Üye misin? <a href="login.php" tabindex="-1">Giriş yap</a>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="../static/dist/js/tabler.min.js"></script>
  </body>
</html>
