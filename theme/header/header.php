<?php

?>
<div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Simple Blog</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Главная</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Новости</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Обсуждение</a></li>
                <!--<li class="nav-item"><a href="#" class="nav-link">About</a></li>-->
                <?php
                    if($_SESSION['user'] == null){
                ?>
                       <!--<li class="nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#sign_up_modal">Регистрация</li>-->
                        <!--<li class="nav-item"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sign_up_modal">Регистрация</button></li>-->
                        <li class="nav-item"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sign_up_modal">Регистрация</button></li>
                        <li class="nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#sign_in_modal">Войти</a></li>

                <?php
                    }


                ?>
            </ul>
     </header>
</div>

<!--sign_up form-->
<div class="modal fade" id="sign_up_modal" tabindex="-1" aria-labelledby="sign_up_modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sign_up_modal_label">Регистрация</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="index.php" method="post">
                   <!-- -->
                        <label for="InputLogin" class="form-label">Логин</label>
                        <input type="text" class="form-control" id="InputLogin" name="login" aria-describedby="loginHelp">
                        <div id="loginHelp" class="form-text">We'll never share your email with anyone else.</div>

                        <label for="InputPassword" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="InputPassword" name="password" aria-describedby="passwordhelp">
                        <div id="passwordhelp" class="form-text">We'll never share your email with anyone else.</div>

                        <label for="InputPassAgain" class="form-label">Пароль еще раз</label>
                        <input type="password" class="form-control" id="InputPassAgain" name="password_again" aria-describedby="passagainHelp">
                        <div id="passagainHelp" class="form-text">We'll never share your email with anyone else.</div>

                        <label for="InputEmail1" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="InputEmail1" name="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

                        <div id="sign_up_button">
                            <input type="submit" name="sign_up" value="Регистрация">
                        </div>
                </form>
            </div>

        </div>
    </div>
</div>


<?php
//Auth (sign_in)
?>

<!--sign in form -->
<div class="modal fade" id="sign_in_modal" tabindex="-1" aria-labelledby="sign_in_modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sign_in_modal_label">Вход</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="index.php">
                    <label for="Input_login_auth" class="form-label">Логин</label>
                    <input type="text" class="form-control" id="Input_login_auth" name="login" aria-describedby="login_help_auth">
                    <div id="login_help_auth" class="form-text">We'll never share your email with anyone else.</div>

                    <label for="Inputpassword_auth" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="Inputpassword_auth" name="password" aria-describedby="password_auth_help">
                    <div id="password_auth_help" class="form-text">We'll never share your email with anyone else.</div>

                    <div id="sign_up_button">
                        <input type="submit" name="sign_in" value="Войти">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
