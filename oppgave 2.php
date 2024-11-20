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
// Overordnet klasse Bruker
class Bruker {
    // Klasseegenskaper
    protected $name;
    protected $etternavn;
    protected $brukernavn;
    protected $fodselsdato;
    protected $registreringsdato;

    // Konstruktør
    public function __construct($name, $etternavn, $brukernavn, $fodselsdato, $registreringsdato) {
        $this->name = $name;
        $this->etternavn = $etternavn;
        $this->brukernavn = $brukernavn;
        $this->fodselsdato = $fodselsdato;
        $this->registreringsdato = $registreringsdato;
    }

    // Metode for å hente fullt navn
    public function hentFulltNavn() {
        return $this->name . " " . $this->etternavn;
    }
}

// Underklasse Instruktor
class Instruktor extends Bruker {
    // Klasseegenskap spesifikt for Instruktor
    private $bio;

    // Konstruktør som kaller foreldrekonstruktøren og legger til bio
    public function __construct($name, $etternavn, $brukernavn, $fodselsdato, $registreringsdato, $bio) {
        parent::__construct($name, $etternavn, $brukernavn, $fodselsdato, $registreringsdato);
        $this->bio = $bio;
    }

    // Overstyrer hentFulltNavn for å inkludere "Instruktør"
    public function hentFulltNavn() {
        return "Instruktør " . $this->name . " " . $this->etternavn;
    }

    // Ny metode som er spesifikk for Instruktor
    public function hentBio() {
        return $this->bio;
    }
}

// Eksempel på bruk av klassen Instruktor
$instruktor = new Instruktor("Kari", "Nordmann", "karinordmann", "1985-03-25", "2023-11-06", "Erfaren instruktør innen data og IT.");

echo "Fullt navn: " . $instruktor->hentFulltNavn() . "<br>";
echo "Bio: " . $instruktor->hentBio();
?>
    </div>
  </body>

</html>