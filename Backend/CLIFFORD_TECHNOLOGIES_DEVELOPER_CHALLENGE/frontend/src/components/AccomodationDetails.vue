<template>
    <div class="accommodation-details">
      <h2>{{ accommodation.name }} Details</h2>
      <p>{{ accommodation.description }}</p>
      <p>Standard Rack Rate: {{ accommodation.standard_rack_rate }}</p>
      <!-- Add other details as needed -->
    </div>
  </template>
  
  <style scoped>
  .accommodation-details {
    margin: 20px;
  }
  
  h2 {
    color: #333;
  }
  
  p {
    color: #555;
  }
  </style>
  