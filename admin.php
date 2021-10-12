<?php

require( "config.php" );
session_start();
/*URL AMIGABLES
1. El cliente no necesita saber donde esta cada archivo
2. el cliente no ve el formato del archivo .php .html .asp
3. el cliente nunca puede ir a una pagina privada a menos que este logeado
4. Podemos tener una pagina por defecto , la cual el usuario ira cuando no coincide con la ruta de ninguna pagina.

*/
$action = isset( $_GET['action'] ) ? $_GET['action'] : ""; 
/*El parametro que viene por URL 
EJ:localhost/cmsTenis/*PARAMETRO*   <-  $_GET["action"]

localhost/cmsTenis/login      $_GET["action"] = "login"

localhost/cmsTenis/contact    $_GET["action"] = "contact"
*/
$username = isset( $_SESSION['username'] ) ? $_SESSION['username'] : "";

/*
Si no estamos en el login AND no estamos en logout AND el usuario no esta logeado.
Entonces -> lo lleva al login();
Notas:
*/
if ( $action != "login" && $action != "logout" && !$username ) {
  login();
  exit;
}

switch ( $action ) {
  case 'login':
    login();
    break;
  case 'logout':
    logout();
    break;
  case 'newArticle':
    newArticle();
    break;
  case 'editArticle':
    editArticle();
    break;
  case 'deleteArticle':
    deleteArticle();
    break;
  default:
    listArticles();/*Si $_GET["action"] esta vacio o tiene una palabra que no coincide con los cases de switch , por defecto va a ir siempre a listArticles.*/
}

/*Esta funcion hace 2 cosas, muestra la vista de login y tambien recibe del formulario para hacer la logica del logeo*/
function login() {

  $results = array();
  $results['pageTitle'] = "Admin Login | Widget News";

  if ( isset( $_POST['login'] ) ) {

    // User has posted the login form: attempt to log the user in

    if ( $_POST['username'] == ADMIN_USERNAME && $_POST['password'] == ADMIN_PASSWORD ) {

      // Login successful: Create a session and redirect to the admin homepage
      $_SESSION['username'] = ADMIN_USERNAME;
      header( "Location: admin.php" );

    } else {

      // Login failed: display an error message to the user
      $results['errorMessage'] = "Incorrect username or password. Please try again.";
      require( TEMPLATE_PATH . "/admin/loginForm.php" );
    }

  } else {

    // User has not posted the login form yet: display the form
    require( TEMPLATE_PATH . "/admin/loginForm.php" );
  }

}


function logout() {
  unset( $_SESSION['username'] );
  header( "Location: admin.php" );
}


function newArticle() {

  $results = array();
  $results['pageTitle'] = "New Article";
  $results['formAction'] = "newArticle";

  if ( isset( $_POST['saveChanges'] ) ) {

    // User has posted the article edit form: save the new article
    $article = new Article;
    $article->storeFormValues( $_POST );
    $article->insert();
    header( "Location: admin.php?status=changesSaved" );

  } elseif ( isset( $_POST['cancel'] ) ) {

    // User has cancelled their edits: return to the article list
    header( "Location: admin.php" );
  } else {

    // User has not posted the article edit form yet: display the form
    $results['article'] = new Article;
    require( TEMPLATE_PATH . "/admin/editArticle.php" );
  }

}


function editArticle() {

  $results = array();
  $results['pageTitle'] = "Edit Article";
  $results['formAction'] = "editArticle";

  if ( isset( $_POST['saveChanges'] ) ) {

    // User has posted the article edit form: save the article changes

    if ( !$article = Article::getById( (int)$_POST['articleId'] ) ) {
      header( "Location: admin.php?error=articleNotFound" );
      return;
    }

    $article->storeFormValues( $_POST );
    $article->update();
    header( "Location: admin.php?status=changesSaved" );

  } elseif ( isset( $_POST['cancel'] ) ) {

    // User has cancelled their edits: return to the article list
    header( "Location: admin.php" );
  } else {

    // User has not posted the article edit form yet: display the form
    $results['article'] = Article::getById( (int)$_GET['articleId'] );
    require( TEMPLATE_PATH . "/admin/editArticle.php" );
  }

}


function deleteArticle() {

  if ( !$article = Article::getById( (int)$_GET['articleId'] ) ) {
    header( "Location: admin.php?error=articleNotFound" );
    return;
  }

  $article->delete();
  header( "Location: admin.php?status=articleDeleted" );
}


function listArticles() {
  $results = array();
  $data = Article::getList();
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "All Articles";

  if ( isset( $_GET['error'] ) ) {
    if ( $_GET['error'] == "articleNotFound" ) $results['errorMessage'] = "Error: Article not found.";
  }

  if ( isset( $_GET['status'] ) ) {
    if ( $_GET['status'] == "changesSaved" ) $results['statusMessage'] = "Your changes have been saved.";
    if ( $_GET['status'] == "articleDeleted" ) $results['statusMessage'] = "Article deleted.";
  }

  require( TEMPLATE_PATH . "/admin/listArticles.php" );
}

// Funcion creada para filtrar por categoria 

function listArticlesByCategory()
{
  $results = array();
  $data = Article::getList();
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['category'] = $data['category']; // Agregue esto, no se si esta ok. 
  $results['pageTitle'] = "All Articles";

  if (isset($_GET['error'])) {
    if ($_GET['error'] == "articleNotFound") $results['errorMessage'] = "Error: Article not found.";
  }

  if (isset($_GET['status'])) {
    if ($_GET['status'] == "changesSaved") $results['statusMessage'] = "Your changes have been saved.";
    if ($_GET['status'] == "articleDeleted") $results['statusMessage'] = "Article deleted.";
  }

  require(TEMPLATE_PATH . "/admin/listArticles.php");
}

?>