# CLIFFORD-TECHNOLOGIES-DEVELOPER-CHALLENGE
Practical Task: B2B Platform for Travel Agents and Accommodation Providers

<h1>USER STORIES</h1>
<h2>Backend (Laravel):</h2>
<ol>
<li> Set up a new Laravel project.</li>
<li>Implement authentication for travel agents.</li>
<li> Create database models for Accommodations, Travel Agents, and Contracts.</li>
<li>Accommodation Model should have fields like name, description, and standard rack rate.</li>
<li> Contract Model should include fields for contract rates, start date, end date, and a relationship with Accommodation
and Travel Agent.</li>
<li>Implement CRUD operations for Accommodations and Contracts.</li>
<li>Implement a booking system where a travel agent can select an accommodation, view contract rates, and book for
specific dates.</li>
<li>Ensure proper validation for input data.</li>
<li> Implement API endpoints for CRUD operations.</li>
</ol>


<h2>Frontend (Vue.js):</h2>
<li> Set up a Vue.js project within the Laravel project.</li>
<li> Create components for displaying a list of accommodations, details of an accommodation, and booking form.</li>
<li> Use Vue Router to navigate between different sections.</li>
<li> Implement a form for travel agents to input booking details, including dates and contract selection.</li>
<li> Display contract rates for an accommodation dynamically based on the selected travel agent.</li>
<li> Connect the frontend to the Laravel backend using API calls.</li>
<li>Implement basic styling for a clean and user-friendly interface.
Bonus (if time permits):</li>
<li> Implement error handling and display appropriate messages to the user.</li>
<li> Add user roles and permissions to restrict certain actions.</li>


Submission:
Code: Submit the entire Laravel and Vue.js project via a Git repository to web@clifford.co.ke (Mr. James Kimani).
Documentation: Include a brief document explaining the project structure, key design decisions, and any additional
features implemented.
Instructions:
Provide clear instructions on how to set up and run the project locally.
Evaluation Criteria:
Code Quality: Clean and well-documented code.
Functionality: All specified features and requirements should work as expected.
Efficiency: Efficient database queries and frontend rendering.
Best Practices: Adherence to Laravel and Vue.js best practices.
Problem Solving: Ability to handle complex scenarios, such as multiple contract rates.
Notes:
Candidates are encouraged to use the Laravel and Vue.js documentation.
Prioritize completing core functionalities over additional features.
It is acceptable to provide basic styling, but the focus should be on functionality

//remember to include screenshots
//run the project with docker compose
//services for the front end, backend, db, 
//the db service should run first, then the backend, then the fron end
