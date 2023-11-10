<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="google-site-verification" content="ZLHeqmsCjKA_FqhgzcuMSGvrliqR0QK5vgDwoCB9ZnI" />
    <title>Pyxys - <?php the_title(); ?></title>

    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <meta name="theme-color" content="#FF7C33">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" type="text/css"/>
</head>

<?php wp_head(); ?>

<body id="nav">
<header class="header">
    <div class="row g-0">
        <div class="col-11">
            <div class="bk-image-left">
                <div class="row mb-5">
                    <div class="col-4 col-md-2 mt-5">
                        <a href="<?php echo home_url(); ?>">
                            <img class="logo" src="<?php echo get_template_directory_uri() . '/assets/images/img.png'?>" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 subtitle">
                        <p>Conteudos e insights</p>
                    </div>
                    <div class="row">
                        <div class="col-4 col-md-12 title">
                            <p>As últimas do nosso blog</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <div class="bk-image-right">
                <div class="circle">
                    <div class="first-line"></div>
                    <div class="second-line"></div>
                    <div class="third-line"></div>
                </div>
            </div>
        </div>
    </div>
</header>
