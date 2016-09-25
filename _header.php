<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- because some people try to hack their 3DS without a computer -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="<?=($title=="%index%")?"Start running homebrew games, tools, and emulators on your Nintendo 3DS family system today!":$title?>">
  <title><?=($title=="%index%")?"ez3ds - Nintendo 3DS hax helper for noobs":$title?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/css/bootstrap-select.min.css">
  <style>
    /* for future reference, 3DS color is #CE181E */
    /* I should clean this up, I know */
    body {
      /* partly used from GitHub */
      font-family: -apple-system, BlinkMacSystemFont, Roboto, "Segoe UI", Helvetica, Arial;
    }
    footer {
      margin: 0 0 25px 0;
    }
    .center {
      text-align: center;
    }

    .hax-list ul {
      column-width: 30em;
      -webkit-column-width: 30em;
      -moz-column-width: 30em;
    }
    /* thanks, webkit! http://stackoverflow.com/questions/5314726/css-multi-column-layout-of-list-items-doesnt-align-properly-in-chrome */
    .hax-list li {
      -webkit-column-break-inside: avoid;
      margin-bottom: -5px;
    }
    .hax-list li:after {
      content: '';
      display: block;
      height: 1px;
    }

    div.firmware {
      height: 200px;
    }
    form.firmware {
      position: relative;
      top: 50%;
      transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      -webkit-transform: translateY(-50%);
      z-index: 1;
    }

    #mset-img img {
      width: 100%;
    }
    #hblpreview-img img {
      width: 100%;
      max-width: 602px;
    }
    #mset-icn {
      max-width: 48px;
    }
    #mset-scr {
      max-width: 400px;
    }
    #hb-demo {
      max-width: 427px; /* half of 854 */
      width: 100%;
      padding-bottom: 10px;
      margin-left: 10px;
    }
    .pixelated {
      image-rendering: pixelated;
    }
    #footer-info {
      font-size: 12px;
      padding-top: 10px;
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
    .title-site-btn {
      padding-top: 6px;
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

    /* used from http://twitterbootstrap3buttons.w3masters.nl/?color=%23CE181E */
    .btn-custom {
      background-color: #CE181E;
      border-color: #CE181E;
      color: white;
    }
    .btn-custom:hover,
    .btn-custom:focus,
    .btn-custom:active,
    .btn-custom.active {
      background-color: #b7151b;
      border-color: #a01317;
      color: white;
    }
    .btn-custom.disabled:hover,
    .btn-custom.disabled:focus,
    .btn-custom.disabled:active,
    .btn-custom.disabled.active,
    .btn-custom[disabled]:hover,
    .btn-custom[disabled]:focus,
    .btn-custom[disabled]:active,
    .btn-custom[disabled].active,
    fieldset[disabled] .btn-custom:hover,
    fieldset[disabled] .btn-custom:focus,
    fieldset[disabled] .btn-custom:active,
    fieldset[disabled] .btn-custom.active {
      background-color: #CE181E;
      border-color: #CE181E;
      color: white;
    }
  </style>
</head>
<body>
