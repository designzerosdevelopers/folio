 // -------------------------- Fields note js ----------------------------
    function toggleInfoNote(noteId) {
      var infoNote = document.getElementById(noteId);
      var arrow = infoNote.parentElement.querySelector('.arrow');

      infoNote.style.display = 'block';
      arrow.style.display = 'block'; 

      setTimeout(function() {
        infoNote.style.display = 'none';
        arrow.style.display = 'none'; 
      }, 4000);
    }

    // ----------------- image selector and icon display js ----------------------
    document.addEventListener('DOMContentLoaded', function () {

      var lazyImages = document.querySelectorAll('.lazy-load');

      lazyImages.forEach(function(image) {
          image.setAttribute('src', image.getAttribute('data-src'));
      });
      
      var images = document.querySelectorAll('.image-container');
  
      images.forEach(function (image) {
          image.addEventListener('click', function () {
              var deleteIcon = this.querySelector('.delete-icon');
              var isSelected = deleteIcon.style.display === 'block';
  
              // Hide delete icons for all images
              images.forEach(function (otherImage) {
                  var otherDeleteIcon = otherImage.querySelector('.delete-icon');
                  otherDeleteIcon.style.display = 'none';
              });
  
              // Toggle the display property for the clicked image
              deleteIcon.style.display = isSelected ? 'none' : 'block';
          });
      });
  

      // ----------------for selected icon border and display other fields-------------------------
      var radioButtons = document.querySelectorAll('input[type="radio"]');
      var customFields = document.getElementById('custom_service_fields');

      radioButtons.forEach(function(radioButton) {
          radioButton.addEventListener('change', function() {
              // Remove border from all icons
              var selectedIcons = document.querySelectorAll('.icon-box.selected');
              selectedIcons.forEach(function(icon) {
                  icon.classList.remove('selected');
              });

              // Add border to the selected icon
              if (this.checked) {
                  this.closest('.icon-box').classList.add('selected');
              }

              if (this.id === '0') {
                  // Display the input fields
                  customFields.style.display =('block');
              }else{
                  customFields.style.display =('none');
              }
          });
      });
  
  });