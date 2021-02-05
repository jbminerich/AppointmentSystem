# PersonalProjects

 
Table of Contents
1.	Overview
2.	Components
3.	User Functions
a.	View Open Appointments
b.	Book Appointment
4.	Owner Functions
a.	Add Client
b.	View and Search Clients
c.	Display All Appointments
d.	Display Upcoming Appointments
5.	Future Features
6.	References
 
1.	Overview
The purpose of this salon appointment system is to digitally manage appointments to increase productivity of the staff, create loyal customers, and have an easy-to-use mobile system. Instead of keeping track of appointments using pen and paper which can be lost easily, this system is accessible 24/7 anywhere around the globe. All that is needed is a simple internet connection. This system allows clients to book their own appointments on their schedule and the staff to manage the clients and appointments with just a few clicks of the mouse. 
2.	Components
This system involves the following components:
•	Database: the MySQL database used to store the client information and appointment information. The database consists of three separate tables all linked together to transfer necessary information back to the web server for an easy-to-use display. The staff will not need to manually access the database to perform any maintenance as all the necessary features will be available on the website.

•	Web Server: The web server is hosted by Godaddy.com and the website itself is running a WordPress engine. The appointment system that was developed does not interfere with any of the WordPress information but instead works side by side to create a smooth user-friendly atmosphere for both the user and the staff.



3.	User Functions


 Figure 1 displays what the client will see on the “View Appointments” page of the website. Here they can select an appointment to book. 

a.	Book Appointment
 
Figure 2 - Booking Confirmation
Upon selecting an appointment to book, the client will be directed to the confirmation page (figure 2) to fill out the following information. The appointment information of the appointment they selected is again shown at the top of this screen. They can also press the “Go Back” button to be returned to the previous screen.
 
Figure 3 - Appointment Post
	
When the client presses the “Book Appt” button at the bottom of the page their information will be stored in the database and their client ID will be assigned to the appointment they selected. The booked appointment will no longer show in the list of available appointments and can only be canceled by the salon owner at this point. Additionally, they will be sent a confirmation email sent to the email that was input into the form as shown below in figure 4.
Note: if two clients try to book an appointment at the same time, they will both receive confirmations but only the person that clicked the book button last will be booked in the system. While this occurrence is rare, it is possible.
 
Figure 4 – Appointment Confirmation


 
4.	Owner Functions
The purpose of the owner tools is to manage the clients and appointments without needing to manually access the database. The owner can add new clients, search for existing clients, view all the clients, edit their information, display all the booked appointments, display upcoming appointments, and cancel appointments. The salon owner tools are only available to administrators that have logged into the website and selected the “Salon Owner Tools” page from the main navigation bar. The client will not have access to these pages in order to preserve the client information.
 
Figure 5 - Salon Owner Tools






a.	Add Client
 
Figure 6 - Add Client Form
	The “Add Client” form stores the first name, last name, phone number, and email address for each client in the database. When the “Add Client” button is pressed, the information is transmitted to the database.
 
Figure 7 - Client Confirmation
	Upon adding the information to the database, the message in figure 7 will be displayed at the top of the webpage.




b.	View and Search Clients
 
Figure 8 - Search Tool
	The Search Tool as shown in figure 8 can be used to search for existing clients. The salon owner may search by first name, last name, phone number, or email to find the client they are looking for.
 
Figure 9 - Display All Clients
	Figure 9 shows the “Display All Clients” page available from the Salon Owner Tools homepage. From here, the salon owner can press the “View More” option on any of the entries to expand more information about each client.
 
Figure 10 - Client Additional Details
 	In this detailed view of the client, the salon owner can edit the client information, delete the client from the database altogether, and cancel their appointments if they have any scheduled. Note: when a client is deleted, their appointments are also canceled automatically to open space back up for other potential clients.
 
Figure 11 - Update Client Data
	Figure 11 displays the view to update the client information. They can also press the “Go Back” button to cancel any potential edits.
c.	Display All Appointments
 
Figure 12 - View All Appointments

	Figure 12 displays all the booked appointments whether they have past or are in the future. They are organized by their appointment ID and Date.
d.	Display Upcoming Appointments
 
Figure 13 - Upcoming Appointments
Figure 13 displays the upcoming appointments up to 14 days out from the current date. From this view, the Salon Owner can get a quick synapsis of their appointments for each coming day as well as the client information associated with each appointment. The Salon Owner can also cancel these appointments as required from this screen.
 
5.	Future Features
The intent of this section is to identify future features that have the potential to be added to this system.
a.	Calendar View: The idea for this is to have a visual calendar to show each of the appointments rather than a table to provide the client with an eye-appealing view of the available appointments.

b.	Cancel Own Appointments: The idea for this is to have the ability for a client to cancel his/her own appointments.


c.	Automated Texts: The idea for this is to send out an automated text to the client when they book an appointment and to let the Salon Owner know that a new booking was submitted.

 
6.	References
References
Salon Appointment System. (2021). Retrieved from:
http://www.salonappointments.xyz/view-appointments/

