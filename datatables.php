<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anime List | Anime Hub</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
      body, html {
          height: 100%;
          margin: 0;
          overflow: hidden; /* Prevent scrolling */
      }
      video {
          position: fixed; /* Fixed positioning to cover full viewport */
          top: 0;
          left: 0;
          width: 100%; /* Ensure full width */
          height: 100%; /* Ensure full height */
          object-fit: cover; /* Cover the entire area */
          z-index: -1; /* Make sure it stays in the background */
      }
      .container {
          position: relative; /* Positioning context for absolute children */
          z-index: 1; /* Ensure the content is above the video */
          padding: 20px; /* Add some padding */
          color: #f8f9fa; /* Set text color for general content */
      }
      h2 {
          color: #ffc107; /* Color for the main heading */
      }
      p {
          color: #ffffff; /* Color for paragraph text */
      }
      .bg-overlay {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.3); /* Lighten the overlay */
          z-index: 0; /* Ensure it’s below the content but above the video */
      }
      table {
          background-color: rgba(255, 255, 255, 0.9); /* Slightly less transparent white background for the table */
          border-radius: 5px; /* Rounded corners */
          overflow: hidden; /* Clip overflow */
          margin-top: 20px; /* Margin for spacing */
      }
      th, td {
          text-align: center; /* Center-align text */
          vertical-align: middle; /* Vertically center align */
          color: #343a40; /* Color for table text */
      }
      a {
          color: #007bff; /* Color for links */
          text-decoration: none; /* Remove underline from links */
      }
      a:hover {
          text-decoration: underline; /* Underline on hover for links */
      }
  </style>
</head>
<body>
  <?php include 'navbar.php'; ?>

  <video autoplay muted loop>
      <source src="video3.mp4" type="video/mp4"> <!-- Replace with your video file -->
      Your browser does not support the video tag.
  </video>
  <div class="bg-overlay"></div> <!-- Overlay for better text visibility -->

  <main class="container my-5">
    <a href="index.php" class="btn btn-primary mb-3">Back to Home</a> <!-- Back to Home button -->

    <h2>Anime List</h2>
    <p>Explore our extensive anime collection, featuring popular titles and hidden gems. Click on any title to view more details.</p>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Anime Title</th>
          <th scope="col">Genre</th>
          <th scope="col">Year</th>
          <th scope="col">Episodes</th>
          <th scope="col">Rating</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td><a href="#">Attack on Titan</a></td>
          <td>Action, Fantasy</td>
          <td>2013</td>
          <td>87</td>
          <td>8.8</td>
          <td>Completed</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td><a href="#">My Hero Academia</a></td>
          <td>Action, Adventure</td>
          <td>2016</td>
          <td>113</td>
          <td>8.4</td>
          <td>Ongoing</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td><a href="#">Demon Slayer</a></td>
          <td>Adventure, Fantasy</td>
          <td>2019</td>
          <td>26</td>
          <td>8.7</td>
          <td>Completed</td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td><a href="#">Sousou no Frieren</a></td>
          <td>Adventure, Fantasy</td>
          <td>2023</td>
          <td>28</td>
          <td>9.3</td>
          <td>Finished Airing</td>
        </tr>
        <!-- Add more rows as needed -->
      </tbody>
    </table>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
