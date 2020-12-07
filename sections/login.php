<?php include('header.php') ?>
<div class="bg-image"></div>

<div class="bg-text">
<form>
      <div class="form-group mt-2">
        <div class="input-group w-100">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-user"></i>
            </div>
          </div>
          <input type="text" class="form-control" id="user" placeholder="Nombre de usuario" name="user">
        </div>
      </div>

      <div class="form-group">

        <div class="input- w-100">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-key"></i>
            </div>
            <input type="password" class="form-control " id="pass" placeholder="Clave" name="pass">
          </div>
        </div>

      </div>
      <button type="submit" class="btn btn-dark">Ingresar</button>
    </form>
</div>

<!-- LOGIN! -->
<div class="container-fluid d-flex flex-row pt-5 h-100 justify-content-center align-items-center .bg-text" id="login">
  <div class="container w-25 text-center p-5 bg-light border border-dark rounded shadow align-middle">
    <img src="img/login.png" alt="login_user" style="width:100px;height:100px;">
    <form>
      <div class="form-group mt-2">
        <div class="input-group w-100">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-user"></i>
            </div>
          </div>
          <input type="text" class="form-control" id="user" placeholder="Nombre de usuario" name="user">
        </div>
      </div>

      <div class="form-group">

        <div class="input- w-100">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-key"></i>
            </div>
            <input type="password" class="form-control " id="pass" placeholder="Clave" name="pass">
          </div>
        </div>

      </div>
      <button type="submit" class="btn btn-dark">Ingresar</button>
    </form>
  </div>
</div>
<!-- Fin LOGIN! -->
<?php include('footer.php') ?>