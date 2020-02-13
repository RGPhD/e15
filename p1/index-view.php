<!DOCTYPE html>
<html lang='en'>

<head>
  <title>String Word Processor: E-15 Project 1</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <!-- External CSS file providing Separation of Concerns (SoC). -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>PHP String Processor: E-15 Project 1</h1>

  <br>

  <div class='results'>
    <form method='POST' action='process.php'>
      <label for='inputString'>Enter a word string:</label>
      <input type='text' id='inputString' name='inputString'>
      <button type='submit'>Submit</button>
    </form>

    <?php if (isset($results)) : ?>
    <h2>RESULTS:</h2>

    <h3>Word String</h3>
    <?=$inputString ?>

    <h3>Palindrome</h3>
    <?=$isPalindrome ?>

    <h3>Vowel Count</h3>
    <?=$vowelCount ?>

    <h3>Uppercase</h3>
    <?=$upperCase ?>
    <br>
    <p>
      <div>
        <button value="Refresh Page" onClick="window.location.reload();">Click to Refresh Page and Play Again</button>
      </div>
    </p>
    <?php endif ?>
  </div>
  <br>

  <footer>
    <br>
    <a href="https://hesweb.dev/e15" target="_blank"
      title="Click or Tap to visit Harvard Extension School: Web Server Frameworks with Laravel/PHP">DGMD E-15: Web
      Server Frameworks with Laravel/PHP
    </a>

    <p><a href="https://www.extension.harvard.edu" target="_blank"
        title="Click to visit Harvard Extension School">Harvard University Extension School</a></p>
  </footer>

</body>