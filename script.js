
var waitlist = [];
var nextLineNumber = 1;
var waitTimeIncrement = 5;


function addToWaitlist() {
  var name = document.getElementById("name").value;

  var urgency = document.getElementById("urgency").value;
  var timestamp = new Date().toLocaleTimeString();

  var estimatedWaitTime = 0;
  for (var i = 0; i < waitlist.length; i++) {

    estimatedWaitTime += waitTimeIncrement;
  }

  var patient = {
    lineNumber: nextLineNumber,
    name: name,
    urgency: urgency,
    timestamp: timestamp,
    estimatedWaitTime: estimatedWaitTime
  };
  waitlist.push(patient);
  nextLineNumber ++;

  updateWaitlistTable();

  document.getElementById("name").value = "";
  document.getElementById("urgency").value = "";
}
function updateWaitlistTable() {
  var waitlistTable = document.getElementById("waitlist");
  waitlistTable.innerHTML = "";
  for (var i = 0; i < waitlist.length; i++) {
    var row = waitlistTable.insertRow();
    var lineNumberCell = row.insertCell();
    var nameCell = row.insertCell();
    var urgencyCell = row.insertCell();
    var timestampCell = row.insertCell();
    var estimatedWaitTimeCell = row.insertCell();

    lineNumberCell.innerHTML = waitlist[i].lineNumber;
    nameCell.innerHTML = waitlist[i].name;
    urgencyCell.innerHTML = waitlist[i].urgency;
    timestampCell.innerHTML = waitlist[i].timestamp;
    estimatedWaitTimeCell.innerHTML = " ≈ " + waitlist[i].estimatedWaitTime + " minutes";
  }
}
