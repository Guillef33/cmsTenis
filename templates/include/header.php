<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo htmlspecialchars( $results['pageTitle'] )?></title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="responsive.css" />
    <link rel="stylesheet" type="text/css" href="menu.css" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
  
  </head>
  <body>
    <div id="container">
  

      <div class="navbar">
        <div class="container nav-container">
            <input class="checkbox" type="checkbox" name="" id="" />
            <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
            </div>  
          <div class="logo">
            <h1><a href="http://localhost/php/cms2021/">El blog del tenis</a></h1>
          </div>
          <div class="menu-items">
            <li> <a href="http://localhost/php/cms2021/?action=archive">Historial de notas</a></li>
            <li> <a href="http://localhost/php/cms2021/admin.php">Ir al admin</a></li>
            <li> <a href="http://localhost/php/cms2021/admin.php?action=logout">Log Out</a></li>
            <li><a href="http://localhost/php/cms2021/admin.php?action=newArticle">Subir Nota</a></li>
          </div>
        </div>
      </div>
    </nav>

      
