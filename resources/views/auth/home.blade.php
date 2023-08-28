<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  padding: 20px;
}

.container {
  border: 10px solid #00ffff;
  background-color: chartreuse;
  padding: 20px;
}

h2 {
  text-align: center;
}

p {
  text-align: justify;
}

.logout-btn {
  background-color: #f44336;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  margin-top: 20px;
}

.logout-btn:hover {
  opacity: 0.8;
}
</style>
</head>
<body>
<div class="container">
  
  {{$user->email}}
  <br>
  {{$user->password}}

    <h2>Welcome to the Laravel Website</h2>
    <p>
        Laravel is a popular open-source PHP framework for web application development. It follows the MVC (Model-View-Controller) architectural pattern and provides a clean and elegant syntax, making it a developer-friendly framework.
    </p>
    <p>
        Laravel offers a wide range of features and tools to simplify common tasks in web development, including routing, database migration, authentication, and caching. It also has a vibrant community and extensive documentation, making it easy to get started and find support.
    </p>
    <p>
        Whether you are building a small personal project or a large-scale enterprise application, Laravel provides a solid foundation and a rich ecosystem of packages to accelerate your development process.
    </p>
    <button class="logout-btn" onclick="logout()">Logout</button>
</div>
</body>
</html>
