<template>
    <div class="booking-form">
      <h2>Booking Form</h2>
      <form @submit.prevent="submitBooking">
        <!-- Form fields for input -->
        <button type="submit">Book Now</button>
      </form>
    </div>
  </template>
  
  <style scoped>
  .booking-form {
    margin: 20px;
  }
  
  h2 {
    color: #333;
  }
  
  form {
    margin-top: 10px;
  }
  
  button {
    background-color: #2ecc71;
    color: #fff;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
  }
  </style>
  