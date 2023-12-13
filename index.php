<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Code Mentor</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      padding: 20px;
      background-color: #f8f9fa;
    }

    h1, h2, h3 {
      color: #007bff;
    }

    .container {
      background-color: #ffffff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      padding: 20px;
    }

    #course-list {
      cursor: pointer;
    }

    #selected-course {
      margin-top: 20px;
    }

    form {
      margin-top: 20px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Code Mentor</a>
</nav>

<div class="container mt-4">
  <h1>Learn to Code with Code Mentor</h1>

  <div class="row">
    <div class="col-md-6">
      <h2>Available Courses</h2>
      <ul id="course-list" class="list-group">
        <!-- Courses will be dynamically added here -->
      </ul>
    </div>

    <div class="col-md-6">
      <h2>Selected Course</h2>
      <div id="selected-course"></div>
    </div>
  </div>

  <form>
    <h2>Feedback Form</h2>
    <div class="form-group">
      <label for="feedback">Provide feedback on the mentorship experience:</label>
      <textarea class="form-control" id="feedback" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit Feedback</button>
  </form>
</div>

<script>
  // Sample data for courses
  const courses = [
    { id: 1, name: 'Introduction to HTML', description: 'Learn the basics of HTML.' },
    { id: 2, name: 'JavaScript Fundamentals', description: 'Get started with JavaScript programming.' },
    { id: 3, name: 'CSS Styling Techniques', description: 'Explore advanced CSS styling techniques.' },
  ];

  // Function to display courses
  function displayCourses() {
    const courseList = document.getElementById('course-list');
    courseList.innerHTML = '';

    courses.forEach(course => {
      const listItem = document.createElement('li');
      listItem.classList.add('list-group-item');
      listItem.innerText = course.name;

      listItem.addEventListener('click', () => {
        displaySelectedCourse(course);
      });

      courseList.appendChild(listItem);
    });
  }

  // Function to display selected course details
  function displaySelectedCourse(course) {
    const selectedCourseContainer = document.getElementById('selected-course');
    selectedCourseContainer.innerHTML = '';

    const courseDetails = document.createElement('div');
    courseDetails.innerHTML = `
      <h3>${course.name}</h3>
      <p>${course.description}</p>
      <button class="btn btn-primary" onclick="startMentorship(${course.id})">Start Mentorship</button>
    `;

    selectedCourseContainer.appendChild(courseDetails);
  }

  // Function to start mentorship (you can implement your mentorship logic here)
  function startMentorship(courseId) {
    // You can implement mentorship logic here, e.g., redirect to a mentorship page or start a video call.
    alert(`Mentorship for course ${courseId} started!`);
  }

  // Initial display of courses
  displayCourses();
</script>

</body>
</html>
