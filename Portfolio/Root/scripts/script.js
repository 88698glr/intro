// Get all the picture elements and store them in an array
const pictures = document.querySelectorAll('.foto img');
const captions = document.querySelectorAll('.foto figcaption');

// Add a hover event listener to each picture
pictures.forEach((picture, index) => {
  picture.addEventListener('mouseover', () => {
    // Increase the scale of the hovered picture
    picture.style.transform = 'scale(1.2)';
    
    // Increase the font size of the caption
    captions[index].style.fontSize = '1.3em';
    captions[index].style.marginTop = '15px';

    // Blur the other pictures
    pictures.forEach((otherPicture, otherIndex) => {
      if (otherIndex !== index) {
        otherPicture.style.filter = 'blur(2px)';
        captions[otherIndex].style.fontSize = '1em'; // Reset font size for other captions
      }
    });
  });

  // Reset the scale, font size, and blur when the mouse leaves the picture
  picture.addEventListener('mouseout', () => {
    picture.style.transform = 'scale(1)';
    captions[index].style.fontSize = '1em';
    pictures.forEach((otherPicture, otherIndex) => {
      if (otherIndex !== index) {
        otherPicture.style.filter = 'none';
        captions[otherIndex].style.fontSize = '1em';
      }
    });
  });
});

