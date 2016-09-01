<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- because some people try to hack their 3DS without a computer -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$title?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <style>
    /* I should clean this up, I know */
    .visible-xs-block, #mset-img {
      text-align: center;
    }
    #mset-img img {
      width: 100%;
    }
    #mset-icn {
      max-width: 48px;
    }
    #mset-scr {
      max-width: 400px;
    }
    .title-icon, #mset-icn {
      height: 48px;
      border-radius: 4px;
    }
    .title-hax-name {
      font-size: 18px;
      font-weight: 500;
    }
    .title-name {
      font-size: 15px;
    }
    .title-well {
      min-height: 68px;
    }
    .title-site-btn-normal {
      text-align: right;
    }
    .title-site-btn-mobile {
      padding-top: 6px;
      text-align: left;
    }
    /* thanks http://stackoverflow.com/questions/7273338/how-to-vertically-align-an-image-inside-div */
    div.console {
      text-align: center;
      height: 200px;
      white-space: nowrap;
    }
    img.console {
      width: 160px;
      max-width: 160px;
      max-height: 160px;
    }
  </style>
</head>
<body>
