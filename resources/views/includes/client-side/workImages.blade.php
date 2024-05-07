<style>

 /* Adjust the styles for big and small screens */
 @media screen and (min-width: 550px) {
  .slide-image {
           width: 50%;
            background-color: black; /* Set background color to black */
            display: block; /* Ensures block-level display */
            margin: auto; /* Centers the image horizontally */
            padding-top: 0px; /* Pushes the image up by 20px */
           
        }
    }

    @media screen and (max-width: 767px) {
      .slide-image {
            width: auto;
            background-color: black; /* Set background color to black */
            display: block; /* Ensures block-level display */
            margin: auto; /* Centers the image horizontally */
            padding-top: 20px; /* Pushes the image up by 20px */
           width: 50%
        }
    }

body {

  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
  background: black;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>


<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

   


    {{-- <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="img_nature_wide.jpg" style="width:100%">
    </div> --}}


    {{-- <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="img_snow_wide.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="img_mountains_wide.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="img_lights_wide.jpg" style="width:100%">
    </div>  --}}
    
    {{-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a> --}}

    {{-- <div class="caption-container">
      <p id="caption"></p>
    </div> --}}


   
    {{-- <div class="column">
      <img class="demo cursor" src="img_lights_wide.jpg" style="width:100%" onclick="currentSlide(1)" alt="Northern Lights"> --}}
    </div>
  </div>
</div>

<script>
 
function openModal(work_id) {

 
  fetch(`/get-images/${work_id}`)
    .then(response => response.json())
    .then(data => {
      // Assign fetched data to the global variable
      work = data.work;
      data = data.images;
      globalData = data;

      document.getElementById("myModal").style.display = "block";
      
      // Clear existing slides
      document.querySelector(".modal-content").innerHTML = "";
     
      // Loop through the images and add them to the modal
      data.forEach((image, index) => {
          var imagePath = `project_photos/${image['work_photos']}`; // Adjust the path as per your directory structure
          var slide = `
              <div class="mySlides">
                  <div class="numbertext">${index + 1} / ${data.length}</div>
                  <img class="slide-image" src="${imagePath}">
              </div>
          `;
          document.querySelector(".modal-content").innerHTML += slide;
          
      });
      
      // Show the modal when clicking on an image
      document.querySelectorAll('.mySlides img').forEach(img => {
          img.addEventListener('click', function() {
              document.querySelector('.modal').style.display = 'block';
              document.querySelector('.navbar').classList.add('hidden');
          });
      });

      // Close the modal when clicking on the close button
      document.querySelector('.close').addEventListener('click', function() {
          document.querySelector('.modal').style.display = 'none';
          document.querySelector('.navbar').classList.remove('hidden');
      });


      document.querySelector(".modal-content").innerHTML += `
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="caption-container">
          <div class="caption-info">
            <p id="caption">Title: ${work.work_title}</p>
            <p id="work_url">URL: <a href="${work.work_url}" target="_blank" style="color: white;">${work.work_url}</a></p>
          </div>
          <div class="caption-info">
            <p id="work_date">Date: ${work.work_date}</p>
          </div>
          <div class="caption-content">
            <p id="description">Description: ${work.work_description}</p>
          </div>
        </div>`;



        
    
        currentSlide(1);
     

      // Add demo images for navigation
      // var demoImages = '';
      // data.forEach((image, index) => {
      //   var imagePath = `project_photos/${image['work_photos']}`; // Adjust the path as per your directory structure
      //   demoImages += `
      //     <div class="column">
      //       <img class="demo cursor" src="${imagePath}" style="width:100%" onclick="currentSlide(${index + 1})" alt="hello">
      //     </div>
      //   `;
      // });
      // document.querySelector(".modal-content").innerHTML += `<div class="image-container">${demoImages}</div>`;
 

      document.getElementById('work_url').innerHTML = 'URL: ' + work.url;
      document.getElementById('caption').textContent = 'Title: ' + work.title;
      document.getElementById('description').textContent = 'Description: ' + work.description;
      document.getElementById('work_date').textContent = 'Date: ' + work.date;

      // Set the HTML content of the elements
      outputUrlElement.innerHTML = "URL: " + url;
      outputDateElement.innerHTML = "Date: " + date;
      outputTitleElement.innerHTML = title;
      outputDescriptionElement.innerHTML = description;


    

    })
    .catch(error => {
      console.error('Error fetching image:', error);
    });
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}


function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    

