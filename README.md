# emergency_waitlist
Assignment 3 of Tamer Verir 300177023
This is a web application that allows users to add their names and urgency levels to a waitlist for emergency services at Medical Park Hospital. It also displays a list of all clients currently on the waitlist, along with their estimated wait times.
Installation
To use this application, you will need to have access to a web server that supports PHP and MySQL databases. You can download the source code and set up the necessary database tables using the following steps:
Download php into your computer and open the terminal
go to the file which you saved the codes
Enter "php -S localhost:4000"
then go to the web server.
Download or clone the source code from this repository.
Create a new MySQL database for the application.
Update the database credentials in api.php to match your own database settings.
Upload the source code to your web server.
Usage
Once the application is installed and running on your web server, you can access it by navigating to the appropriate URL in your web browser. The main page allows you to add your name and urgency level to the waitlist by filling out the form and clicking the "Add to Waitlist" button.

The waitlist is displayed in a table on the main page, and is updated automatically using JavaScript to show the current estimated wait times for each client. The wait times are calculated based on the urgency level and the order in which clients were added to the list.

