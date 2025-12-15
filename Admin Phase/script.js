

function createExhibition() {
  var title = document.getElementById("title").value;
  var type = document.getElementById("type").value;
  var category = document.getElementById("category").value;
  var deadline = document.getElementById("deadline").value;

  
  var today = new Date();
  var todayString = today.toISOString().split('T')[0];

  
  if (title == "" || type == "" || category == "" || deadline == "") {
    document.getElementById("exhibitionMsg").innerHTML = 
      "<span style='color:red'>Error: All fields are required!</span>";
    return false;
  }

  if (deadline <= todayString) {
    document.getElementById("exhibitionMsg").innerHTML = 
      "<span style='color:red'>Error: Deadline must be a future date!</span>";
    return false;
  }

 
  document.getElementById("exhibitionMsg").innerHTML = 
    "<span style='color:green'>Success: Exhibition '" + title + "' created!</span>";

  alert("New Exhibition Created!\n\n" +
        "Title: " + title + "\n" +
        "Type: " + type + "\n" +
        "Category: " + category + "\n" +
        "Deadline: " + deadline);

  
  document.exhibitionForm.reset();
  return false; 
}

function approvePhoto(id) {
  document.getElementById("status" + id).innerHTML = "Approved";
  document.getElementById("status" + id).style.color = "green";
  alert("Photo ID " + id + " has been APPROVED!");
}

function rejectPhoto(id) {
  document.getElementById("status" + id).innerHTML = "Rejected";
  document.getElementById("status" + id).style.color = "red";
  alert("Photo ID " + id + " has been REJECTED!");
}