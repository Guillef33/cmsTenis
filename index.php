<?php

require( "config.php" );
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

switch ( $action ) {
  case 'archive':
    archive();
    break;
  case 'viewArticle':
    viewArticle();
    break;
  case 'articles':
    listArticlesByCategory();
    break;
  default:
    homepage();
}


function archive() {
  $results = array();
  $data = Article::getList();
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "Historial de notas";
  require( TEMPLATE_PATH . "/archive.php" );
}

function viewArticle() {
  if ( !isset($_GET["articleId"]) || !$_GET["articleId"] ) {
    homepage();
    return;
  }

  $results = array();
  $results['article'] = Article::getById( (int)$_GET["articleId"] );
  $results['pageTitle'] = $results['article']->title . " | El blog de Front End";
  require( TEMPLATE_PATH . "/viewArticle.php" );
}

function homepage() {
  $results = array();
  $data = Article::getList( HOMEPAGE_NUM_ARTICLES );
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "El blog de Front End";
  require( TEMPLATE_PATH . "/homepage.php" );
}
function listArticlesByCategory()
{
  $results = array();
  $category = $_GET["category"];
  $numRows=1000000;
  $data = Article::getListByCategory($numRows,$category);
  $results['articles'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['category'] = $data['category']; // Agregue esto, no se si esta ok. 
  $results['pageTitle'] = "All Articles";

  echo "<pre>";
  var_dump($results);
  echo "</pre>";

  if (isset($_GET['error'])) {
    if ($_GET['error'] == "articleNotFound") $results['errorMessage'] = "Error: Article not found.";
  }

  if (isset($_GET['status'])) {
    if ($_GET['status'] == "changesSaved") $results['statusMessage'] = "Your changes have been saved.";
    if ($_GET['status'] == "articleDeleted") $results['statusMessage'] = "Article deleted.";
  }

  //require(TEMPLATE_PATH . "/admin/listArticles.php");
}
