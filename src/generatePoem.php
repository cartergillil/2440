<?php
if(isset($_GET['seedPhrase']) && isset($_GET['storySelect'])) {
    $seedPhrase = $_GET['seedPhrase'];
    $storySelect = $_GET['storySelect'];

    // Read the content of the selected story file
    $storyFilePath = './stories/' . $storySelect . '.txt';
    if(file_exists($storyFilePath)) {
        $storyContent = file_get_contents($storyFilePath);

        // Split the story content into words
        $words = explode(" ", $storyContent);

        // Generate the poem based on the seed phrase and story words
        $poem = generateDiasticPoem($seedPhrase, $words);

        // Send the poem as response
        echo $poem;
    } else {
        echo "Error: Story file not found!";
    }
} else {
    echo "Error: Seed phrase and story select parameters are required!";
}

// Function to generate diastic poem
function generateDiasticPoem($seedPhrase, $words) {
    $poem = "";
    $seedIndex = 0;

    foreach ($words as $word) {
        // Get the next character from the seed phrase
        $char = $seedPhrase[$seedIndex];

        // Find the first occurrence of the character in the current word
        $charIndex = strpos(strtolower($word), strtolower($char));
        if ($charIndex !== false) {
            // Add the word to the poem
            $poem .= $word . " ";
            // Move to the next character in the seed phrase
            $seedIndex = ($seedIndex + 1) % strlen($seedPhrase);
        }
    }

    return $poem;
}
?>
