$(document).ready(function () {
  // FOR OIPENING/CLOSING MODAL
  // Get references to the upload modal container and buttons
  const uploadModalContainer = document.querySelector('.upload-modal-container');
  const customUploadBtn = document.querySelector('.custom-upload-btn');
  const cancelBtn = document.querySelector('.cancel-btn');

  // Function to open the upload modal container
  function openUploadModal() {
    uploadModalContainer.style.display = 'flex';
  }

  // Function to close the upload modal container
  function closeUploadModal() {
    uploadModalContainer.style.display = 'none';
  }

  // Add click event listeners to the buttons
  customUploadBtn.addEventListener('click', openUploadModal);
  cancelBtn.addEventListener('click', closeUploadModal);



  // FOR DROPING FILE
  const dropContainer = document.getElementById("dropcontainer")
  const fileInput = document.getElementById("images")

  dropContainer.addEventListener("dragover", (e) => {
    // prevent default to allow drop
    e.preventDefault()
  }, false)

  dropContainer.addEventListener("dragenter", () => {
    dropContainer.classList.add("drag-active")
  })

  dropContainer.addEventListener("dragleave", () => {
    dropContainer.classList.remove("drag-active")
  })

  dropContainer.addEventListener("drop", (e) => {
    e.preventDefault()
    dropContainer.classList.remove("drag-active")
    fileInput.files = e.dataTransfer.files
  })


  // This opens more actions in card (comments)
  // Get all the elements with the class "show-options"
  const showOptionsIcons = document.querySelectorAll('.show-options');
  const addOptionsLists = document.querySelectorAll('.add-options');

  // Add click event listener to each "show-options" icon
  showOptionsIcons.forEach((showOptionsIcon, index) => {
    let isOptionsVisible = false;

    showOptionsIcon.addEventListener('click', () => {
      isOptionsVisible = !isOptionsVisible;
      addOptionsLists[index].style.display = isOptionsVisible ? 'block' : 'none';
    });
  });

});