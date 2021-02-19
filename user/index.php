<?php
    require_once('session.php');
    require_once('header.php');
?>

<body>
<nav class="sideNav">
    <div>
        <a href="#" class="closeBtn"><i class="fa fa-times-circle" id="btnCLose" aria-hidden="true"></i></a>
    </div>
    <div class="col-xl-12 text-center sidenavItem mt-5">
        <a href="#" class="sideNavLabel">ITEM 1</a>
    </div>
    <div class="col-xl-12 text-center sidenavItem">
        <a href="#" class="sideNavLabel">ITEM 2</a>
    </div>
    <div class="col-xl-12 text-center sidenavItem">
        <a href="#" class="sideNavLabel">ITEM 3</a>
    </div>
    <div class="col-xl-12 text-center sidenavItem">
        <a href="#" class="sideNavLabel">ITEM 4</a>
    </div>
</nav>
<main class="main-content" id="main">
    <span>
        <i class="btn far fa-arrow-alt-circle-left openSideNav" id="btnOpensidenav"></i>
    </span>
    <h1 class="dashboard-title">Dashboard Scrum IO</h1>
    <hr>
    <div class="col-xl-12 container text-center" id="dashBody">
        <div class="row">
            <div class="col-xl-3 rounded dashItem">
                item 1
            </div>
            <div class="col-xl-3 rounded dashItem">
                item 2
            </div>
            <div class="col-xl-3 rounded dashItem">
                item 3
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="row"> 
            <div class="col-xl-5 listItem">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Male</th>
                            <th scope="col">Address</th>
                            <th scope="col">Email Add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>#</th>
                            <td>Junel</td>
                            <td>12</td>
                            <td>Male</td>
                            <td>antipolo</td>
                            <td>Neladamos@yahoo.com</td>
                        </tr>
                        <tr>
                            <th>#</th>
                            <td>Junel</td>
                            <td>12</td>
                            <td>Male</td>
                            <td>antipolo</td>
                            <td>Neladamos@yahoo.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xl-5 listItem">
            <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Male</th>
                            <th scope="col">Address</th>
                            <th scope="col">Email Add</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>#</th>
                            <td>Junel</td>
                            <td>12</td>
                            <td>Male</td>
                            <td>antipolo</td>
                            <td>Neladamos@yahoo.com</td>
                        </tr>
                        <tr>
                            <th>#</th>
                            <td>Junel</td>
                            <td>12</td>
                            <td>Male</td>
                            <td>antipolo</td>
                            <td>Neladamos@yahoo.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

  
    <hr>
</main>
</body>
<script>

    let openBtn = document.querySelector(".openSideNav");
    openBtn.addEventListener("click", () => {
    showNav();
    });

    let closeBtn = document.querySelector(".closeBtn");
    closeBtn.addEventListener("click", () => {
    hideNav();
    });

    function showNav() {
    document.querySelector(".sideNav").style.width = "300px";
    document.querySelector('.main-content').style.marginLeft = "300px";
    }

    function hideNav() {
    document.querySelector(".sideNav").style.width = "0";
    document.querySelector('.main-content').style.marginLeft = "0px";
    }
</script>