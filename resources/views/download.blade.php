<!DOCTYPE html>
<html>
<head>
    <title>Save Smart App Download</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .download-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="download-container">
        <h1>Save Smart App Download</h1>
        <p>Click the button below to download the Save Smart app for Android.</p>
        <a href="{{ asset('assets/app-release.apk') }}" download="app-release.apk">
            <button>Download Save Smart App</button>
        </a>
    </div>
</body>
</html>
