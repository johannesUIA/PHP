<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
            darkGrey: '#1f1f1f',
            purpleAccent: '#9b59b6',
          }
        }
      }
    }
  </script>

<body>
  <nav class="bg-gray-800 w-full fixed top-0">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between">
        <div class="flex space-x-4">
        <a href="oppgave 1.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Oppgave 1</a>
          <a href="oppgave 2.php" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Oppgave 2</a>
          <a href="oppgave 3.php" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Oppgave 3</a>
          <a href="oppgave 4.php" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Oppgave 4</a>
          <a href="oppgave 5.php" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Oppgave 5</a>
        </div>
      </div>
    </div>
  </nav>

  <body class="bg-darkGrey text-purpleAccent flex items-center justify-center min-h-screen">

    <!-- Centered Content Div -->
    <div class="bg-gray-800 p-8 rounded-lg shadow-lg text-center max-w-md mx-auto">
      <h1 class="text-3xl font-bold underline text-clifford mb-4">Oppgave 1 script</h1>
      <p class="mb-4">
        <a href="index.php"
          class="text-purpleAccent hover:text-clifford hover:underline hover:scale-105 transition transform duration-200">
          Returner til Index side
        </a>
      </p>

<?php
class Validator {
    // Method to validate an email address
    public function validateEmail($email) {
        // Use PHP's filter_var function to validate email format
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "$email is a valid email address.";
        } else {
            return "$email is not a valid email address.";
        }
    }
}

// Example usage
$validator = new Validator();
$emailToValidate = "example@example.com";
echo $validator->validateEmail($emailToValidate);
?>
    </div>
  </body>

</html>