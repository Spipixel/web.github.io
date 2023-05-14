<?php if(isset($_GET['message']) && isset($_GET['messageTo']) && isset($_GET['Enmth'])) {

} else { ?> 
  <?php 
    include "conn.php";
    include "links.php";
    $conn = mysqli_connect("localhost", "root", "", "live_chat");
    ob_start();
    if (!$conn) {
      echo "Failed1:", mysqli_connect_error();
    }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SpyCord</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/modals/">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cheatsheet/">
  <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/sidebars.css" rel="stylesheet">
  <link href="css/modals.css" rel="stylesheet">
  <link href="css/snackbar.css" rel="stylesheet">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }


    .msg #message {
      border-radius: 10px;
      border: none;
      outline: none;
      background-color: #e6e6e6;

    }

    .msg #message:focus {
      overflow-y: scroll;
    }

    .send {
      padding: 6px 12px;
      border-radius: 10px;
      border: none;
      outline: none;
      background-color: #80dfff;
      height: 40px;
    }

    #messageBody::-webkit-scrollbar {
      width: 10px;
    }

    #messageBody::-webkit-scrollbar-thumb {
      background-color: #8c8c8c;
    }

    #messageBody {
      height: 78%;
      border-radius: 10px;
      width: 100%;
      overflow-y: scroll;
      overflow-x: hidden;
    }

    .msbody_1 {
      width: 100%;
      border-radius: 10px;
    }

    #msg_body_upper {
      height: 100%;
      background-color: #f1f1f1;
      width: auto;
      border-radius: 10px;
    }

    #message,
    .send {
      box-shadow: 0 1px 3px rgba(0, 0, 0, .4);
    }

    #lastMessage p {
      border-bottom-left-radius: 15px;
      border-bottom-right-radius: 15px;
      padding: 10px 14px;
      display: flex;

    }


    #lastMessage p a {
      text-decoration: none;
      cursor: pointer;
      display: flex;
      color: darkblue;
    }

    .msg {
      margin-left: 20px;
      border-radius: 10px;
      position: fixed;
      width: 68%;
      bottom: 20px;
      display: flex;
    }

    #userList_div::-webkit-scrollbar {
      width: 10px;
    }

    #userList_div::-webkit-scrollbar-thumb {
      background-color: #8c8c8c;
    }

    #head {
      width: 100%;
    }

    #bg {
      width: 100%;
      max-width: 73%;
    }

    @media only screen and (max-width: 1200px) {
      #bg {
        max-width: 69%;
      }
    }

    @media only screen and (max-width: 1150px) {
      #bg {
        max-width: 65%;
      }
    }

    @media only screen and (max-width: 1050px) {
      #bg {
        max-width: 63%;
      }
    }

    @media only screen and (max-width: 950px) {
      #bg {
        max-width: 60%;
      }
    }

    @media only screen and (max-width: 850px) {
      #bg {
        max-width: 55%;
      }
    }

    @media only screen and (max-width: 720px) {
      body {
        overflow: hidden;
      }

      #list {
        display: none;
      }

      #msg_body_upper,
      #messagebody {
        width: 285px;
      }

      #pro {
        margin-bottom: 75%;
      }

      #head {
        width: 285px;
      }

      #bg {
        width: 285px;
      }

      .name_chatting_friend {
        width: 200px;
      }

    }

    #I_M {
      background-color: #e6e6e6;

    }

    #loading-screen {
      opacity: 1;
      /* set initial opacity to 1 */
      transition: opacity 1s ease-out;
      /* add fade-out transition */
    }
    #nbstart_showing_2 {
      background-color: rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(3px);
      -webkit-backdrop-filter: blur(3px); /* For Safari */
    }
  </style>
  <style>
    .left_first_side_bar::-webkit-scrollbar {
      width: 3px;
    }

    .left_first_side_bar::-webkit-scrollbar-thumb {
      background-color: #80dfff;
    }

    .s::-webkit-scrollbar {
      width: 3px;
    }

    .s::-webkit-scrollbar-thumb {
      background-color: #808080;
    }

    #searchInput::-webkit-search-cancel-button:hover {
      cursor: pointer;
    }

    .nav-link:hover {
      background-color: #0D6EFD;
      color: #fff;
      transition: 1s;
      animation: hover-anime 1s ease-in-out;
    }

    @keyframes hover-anime {
      from {
        background-color: #fff;
        color: #0D6EFD;
        transition: 1s;
      }

      to {
        background-color: #0D6EFD;
        color: #fff;
        transition: 1s;
      }
    }
  </style>

  <style>
    /* CSS for the fade-in animation */
    #nbstart_showing {
      animation-name: fade-in;
      animation-duration: 0.2s;
    }


    #I_M {
      animation-name: size;
      animation-duration: 0.2s;
    }

    @keyframes size {
      from {
        height: 30%;
      }

      to {
        opacity: 1;
        width: 100%;
        height: 100%;
      }
    }

    @keyframes fade-in {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }


    #srh{
      width :70%; border: 1px solid #a6a6a6; background-color: #e6e6e6;
      border-radius: 5px; padding: 8px 12px;   font-family: "Monaco", monospace; outline:none;
      font-weight:600; letter-spacing:1px;
    }
    #srh:focus{
      border-color: blue;
    }
    #SendRequests{
      padding:8px 12px; border-radius:5px; border:none;
      background-color:#4e94fd; color:#fff; font-weight:400; cursor: not-allowed;
    }
    .icons_welcoms_{
      position: absolute;
      top: 8;
      right: 8;
    }
    #wls{
      margin-right: -130px;
    }
    #wls .card{
      border: none;
    }
    #wls p, .card-body {
      font-size: 16px;
      padding: 0 0 0 0;
      border: none;
      outline: none;
    }
    #welcome_page{
      overflow: hidden; width:900px;
    }
    @media only screen and (max-width: 1050px) {
      #wls{
        margin-right: 0;
        width: 100%;
      }

      #wls p {
        font-size: 12px;
      }
      #wls button{
        width: 55px;
        font-weight: 600;
        font-size: 8px;
        padding: 6px 8px;
      }
      #wls #srh {
        padding: 6px 8px;
        width: 73%;
        font-size: 9px;
      }
      #welcome_page{
        width: 140%;
      }
    }
  </style>

</head>

<body>

<?php if(!isset($_SESSION['uname']) && !isset($_SESSION['UserId'])){ ?>

    <div id="loading-screen">
      <?php include("ani23ld4-23.html"); ?>
    </div>
    <section style="display:none;" id="main-content"></section>

<?php } else { ?>
  <?php if (!isset($_GET['ToUser'])) { ?>
    <div id="loading-screen">
      <?php include("ani23ld4-23.html"); ?>
    </div>
  <?php } ?>


  <section <?php if (!isset($_GET['ToUser'])) {
              echo 'style="display:none;"';
            } else {
              echo 'style="display:block;"';
            } ?> id="main-content">
    <?php if (isset($_GET['ToUser'])) {if (empty($_GET['ToUser'])) {echo "Redirecting to index.php";error_reporting(E_ALL); ini_set('display_errors', 1);header("Location: app.php");ob_flush();ob_clean();exit;}}?>

    <div id="window">
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 118 94">
          <title>Bootstrap</title>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
          <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
          <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
          <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
          <path d="M8 16.016a7.5 7.5 0 0 0 1.962-14.74A1 1 0 0 0 9 0H7a1 1 0 0 0-.962 1.276A7.5 7.5 0 0 0 8 16.016zm6.5-7.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
          <path d="m6.94 7.44 4.95-2.83-2.83 4.95-4.949 2.83 2.828-4.95z" />
        </symbol>

        <symbol id="grid" viewBox="0 0 16 16">
          <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
        </symbol>
        <symbol id="collection" viewBox="0 0 16 16">
          <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z" />
        </symbol>
        <symbol id="calendar3" viewBox="0 0 16 16">
          <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
          <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
        </symbol>
        <symbol id="chat-quote-fill" viewBox="0 0 16 16">
          <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z" />
        </symbol>
        <symbol id="cpu-fill" viewBox="0 0 16 16">
          <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
          <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z" />
        </symbol>
        <symbol id="gear-fill" viewBox="0 0 16 16">
          <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
        </symbol>
        <symbol id="speedometer" viewBox="0 0 16 16">
          <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z" />
          <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z" />
        </symbol>
        <symbol id="toggles2" viewBox="0 0 16 16">
          <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z" />
          <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z" />
          <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z" />
        </symbol>
        <symbol id="tools" viewBox="0 0 16 16">
          <path d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
        </symbol>
        <symbol id="chevron-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </symbol>
        <symbol id="geo-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
        </symbol>
      </svg>

      <!-- Main Body -->
      <div id="body" style="display: block;">
        <main class="d-flex flex-nowrap">
          <!-- First left Side bar -->
          <div class="d-flex flex-column left_first_side_bar bg-light" style="width: 4.5rem;">
            <a href="/" class="d-block p-3 link-dark text-decoration-none" title="spipixel" data-bs-toggle="tooltip" data-bs-placement="right">
              <img src="img/icon/Picture3.png" alt="icon" width="40" height="25">
              <span class="visually-hidden">Spipixel</span>
            </a>
            <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
              <li class="nav-item">
                <div class="dropdown border-top">
                  <!-- Home Link -->
                  <a id="profile" href="javascript:void(0);" class="nav-link active py-3 border-bottom rounded-0" aria-current="page">
                    <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Home">
                      <use xlink:href="#home" />
                    </svg>
                  </a>
                  <ul id="menu_profile" class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-danger" href="#">Sign out</a></li>
                  </ul>
              </li>
              <li>
                <!-- Public Uers -->
                <a href="javascript:void(0);" id="users" class="nav-link py-3 border-bottom rounded-0">
                  <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Dashboard">
                    <use xlink:href="#speedometer2" />
                  </svg>
                </a>
              </li>
              <!-- Add -->
              <li>
                <a onclick="add_friend()" id="add_friend" href="javascript:void(0)" class="nav-link py-3 border-bottom rounded-0">
                  <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Products">
                    <use xlink:href="#grid" />
                  </svg>
                </a>
              </li>
              <!-- Discover -->
              <li>
                <a href="#" class="nav-link py-3 border-bottom rounded-0" title="Customers" data-bs-toggle="tooltip" data-bs-placement="right">
                  <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Customers">
                    <use xlink:href="#people-circle" />
                  </svg>
                </a>
              </li>
            </ul>
            <div class="dropdown border-top">
              <a id="pro" href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="#"><?php echo $_SESSION['uname']; ?> </a></li>
                <li><a id="setting_option" class="dropdown-item" href="#">Settings</a></li>
                <li><a id="profile_btn" class="dropdown-item" href="#">Profile</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
              </ul>
            </div>
          </div>
          <!-- Seperator -->
          <div style="margin-left: -20px;" class="b-example-vr"></div>
          <!-- Second Left Side Bar -->
          <div id="list" class="flex-shrink-0 p-3 bg-light" style="width: 280px;">
            <a href="javascript:void(0);" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
              <svg class="bi pe-none me-2" width="30" height="24">
                <use xlink:href="#bootstrap" />
              </svg>
              <span class="fs-5 fw-semibold">Youtube server</span>
            </a>
            <ul class="list-unstyled ps-0">
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
                  Channel
                </button>
                <div class="collapse show" id="home-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Social Links</a>
                    </li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Bug report</a>
                    </li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Updates</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                  Memmbers
                </button>
                <div class="collapse" id="dashboard-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Memmbers 27</a>
                    </li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Banned 12</a></li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Active 15</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                  Announcement
                </button>
                <div class="collapse" id="orders-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">First hosting</a></li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Second hosting</a>
                    </li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Third hosting</a>
                    </li>
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Foruth hosting</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="border-top my-3"></li>
              <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                  Admin
                </button>
                <div class="collapse" id="account-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Spipixel</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
          <!-- Other Options list -->
          <div id="public_users_list" class="flex-shrink-0 p-3 bg-light" style="width: 280px; display:none; ">
            <a href="javascript:void(0);" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
              <svg class="bi pe-none me-2" width="30" height="24">
                <use xlink:href="#bootstrap" />
              </svg>
              <span class="fs-5 fw-semibold">Friends Users</span>
            </a>
            <ul class="list-unstyled ps-0">
              <li id="friendList" class="mb-1"></li>
            </ul>
          </div>

          <div style="margin-left: -20px;" class="b-example-vr"></div>

          <div id="bg" class="flex-shrink-0 p-3 bg-white">
            <?php
            if (!isset($_GET['ToUser'])) { ?>
              <div  id="welcome_page">

                <!-- <h1>Hey! <?php echo $_SESSION['uname']; ?></h1> -->
                  <div id="wls"  class="col-sm-12">
                    <div class="card">
                      <div class="card-body">
                        <h4 style="font-weight: 770;">JOIN GROUP</h4>
                          <div class="icons_welcoms_">
                              <a href="javascript:void(0);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                                  <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                  <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg></a>
                              <a style="margin-left: 10px;" href="javascript:void(0)">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                  </svg>
                              </a>
                          </div>
                        <p><b>Note:</b> You are directly joining a group by their direct tag. it's CaSe SeNsItIvE! </p>
                        <input autofocus id="srh" type="search" name="sendre" placeholder="ENTER GROUP NAME">
                        <button id="SendRequests">Join Group</button>
                          <center><div style="margin-top:50px;" id="rndsvgdv"></div></center>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            <?php
            } else {

            ?>
              <!-- <div class="flex-shrink-0 p-3 bg-light mb-3" style="width: 940px; border-radius:20px;">
         <a class="d-flex align-items-center link-dark text-decoration-none" href="">Start chat with &nbsp;  <b></b></a>
        </div> -->
              <!-- <div class="msg" style="position: fixed; width: 70%; bottom: 20px;">
            <input style="width: 70%; margin-right:20px; height: 40px; padding: 12px 18px;" type="text" name="Chat" id="chat" value'.$_SESSION['ToUser'].' hidden/ >
          </div> -->
              <?php

              if (isset($_GET['ToUser'])) {
                $chat_user = mysqli_query($conn, "SELECT * FROM users WHERE `id` = '" . $_GET['ToUser'] . "'");
                $chat = mysqli_fetch_assoc($chat_user);
                if ($_GET['ToUser'] === $_SESSION['UserId']) {
                  echo '
          <div style="display:flex;" class=" flex-shrink-0 p-3 bg-light mb-3 name_chatting_friend" id="head" style="border-radius:20px;">
          <input style="width: 70%; margin-right:20px; height: 40px; padding: 12px 18px;" type="text" name="Chat" id="ToUser" value=' . $_GET['ToUser'] . ' hidden />
          <button id="back_btn" style="padding: 5px; border: #f1f1f1; margin-right:10px;  background-color:#f8f9fa; border-radius:5px">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
            </svg>
          </button>
          <a class="d-flex align-items-center link-dark text-decoration-none" href="javascript:void(0);">
          <svg style="margin-right:10px;" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            <b>'  . $chat['Users'] . '</b></a> &nbsp; &nbsp; Self Chat
         </div>
          ';
                } else {
                  echo '
    <div style="display:flex;" class="flex-shrink-0 p-3 bg-light mb-3 name_chatting_friend" id="head" style="border-radius:20px;">
      <input style="width: 70%; margin-right:20px; height: 40px; padding: 12px 18px;" type="text" name="Chat" id="ToUser" value=' . $_GET['ToUser'] . ' hidden />
      <button id="back_btn" style="padding: 5px; border: #f1f1f1; margin-right:10px;  background-color:#f8f9fa; border-radius:5px">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
      </button>
      <a class="d-flex align-items-center link-dark text-decoration-none" href="javascript:void(0);">
        <svg style="margin-right:10px;" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
        <b>';

                  $toUserId = preg_replace("/[^0-9]/", "", $_GET['ToUser']); // extract only integer from $_GET['ToUser']
                  $checkUserId = mysqli_query($conn, "SELECT * FROM users WHERE id = $toUserId");
                  $checkUserId_inShort = mysqli_fetch_assoc($checkUserId);
                  if ($checkUserId_inShort > 0) {
                    echo $chat['Users'],'</b>';
                  } else {
                    echo 'Unknown';
                  }


                  echo '</a> &nbsp; &nbsp; 
    </div>';
                }
              } else {
                // $chat_user = mysqli_query($conn, "SELECT * FROM users WHERE `id` = '" . $_GET['ToUser'] . "'");
                // $chat = mysqli_fetch_assoc($chat_user);
                $chat_user = mysqli_query($conn, "SELECT * FROM users");
                $chat = mysqli_fetch_assoc($chat_user);
                $_SESSION['ToUser'] = $chat['id'];
                echo '
          <div class="flex-shrink-0 p-3 bg-light mb-3" style="width: 940px; border-radius:20px;">
            <input style="width: 70%; margin-right:20px; height: 40px; padding: 12px 18px;" type="text" name="Chat" id="ToUser" value=' . $_SESSION['ToUser'] . ' hidden/ >
            <button>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
              </svg>
            </button>
            <a class="d-flex align-items-center link-dark text-decoration-none" href="">
              <svg style="margin-right:10px;" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg><b>' . $chat['Users'] . ' </b></a>
          </div>
          ';
              }
              ?>
              <?php
              // check if the selected friend_id is in friend_list for current user
              $friend_id_query = "SELECT * FROM friend_list WHERE friend_id = '" . $_GET['ToUser'] . "' AND user_id = '" . $_SESSION['UserId'] . "'";
              $friend_id_result = mysqli_query($conn, $friend_id_query);
              if (mysqli_num_rows($friend_id_result) > 0) {
                // the selected friend is in friend_list
                $friend_id_row = mysqli_fetch_assoc($friend_id_result);
                // check if the current user is also in friend_list for the selected friend
                $current_user_query = "SELECT * FROM friend_list WHERE friend_id = '" . $_SESSION['UserId'] . "' AND user_id = '" . $friend_id_row['friend_id'] . "'";
                $current_user_result = mysqli_query($conn, $current_user_query);
                if (mysqli_num_rows($current_user_result) > 0) {
                  // the selected friend and current user are friends
                  include "message.php";
                } else {
                  // the selected friend is not a friend of the current user
                  echo "Not your friend";
                }
              } else {
                // the selected friend is not in friend_list
                echo "Not your friend";
              }
              ?>


          </div>

        <?php } ?>

      </div>

      </main>
    </div>

    <!-- DELETE ALERT -->
    <div style="overflow:hidden;       backdrop-filter: blur(3px);
      -webkit-backdrop-filter: blur(3px); /* For Safari */ height:100%; width:100%; background-color: rgba(0, 0, 0, 0.5); z-index:120; position:absolute; top:0;" class="modal" id="DELETE_ALERT">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Message</h1>
            <button id="message_delete_cross" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Are you sure you want to delete this message? This action cannot be undone. Click 'Confirm Delete' to proceed with the deletion or 'Cancel' to go back.
          </div>
          <div class="modal-footer">
            <button id="delete_cancel" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button id="confirm_delete" type="button" class="btn btn-danger">
              <div style="display:none;" id="loader_delete" class="spinner-border text-light" role="status">
                <span class="visually-hidden">Delete</span>
              </div>
              <span id="dl">Delete</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- SETTING -->
    <div id="setting" style="display: none;">
      <div style=" height: 100%; width:100%; background-color: rgba(0, 0, 0, 0.5); transition: 0.5s ease-in-out;" class="modal modal-sheet position-fixed d-block py-5" tabindex="-1" role="dialog" id="modalSheet">
        <div class="modal-dialog" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header border-bottom-0">
              <h1 class="modal-title fs-5">Modal title</h1>
              <button id="close" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body py-0">
              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Welcome</h5>
                      <p class="card-text">Welcome to SpyCord, our live chat server where you can connect with like-minded individuals from all around the world.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">Join our community today and engage in lively discussions on various topics while making new friends along the way.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
                <div style="margin-top: 30px;" class="col-sm-12">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title"> Features</h5>
                      <p class="card-text">Support realtime chat with.</p>
                      <p class="card-text">if you sent wrong message then it is able to delete message.</p>
                      <p class="card-text">Support all devices</p>
                      <p class="card-text">Support realtime chat with.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer flex-column border-top-0">
              <button type="button" class="btn btn-lg btn-primary w-100 mx-0 mb-2">Save changes</button>
              <button type="button" class="btn btn-lg btn-light w-100 mx-0">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- PROFILE -->
    <div style="overflow:hidden; display: none; height:100%; width:100%; z-index:120; background-color:white; position:absolute; top:0;" id="PROFILE_OPTION">
      <div id="exampleModalFullscreen ">
        <div class="modal-dialog modal-fullscreen">
          <div class="modal-content">
            <div style="margin: 20px;" class="modal-header">
              <h1 class="modal-title fs-4" id="exampleModalFullscreenLabel">Profile</h1>
              <button type="button" class="btn-close" id="profile_cls_btn_cross" aria-label="Close"></button>
            </div>
            <div style="margin: 20px; overflow:hidden;" class="modal-body">
              <hr>
              <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <div style="border-color: #fff;" class="card">
                    <div class="card-body">
                      <?php
                      $qu = mysqli_query($conn, "SELECT * FROM users WHERE `id` = '" . $_SESSION['UserId'] . "'");
                      $un = mysqli_fetch_assoc($qu);

                      ?>
                      <!-- User icon -->
                      <div style="margin-bottom: 20px;">
                        <center>
                          <svg xmlns="http://www.w3.org/2000/svg" width="232" height="82" viewBox="0 0 532 532" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <circle cx="270.75986" cy="260.93427" r="86.34897" fill="#ffb6b6" />
                            <polygon points="221.18982 360.05209 217.28876 320.6185 295.18982 306.05209 341.18982 418.05209 261.18982 510.05209 204.18982 398.05209 221.18982 360.05209" fill="#ffb6b6" />
                            <path d="m216.0374,340.35736l17.03111,3.84802s-13.38821-42.45453-8.84396-46.50766c4.54427-4.05316,15.68007,2.33328,15.68007,2.33328l11.70201,13.1199,14.25394-14.51239s15.47495-19.2421,21.53397-24.6463-3.67319-25.46364-3.67319-25.46364c0,0,89.89185-24.23923,56.44299-67.83968,0,0-19.61093-34.18452-25.99734-23.04871-6.38641,11.1358-14.00162-6.55013-14.00162-6.55013l-23.25381,4.42198s-45.89429-27.06042-89.45331,30.82959c-43.55902,57.89003,28.57916,154.01572,28.57916,154.01572h-.00002Z" fill="#2f2e41" />
                            <path d="m433.16003,472.95001c-47.19,38.26001-105.57001,59.04999-167.16003,59.04999-56.23999,0-109.81-17.33997-154.62-49.47998.08002-.84003.16003-1.66998.23004-2.5,1.19-13,2.25-25.64001,2.94995-36.12,2.71002-40.69,97.64001-67.81,97.64001-67.81,0,0,.42999.42999,1.29004,1.17999,5.23999,4.59998,26.50995,21.27997,63.81,25.94,33.25995,4.15997,44.20996-15.57001,47.51996-25.02002,1-2.88,1.30005-4.81,1.30005-4.81l97.63995,46.10999c6.37,9.10004,8.86005,28.70001,9.35004,50.73004.01996.90997.03998,1.81.04999,2.72998Z" fill="#63eeff" />
                            <path d="m454.09003,77.91003C403.85004,27.66998,337.05005,0,266,0S128.15002,27.66998,77.91003,77.91003C27.67004,128.15002,0,194.95001,0,266c0,64.85004,23.05005,126.16003,65.29004,174.57001,4.02997,4.63,8.23999,9.14001,12.62,13.52002,1.02997,1.02997,2.07001,2.06,3.12,3.06,2.79999,2.70996,5.65002,5.35999,8.54999,7.92999,1.76001,1.57001,3.54004,3.10999,5.34003,4.62,1.40997,1.19,2.82001,2.35999,4.25,3.51001.02997.02997.04999.04999.07996.07001,3.97003,3.19995,8.01001,6.27997,12.13,9.23999,44.81,32.14001,98.37999,49.47998,154.61998,49.47998,61.59003,0,119.97003-20.78998,167.16003-59.04999,3.84998-3.12,7.62-6.35999,11.32001-9.71002,3.26996-2.95996,6.46997-6.01001,9.60999-9.14996.98999-.98999,1.97998-1.98999,2.95001-3,2.70001-2.78003,5.32001-5.61005,7.88-8.48004,43.37-48.71997,67.07996-110.83997,67.07996-176.60999,0-71.04999-27.66998-137.84998-77.90997-188.08997Zm10.17999,362.20997c-2.5,2.84003-5.06,5.64001-7.67999,8.37-4.08002,4.25-8.28998,8.37-12.64001,12.34003-1.64996,1.52002-3.32001,3-5.01001,4.46997-1.91998,1.67004-3.85999,3.31-5.82996,4.92004-15.53003,12.75-32.54004,23.75-50.73004,32.70996-7.19,3.54999-14.56,6.78003-22.09998,9.67004-29.28998,11.23999-61.08002,17.39996-94.28003,17.39996-32.03998,0-62.75995-5.73999-91.19-16.23999-11.66998-4.29999-22.94995-9.40997-33.77997-15.26001-1.59003-.85999-3.16998-1.72998-4.73999-2.62-8.26001-4.67999-16.25-9.78998-23.91998-15.31-.25-.17999-.51001-.37-.76001-.54999-5.46002-3.94-10.77002-8.09003-15.90002-12.45001-1.88-1.59003-3.73999-3.20001-5.57001-4.84998-2.97998-2.65002-5.89996-5.38-8.75-8.18005-5.39996-5.28998-10.56-10.79999-15.48999-16.52997C26.09003,391.77002,2,331.65002,2,266,2,120.42999,120.43005,2,266,2s264,118.42999,264,264c0,66.66003-24.82996,127.62-65.72998,174.12Z" fill="#3f3d56" />
                          </svg>
                        </center>
                      </div>
                      <!-- UserName -->
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Username</span>
                        <input id="Update_Username" type="text" class="form-control" value="<?php echo $un['Users'];  ?>" aria-label="Username" aria-describedby="basic-addon1" readonly>
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                        <input id="Update_email" type="text" class="form-control" value="<?php echo $un['email']; ?>" aria-label="Username" aria-describedby="basic-addon1" readonly>
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Full Name</span>
                        <input id="Update_fullname" type="text" class="form-control" value="<?php echo $un['fullname'];  ?>" aria-label="Username" aria-describedby="basic-addon1" readonly>
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Gender</span>
                        <input id="Update_visi" type="text" class="form-control" value="<?php if ($un['visibility'] > 0) {
                                                                                          echo "Private";
                                                                                        } else {
                                                                                          echo "Public";
                                                                                        } ?>" aria-label="Username" aria-describedby="basic-addon1" readonly>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <div style="border-color: #fff;" class="card">
                    <div class="card-body">
                      <!-- SVG PIC -->
                      <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="622.45196" height="264.19648" viewBox="0 0 722.45196 364.19648" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M891.45711,564.13287H342.14841a26.51638,26.51638,0,0,1-26.48658-26.48658V329.2084a26.51674,26.51674,0,0,1,26.48658-26.48658h549.3087a26.51674,26.51674,0,0,1,26.48658,26.48658V537.64629A26.51638,26.51638,0,0,1,891.45711,564.13287Z" transform="translate(-238.77402 -267.90176)" fill="#fff" />
                        <path d="M891.45711,564.13287H342.14841a26.51638,26.51638,0,0,1-26.48658-26.48658V329.2084a26.51674,26.51674,0,0,1,26.48658-26.48658h549.3087a26.51674,26.51674,0,0,1,26.48658,26.48658V537.64629A26.51638,26.51638,0,0,1,891.45711,564.13287ZM342.14841,305.025a24.1834,24.1834,0,0,0-24.1834,24.1834V537.64629a24.1834,24.1834,0,0,0,24.1834,24.1834h549.3087a24.1834,24.1834,0,0,0,24.1834-24.1834V459.054A154.029,154.029,0,0,0,761.61156,305.025Z" transform="translate(-238.77402 -267.90176)" fill="#e6e6e6" />
                        <ellipse cx="294.66589" cy="607.92128" rx="2.82511" ry="4.06109" transform="translate(-588.12138 544.08622) rotate(-81.72174)" fill="#fff" />
                        <ellipse cx="321.09158" cy="605.34272" rx="2.8251" ry="4.06109" transform="translate(-562.94877 568.02927) rotate(-81.72174)" fill="#3f3d56" />
                        <ellipse cx="287.42975" cy="586.52763" rx="2.82511" ry="4.06109" transform="translate(-573.14491 518.61211) rotate(-81.72174)" fill="#ff6584" />
                        <ellipse cx="278.18048" cy="578.33571" rx="2.56661" ry="1.78547" transform="translate(-541.01619 584.23337) rotate(-89.56675)" fill="#e6e6e6" />
                        <ellipse cx="274.28649" cy="562.01344" rx="2.56661" ry="1.78547" transform="translate(-528.55893 564.14064) rotate(-89.56675)" fill="#3f3d56" />
                        <ellipse cx="304.56743" cy="590.7395" rx="2.56661" ry="1.78547" transform="translate(-527.2322 622.92957) rotate(-89.56675)" fill="#e6e6e6" />
                        <ellipse cx="291.79739" cy="597.11543" rx="2.56661" ry="1.78547" transform="translate(-546.28142 616.48761) rotate(-89.56675)" fill="#ff6584" />
                        <ellipse cx="309.57373" cy="608.89981" rx="2.56661" ry="1.78547" transform="translate(-540.42354 645.95872) rotate(-89.56675)" fill="#3f3d56" />
                        <ellipse cx="932.08298" cy="274.37106" rx="3.60111" ry="5.1766" transform="translate(198.37253 842.58896) rotate(-75.77932)" fill="#fff" />
                        <ellipse cx="898.23933" cy="274.15294" rx="3.60111" ry="5.1766" transform="translate(173.05426 809.61785) rotate(-75.77932)" fill="#3f3d56" />
                        <ellipse cx="938.43394" cy="302.44956" rx="3.60111" ry="5.1766" transform="translate(175.94525 869.92612) rotate(-75.77932)" fill="#ff6584" />
                        <ellipse cx="949.07942" cy="314.05614" rx="3.27161" ry="2.2759" transform="translate(292.79924 954.48891) rotate(-83.62433)" fill="#e6e6e6" />
                        <ellipse cx="951.86235" cy="335.26393" rx="3.27161" ry="2.2759" transform="matrix(0.11105, -0.99382, 0.99382, 0.11105, 274.19651, 976.10735)" fill="#3f3d56" />
                        <ellipse cx="917.26206" cy="294.84801" rx="3.27161" ry="2.2759" transform="translate(283.60443 905.79321) rotate(-83.62433)" fill="#e6e6e6" />
                        <ellipse cx="934.29374" cy="288.44962" rx="3.27161" ry="2.2759" transform="translate(305.10362 917.03168) rotate(-83.62433)" fill="#ff6584" />
                        <ellipse cx="913.31146" cy="271.16311" rx="3.27161" ry="2.2759" transform="translate(303.63095 880.81227) rotate(-83.62433)" fill="#3f3d56" />
                        <path d="M535.37467,429.18554a84.29076,84.29076,0,0,1-21.6269,56.497v.01153a86.56041,86.56041,0,0,1-6.2416,6.26465,83.40511,83.40511,0,0,1-7.02468,5.70039q-2.5566,1.8655-5.25125,3.52387-3.19572,1.98642-6.5756,3.67357-2.50473,1.261-5.11307,2.34922a84.48558,84.48558,0,0,1-32.78575,6.59859,84.49842,84.49842,0,0,1-18.89764-2.11888,81.105,81.105,0,0,1-8.47569-2.41839c-1.071-.357-2.14194-.74849-3.20145-1.163a83.49857,83.49857,0,0,1-18.13755-9.731,84.61752,84.61752,0,1,1,133.33118-69.18758Z" transform="translate(-238.77402 -267.90176)" fill="#f2f2f2" />
                        <path d="M788.63254,366.28377h-146.252a4.60637,4.60637,0,0,1,0-9.21273h146.252a4.60636,4.60636,0,0,1,0,9.21273Z" transform="translate(-238.77402 -267.90176)" fill="#6c63ff" />
                        <path d="M788.63254,428.46966h-146.252a4.60637,4.60637,0,0,1,0-9.21273h146.252a4.60637,4.60637,0,0,1,0,9.21273Z" transform="translate(-238.77402 -267.90176)" fill="#e6e6e6" />
                        <path d="M788.63254,490.65555h-146.252a4.60637,4.60637,0,0,1,0-9.21273h146.252a4.60636,4.60636,0,0,1,0,9.21273Z" transform="translate(-238.77402 -267.90176)" fill="#e6e6e6" />
                        <path d="M422.99456,628.07628c-16.51077-21.96123-26.0537-46.51942-26.36641-74.51777a6.04123,6.04123,0,0,1,3.676-7.70163l56.27746-19.91249a6.04122,6.04122,0,0,1,7.70161,3.676l26.3664,74.51777a6.04122,6.04122,0,0,1-3.67591,7.70163L430.6962,631.75223A6.04123,6.04123,0,0,1,422.99456,628.07628Z" transform="translate(-238.77402 -267.90176)" fill="#e6e6e6" />
                        <path d="M419.34763,604.04139c-9.93022-10.04034-14.1809-27.94788-16.95072-47.90679a5.65767,5.65767,0,0,1,3.44264-7.21281l48.36574-17.11311a5.65791,5.65791,0,0,1,7.21308,3.44253l23.46251,66.31069a5.6579,5.6579,0,0,1-3.4429,7.2129L451.47641,619.376A25.202,25.202,0,0,1,419.34763,604.04139Z" transform="translate(-238.77402 -267.90176)" fill="#fff" />
                        <path d="M462.06578,570.9731,424.3902,584.42138a2.40023,2.40023,0,1,1-1.6138-4.52107L460.452,566.452a2.40023,2.40023,0,1,1,1.6138,4.52107Z" transform="translate(-238.77402 -267.90176)" fill="#6c63ff" />
                        <path d="M428.25374,569.06581l-8.28863,2.95863a2.40023,2.40023,0,1,1-1.61379-4.52107l8.28863-2.95863a2.40023,2.40023,0,1,1,1.61379,4.52107Z" transform="translate(-238.77402 -267.90176)" fill="#6c63ff" />
                        <path d="M469.16044,590.8489l-37.67558,13.44829a2.40023,2.40023,0,0,1-1.61379-4.52107l37.67558-13.44829a2.40023,2.40023,0,0,1,1.61379,4.52107Z" transform="translate(-238.77402 -267.90176)" fill="#6c63ff" />
                        <path d="M465.61311,580.911l-37.67558,13.44829a2.40023,2.40023,0,0,1-1.6138-4.52107l37.67559-13.44829a2.40023,2.40023,0,1,1,1.61379,4.52107Z" transform="translate(-238.77402 -267.90176)" fill="#6c63ff" />
                        <path d="M431.40165,390.90232c1.22689,9.89882,8.086,18.06055,18.06055,18.06055a18.06055,18.06055,0,0,0,18.06055-18.06055c0-9.97457-8.12874-17.13836-18.06055-18.06055C438.92394,371.86326,429.82647,378.19347,431.40165,390.90232Z" transform="translate(-238.77402 -267.90176)" fill="#2f2e41" />
                        <path d="M465.18522,512.57225a85.23361,85.23361,0,0,1-33.327-.88674C437.05187,508.81806,452.80562,510.58,465.18522,512.57225Z" transform="translate(-238.77402 -267.90176)" fill="#2f2e41" />
                        <path d="M394.8913,544.33988l8.67549-20.96573,6.83522,3.79734-4.1279,21.32748a7.5956,7.5956,0,1,1-11.38281-4.15909Z" transform="translate(-238.77402 -267.90176)" fill="#ffb6b6" />
                        <path d="M484.6356,487.60571v.01153c-.311,7.30111-.737,14.24517-1.094,19.58856a84.48558,84.48558,0,0,1-32.78575,6.59859,84.49842,84.49842,0,0,1-18.89764-2.11888,81.105,81.105,0,0,1-8.47569-2.41839,5.22916,5.22916,0,0,1,1.24374-.58725c4.1457-1.405.046-2.68322.08062-4.01911.12666-4.88273,1.474-10.74429,3.21291-16.36406L420.181,508.10408l-4.03057,10.29522s.13826,8.89024-2.41831,6.17251c-2.568-2.71774-2.3838,6.08036-2.3838,6.08036a8.01088,8.01088,0,0,0-2.02681,2.0959,1.77771,1.77771,0,0,0-.24179,1.23221v.01153a1.53922,1.53922,0,0,0,.64489.80613c1.73891,1.17457-.76009,4.28388-1.86558,5.51609-.29942.33394-.49517.52976-.49517.52976l-10.62923-.76009v-.20728c.04611-1.25519.334-7.86538,1.98077-9.44306,1.808-1.73884.92126-4.49116.92126-4.49116s4.72149-4.18028,1.55462-7.57748c-1.26672-1.3704-.70245-9.4891.85217-19.9916,3.3972-23.17,11.539-57.948,15.06282-57.45287a19.54689,19.54689,0,0,1,13.94574-14.90158l11.4814-3.15535,2.04979-8.09571h16.16838l2.80988,5.32034,11.78075,5.32041.14972.06909.36851.16117.13819.43761s-.01153.01153,0,.01153l6.55255,20.57892C485.49929,450.05236,485.38416,469.83667,484.6356,487.60571Z" transform="translate(-238.77402 -267.90176)" fill="#6c63ff" />
                        <path d="M512.16765,529.07319l-10.9483-19.87361,7.2357-2.9639,14.07224,16.5491a7.59559,7.59559,0,1,1-10.35964,6.28841Z" transform="translate(-238.77402 -267.90176)" fill="#ffb6b6" />
                        <path d="M475.34424,425.2497c1.9475,3.49919,19.75792,12.49871,16.67128,21.53373,0,0,16.73218,52.348,18.908,52.00635s4.29947,5.06555,4.29947,5.06555-.46158,3.52907.89553,2.06253,1.03239,2.37773,1.03239,2.37773-.65042,3.39305,1.0727,2.47059-.54247,5.57093-.54247,5.57093L507.32587,521.213l-1.96779-2.92884s-4.20493-.80078-2.22634-1.43511-1.8606-2.76931-1.8606-2.76931-4.01647-2.72969-3.45669-7.25035-10.42269-13.4076-10.42269-13.4076c-7.54974-14.90624-11.68-30.21038-11.66557-45.9969Z" transform="translate(-238.77402 -267.90176)" fill="#6c63ff" />
                        <circle cx="212.68458" cy="126.11822" r="16.01533" fill="#ffb6b6" />
                        <path d="M434.87483,395.76478c.50707,3.48013,3.47319,8.33563,2.77855,8.33563s-5.63349-14.34655-.69464-15.282c3.5824-.67853,4.38316-.08335,7.73131-1.53516l-.47235.44458c2.21589,1.61156,5.30008.61823,7.82853-.43068,2.53544-1.04195,5.61267-2.03528,7.83552-.43067,1.39622,1.00723,1.98665,2.75769,2.85494,4.24422.8683,1.49349,2.47291,2.90358,4.12615,2.44514a3.2662,3.2662,0,0,0,2.08391-3.23008c-.007-1.37537-1.7979-2.68377-1.19476-3.91776,1.78743-3.65687.18-6.14945-3.71633-7.8702q-2.12556-.323-4.25117-.65991a12.05736,12.05736,0,0,1,2.66742-2.68129,6.095,6.095,0,0,0-2.1534-2.75773,6.75958,6.75958,0,0,0-3.84827-.5557q-4.397.2292-8.78717.45844a15.50016,15.50016,0,0,0-6.34894,1.23647c-2.41737,1.24339-4.00112,3.66766-5.15424,6.13366C433.57587,385.25492,433.98568,389.71452,434.87483,395.76478Z" transform="translate(-238.77402 -267.90176)" fill="#2f2e41" />
                        <path d="M835.501,385.26038H594.65038a1,1,0,0,1,0-2H835.501a1,1,0,0,1,0,2Z" transform="translate(-238.77402 -267.90176)" fill="#e6e6e6" />
                        <path d="M835.501,447.26038H594.65038a1,1,0,0,1,0-2H835.501a1,1,0,0,1,0,2Z" transform="translate(-238.77402 -267.90176)" fill="#e6e6e6" />
                        <path d="M835.501,509.25989H594.65038a1,1,0,0,1,0-2H835.501a1,1,0,0,1,0,2Z" transform="translate(-238.77402 -267.90176)" fill="#e6e6e6" />
                        <path d="M871.34975,505.29571a36.99814,36.99814,0,0,1-24.04583-8.87946c-2.23542-1.91351-4.61728-5.24016-7.07922-9.88687a22.61063,22.61063,0,0,1-.71712-19.52,25.94482,25.94482,0,0,1-4.28456,3.51434l-.78332.52119-.04525-.93927c-.0297-.61092-.04474-1.21978-.04474-1.80962,0-3.47617,2.62916-7.00353,1.41661-10.21662-5.11059-13.54237-21.3201-27.00077,2.17243-47.95951,2.1732-1.93881-.72984-5.81521-.72984-8.74859,0-28.74783,40.63049-78.48249,52.146-52.1358,14.20149,32.49212,38.66868,29.0167,49.50789,35.72792l.15724.47478-.46333.18744a27.94531,27.94531,0,0,1-7.42493,1.97483,35.40687,35.40687,0,0,0,8.27909.69359l.43068-.01505.1049.4186a52.37377,52.37377,0,0,1,1.55456,12.67369l-.00192.46179a23.09253,23.09253,0,0,0,7.62843,17.21859A37.08367,37.08367,0,0,1,961.226,446.4161c0,6.09444-4.14211,14.09442-7.617,19.73247a11.158,11.158,0,0,1-8.19115,5.24658,10.89679,10.89679,0,0,1-8.79423-2.84094,36.036,36.036,0,0,0,6.35491,8.99722l.47413.48854-.58868.343a36.971,36.971,0,0,1-18.63752,5.03317l-.38349-.001a36.091,36.091,0,0,0-25.89133,10.56773A37.27947,37.27947,0,0,1,871.34975,505.29571Z" transform="translate(-238.77402 -267.90176)" fill="#e6e6e6" />
                        <path d="M858.62018,563.8901a.66537.66537,0,0,1-.65794-.57162,222.78689,222.78689,0,0,1-.31039-46.71056c2.29665-24.51173,9.67211-59.81725,31.76611-88.81311a.66542.66542,0,1,1,1.05854.80663c-21.90317,28.74547-29.21917,63.79193-31.49963,88.13059a221.27956,221.27956,0,0,0,.30292,46.39887.666.666,0,0,1-.65961.7592Z" transform="translate(-238.77402 -267.90176)" fill="#3f3d56" />
                        <path d="M876.65019,468.6948a.66541.66541,0,0,1-.39173-1.20367,91.70936,91.70936,0,0,1,20.24621-10.30643c11.1702-4.08948,28.15614-7.79687,45.64287-2.23145a.66533.66533,0,1,1-.40353,1.268c-17.12847-5.45105-33.80651-1.805-44.78176,2.21325a90.20269,90.20269,0,0,0-19.92141,10.13315A.66278.66278,0,0,1,876.65019,468.6948Z" transform="translate(-238.77402 -267.90176)" fill="#3f3d56" />
                        <path d="M846.19588,392.84452a.66541.66541,0,0,1,1.17233-.4774,91.7099,91.7099,0,0,1,11.7377,19.45143c4.88328,10.84668,9.80428,27.52154,5.51262,45.36366a.66533.66533,0,1,1-1.29376-.31117c4.20339-17.47655-.6343-33.84872-5.43247-44.5061A90.20263,90.20263,0,0,0,846.35082,393.225.66277.66277,0,0,1,846.19588,392.84452Z" transform="translate(-238.77402 -267.90176)" fill="#3f3d56" />
                        <path d="M302.04837,491.98387A36.091,36.091,0,0,0,276.157,481.41614l-.38349.001A36.971,36.971,0,0,1,257.136,476.384l-.58868-.343.47413-.48854a36.036,36.036,0,0,0,6.35491-8.99722,10.89679,10.89679,0,0,1-8.79423,2.84094,11.158,11.158,0,0,1-8.19115-5.24658c-3.47488-5.63805-7.617-13.638-7.617-19.73247a37.08367,37.08367,0,0,1,12.09851-27.36438,23.09253,23.09253,0,0,0,7.62843-17.21859l-.00192-.46179a52.37377,52.37377,0,0,1,1.55456-12.67369l.1049-.4186.43068.015a35.40633,35.40633,0,0,0,8.27909-.69358,27.94531,27.94531,0,0,1-7.42493-1.97483l-.46333-.18744.15724-.47478c10.83921-6.71122,35.3064-3.2358,49.50789-35.72792,11.51546-26.34669,52.14595,23.388,52.14595,52.1358,0,2.93338-2.903,6.80978-.72984,8.74859,23.49253,20.95874,7.283,34.41714,2.17243,47.9595-1.21255,3.2131,1.41661,6.74046,1.41661,10.21662,0,.58984-.015,1.19871-.04474,1.80963l-.04525.93927-.78332-.52119a25.94435,25.94435,0,0,1-4.28456-3.51435,22.61065,22.61065,0,0,1-.71712,19.52c-2.46194,4.64671-4.8438,7.97336-7.07922,9.88687a36.96338,36.96338,0,0,1-50.64771-2.43341Z" transform="translate(-238.77402 -267.90176)" fill="#e6e6e6" />
                        <path d="M341.37982,561.89113a.66538.66538,0,0,0,.65794-.57162,222.78689,222.78689,0,0,0,.31039-46.71056c-2.29665-24.51173-9.67211-59.81725-31.76611-88.81311a.66542.66542,0,1,0-1.05854.80663c21.90317,28.74546,29.21917,63.79193,31.49963,88.13059a221.27956,221.27956,0,0,1-.30292,46.39887.666.666,0,0,0,.65961.7592Z" transform="translate(-238.77402 -267.90176)" fill="#3f3d56" />
                        <path d="M323.34981,466.69582a.6654.6654,0,0,0,.39173-1.20366,91.70936,91.70936,0,0,0-20.24621-10.30643c-11.1702-4.08948-28.15614-7.79687-45.64287-2.23145a.66533.66533,0,1,0,.40353,1.268c17.12847-5.451,33.80651-1.80495,44.78176,2.21326a90.20269,90.20269,0,0,1,19.92141,10.13315A.66284.66284,0,0,0,323.34981,466.69582Z" transform="translate(-238.77402 -267.90176)" fill="#3f3d56" />
                        <path d="M353.80412,390.84555a.6654.6654,0,0,0-1.17233-.4774,91.7099,91.7099,0,0,0-11.7377,19.45143c-4.88328,10.84668-9.80428,27.52154-5.51262,45.36366a.66533.66533,0,1,0,1.29376-.31117c-4.20339-17.47655.6343-33.84872,5.43247-44.5061A90.20231,90.20231,0,0,1,353.64918,391.226.66277.66277,0,0,0,353.80412,390.84555Z" transform="translate(-238.77402 -267.90176)" fill="#3f3d56" />
                      </svg>
                    </div>
                  </div>
                </div>
              </div>




            </div>
            <div style="margin: 20px;" class="modal-footer">
              <button id="profile_cls_btn" type="button" class="btn btn-secondary">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Add friend container -->
    <div id="friend_con" style=" display: none; height:100%; width:100%; overflow-y:scroll; z-index:120; background-color:white; position:absolute; top:0;">
      <div id="exampleModalFullscreen ">
        <div class="modal-dialog">
          <div class="modal-content">
            <div style="margin: 20px;" class="modal-header">
              <h1 class="modal-title fs-4" id="exampleModalFullscreenLabel">Search Your Friend</h1>
              <button type="button" class="btn-close" id="friend_cls_btn_cross" aria-label="Close"></button>
            </div>
            <div style="margin: 20px; overflow:hidden;" class="modal-body">
              <hr>
              <div style="overflow-y:scroll;" class="row">
                <div class="col-sm-8 mb-3 mb-sm-0">
                  <div style="border-color: #fff;" class="card">
                    <div class="card-body">
                      <div style=" width:100%; border-radius:10px; height:260px;">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">Search</span>
                          <input id="searchInput" type="search" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="bd-example-snippet bd-code-snippet">
                          <div class="bd-example">

                            <div style="height: 200px; overflow-y:scroll" id="userList_div" class="list-group">
                              <a class="list-group-item list-group-item-action">Friend List</a>
                              <a href="#" class="list-group-item list-group-item-action"></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                  <div style="border-color: #fff;" class="card">
                    <div class="card-body">
                      <div style=" width:100%; border-radius:10px; height:260px;">
                        <!-- search people pic -->
                        <center>
                          <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="90.72392" height="159.36199" viewBox="0 0 590.72392 659.36199" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path id="e846ef3a-3b5e-448c-8d47-a4173376229f-58" data-name="Path 461" d="M867.57258,741.80716a22.728,22.728,0,0,1-21.947-3.866c-7.687-6.452-10.1-17.081-12.058-26.924l-5.8-29.112,12.143,8.362c8.733,6.013,17.662,12.219,23.709,20.929s8.686,20.6,3.828,30.024" transform="translate(-304.63804 -120.31901)" fill="#e6e6e6" />
                            <path id="b0167a87-6d3c-4fe1-a02f-2e6974de103a-59" data-name="Path 462" d="M866.53457,777.05314c1.229-8.953,2.493-18.02,1.631-27.069-.766-8.036-3.217-15.885-8.209-22.321a37.13174,37.13174,0,0,0-9.527-8.633c-.953-.6-1.829.909-.881,1.507a35.3,35.3,0,0,1,13.963,16.847c3.04,7.732,3.528,16.161,3,24.374-.317,4.967-.988,9.9-1.665,14.83a.9.9,0,0,0,.61,1.074.878.878,0,0,0,1.074-.61Z" transform="translate(-304.63804 -120.31901)" fill="#f2f2f2" />
                            <path d="M822.52338,628.35311H314.489V120.319H822.52338Z" transform="translate(-304.63804 -120.31901)" fill="#fff" />
                            <path d="M822.52338,628.35311H314.489V120.319H822.52338ZM321.99513,620.847H815.01722V127.82517H321.99513Z" transform="translate(-304.63804 -120.31901)" fill="#e5e5e5" />
                            <rect x="207.88534" y="79.48221" width="220" height="6.85312" fill="#e5e5e5" />
                            <rect x="207.88534" y="97.3003" width="220" height="6.85312" fill="#e5e5e5" />
                            <rect x="207.88534" y="115.11839" width="220" height="6.85312" fill="#e5e5e5" />
                            <rect x="207.88534" y="232.48253" width="220" height="6.85312" fill="#e5e5e5" />
                            <rect x="207.88534" y="250.30062" width="220" height="6.85312" fill="#e5e5e5" />
                            <rect x="207.88534" y="268.11871" width="220" height="6.85312" fill="#e5e5e5" />
                            <rect x="207.88534" y="385.48285" width="220" height="6.85312" fill="#e5e5e5" />
                            <rect x="207.88534" y="403.30094" width="220" height="6.85312" fill="#e5e5e5" />
                            <rect x="207.88534" y="421.11903" width="220" height="6.85312" fill="#e5e5e5" />
                            <path d="M424.452,254.40315a73.48452,73.48452,0,0,0-11.72491-4.93423l-.51555-5.70369-20.91078-2.25289-2.65757,7.29025-7.5044,2.81614a3.65253,3.65253,0,0,0-.76152.39664h-.00814a3.71836,3.71836,0,0,0-1.58656,2.475,3.80137,3.80137,0,0,0,.05578,1.49137l.39664,1.62622c.571.34111,1.15816.66638,1.745.97572l.373.19043c.8568.44423,1.72949.86465,2.62581,1.25335.18243.07935.38075.15866.56319.238.01588.00794.02363.00794.03951.01588.42066.17455.84093.34111,1.26933.49977a41.69109,41.69109,0,0,0,4.29952,1.38031,44.21436,44.21436,0,0,0,11.39954,1.49137c1.40412,0,2.79236-.06348,4.16472-.19832a44.03857,44.03857,0,0,0,9.2339-1.86419c.00775,0,.01588-.00794.02363-.00794a43.34123,43.34123,0,0,0,5.54522-2.19741c.00774-.00794.02363-.00794.03176-.01583.40439-.19043.79328-.39664,1.18992-.595l.19019-.09524c.31723-.16656.63485-.33316.95209-.50766.79328-.43635,1.57068-.89641,2.33994-1.38824.21421-.127.42066-.2618.63486-.40458.30136-.19833.60271-.40459.89632-.61879C426.01457,255.28368,425.2453,254.83151,424.452,254.40315Z" transform="translate(-304.63804 -120.31901)" fill="#3f3d56" />
                            <path d="M385.20825,257.91738l-1.30884-5.90995h-3.41909a.81809.81809,0,0,0-.103.00794h-.00814a7.40924,7.40924,0,0,0-3.44271,1.18992,7.62539,7.62539,0,0,0-1.84027,1.65c1.01523.76946,2.07035,1.48343,3.15724,2.16564l.04764.02377c.3091.19043.62673.38081.944.56325.571.34111,1.15816.66638,1.745.97572l.373.19043c.8568.44423,1.72949.86465,2.62581,1.25335.18243.07935.38075.15866.56319.238.01588.00794.02363.00794.03951.01588.42066.17455.84093.34111,1.26933.49977Z" transform="translate(-304.63804 -120.31901)" fill="#3f3d56" />
                            <circle cx="96.2975" cy="102.52722" r="15.06012" fill="#ffb8b8" />
                            <path d="M390.8243,215.51076c1.559,1.84494,4.19733,2.36555,6.6311,2.579a62.45441,62.45441,0,0,0,16.96025-1.3849c.34473,3.34141-.59521,6.94426,1.3729,9.69292a44.99776,44.99776,0,0,0,1.5988-10.20084,9.76388,9.76388,0,0,0-.5651-4.369,4.01823,4.01823,0,0,0-3.423-2.52361,8.57906,8.57906,0,0,1,3.82678-1.636l-4.78192-2.4031,1.228-1.26072-8.6574-.52978,2.5075-1.593a54.37251,54.37251,0,0,0-11.39121-.35958,9.77843,9.77843,0,0,0-5.03814,1.40046c-1.42943,1.02218-2.25538,3.05378-1.368,4.55453a6.61308,6.61308,0,0,0-5.03977,3.99885,10.676,10.676,0,0,0-.38256,5.13155,36.375,36.375,0,0,0,1.90723,8.06855Z" transform="translate(-304.63804 -120.31901)" fill="#2f2e41" />
                            <path d="M443.28431,206.52068a44.19307,44.19307,0,1,0-76.36917,41.98046c.39664.49977.80916.99954,1.22982,1.48343.03176.03172.05539.06348.08715.09519a42.86334,42.86334,0,0,0,3.292,3.39522c.30174.27768.619.56325.93621.833.60271.53943,1.22169,1.055,1.86429,1.54686.25371.19832.49967.39664.76152.58707,1.01523.76946,2.07035,1.48343,3.15724,2.16564l.04764.02378c.3091.19042.62673.3808.944.56324.571.34111,1.15816.66638,1.745.97572l.373.19043c.8568.44424,1.72949.86465,2.62581,1.25335.18243.07936.38075.15867.56319.238.01588.00794.02363.00794.03951.01589.42066.17454.84093.3411,1.26933.49977a41.69345,41.69345,0,0,0,4.29952,1.3803,44.21436,44.21436,0,0,0,11.39954,1.49137c1.40412,0,2.79236-.06348,4.16472-.19832a44.03857,44.03857,0,0,0,9.2339-1.86419c.00775,0,.01588-.00794.02363-.00794a43.33976,43.33976,0,0,0,5.54522-2.19741c.00774-.00794.02363-.00794.03176-.01583.40439-.19043.79328-.39664,1.18992-.595l.19019-.09524c.31723-.16656.63485-.33316.95209-.50766.79328-.43634,1.57068-.89641,2.33994-1.38824.21421-.12695.42066-.2618.63486-.40458.30136-.19832.60271-.40458.89632-.61879.3885-.26968.7774-.54736,1.15816-.83293.11891-.08725.246-.1745.36487-.26969a44.17746,44.17746,0,0,0,15.00882-49.72289ZM426.816,254.31586c-.26184.20626-.53144.40458-.80141.58706-.26185.19832-.52331.3887-.79329.5632-.23008.16661-.46016.32528-.698.476l-.07127.0476c-.17469.119-.349.23-.52369.3411q-.98772.6187-1.99908,1.18992l-.2142.119c-.30136.16661-.60271.32528-.90407.48394-.03989.02378-.08754.03966-.127.06343l-.04765.02382c-.38076.19832-.76965.3887-1.15816.57114a38.91126,38.91126,0,0,1-4.62489,1.87218c-.20645.07137-.41252.14279-.61858.20621a41.6098,41.6098,0,0,1-8.742,1.777c-1.30108.119-2.618.18244-3.94277.18244a41.21052,41.21052,0,0,1-10.78056-1.41206,39.1725,39.1725,0,0,1-5.29113-1.79278c-.08754-.0397-.18282-.07141-.27-.11107-.0949-.03965-.18244-.07141-.2696-.11107-.09528-.03965-.18244-.07931-.27772-.1269-.74564-.32527-1.48353-.68226-2.20515-1.05508l-.349-.18244c-.88082-.46011-1.74537-.95194-2.5863-1.47554-.246-.15072-.49967-.30934-.73789-.476-.06313-.03965-.11891-.0793-.18244-.119-.56319-.37282-1.12639-.76152-1.67371-1.1661-.37263-.27767-.74564-.5553-1.11052-.84087-.61084-.46012-1.19805-.95195-1.769-1.45966-.30135-.25386-.595-.53149-.88043-.79328a40.306,40.306,0,0,1-3.189-3.3c-.33312-.38081-.65849-.76157-.968-1.15821a3.02208,3.02208,0,0,1-.19832-.24591,41.77344,41.77344,0,1,1,58.00479,7.322Z" transform="translate(-304.63804 -120.31901)" fill="#3f3d56" />
                            <path d="M443.28464,359.52105a44.19305,44.19305,0,1,0-76.36916,41.98041c.39664.49977.80916.99954,1.22943,1.48343.03176.03172.05539.06348.08715.09519a42.94478,42.94478,0,0,0,3.29243,3.39527c.30135.27763.61859.5632.93582.83293.60309.53943,1.22168,1.05508,1.86429,1.54691a43.45061,43.45061,0,0,0,3.91876,2.75266l.04764.02382c.88043.54737,1.77675,1.055,2.68933,1.539l.37263.19038c.8568.44424,1.72949.86465,2.6258,1.25335.18244.07936.38076.15867.5632.238.01588.00794.024.00794.0399.01584a42.929,42.929,0,0,0,5.56885,1.88007,44.21134,44.21134,0,0,0,11.39915,1.49137c1.40412,0,2.79236-.06343,4.16472-.19832a44.03355,44.03355,0,0,0,9.2339-1.86419c.00813,0,.01588-.00794.02363-.00794a43.31709,43.31709,0,0,0,5.54522-2.19741c.00774-.00789.024-.00789.03176-.01583.40439-.19038.79328-.39664,1.18992-.595l.19057-.09519c.31724-.1666.63447-.33321.95171-.50771.79328-.43629,1.57068-.89641,2.34033-1.38824.2142-.127.42027-.2618.63447-.40458.698-.46012,1.38824-.952,2.05447-1.45172.11931-.08725.246-.1745.36527-.26969a44.17946,44.17946,0,0,0,15.00881-49.72284Z" transform="translate(-304.63804 -120.31901)" fill="#fff" />
                            <circle id="f2095780-2301-4cc1-9693-3d089d317ca1" data-name="Ellipse 188" cx="111.49544" cy="265.32111" r="6.6231" fill="#2f2e41" />
                            <path id="fe36a822-bf42-420c-ba8a-fcca90365ca6-60" data-name="Path 969" d="M417.97869,379.19948a6.6239,6.6239,0,0,1,5.83059,9.76688,6.6215,6.6215,0,1,0-11.0012-7.276,6.60732,6.60732,0,0,1,5.17138-2.49091Z" transform="translate(-304.63804 -120.31901)" fill="#2f2e41" />
                            <circle id="e26e4994-e49f-47aa-919e-dc7dee2cb7c3" data-name="Ellipse 189" cx="99.11867" cy="245.85083" r="19.45601" fill="#2f2e41" />
                            <path id="ac420ffb-80fa-461b-bc18-228b12874f63-61" data-name="Path 970" d="M388.48684,354.09851a19.45283,19.45283,0,0,1,26.9636-2.04033c-.15866-.1515-.31733-.30383-.48151-.45058a19.456,19.456,0,0,0-25.96422,28.98283q.05542.0496.11117.09882c.165.14676.33476.28557.50374.426a19.45283,19.45283,0,0,1-1.132-27.01677Z" transform="translate(-304.63804 -120.31901)" fill="#2f2e41" />
                            <circle id="a12696bc-31d6-40e2-aafc-0c11595f0891" data-name="Ellipse 190" cx="98.95367" cy="252.61117" r="12.53066" fill="#a0616a" />
                            <path d="M426.0149,405.57894v4.20438c-.76965.49183-1.54705.95194-2.34033,1.38824-.31724.1745-.63447.3411-.95171.50771l-.19057.09519c-.39664.19832-.78553.40458-1.18992.595-.00775.00794-.024.00794-.03176.01583a43.31709,43.31709,0,0,1-5.54522,2.19741c-.00775,0-.0155.00794-.02363.00794a44.03355,44.03355,0,0,1-9.2339,1.86419c-1.37236.13489-2.7606.19832-4.16472.19832a44.2114,44.2114,0,0,1-11.39915-1.49137,42.9291,42.9291,0,0,1-5.56885-1.88008c-.01588-.00789-.024-.00789-.0399-.01583-.18244-.07936-.38076-.15866-.5632-.238-.89631-.3887-1.769-.80911-2.6258-1.25335l-.37263-.19038c-.91258-.48394-1.80889-.9916-2.68933-1.539l-.04764-.02382a43.45061,43.45061,0,0,1-3.91876-2.75266c-.64261-.49183-1.26119-1.00748-1.86429-1.54691-.31723-.26973-.63447-.5553-.93582-.83293a42.9465,42.9465,0,0,1-3.29243-3.39527,16.04862,16.04862,0,0,1,.6031-2.43538l.00774-.00794a3.56229,3.56229,0,0,1,.16656-.39664,3.16442,3.16442,0,0,1,.15068-.33316c1.42-2.65747,3.99042-3.31591,7.17942-3.45869,1.80077-.07936,3.79171.00794,5.89422-.01588,1.11051-.00795,2.26054-.0476,3.411-.15073,7.25844-.65839,5.94186-4.94212,6.26684-7.2506.32537-2.237,2.34034-.3014,2.47513-.1745l.00775.00794a25.60037,25.60037,0,0,0,13.16854,2.30843c.7774-.09519,1.5548-.15073,2.3322-.1745,2.04672-.02382,1.60244.5632.8967,1.04714a8.87215,8.87215,0,0,1-1.071.6029s-.32537,1.9832-.65848,4.95006c-.31724,2.83991,5.12456,4.17267,5.57659,4.27575a.04827.04827,0,0,0,.03176.00794,10.92623,10.92623,0,0,1,6.03715.15867h.00775A7.15379,7.15379,0,0,1,426.0149,405.57894Z" transform="translate(-304.63804 -120.31901)" fill="#6c63ff" />
                            <path d="M385.45416,410.67973c0,.587-.0155,1.15027-.03951,1.68175-.00775.31733-.02363.62667-.03951.92018-.01588-.00789-.024-.00789-.0399-.01583-.18244-.07936-.38076-.15866-.5632-.238-.89631-.3887-1.769-.80911-2.6258-1.25335l-.37263-.19038c-.91258-.48394-1.80889-.9916-2.68933-1.539.02363-.27767.06353-.5553.103-.833.08715-.61079.15881-1.22958.20645-1.84037a25.53057,25.53057,0,0,0-2.26093-12.50211v-.00794c-.15881-.31734-.25371-.49183-.25371-.49183s2.30819-1.98321,5.60022,0a1.98132,1.98132,0,0,1,.54771.47595C385.01026,397.186,385.54944,405.05535,385.45416,410.67973Z" transform="translate(-304.63804 -120.31901)" fill="#2f2e41" />
                            <path d="M421.47716,409.60088c-.03176.88847-.0794,1.81659-.13479,2.7606v.00794c-.00775.00794-.024.00794-.03176.01583a43.31709,43.31709,0,0,1-5.54522,2.19741c-.00775,0-.0155.00794-.02363.00794l-.08715-2.22912-.00814-.29351-.42027-10.85208a1.82075,1.82075,0,0,1,1.81665-1.90389h4.02179c.19832,0,.34125.40458.43654,1.13439v.00794A68.744,68.744,0,0,1,421.47716,409.60088Z" transform="translate(-304.63804 -120.31901)" fill="#2f2e41" />
                            <path id="e6a5f050-bb79-4898-9f1b-a16710d0980e-62" data-name="Path 975" d="M392.87448,357.26684v12.53383h2.90183l3.69275-3.95689-.4942,3.95689h12.82733l-.79328-3.95689,1.58656,3.95689h2.04509V357.26684Z" transform="translate(-304.63804 -120.31901)" fill="#2f2e41" />
                            <ellipse id="bcc9b546-fa99-40e5-8b80-3cc98cb6450e" data-name="Ellipse 191" cx="86.258" cy="249.97351" rx="0.98922" ry="1.81344" fill="#a0616a" />
                            <ellipse id="aac24dc1-8688-403d-884a-09279027a7ab" data-name="Ellipse 192" cx="111.65013" cy="249.97351" rx="0.98922" ry="1.81344" fill="#a0616a" />
                            <path d="M428.70384,407.927c-.66623.49977-1.35647.9916-2.05447,1.45172-.2142.14278-.42027.27763-.63447.40458-.76965.49183-1.54705.95194-2.34033,1.38824-.31724.1745-.63447.3411-.95171.50771v-8.742s1.26894,1.01542,3.292,2.70507c.25371.2142.51556.43634.79328.67431C427.395,406.80851,428.02987,407.34794,428.70384,407.927Z" transform="translate(-304.63804 -120.31901)" fill="#6c63ff" />
                            <path d="M443.28464,359.52105a44.19305,44.19305,0,1,0-76.36916,41.98041c.39664.49977.80916.99954,1.22943,1.48343.03176.03172.05539.06348.08715.09519a42.94478,42.94478,0,0,0,3.29243,3.39527c.30135.27763.61859.5632.93582.83293.60309.53943,1.22168,1.05508,1.86429,1.54691a43.45061,43.45061,0,0,0,3.91876,2.75266l.04764.02382c.88043.54737,1.77675,1.055,2.68933,1.539l.37263.19038c.8568.44424,1.72949.86465,2.6258,1.25335.18244.07936.38076.15867.5632.238.01588.00794.024.00794.0399.01584a42.929,42.929,0,0,0,5.56885,1.88007,44.21134,44.21134,0,0,0,11.39915,1.49137c1.40412,0,2.79236-.06343,4.16472-.19832a44.03355,44.03355,0,0,0,9.2339-1.86419c.00813,0,.01588-.00794.02363-.00794a43.31709,43.31709,0,0,0,5.54522-2.19741c.00774-.00789.024-.00789.03176-.01583.40439-.19038.79328-.39664,1.18992-.595l.19057-.09519c.31724-.1666.63447-.33321.95171-.50771.79328-.43629,1.57068-.89641,2.34033-1.38824.2142-.127.42027-.2618.63447-.40458.698-.46012,1.38824-.952,2.05447-1.45172.11931-.08725.246-.1745.36527-.26969a44.17946,44.17946,0,0,0,15.00881-49.72284Zm-16.46871,47.79518c-.26185.20626-.53144.40458-.801.587-.26184.19832-.52369.3887-.79328.56319-.23008.16661-.46016.32528-.69838.476-.19832.13485-.39664.2618-.595.3887q-.98715.61878-1.9987,1.18992l-.21459.119c-.30135.16656-.6027.32523-.90406.48389-.03989.02378-.08754.03966-.127.06348l-.04764.02377c-.38076.19832-.76927.3887-1.15816.57119a38.89278,38.89278,0,0,1-4.62489,1.87213c-.20607.07137-.41252.14279-.61859.20626a41.612,41.612,0,0,1-8.742,1.77694c-1.30109.119-2.61806.18244-3.94277.18244a41.21276,41.21276,0,0,1-10.78057-1.412,39.18138,39.18138,0,0,1-5.29112-1.79282c-.18244-.07142-.36488-.15073-.53957-.22215-.0949-.03965-.18244-.07931-.27772-.1269-.74564-.32527-1.48314-.68221-2.20515-1.05508l-.349-.18244c-.88043-.46011-1.74537-.95194-2.5863-1.47549-.3091-.19043-.61859-.38875-.91994-.595-.95209-.62672-1.88017-1.301-2.78462-2.007-.61084-.46012-1.19767-.952-1.769-1.45966-.30135-.25381-.595-.53148-.88043-.79328a40.36294,40.36294,0,0,1-3.189-3.3c-.33311-.38076-.65848-.76156-.968-1.1582a3.01537,3.01537,0,0,1-.19832-.24592,41.77342,41.77342,0,1,1,58.00479,7.322Z" transform="translate(-304.63804 -120.31901)" fill="#3f3d56" />
                            <circle cx="97.16145" cy="409.27631" r="17.31454" fill="#2f2e41" />
                            <ellipse cx="384.48495" cy="516.46015" rx="7.16464" ry="5.37348" transform="translate(-557.21748 302.82059) rotate(-45)" fill="#2f2e41" />
                            <ellipse cx="413.25715" cy="511.94687" rx="5.37348" ry="7.16464" transform="translate(-524.51191 570.55853) rotate(-66.86956)" fill="#2f2e41" />
                            <path d="M422.51029,563.181l-2.04-3.21a8.00714,8.00714,0,0,0-14.64014,6.49l.58008,2.08.66016,2.36a45.21049,45.21049,0,0,0,7.87988-1.72.034.034,0,0,0,.02-.01,42.14842,42.14842,0,0,0,5.55029-2.2c.00977-.01.01953-.01.02979-.02.3999-.19.79-.39,1.18994-.59a1.735,1.735,0,0,0,.18994-.1c.31982-.16.64014-.33.95019-.5q.47974-.25506.92969-.54Z" transform="translate(-304.63804 -120.31901)" fill="#cacaca" />
                            <circle cx="97.71058" cy="413.40969" r="14.69467" fill="#ffb6b6" />
                            <path d="M423.57035,562.551a31.78536,31.78536,0,0,0-5.97022-7.24,8.72893,8.72893,0,0,0-5.81982-2.22h-20.7002a8.7244,8.7244,0,0,0-8.71,9.28,8.93713,8.93713,0,0,0,.36035,1.98,9.39745,9.39745,0,0,0,.54981,1.36l1.02,2.04c.08007.03.16015.07.23974.1.02.01.03028.01.04.02.41992.17.84033.34,1.27.5a41.34909,41.34909,0,0,0,4.30029,1.38,43.32755,43.32755,0,0,0,7.15967,1.29c1.41016.13,2.82031.2,4.24024.2,1.41015,0,2.79-.07,4.16992-.2.45019-.04.8999-.09,1.3501-.14a45.21049,45.21049,0,0,0,7.87988-1.72.034.034,0,0,0,.02-.01,42.14842,42.14842,0,0,0,5.55029-2.2c.00977-.01.01953-.01.02979-.02.3999-.19.79-.39,1.18994-.59a1.735,1.735,0,0,0,.18994-.1c.31982-.16.64014-.33.95019-.5q.47974-.25506.92969-.54c.32031-.17.62012-.36.93018-.55C424.36038,563.921,423.97025,563.221,423.57035,562.551Z" transform="translate(-304.63804 -120.31901)" fill="#cacaca" />
                            <path d="M394.83011,555.771a8.00082,8.00082,0,0,0-10.61963,3.81995l-1.84033,2.78-.87988,1.33-1.33985,2.02c.27979.15.54981.30005.83008.45l.36963.19c.86035.44,1.73.86,2.63037,1.25.09961.05.21.09.31983.14.08007.03.16015.07.23974.1.02.01.03028.01.04.02.41992.17.84033.34,1.27.5a41.34909,41.34909,0,0,0,4.30029,1.38,43.32755,43.32755,0,0,0,7.15967,1.29l.7002-2.37.68017-2.26A8.01285,8.01285,0,0,0,394.83011,555.771Z" transform="translate(-304.63804 -120.31901)" fill="#cacaca" />
                            <path d="M386.908,524.4858a19.98594,19.98594,0,0,0,11.42181,3.52983,12.24752,12.24752,0,0,1-4.85431,1.9971,40.3,40.3,0,0,0,16.46138.09249,10.65382,10.65382,0,0,0,3.446-1.18356,4.361,4.361,0,0,0,2.127-2.8447c.36116-2.06322-1.24653-3.9377-2.91727-5.201a21.519,21.519,0,0,0-18.08306-3.61349A9.90262,9.90262,0,0,0,389.154,520.289a4.87853,4.87853,0,0,0-.45065,5.79358Z" transform="translate(-304.63804 -120.31901)" fill="#2f2e41" />
                            <path d="M443.29007,512.521a44.19385,44.19385,0,1,0-76.36963,41.98c.38965.5.81006,1,1.23,1.48a.82521.82521,0,0,0,.08008.1,42.15388,42.15388,0,0,0,3.29981,3.38995c.2998.28.60986.57.93017.84.59961.54,1.21973,1.05,1.86963,1.54.25.2.5.4.76026.59,1.00976.77,2.06982,1.48,3.1499,2.17a.07523.07523,0,0,1,.0498.02c.31006.19.63037.38.9502.56.2998.18.60986.36.91015.53.27979.15.54981.30005.83008.45l.36963.19c.86035.44,1.73.86,2.63037,1.25.09961.05.21.09.31983.14.08007.03.16015.07.23974.1.02.01.03028.01.04.02.41992.17.84033.34,1.27.5a41.34909,41.34909,0,0,0,4.30029,1.38,43.32755,43.32755,0,0,0,7.15967,1.29c1.41016.13,2.82031.2,4.24024.2,1.41015,0,2.79-.07,4.16992-.2.45019-.04.8999-.09,1.3501-.14a45.21049,45.21049,0,0,0,7.87988-1.72.034.034,0,0,0,.02-.01,42.14842,42.14842,0,0,0,5.55029-2.2c.00977-.01.01953-.01.02979-.02.3999-.19.79-.39,1.18994-.59a1.735,1.735,0,0,0,.18994-.1c.31982-.16.64014-.33.95019-.5q.47974-.25506.92969-.54c.32031-.17.62012-.36.93018-.55q.24023-.15.48-.3c.22021-.13.41992-.26.64013-.41.29981-.19.6001-.4.88965-.61.39014-.27.78028-.55,1.16016-.84a4.34045,4.34045,0,0,0,.37012-.27,44.22136,44.22136,0,0,0,15.00976-49.72Zm-16.46972,47.79c-.26026.21-.53028.41-.79981.59-.27051.2-.53027.39-.80029.57-.23.16-.46.32-.69971.47a.43763.43763,0,0,1-.07031.05c-.16992.12-.3501.23-.52.34-.12012.06994-.23975.15-.35986.22-.3501.22-.7002.43-1.06006.63-.18994.12-.39014.23-.58008.34-.06983.04-.14014.08-.21.12-.31006.17-.60987.32-.91016.48-.03955.03-.08984.04-.11963.07a.07766.07766,0,0,0-.05029.02c-.37988.2-.77.39-1.15967.57a38.6113,38.6113,0,0,1-4.63037,1.87c-.19971.07-.40967.15-.60986.21a41.84782,41.84782,0,0,1-7.83008,1.68c-.29981.04-.60986.07-.91992.1-1.29981.12-2.60987.18-3.93994.18-1.18018,0-2.37012-.05-3.54-.15a41.2311,41.2311,0,0,1-7.23975-1.26,38.302,38.302,0,0,1-5.29-1.8c-.09033-.04-.18017-.07-.27-.11-.1001-.04-.18017-.07-.27-.11-.10009-.04-.18017-.08-.28027-.13-.6499-.28-1.29981-.59-1.92969-.91-.09033-.05-.18017-.09-.27-.14l-.3501-.18c-.21-.11-.41992-.22-.62011-.33-.66992-.36-1.33008-.75-1.96973-1.15-.24023-.15-.5-.31-.74023-.47l-.18018-.12c-.56006-.38-1.11963-.76-1.66992-1.17-.37012-.28-.75-.55-1.10986-.84-.60987-.46-1.2002-.95-1.77-1.46-.3003-.25-.6001-.53-.87989-.79a39.67486,39.67486,0,0,1-3.18994-3.3c-.33008-.37994-.66015-.76-.97021-1.16-.06983-.08-.12989-.16-.2002-.25a41.77848,41.77848,0,1,1,58.01026,7.32Z" transform="translate(-304.63804 -120.31901)" fill="#3f3d56" />
                            <path d="M475.48406,296.60823a103.86271,103.86271,0,1,0,5.88861,153.38883l127.40025,107.4997A9.571,9.571,0,0,0,621.13149,542.879l-.01409-.01188L493.71711,435.36737A103.86855,103.86855,0,0,0,475.48406,296.60823Zm-8.213,128.40762a77.81462,77.81462,0,1,1-9.28981-109.65368l0,0A77.81462,77.81462,0,0,1,467.27106,425.01585Z" transform="translate(-304.63804 -120.31901)" fill="#3f3d56" />
                            <path d="M357.61735,434.30569A77.81885,77.81885,0,0,1,344.41288,329.6974q-2.23174,2.24755-4.315,4.70769A77.81463,77.81463,0,1,0,459.04139,434.769q2.07849-2.46329,3.91466-5.04544A77.81872,77.81872,0,0,1,357.61735,434.30569Z" transform="translate(-304.63804 -120.31901)" opacity="0.3" style="isolation:isolate" />
                            <path d="M732.32268,561.51575a10.74269,10.74269,0,0,0-3.06875-16.18426l-23.222-95.04913-16.94052,5.40781,25.07572,94.40044a10.8009,10.8009,0,0,0,18.15552,11.42514Z" transform="translate(-304.63804 -120.31901)" fill="#ffb6b6" />
                            <polygon points="415.682 380.399 403.302 391.079 385.982 406.01 378.332 366.87 377.532 362.8 376.902 359.57 394.452 329 409.082 329.839 410.082 329.899 410.102 330.12 410.332 332.17 413.332 359.149 413.402 359.8 415.682 380.399" fill="#3f3d56" />
                            <polygon points="334.763 646.074 322.504 646.073 316.671 598.785 334.766 598.786 334.763 646.074" fill="#ffb6b6" />
                            <path d="M642.5281,778.27684l-39.53077-.00147v-.5a15.38731,15.38731,0,0,1,15.38648-15.38623h.001l24.144.001Z" transform="translate(-304.63804 -120.31901)" fill="#2f2e41" />
                            <polygon points="462.763 647.074 450.504 647.073 444.671 599.785 462.766 599.786 462.763 647.074" fill="#ffb6b6" />
                            <path d="M770.5281,779.27684l-39.53077-.00147v-.5a15.38731,15.38731,0,0,1,15.38648-15.38623h.001l24.144.001Z" transform="translate(-304.63804 -120.31901)" fill="#2f2e41" />
                            <path d="M777.20009,748.56853l-33,5-48.00977-162.48-50.99023,163.48-37-5,48-190v-15l6.5-22.5-.68018-6.09-4.73-42.59-2.0498-18.47-.13286-1.19314a4.05551,4.05551,0,0,1,3.19291-4.41685h0l15.3999-3.24H698.87l14.8501,4.09,1.02.28.46.13-.23,1.92-3.48,29.18-.18994,1.6-3.36011,28.13-.74,6.17c29,21,30,42,30,42Z" transform="translate(-304.63804 -120.31901)" fill="#2f2e41" />
                            <circle cx="378.60536" cy="288.53692" r="24.56103" fill="#ffb6b6" />
                            <rect x="660.70009" y="515.06853" width="49" height="7" transform="matrix(0.99156, -0.12967, 0.12967, 0.99156, -366.09696, -27.08894)" fill="#3f3d56" />
                            <path d="M595.28248,520.3709a10.52714,10.52714,0,0,1,1.31644,1.00712l48.05634-12.25059,3.2784-11.59339,18.14314,2.66086-3.8092,21.08784a8,8,0,0,1-7.03475,6.53393l-56.11128,5.90907a10.4971,10.4971,0,1,1-3.83909-13.35484Z" transform="translate(-304.63804 -120.31901)" fill="#ffb6b6" />
                            <path d="M669.20009,455.56853l-8.5-6.5c-2.29816-.87172-5.44731,1.605-6,4l-12,49,25,18,3.5-5.5Z" transform="translate(-304.63804 -120.31901)" fill="#3f3d56" />
                            <g opacity="0.2">
                              <path d="M717.97011,479.46849a67.67916,67.67916,0,0,1-6.48,2.2c-.7.21-1.41992.41-2.12988.6a66.01864,66.01864,0,0,1-14.34034,2.32,45.13975,45.13975,0,0,1-6.25976-.17,35.24268,35.24268,0,0,1-6.58985-1.3c-.07031-.02-.15039-.04-.22021-.06a28.90627,28.90627,0,0,1-11.9502-6.79,23.56071,23.56071,0,0,1-2.10986-2.35,21.23882,21.23882,0,0,1-4.56006-16.53,14.15553,14.15553,0,0,1,.34033-1.57,25.10846,25.10846,0,0,1,1.48975-4.1c.27-.62.57031-1.23.89014-1.82995l11.2998-3.82h21.52l14.8501,4.09,1,.06.02.22.46.13-.23,1.92Z" transform="translate(-304.63804 -120.31901)" />
                            </g>
                            <path d="M664.423,388.52194c-4.59329-.563-9.634-.16485-13.21412,2.76739s-4.73557,9.0278-1.34592,12.17828c3.00083,2.7891,7.6933,2.13322,11.71262,2.92632a15.85418,15.85418,0,0,1,12.38363,15.15657c-.05982,10.17413-9.8241,17.87895-11.578,27.90093-1.197,6.83982,1.68772,14.03819,6.675,18.86966s11.84324,7.44255,18.7509,8.1498,13.8926-.373,20.60576-2.14766c6.74127-1.78215,13.3778-4.31055,19.03424-8.388s10.2931-9.82559,12.10927-16.55777.51227-14.45089-4.16774-19.61986c-5.359-5.919-14.27435-7.95446-18.90988-14.45565-5.1964-7.28778-3.27353-17.66625-7.47921-25.5673-2.80791-5.27514-8.12457-8.87315-13.79191-10.76858s-11.719-2.26953-17.69211-2.4531c-3.13957-.09649-6.37528-.12863-9.30036,1.016s-5.49633,3.75316-5.648,6.89055S664.423,388.52194,664.423,388.52194Z" transform="translate(-304.63804 -120.31901)" fill="#2f2e41" />
                            <path d="M894.362,779.681h-381a1,1,0,0,1,0-2h381a1,1,0,0,1,0,2Z" transform="translate(-304.63804 -120.31901)" fill="#cacaca" />
                          </svg>
                        </center>
                        <p>To use this feature, simply start typing the name of your friend in the search bar, and our system will automatically update the results as you type. You can click on any of the results to view the user's profile page and connect with them.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Close button -->
                <div class="col-sm-12 mt-3 mb-sm-0">
                  <div style="border-color: #fff;" class="card">
                    <div class="card-body">
                      <div class="modal-footer">
                        <button id="friend_cls_btn" type="button" class="btn btn-secondary">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Friend ALERT Message -->
    <div style="overflow:hidden; z-index:1111111;  height:100%; width:100%; background-color: rgba(0, 0, 0, 0.5); position:absolute; top:0;" class="modal" id="friend_alert_added">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="friend_alert_added_header"></h1>
            <button id="friend_alert_added_confirm_cross" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div id="friend_alert_added_msg" class="modal-body"></div>
          <div class="modal-footer">
            <button id="friend_alert_added_confirm" type="button" class="btn btn-secondary">Ok</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Already Friend ALERT Message -->
    <div style="overflow:hidden; z-index:1111111;  height:100%; width:100%; background-color: rgba(0, 0, 0, 0.5); position:absolute; top:0;" class="modal" id="already_friend">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="friend_alert_already_close_heading"></h1>
            <button id="friend_alert_already_close_cross" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div id="friend_alert_already" class="modal-body"></div>
          <div class="modal-footer">
            <button id="friend_alert_already_close" type="button" class="btn btn-secondary">Ok</button>
          </div>
        </div>
      </div>
    </div>



    <!-- Message after 5 sec  -->
    <div id="nbstart_showing" style="display: none;" class="fade-out">
      <div id="nbstart_showing_2" style="transition: 0.5s ease-in-out;" class="modal modal-sheet position-fixed d-block py-5">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

          <div id="I_M" class="modal-content">
            <div style="box-shadow: 0 8px 8px rgba(0, 0, 0, 0.1); z-index: 111111; " class="modal-header border-bottom-0">
              <h1 class="modal-title fs-5">Updates</h1>&nbsp;
              <h6 style="font-size:12px;">April 4, 2023</h6>
              <button id="close_showing_msg" type="button" class="btn-close" aria-label="Close"></button>
            </div>
            <div style="overflow-y: scroll;" class="s">
              <div class="modal-body">
                <center>
                  <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="199.0589" height="188.13" viewBox="  0 0 897.0589 606.13" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M1039.79947,146.935h-607a8.72734,8.72734,0,0,0-8.71972,8.72v219.41h146.8999a15.01828,15.01828,0,0,1,15,15v185.63h453.81982a8.71245,8.71245,0,0,0,6.63037-3.06,2.0439,2.0439,0,0,0,.18994-.24,8.16642,8.16642,0,0,0,1.25-2.11005,8.507,8.507,0,0,0,.65967-3.31V155.655A8.72954,8.72954,0,0,0,1039.79947,146.935Z" transform="translate(-151.47055 -146.935)" fill="#f2f2f2" />
                    <rect x="273.84973" y="34.95117" width="621.95676" height="2.49281" fill="#ccc" />
                    <circle cx="295.03863" cy="18.69806" r="7.47844" fill="#ccc" />
                    <circle cx="316.53914" cy="18.69806" r="7.47844" fill="#ccc" />
                    <circle cx="338.03965" cy="18.69806" r="7.47844" fill="#ccc" />
                    <path d="M892.29947,236.315h-312a13,13,0,0,0,0,26h312a13,13,0,0,0,0-26Zm0,24h-312a11,11,0,0,1,0-22h312a11,11,0,0,1,0,22Z" transform="translate(-151.47055 -146.935)" fill="#ccc" />
                    <path d="M987.76969,339.885h-312a13,13,0,0,0,0,26h312a13,13,0,0,0,0-26Z" transform="translate(-151.47055 -146.935)" fill="#fff" />
                    <path d="M987.76969,387.885h-312a13,13,0,0,0,0,26h312a13,13,0,0,0,0-26Z" transform="translate(-151.47055 -146.935)" fill="#fff" />
                    <path d="M987.76969,435.885h-312a13,13,0,0,0,0,26h312a13,13,0,0,0,0-26Z" transform="translate(-151.47055 -146.935)" fill="#fff" />
                    <path d="M625.34976,318.385h-142.02a11.50392,11.50392,0,0,0-11.49024,11.49v45.19h2v-45.19a9.50457,9.50457,0,0,1,9.49024-9.49h142.02a9.49788,9.49788,0,0,1,9.48975,9.49v142.02a9.49788,9.49788,0,0,1-9.48975,9.49H585.97965v2h39.37011a11.49727,11.49727,0,0,0,11.48975-11.49V329.875A11.49723,11.49723,0,0,0,625.34976,318.385Z" transform="translate(-151.47055 -146.935)" fill="#ccc" />
                    <path d="M257.0941,464.50258c-.50236.02033-21.91024-1.464-22.45679-1.48242l1.9231-19.19727,12.19336-.36718,23.3-43.15528c-3.23157-6.162.745-14.33826,7.60026-15.59852,13.81387-3.13979,18.55923,18.59332,4.70321,21.48524l-19.27222,52.7334A8.54966,8.54966,0,0,1,257.0941,464.50258Z" transform="translate(-151.47055 -146.935)" fill="#ffb8b8" />
                    <path d="M200.65489,474.39028c-20.3716.05-22.15993-30.73767-1.74315-32.90723,53.9884-3.26208,47.15636-16.82179,51.25631,23.17516a4.5045,4.5045,0,0,1-3.9946,4.95375l-43.75025,4.68359A16.63489,16.63489,0,0,1,200.65489,474.39028Z" transform="translate(-151.47055 -146.935)" fill="#0d6efd" />
                    <path d="M196.00552,377.0499c28.06453,15.96985,5.02494,58.10625-23.56276,43.10183C144.37912,404.18242,167.41871,362.046,196.00552,377.0499Z" transform="translate(-151.47055 -146.935)" fill="#ffb8b8" />
                    <polygon points="70.049 592.823 82.308 592.822 88.141 545.534 70.047 545.535 70.049 592.823" fill="#ffb8b8" />
                    <path d="M218.89263,751.14218l38.53073-.00176c-.14718-19.88089-25.9182-14.15221-38.53141-14.88512Z" transform="translate(-151.47055 -146.935)" fill="#2f2e41" />
                    <polygon points="17.049 592.823 29.308 592.822 35.141 545.534 17.047 545.535 17.049 592.823" fill="#ffb8b8" />
                    <path d="M165.89263,751.14218l38.53073-.00176c-.14718-19.88089-25.9182-14.15221-38.53141-14.88512Z" transform="translate(-151.47055 -146.935)" fill="#2f2e41" />
                    <path d="M182.4525,723.24282c-2.963-.81313-19.06382,1.646-20.964-1.582-6.636-66.51114-5.16091-131.60265,9.56972-167.37011l50.6482-3.10059c11.32584,20.6755,37.36026,157.87463,21.6559,166.21643l-20.19448.7201a5.01824,5.01824,0,0,1-5.0393-3.82618l-16.89478-96.11718c-4.20722-5.881-12.4773,101.22422-13.843,100.82371A4.97808,4.97808,0,0,1,182.4525,723.24282Z" transform="translate(-151.47055 -146.935)" fill="#2f2e41" />
                    <path d="M169.44957,562.69789c-25.57159-26.75341-9.26039-98.47865-10.08593-96.95311.07006-1.757,5.862-28.816,20.84448-33.25691,11.8867-3.92293,25.04321,7.81175,26.66606,19.68051l17.80635,105.15331a3.69838,3.69838,0,0,1-1.01367,3.18C224.54239,563.22778,170.70142,562.15165,169.44957,562.69789Z" transform="translate(-151.47055 -146.935)" fill="#0d6efd" />
                    <path d="M177.74856,395.86826c2.24569-1.41969,3.35253-3.8545,4.65967-6.07256,6.88544-3.92419,14.80077,5.56884,22.08344,2.026,20.59268-19.76915-.57431-25.60141-19.54049-26.64389-4.48038-.55218-8.29173,1.03713-11.6791,3.66209-37.88569-2.89341-19.71625,47.48278,4.19421,54.13638,4.22161,1.84908,7.38845-1.8935,3.66551-5.29548C175.98091,412.28066,169.60018,401.41075,177.74856,395.86826Z" transform="translate(-151.47055 -146.935)" fill="#2f2e41" />
                    <path d="M570.97965,373.065h-274a17.02411,17.02411,0,0,0-17,17v346a17.0241,17.0241,0,0,0,17,17h274a17.02411,17.02411,0,0,0,17-17v-346A17.02412,17.02412,0,0,0,570.97965,373.065Zm15,363a15.01828,15.01828,0,0,1-15,15h-274a15.01828,15.01828,0,0,1-15-15v-346a15.01828,15.01828,0,0,1,15-15h274a15.01828,15.01828,0,0,1,15,15Z" transform="translate(-151.47055 -146.935)" fill="#3f3d56" />
                    <path d="M219.77721,518.66274c-9.0306,1.02306-12.99534-19.99215-16.448-25.34668l17.98486-6.9834,5.85205,10.70312,49.02808,1.21875a10.67752,10.67752,0,0,1,.95239-1.12011h0c9.72314-10.18066,25.55743,5.07331,15.87108,15.2321a11.03583,11.03583,0,0,1-16.49657-.47722C275.31032,511.97567,220.96126,518.69451,219.77721,518.66274Z" transform="translate(-151.47055 -146.935)" fill="#ffb8b8" />
                    <path d="M206.45836,508.63149c-3.0069,2.89718-26.09073-37.77326-27.77718-38.92289-11.66432-18.12981,15.79569-36.02983,27.661-17.99809l23.99705,36.879a4.50461,4.50461,0,0,1-1.31738,6.22558C227.92818,495.32714,207.23017,509.73279,206.45836,508.63149Z" transform="translate(-151.47055 -146.935)" fill="#0d6efd" />
                    <path d="M516.98006,612.565h-166c-16.957-.08167-17.0275-25.9115.00084-26l165.99916,0C533.92512,586.64438,534.01695,612.47622,516.98006,612.565Z" transform="translate(-151.47055 -146.935)" fill="#ccc" />
                    <path d="M516.98006,660.565h-166c-16.957-.08167-17.0275-25.9115.00084-26l165.99916,0C533.92512,634.64438,534.01695,660.47622,516.98006,660.565Z" transform="translate(-151.47055 -146.935)" fill="#ccc" />
                    <path d="M516.98006,708.565h-166c-16.957-.08167-17.0275-25.9115.00084-26l165.99916,0C533.92512,682.64438,534.01695,708.47622,516.98006,708.565Z" transform="translate(-151.47055 -146.935)" fill="#ccc" />
                    <path d="M578.97965,405.065a26,26,0,1,1,26-26A26.02947,26.02947,0,0,1,578.97965,405.065Z" transform="translate(-151.47055 -146.935)" fill="#0d6efd" />
                    <path d="M590.97965,378.065h-11v-12.5a1,1,0,0,0-2,0v12.5h-11a1,1,0,0,0,0,2h11v12.5a1,1,0,1,0,2,0v-12.5h11a1,1,0,0,0,0-2Z" transform="translate(-151.47055 -146.935)" fill="#fff" />
                    <path d="M513.97965,555.36481h-160a16.51867,16.51867,0,0,1-16.5-16.5V449.2652a16.51866,16.51866,0,0,1,16.5-16.5h160a16.51867,16.51867,0,0,1,16.5,16.5v89.59961A16.51868,16.51868,0,0,1,513.97965,555.36481Z" transform="translate(-151.47055 -146.935)" fill="#0d6efd" />
                  </svg>
                </center>
                <h4 style="color:#0D6EFD">New features</h4>
                <div style="background-color:#0d6efd; height: 1px; width:100%; margin-bottom:5px;"></div>
                <ul>
                  <li>
                    <p><b>Message delete and edit</b> is a feature that allows users to modify or remove messages they have sent in a messaging app or platform. With this feature, users can correct mistakes or delete messages that they regret sending. This feature is especially useful in professional or formal settings where clear and accurate communication is essential, but can also be helpful in personal conversations.</p>
                  </li>
                  <li>
                    <p><b>Bad words detection feature</b> can scan messages to identify and flag any inappropriate or offensive language. This feature is particularly useful for ensuring a safe and respectful online environment and can be integrated into messaging apps, social media platforms.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- SnackBar -->
  <div id="snackbar"></div>

<?php } ?>

</body>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/sidebars.js"></script>
<script src="js/response.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Script to send message -->
<script type="text/javascript">
  function scrollDown() {
    var messageBody = document.getElementById("messageBody");
    messageBody.scrollTop = messageBody.scrollHeight;
  }

  function checkTextarea() {
    const textarea = document.getElementById("message");
    const text = textarea.value.toLowerCase();
    var x = document.getElementById("snackbar");
    const badWords = ["fuck", "fuck", "sex", "motherfucker", "fuking"]; // add more offensive words as needed

    for (let i = 0; i < badWords.length; i++) {
      if (text.includes(badWords[i])) {
        textarea.style.borderColor = "red";
        x.className = "show";
        document.getElementById("snackbar").innerHTML = "Mind your words, be kind."; // Add the text to the SnackBar
        setTimeout(function() {
          x.className = x.className.replace("show", "");
        }, 3000);
        setTimeout(function() {
          textarea.style.borderColor = textarea.style.borderColor.replace("red", "#f1f1f1");
          document.getElementById("snackbar").innerHTML = ""; // Clear the SnackBar text
        }, 4000);
        return false;
      }
    }

    // If the function hasn't returned yet, it means the message is OK
    textarea.style.borderColor = "#f1f1f1"; // Reset the border color
    return true; // Return true to allow the message to be sent
  }

  $(document).ready(function() {
    $("#send").click(function() {
      
      var fuser = $("#FromUser").val();
      var tuser = $("#ToUser").val();
      var message = $("#message").val();

      // Count the number of words in the message
      var wordCount = message.trim().split(/\s+/).length;

      // Disable the send button if the message has more than 1000 words
      if (wordCount > 1000) {
        var x = document.getElementById("snackbar");
        x.className = "show";
        document.getElementById("snackbar").innerHTML = "Your message is too long. Please limit it to 1000 words."; // Add the text to the SnackBar
        setTimeout(function() {
          x.className = x.className.replace("show", "");
        }, 3000);
        return false;
      }

      // Call the checkTextarea() function before sending the message
      if (checkTextarea()) {
        $.ajax({
          type: "POST",
          url: "insertMessage.php",
          data: {
            fuser: fuser,
            tuser: tuser,
            message: message
          },
          dataType: "text",
          success: function(data) {
            $("#message").val("");
            setTimeout(function() {
              scrollDown();
            }, 707);
          }
        });
      }
    });

    setInterval(function() {
      var fuser2 = $("#FromUser").val();
      var tuser2 = $("#ToUser").val();
      $.ajax({
        url: "RealTimeChat.php",
        method: "POST",
        data: {
          fuser: fuser2,
          tuser: tuser2
        },
        dataType: "text",
        success: function(data) {
          $("#messageBody").html(data);
        }
      });
    }, 1200);
  });
</script>
<!-- Back button -->
<script>
  const back_btn = document.getElementById("back_btn");
  back_btn.onclick = function() {
    stm = "<?php echo $_GET['ToUser']; ?>";
    document.location = "app.php?stm=" + stm;
  }
</script>
<!-- To open Add friend window -->
<script>
  function add_friend() {
    var friend_con = document.getElementById("friend_con");
    var friend_cls_btn_cross = document.getElementById("friend_cls_btn_cross");
    var friend_cls_btn = document.getElementById("friend_cls_btn");
    if (friend_con.style.display === "block") {
      friend_con.style.display = "none";
    } else {
      friend_con.style.display = "block";
    }

    friend_cls_btn_cross.onclick = function() {
      friend_con.style.display = "none"
    }
    friend_cls_btn.onclick = function() {
      friend_con.style.display = "none"
    }

  }
</script>
<!-- For Search users -->
<script>
  // Get the search input element and user list element
  const searchInpu = document.getElementById('searchInput');
  const userListDiv = document.getElementById('userList_div');

  // Attach an event listener to the search input to handle input changes
  searchInpu.addEventListener('input', function() {
    // // Clear the user list
    userListDiv.innerHTML = '';

    // Get the search keyword from the input
    const keyword = searchInpu.value;


    // If the search input is empty, clear the user list and return
    if (keyword === '') {
      userListDiv.innerHTML = '';
      return;
    }

    // Send an AJAX request to fetch the users matching the keyword
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `search_users.php?q=${keyword}`, true);
    xhr.onload = function() {
      if (this.status === 200) {
        // Parse the response as JSON
        const users = JSON.parse(this.responseText);

        // Loop through the users and add them to the user list
        for (let i = 0; i < users.length; i++) {
          const user = users[i];
          const a = document.createElement('a');
          a.href = `user_profile.php?id=${user.id}`;
          a.className = 'list-group-item list-group-item-action';
          a.textContent = user.name;
          userListDiv.appendChild(a);



          // Add an event listener to handle clicking on a user link
          a.addEventListener('click', function(event) {
            event.preventDefault();
            const userId = user.id;
            const userName = user.name;

            // Send an AJAX request to add the user as a friend
            const xhr2 = new XMLHttpRequest();
            xhr2.open('POST', 'friend.php', true);
            xhr2.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr2.onload = function() {
              if (this.status === 200) {
                // Display a success message
                const response = JSON.parse(this.responseText);
                if (response.alreadyFriend) {
                  var alreadyFriendDiv = document.getElementById('already_friend');
                  var friend_alert_already = document.getElementById("friend_alert_already");
                  var friend_alert_already_close = document.getElementById("friend_alert_already_close");
                  var friend_alert_already_close_cross = document.getElementById("friend_alert_already_close_cross");
                  var friend_alert_already_close_heading = document.getElementById("friend_alert_already_close_heading");


                  alreadyFriendDiv.style.display = 'block';
                  friend_alert_already.innerHTML = `Sorry, but ${response.name} is already in your friend list. You cannot re-add them as your friend.`;
                  friend_alert_already_close_heading.innerHTML = `Something Wrong!`;
                  friend_alert_already_close.onclick = function() {
                    alreadyFriendDiv.style.display = 'none';
                  }
                  friend_alert_already_close_cross.onclick = function() {
                    alreadyFriendDiv.style.display = 'none';
                  }
                } else {
                  var friendAlertAdded = document.getElementById('friend_alert_added');
                  var friend_alert_added_confirm_cross = document.getElementById("friend_alert_added_confirm_cross");
                  var friendAlertAddedConfirm = document.getElementById('friend_alert_added_confirm');
                  var friend_alert_added_header = document.getElementById("friend_alert_added_header");
                  var friend_alert_added_msg = document.getElementById("friend_alert_added_msg");

                  friendAlertAdded.style.display = 'block';
                  friend_alert_added_header.innerHTML = `Now is your friend ${user.name}`;
                  friend_alert_added_msg.innerHTML = `${user.name} has been added as your friend in your friend list. You can now connect and communicate with them more easily on the platform.`;
                  friendAlertAddedConfirm.onclick = function() {
                    friendAlertAdded.style.display = "none";
                  }
                  friend_alert_added_confirm_cross.onclick = function() {
                    friendAlertAdded.style.display = "none";
                  }
                }
              }
            };
            xhr2.send(`user_id=${userId}&user_name=${userName}`);
          });
        }
      }
    };

    xhr.send();
  });
</script>
<script>
  $(document).ready(function() {
    setInterval(function() {
      $('#friendList').load('friend_list.php');
    }, 700); // Update every 5 seconds
  });
</script>
<script type="text/javascript">
  // When user close their window
  window.addEventListener('beforeunload', function() {
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "conn.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("status=0");
  });
</script>
<script>
  // Add event listeners to track user activity
  window.addEventListener('mousemove', updateUserActivity);
  window.addEventListener('keydown', updateUserActivity);

  // Function to update user activity
  function updateUserActivity() {
    // Create AJAX request object
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // // Handle response if needed
        // console.log(this.responseText);
      }
    };
    // Send AJAX request to update user activity
    xhttp.open("POST", "update-user-activity.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("activity=1");
  }
</script>
<?php

  if (!isset($_GET['ToUser'])) {
    if (isset($_SESSION['UserId'])) {
?>

    <!-- If user is logged -->
    <script type="text/javascript">
      // Wait for the page to finish loading
      window.onload = function() {
        // Set a time limit for the loading screen (3 seconds)
        var loadingTime = 6000;

        // Show the loading screen
        var loadingScreen = document.getElementById("loading-screen");
        loadingScreen.style.display = "block";
        setTimeout(function() {
          loadingScreen.style.opacity = "0"; // set opacity to 0
        }, 5550);
        // Hide the loading screen and show the main content
        setTimeout(function() {
          loadingScreen.style.display = "none";
          document.getElementById("main-content").style.display = "block";

          // Showing a message after 5 sec 

          const divToShow = document.getElementById("nbstart_showing");
          const divToClose = document.getElementById("close_showing_msg");

          // Wait for 5 seconds
          setTimeout(function() {

            // Check if the current URL ends with "app.php" and there are no additional parameters or fragments
            if (window.location.pathname.endsWith("/app.php") && window.location.search === "" && window.location.hash === "") {
              // Show the div element
              divToShow.classList.add("fade-in");
              divToShow.style.display = "block";
              // Add click event listener to the close button
              divToClose.onclick = function() {
                divToShow.style.display = "none";
              };

            }

          }, 1000);

          // Remove the loading screen element
          loadingScreen.remove();
        }, loadingTime);
      };
    </script>

<?php
  } else { ?>
    <!-- If user is not logged -->
    <script type="text/javascript">
      // Wait for the page to finish loading
      window.onload = function() {
        // Set a time limit for the loading screen (3 seconds)
        var loadingTime = 2000;

        // Show the loading screen
        var loadingScreen = document.getElementById("loading-screen");
        loadingScreen.style.display = "block";

        // Hide the loading screen and show the main content
        setTimeout(function() {
          document.getElementById("loader-content1").remove();
          document.getElementById("loader-content2").style.display = "block";
          document.getElementById("err_txt").innerHTML = "Session expired";
          document.getElementById("sess").style.display = 'block';
        }, loadingTime);
      };
    </script>
<?php } } else { if(!isset($_SESSION['uname']) && !isset($_SESSION['UserId'])){ ?>

    <!-- If user is not logged -->
    <script type="text/javascript">
      // Wait for the page to finish loading
      window.onload = function() {
        // Set a time limit for the loading screen (3 seconds)
        var loadingTime = 2000;

        // Show the loading screen
        var loadingScreen = document.getElementById("loading-screen");
        loadingScreen.style.display = "block";

        // Hide the loading screen and show the main content
        setTimeout(function() {
          document.getElementById("loader-content1").remove();
          document.getElementById("loader-content2").style.display = "block";
          document.getElementById("err_txt").innerHTML = "Session expired";
          document.getElementById("sess").style.display = 'block';
        }, loadingTime);
      };
    </script>

<?php } }  ?>

<script>
  function showSnackBar(message) {
    var snackbar = document.getElementById("snackbar");
    snackbar.innerHTML = message;
    snackbar.className = "show";

    setTimeout(function() {
      snackbar.className = snackbar.className.replace("show", "");
    }, 3000);
  }

  window.addEventListener("online", function() {
    console.clear();
    showSnackBar("Online");
    console.log("Online");
    document.getElementById("main-content").style.display = "block";
  });

  window.addEventListener("offline", function() {
    showSnackBar("Offline");
    document.getElementById("main-content").style.display = "none";
  });
</script>

</html>

<?php } ?>