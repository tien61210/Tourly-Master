'use strict';

/**
 * navbar toggle
 */

const overlay = document.querySelector("[data-overlay]");
const navOpenBtn = document.querySelector("[data-nav-open-btn]");
const navbar = document.querySelector("[data-navbar]");
const navCloseBtn = document.querySelector("[data-nav-close-btn]");
const navLinks = document.querySelectorAll("[data-nav-link]");

const navElemArr = [navOpenBtn, navCloseBtn, overlay];

const navToggleEvent = function (elem) {
  for (let i = 0; i < elem.length; i++) {
    elem[i].addEventListener("click", function () {
      navbar.classList.toggle("active");
      overlay.classList.toggle("active");
    });
  }
}

navToggleEvent(navElemArr);
navToggleEvent(navLinks);

/**
 * header sticky & go to top
 */

const header = document.querySelector("[data-header]");
const goTopBtn = document.querySelector("[data-go-top]");

window.addEventListener("scroll", function () {

  if (window.scrollY >= 200) {
    header.classList.add("active");
    goTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    goTopBtn.classList.remove("active");
  }

});

function showFlights() {
  // Get the user inputs from the form
  const destination = document.getElementById("destination").value;
  const people = document.getElementById("people").value;
  const checkin = document.getElementById("checkin").value;
  const checkout = document.getElementById("checkout").value;

  // Here, you can implement your logic to fetch the list of flights based on user inputs.
  // For demonstration purposes, we'll just add some sample flights to the table.

  const flights = [
    { flightNumber: "FL123", departure: "New York (JFK)", destination: "Los Angeles (LAX)", departureDate: "2023-07-25", departureTime: "09:00 AM" },
    { flightNumber: "FL456", departure: "London (LHR)", destination: "Paris (CDG)", departureDate: "2023-07-26", departureTime: "10:30 AM" },
    { flightNumber: "FL789", departure: "Tokyo (HND)", destination: "Sydney (SYD)", departureDate: "2023-07-27", departureTime: "11:45 AM" },
    { flightNumber: "FL101", departure: "Dubai (DXB)", destination: "Singapore (SIN)", departureDate: "2023-07-28", departureTime: "02:15 PM" },
    { flightNumber: "FL234", departure: "Moscow (SVO)", destination: "Beijing (PEK)", departureDate: "2023-07-29", departureTime: "03:30 AM" },
    { flightNumber: "FL567", departure: "Los Angeles (LAX)", destination: "New York (JFK)", departureDate: "2023-07-30", departureTime: "04:45 PM" },
    { flightNumber: "FL890", departure: "Paris (CDG)", destination: "London (LHR)", departureDate: "2023-07-31", departureTime: "06:00 AM" },
    { flightNumber: "FL111", departure: "Sydney (SYD)", destination: "Tokyo (HND)", departureDate: "2023-08-01", departureTime: "07:30 AM" }
  ];
  // Clear the existing table rows
  const tableBody = document.querySelector("#flight-list table tbody");
  tableBody.innerHTML = "";

  // Populate the table with flights
  flights.forEach((flight) => {
    const row = tableBody.insertRow();
    row.insertCell().textContent = flight.flightNumber;
    row.insertCell().textContent = flight.departure;
    row.insertCell().textContent = flight.destination;
    row.insertCell().textContent = flight.departureDate;
    row.insertCell().textContent = flight.departureTime;
  });

  // Show the flight list
  const flightList = document.getElementById("flight-list");
  flightList.style.display = "block";
  const tableRows = document.querySelectorAll("#flight-list table tbody tr");
  
  // Prevent the form from submitting (so the page doesn't refresh)
  return false;
}


document.getElementById('moreButton').addEventListener('click', function() {
  var destinations = document.querySelectorAll('.popular-list li');
  destinations.forEach(function(destination) {
    destination.style.display = 'block';
  });
  document.getElementById('moreButton').style.display = 'none';
});

$(document).ready(function() {
  // Hide all but the first three packages initially
  $('.package-item:gt(2)').hide();

  // Show all packages when "View All Packages" button is clicked
  $('#viewAllButton').on('click', function() {
    $('.package-item').show();
    $(this).hide();
  });
});

// index.html

// ...

function openModal(index) {
  const flight = flights[index];
  document.getElementById("modalFlightNumber").textContent = "Flight Number: " + flight.flightNumber;
  document.getElementById("modalDeparture").textContent = "Departure: " + flight.departure;
  document.getElementById("modalDestination").textContent = "Destination: " + flight.destination;
  document.getElementById("modalDepartureDate").textContent = "Departure Date: " + flight.departureDate;
  document.getElementById("modalDepartureTime").textContent = "Departure Time: " + flight.departureTime;
  document.getElementById("flightModal").style.display = "block";
}

function closeModal() {
  document.getElementById("flightModal").style.display = "none";
}

