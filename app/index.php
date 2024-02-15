<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hero {
            background-image: url('https://i.postimg.cc/Z599mYxq/Login-Image.png'); 
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
        }
    </style>
</head>
<body>

<div class="hero">
    <div class="bg-white bg-opacity-80 p-10 rounded-lg shadow-xl max-w-lg w-full">
        <h2 class="text-3xl font-bold mb-6 text-gray-700 text-center">Login</h2>
        <form action="login.php" method="post" class="space-y-6">
            <?php if (isset($_GET['message'])): ?>
                <p class="text-sm text-red-500"><?= htmlspecialchars($_GET['message']); ?></p>
            <?php endif; ?>

            <div class="space-y-4">
                <input type="text"
                       name="username"
                       placeholder="Username"
                       class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-green-500"/>

                <input type="password"
                       name="password"
                       placeholder="Password"
                       class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-green-500"/>
            </div>
            <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-opacity-50">
                Submit
            </button>
        </form>
    </div>
</div>

</body>
</html>