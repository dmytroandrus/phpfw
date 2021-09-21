<!DOCTYPE>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title><?= $title ?? '' ?></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="../../../public/blog/style.css" rel="stylesheet" type="text/css" media="screen" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>

    <div id="header-wrapper">
        <div id="header">
            <div id="menu">
                <ul>
                    <li class="current_page_item"><a href="/">Home</a></li>
                    <a href="/page/about">About</a>
                    <a href="/admin">Admin</a>
                    <a href="/user/signup">Signup</a>
                    <a href="/user/login">Login</a>
                    <li> <a href="/user/logout" class="last">Logout</a></li>
                </ul>
            </div>
            <!-- end #menu -->

            <div id="search">
                <form method="get" action="">
                    <fieldset>
                        <input type="text" name="s" id="search-text" size="15" />
                        <input type="submit" id="search-submit" value="GO" />
                    </fieldset>
                </form>
            </div>
            <!-- end #search -->


        </div>
        <div>

        </div>
        <?php

        use phpfw\widgets\language\Language;

        new Language(); ?>
    </div>
    <!-- end #header -->
    <!-- end #header-wrapper -->
    <div id="logo">
        <h1><a href="#">Blog </a></h1>
        <p><em> bolg on <a href="#">phpfw</a></em></p>
    </div>
    <hr />
    <!-- end #logo -->


    <div id="page">
        <div id="page-bgtop">
            <div id="content">
                <div class="post">
                    <p class="meta"><span class="date"><?= date('l, F d, Y') ?></span> <?= date('H:i') ?> </p>
                    <!-- <h2 class="title"><a href="#">Welcome to Predilection </a></h2> -->
                    <div class="entry">
                        <p><?= $content ?? '' ?></p>
                    </div>
                </div>

            </div>
            <!-- end #content -->
            <?php include_once APP . '/views/inc/sidebar.php' ?>
            <!-- end #sidebar -->
            <div style="clear: both;">&nbsp;</div>
        </div>
        <!-- end #page -->
    </div>
    <div id="footer">
        <p>Copyright (c) <?= date('Y') ?>. All rights reserved.</p>
    </div>
    <!-- end #footer -->

    <script src="/public/blog/js/main.js"></script>
</body>

</html>