<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fsport</title>
    <script src="https://kit.fontawesome.com/f5f3ef5d7f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/css/dangky_dangnhap.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/sharp-solid.css" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css" />
    <link rel="stylesheet" href="./src/css/header_hoan.css">
    <link rel="stylesheet" href="./src/css/gridsystem.css">
    <link rel="stylesheet" href="./src/css/section.css">
    <link rel="stylesheet" href="./src/css/category.css">
    <link rel="stylesheet" href="./src/css/sanpham.css">
    <link rel="stylesheet" href="./src/css/detail_product.css">
</head>

<body>
    <div class="grid">
        <!-- HEADER -->
        <header class="header">
            <div class="topbar">
                <img class="topbar__img" src="./src/image/img_header_hoan/banner.webp" alt="">
            </div>
            <div class="grid wide  mid-header">
                <div class="mid-header__logo">
                    <img src="./src/image/img_header_hoan/Layer 1.png" alt="">
                </div>

                <div class="mid-header__nav">
                    <form action="index.php?act=showProducts" class="mid-header__form" method="post">
                        <input type="text" name="kyw" class="mid-header__form__ip__searchTerm mid-header__form__ip--size" placeholder="Tìm kiếm...">
                        <button type="submit" class="mid-header__form__btn__searchIcon" name="search">
                            <i class="fas fa-search" style="font-size:22px;color:#ff2d37"></i>
                        </button>
                    </form>
                    <a class="mid-header__support__link" href="">
                        <div class="mid-header__support">
                            <div class="mid-header__support__text">
                                <p>Tư vấn bán hàng</p>
                                <span>Gọi ngay 19004673</span>
                            </div>
                            <img class="mid-header__sp__img" src="./src/image/img_header_hoan/circle-phone-removebg-preview.png" alt="">
                        </div>
                    </a>

                    <div class="mid-header__user">
                        <ul class="mid-header__user-menu">
                            <li><a href=""><i class="mid-header__user__icon mid-header__user__icon--color fas fa-user"></i></a>
                                <ul class="user__sup-menu">
                                    <li class="user__sup-menu__sign-in li-sign"><a href="index.php?act=dangnhap">Đăng nhập</a></li>
                                    <li class="user__sup-menu__sign-up li-sign"><a href="index.php?act=dangky">Đăng ký</a></li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                    <div class="mid-header__cart">
                        <a href=""><i class="mid-header__cart__icon mid-header__cart__icon--color fas fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </header>
        <div class="nav--bg-color">
            <nav class="nav">
                <ul class="nav__ul--main-menu">
                    <li class="nav__ul__li--list nav__ul--home"><a href="index.php">Trang chủ</a></li>
                    <li class="nav__ul__li--list nav__ul--product"><a href="index.php?act=showProducts">Sản phẩm</a></li>
                    <li class="nav__ul__li--list nav__ul--spt-male"><a href="">Thể thao nam</a></li>
                    <li class="nav__ul__li--list nav__ul--spt-female"><a href="">Thể thao nữ</a></li>
                    <li class="nav__ul__li--list nav__ul--contact"><a href="">Liên hệ</a></li>
                    <li class="nav__ul__li--list nav__ul--introduce"><a href="">Giới thiệu</a></li>
                    <li class="nav__ul__li--list nav__ul--news"><a href="">Tin tức</a></li>

                </ul>
            </nav>
        </div>