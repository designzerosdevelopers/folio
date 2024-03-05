<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Works Form</title>
</head>
<body>
    <form action="/" method="post">
        <fieldset>
            <legend>Work Information</legend>
            <div>
                <label for="work-title">Title:</label>
                <input type="text" id="work-title" name="work-title" required>
            </div>
            <div>
                <label for="work-description">Description:</label>
                <textarea id="work-description" name="work-description" rows="4" cols="50" required></textarea>
            </div>
            <div id="image-container">
                <label for="image-url-1">Image URL 1:</label>
                <input type="url" id="image-url-1" name="image-url-1" required>
            </div>
            <!-- Add more image URL fields here or use JavaScript to dynamically add them -->
            <input type="button" value="Add Image" onclick="addImageField()">
        </fieldset>
        <input type="submit" value="Submit">
    </form>

    <script>
        let imageContainer = document.getElementById('image-container');
        let imageCount = 1;

        function addImageField() {
            imageCount++;

            let newImageDiv = document.createElement('div');
            newImageDiv.innerHTML = `
                <label for="image-url-${imageCount}">Image URL ${imageCount}:</label>
                <input type="url" id="image-url-${imageCount}" name="image-url-${imageCount}" required>
            `;

            imageContainer.appendChild(newImageDiv);
        }
    </script>
</body>
</html>