<template>
    <div class="accommodation-list">
      <h2>Accommodations</h2>
      <ul>
        <li v-for="accommodation in accommodations" :key="accommodation.id">
          <router-link :to="'/accommodations/' + accommodation.id">{{ accommodation.name }}</router-link>
        </li>
      </ul>
    </div>
  </template>
  
  <style scoped>
  .accommodation-list {
    margin: 20px;
  }
  
  ul {
    list-style-type: none;
    padding: 0;
  }
  
  li {
    margin-bottom: 10px;
  }
  
  router-link {
    color: #3498db;
    text-decoration: none;
    &:hover {
      text-decoration: underline;
    }
  }
  </style>
  