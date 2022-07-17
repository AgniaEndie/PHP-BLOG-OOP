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
<?php
if($_POST['sign_up'] == "Регистрация"){
    $UserRegistry = new UserRegistry();


}
?>
<!--sign_up form-->
<div class="modal fade" id="sign_up_modal" tabindex="-1" aria-labelledby="sign_up_modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
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
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
