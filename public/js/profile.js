$(document).ready(function () {
  const profileContainer = document.querySelector(".profile");
  const pfpContainer = profileContainer.querySelector(".pfp-container");
  const pfpActionsContainer = document.querySelector(".pfp-actions-container");
  const pfpActions = pfpActionsContainer.querySelector(".pfp-actions");
  const penIcon = profileContainer.querySelector(".fa-duotone.fa-pen");
  const xMarkIcon = pfpActions.querySelector(".fa-xmark");
  const chooseBtn = pfpActions.querySelector(".choose-btn");
  const deleteBtn = pfpActions.querySelector(".dlt-btn");
  const pfpImage = pfpContainer.querySelector(".pfp");

  // Open pfp-actions when pen icon is clicked
  penIcon.addEventListener("click", function () {
    pfpActionsContainer.style.display = "block";
  });

  // Close pfp-actions when x mark icon is clicked
  xMarkIcon.addEventListener("click", function () {
    pfpActionsContainer.style.display = "none";
  });

  // Close pfp-actions when clicking outside
  document.addEventListener("click", function (event) {
    if (!profileContainer.contains(event.target) && !pfpActions.contains(event.target)) {
      pfpActionsContainer.style.display = "none";
    }
  });

  // Prevent pfp-actions from closing when clicking inside
  pfpActions.addEventListener("click", function (event) {
    event.stopPropagation();
  });


  let defaultValue = $("#username").val();

  function updatePreview() {
    let newUsername = $("#username").val();

    // Check if newUsername is undefined or null before calling .trim()
    if (newUsername == undefined || newUsername == null) {
      $("#previewUsername").text("@"+defaultValue);
    } else {
      $("#previewUsername").text("@"+newUsername.trim());
    }
  }

  $("#username").on("input", updatePreview);
  updatePreview();


  let defaultBio = $("#bio").val();

  function updateBioPreview() {
    let newBio = $("#bio").val();

    // Check if newBio is undefined or null before calling .trim()
    if (newBio == undefined || newBio == null) {
      $("#previewBio").text(defaultBio);
    } else {
      $("#previewBio").text(newBio.trim());
    }
  }

  $("#bio").on("input", updateBioPreview);
  updateBioPreview();

  $(".toogle-action-container").click(function () {
    $(".pfp-actions-container").toggle();
  });

});