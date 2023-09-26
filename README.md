# 🌟 Guest Room Booking Application 🏠

## Introduction 📜

Welcome to the 🌟 Guest Room Booking Application 🏠! This application is designed to help house owners manage their guest room bookings effectively. Whether you're a house owner looking to rent out your rooms or a guest in search of a comfortable stay, this platform has got you covered.

## Project Overview 🏡

### Project Name:
Guest Room Booking Application developed with PHP

### Installation 🚀

To get started with the Guest Room Booking Application, follow these simple installation steps:

1. **XAMPP Installation:**
   - Download and install [XAMPP](https://www.apachefriends.org/index.html) or any PHP development environment of your choice.

2. **Clone the Repository:**
   - Clone or download this repository to your local machine.

3. **Database Setup:**
   - Import the provided database schema (guestroombooking.sql) into your MySQL server using a tool like [phpMyAdmin](https://www.phpmyadmin.net/) or the command line.

4. **Edit Database Configuration:**
   - In the `config.php` file, update the database connection settings to match your local setup.
   
   ```php
   $db_host = "localhost";
   $db_user = "root";
   $db_password = "";
   $db_name = "guestroombooking";
   ```

5. **Start the Server:**
   - Start your XAMPP or PHP development server.

6. **Access the Application:**
   - Open your web browser and navigate to `http://localhost/guest-room-booking` (or the appropriate URL based on your setup).

7. **Admin Credentials:**
   - Use the following admin credentials to access the application:

      - Email: admin@gmail.com
      - Password: 1234

## Features and Functionality 🛏️

### House Owners:
- **Registration:**
  - House owners can register for an account with an email address and a mobile number.

- **Property Management:**
  - House owners can register their properties and upload details for each room.
  - They can set the minimum and maximum booking period for each room.
  - House owners can specify the rent amount for each day for their rooms.
  - Upload photos to showcase the rooms.

- **Edit and Delete:**
  - House owners have the flexibility to edit or delete room details as needed.

### Customers:
- **Registration:**
  - Customers can also register for an account with an email address and a mobile number.

- **Browse and Book:**
  - Customers can browse all available rooms from different house owners.
  - They can view detailed information about each room, including photos.
  - An availability calendar helps customers check room availability for specific dates.

- **Booking:**
  - Customers can choose their desired dates and book a room.
  - Once a room is booked, it becomes unavailable for other customers during that period.

## Conclusion 🏠

The 🌟 Guest Room Booking Application 🏡 simplifies the process of booking guest rooms for both house owners and customers. House owners can easily manage their properties, and customers can find and book rooms that meet their requirements.

Let's make booking guest rooms a hassle-free experience! 🛌🌟
