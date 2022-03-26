<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Üye Kayıt Sayfası</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="row justify-content-md-center mt-5 ">
                <div class="col col-lg-6 ">

                    <div class="fs-4 text text-center mt-5">ÜYE KAYIT FORMU</div>
                    <?php if (isset($_SESSION['passError'])) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION['passError'];
                                unset($_SESSION['passError']);
                            ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                    <?php if (isset($_SESSION['passError'])) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo $_SESSION['userDbError'];
                            unset($_SESSION['userDbError']);
                            ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>
                    <form action="usersave" method="post">
                        <div class="mb-3">
                            <label for="exampleInputAdi" class="form-label">Adı </label>
                            <input type="text" name="adi" class="form-control" id="exampleInputAdi">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputSoyadi" class="form-label">Soyadı </label>
                            <input type="text" name="soyadi" class="form-control" id="exampleInputSoyadi">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="job" class="form-label">Mesleğiniz</label>
                            <select class="form-select" name="job" aria-label="Default select example">
                                <option selected>Lütfen Seçim Yapınız</option>
                                <option value="1">Yönetici</option>
                                <option value="2">Developer</option>
                                <option value="3">Grafiker</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputRePassword1" class="form-label">Repeat Password</label>
                            <input type="password" name="repass" class="form-control" id="exampleInputRePassword1">
                        </div>

                        <button type="submit" class="btn btn-primary float-end">Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>