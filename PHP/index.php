<?php
$uri = $_SERVER["REQUEST_URI"];


switch ($uri) {
    case '/':
        include_once __DIR__  . '/../view/home.php';
    break;

    case '/Admin':
        include_once __DIR__  . '/../view/Admin.php';
        break;

    case '/login':
        include_once __DIR__  . '/../PKG/Admin.php';
        break;

    case '/beeldhouwatelier':
        include_once __DIR__  . '/../view/beeldhouw.php';
        break;

    case '/vakantiehuisfrankrijk':
        include __DIR__  . '/../view/frankrijk.php';
        break;

    case '/verhalen':
        include __DIR__  . '/../view/verhaal.php';
        break;

    case '/vakantiehuistexel':
        include __DIR__  . '/../view/texel.php';
        break;

    case '/contact':
        include __DIR__  . '/../view/contacten.php';
        break;

    case '/QAT':
        $title = "QAT";
        $story = "QAT.html";
        include __DIR__  . '/../view/story.php';
        break;

    case '/MamaObama':
        $title = "Mama Obama";
        $story = "Obama.html";
        include __DIR__  . '/../view/story.php';
        break;

     case '/zelfdokteren':
        $title = "zelf dokteren";
        $story = "zelfdokteren.html";
        include __DIR__  . '/../view/story.php';
        break;

    case '/mevrouwvertrouwdehetniet':
        $title = "Mevrouw vertrouwde het niet";
        $story = "mevrouw.html";
        include __DIR__  . '/../view/story.php';
        break;
    default:
        http_response_code(404);
        die();
    
    
}
