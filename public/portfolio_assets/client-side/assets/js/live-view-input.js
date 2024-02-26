
    // Get the input name element and the element where the name will be displayed
    const nameInput = document.getElementById('fc-name');
    const nameDisplay = document.getElementById('fc-nameDisplay');

    // Add an event listener to the input element to display the name below the form
    nameInput.addEventListener('input', () => {
        const enteredName = nameInput.value;
        nameDisplay.value = enteredName;
    });