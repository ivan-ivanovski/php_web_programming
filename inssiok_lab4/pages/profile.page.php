<?php
    require_once "../config.php";
    require_once "../templates/header.php";
    global $conn;
    if(!isset($_SESSION['userId'])){
        header('location:login.page.php');
    }
    $sql='SELECT * FROM user WHERE id=:uid';
    $stmp=$conn->prepare($sql);
    $stmp->bindValue(':uid',$_SESSION['userId'],SQLITE3_INTEGER);
    $res=$stmp->execute()->fetchArray(SQLITE3_ASSOC);
    if(!$res) die;
?>

<div class="container-fluid mx-0 p-0">
    <div class="text-white" style="background-color: #000; height:350px;">
            <div class="container mx-0 d-flex flex-row justify-content-center align-items-end gap-4 h-100">
                <div style="width: 150px;" >
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                         alt="Generic placeholder image" class="img-fluid img-thumbnail"
                         style="width: 150px; z-index: 1">
                </div>
                <div>
                    <h3><?=$res['first_name'].' '.$res['last_name']?></h3>
                    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light" data-mdb-ripple-color="dark" style="z-index: 1;">
                        Edit profile
                    </button>
                </div>
            </div>
    </div>
    <div class="container my-2 h-100 w-50 p-1">
        <div class="mb-5 text-body">
            <p class="lead fw-normal mb-1">About</p>
            <div class="p-4 bg-body-tertiary">
                <p>Empty</p>
            </div>
        </div>
    </div>

</div>
<?php require_once "../templates/footer.php";?>