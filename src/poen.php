<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diastic Poem Generator</title>
</head>
<body>
    <h1>Diastic Poem Generator</h1>
    
    <form id="poemForm" action="generatePoem.php" method="GET">
        <label for="seedPhrase">Enter Seed Phrase:</label><br>
        <input type="text" id="seedPhrase" name="seedPhrase" required><br><br>
        
        <label for="storySelect">Select Story:</label><br>
        <select id="storySelect" name="storySelect" required>
            <option value="jack_and_the_beanstalk">Jack and the Beanstalk</option>
            <!-- Add options for other stories -->
        </select><br><br>
        
        <button type="submit" id="generateBtn" disabled>Generate Poem</button>
    </form>

    <div id="poemResult"></div>

    <script>
        document.getElementById("seedPhrase").addEventListener("input", function() {
            document.getElementById("generateBtn").disabled = !this.checkValidity();
        });

        document.getElementById("poemForm").addEventListener("submit", function(event) {
            event.preventDefault();
            const seedPhrase = document.getElementById("seedPhrase").value;
            const storySelect = document.getElementById("storySelect").value;
            generatePoem(seedPhrase, storySelect);
        });

        function generatePoem(seedPhrase, storySelect) {
            const poemResult = document.getElementById("poemResult");
            poemResult.innerHTML= ""; // Clear previous poem
            poemResult.textContent = `Generating poem based on seed phrase: "${seedPhrase}" and selected story: "${storySelect}"...`;

            // Ajax request to generate poem based on seed phrase and selected story
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        poemResult.textContent = xhr.responseText;
                    } else {
                        poemResult.textContent = "Error generating poem. Please try again.";
                    }
                }
            };
            xhr.open("GET", `generatePoem.php?seedPhrase=${encodeURIComponent(seedPhrase)}&storySelect=${encodeURIComponent(storySelect)}`);
            xhr.send();
        }
    </script>
</body>
</html>
