<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <title>LNB - Landing Page</title>
</head>
<body>

<?php 

/* Variables */

$phone = "123-456-7890";

?>

<header class="landing-heading">
      <div class="landing-heading__content">
        <div class="logo">
          <a class="logo-link" href="http://52.73.242.68/~servicewizards/"
            ><img
              class="logo logo--header"
              sizes=""
              src="http://52.73.242.68/~servicewizards/wp-content/uploads/logo-aido-climate-solutions.svg"
              srcset=""
              alt="Logo Aido Climate Solutions"
          /></a>
        </div>
        <div class="landing-heading__buttons">
          <a class="btn-custom icon-button" href="tel:226-210-3990" aria-label="Button">
            <fa-icon
              icon="phone-square"
              family="solid"
              role="presentation"
              aria-label="Display Icon"
              ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path
                  d="M400 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM94 416c-7.033 0-13.057-4.873-14.616-11.627l-14.998-65a15 15 0 0 1 8.707-17.16l69.998-29.999a15 15 0 0 1 17.518 4.289l30.997 37.885c48.944-22.963 88.297-62.858 110.781-110.78l-37.886-30.997a15.001 15.001 0 0 1-4.289-17.518l30-69.998a15 15 0 0 1 17.16-8.707l65 14.998A14.997 14.997 0 0 1 384 126c0 160.292-129.945 290-290 290z"
                ></path></svg
            ></fa-icon>
            <span><?php echo $phone; ?></span>
          </a>

          <a
            is="hypercore-button"
            class="btn-custom hypercore-button desktop"
            href="#form-mainstage"
            aria-label="Button"
            >Request a FREE Quote
            <fa-icon
              icon="caret-right"
              family="solid"
              role="presentation"
              aria-label="Display Icon"
              ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                <path
                  d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"
                ></path></svg></fa-icon
          ></a>
        </div>
      </div>
    </header>

    