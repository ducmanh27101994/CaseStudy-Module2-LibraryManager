<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=list-book">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=list-category">List Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=list-book">List Book</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=list-student">List Student</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Card Borrows
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php?page=add-borrow">Add Borrow</a>
                    <a class="dropdown-item" href="index.php?page=list-borrow">Return Borrow</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.php?page=fullList-detail">Full List Borrow</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=list-detail">List Detail</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    List Borrows
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php?page=fullList-detail">Full List Borrow</a>
                    <a class="dropdown-item" href="index.php?page=borrowBook-detail">Borrow Books</a>
                    <a class="dropdown-item" href="index.php?page=giveBookBack-detail">Give Book Back</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="btn btn-danger" href="index.php?page=logOut">Log Out</a>
            </li>
        </ul>
        <!--        <form class="form-inline my-2 my-lg-0">-->
        <!--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
        <!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
        <!--        </form>-->
    </div>
</nav>