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
class Bruker {
    // Protected properties
    protected $firstName;
    protected $lastName;
    protected $username;
    protected $birthDate;
    protected $registrationDate;

    // Static array to store usernames of deleted users
    private static $deletedUsernames = [];

    // Constructor to auto-generate username and registration date
    public function __construct($firstName, $lastName, $birthDate) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
        $this->username = $this->generateUsername();
        $this->registrationDate = date("Y-m-d"); // Current date as registration date
    }

    // Destructor to save username of deleted user
    public function __destruct() {
        self::$deletedUsernames[] = $this->username;
    }

    // Method to generate a random username
    private function generateUsername() {
        return strtolower($this->firstName[0] . $this->lastName) . rand(100, 999);
    }

    // Static method to retrieve all deleted usernames
    public static function getDeletedUsernames() {
        return self::$deletedUsernames;
    }

    // Method to display user information
    public function displayUserInfo() {
        return "Name: " . $this->firstName . " " . $this->lastName . 
               ", Username: " . $this->username . 
               ", Registration Date: " . $this->registrationDate;
    }
}

// Subclass Instruktor
class Instruktor extends Bruker {
    private $bio;

    public function __construct($firstName, $lastName, $birthDate, $bio) {
        parent::__construct($firstName, $lastName, $birthDate);
        $this->bio = $bio;
    }

    // Display instructor-specific information
    public function displayUserInfo() {
        return parent::displayUserInfo() . ", Bio: " . $this->bio;
    }
}

// Create two instances of Instruktor
$instructor1 = new Instruktor("Alice", "Smith", "1980-04-22", "Experienced data science instructor.");
$instructor2 = new Instruktor("Bob", "Jones", "1975-08-15", "Senior software development mentor.");

echo "Instructor 1 Info: " . $instructor1->displayUserInfo() . "<br>";
echo "Instructor 2 Info: " . $instructor2->displayUserInfo() . "<br>";

// Delete both instructor objects
unset($instructor1);
unset($instructor2);

// Display usernames of deleted users
echo "Deleted Usernames: " . implode(", ", Bruker::getDeletedUsernames());
?>

</div>
  </body>

</html>