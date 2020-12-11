<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/index.css" />

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">

    <!-- Page Title -->
    <title>Dashboard</title>
  </head>
  <body>
    <input type="checkbox" id="sidebar__toggle">
    <div class="sidebar">
      <div class="sidebar__header">
        <h3 class="brand">
          <span>Brand</span>
        </h3>
        <label for="sidebar__toggle" class="ti-menu-alt"></label>
      </div>
      <div class="sidebar__menu">
        <ul>
          <li>
            <a href="./index.php">
              <span class="ti-home"></span>
              <span>Home</span>
            </a>
          </li>
          <li>
            <a href="./profile.php">
              <span class="ti-folder"></span>
              <span>Profile</span>
            </a>
          </li>
          <li>
            <a href="./logout.php">
              <span class="ti-settings"></span>
              <span>Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main">
      <header>
        <h2 class="main__heading">Welcome User !</h2>
        <a href="./logout.php">Logout</a>
      </header>
      <main>