<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Course</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body style="
  cursor: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFc0lEQVR4nO2Yf2xTVRTHK0pUIhIjMf5ATdi73dzuHcNm4GChZTNAEDeHG6CJRhINRv42Gv3DP0yIPxL9w8SIiTE65D2nBv5Q/DHHvd1G8McGJurabWyzuLHhGBAm7N17X3fMfd3KuvZtHX1dSeQkJ2ma5rzzued7zj2vHs81u4rMbCL52X7GWEOeBh/ff1NWggtGXvVk2cb2e3f/W19wV1aCS0p+GaOFmieLxg3tK2F412YluGDka8lIK1D/DVmTqa4d5zp6MyvBBcUvS0ZAMvwhgOe6bDyDG2iI61ov7PUtdD24YLgsBkBAUGIAdb/ZTEMb5gYCYaBdbsf2KOkISiKTEJLiZqC+pW7FH/10+R3c0HoUADe0AWhYvsTjtglKXowD2JXApy1W/LQbsU0d1XNDOxQDQGDq2iceN03S4k1jTUV5gpHBqRA2CMNfQuvKuzOJb+roHNdRZBKAxypR5xoAp4UlkuE/JCN7pgPEIMioYOSVK+0NbqAfEpNHqgoXTB094BqEoLgpVfLTqtEnKamdO4C2czoAj1UhBPXara4AmBQXCIovzgYx4UxVLd3Yl/S8e7mBulJC6NoB10a3xUidoCSaDoRg2LLvjcaC22eLyw10kBveZ1NXAYGpI/dWGU7JM4JhmWYlFMgwp3jnTKfIdW2PamJTR20pAQwUHTPyNmaefJA8KBh5QQaLNghGhtKFmLg7gmZzYWGquErn3EAnnSrAbQht+GK9tsyVvUhQPCAp2SspbheU8LSrQQlX9wmAZ0FSXMNbqibPzBDoSMarBjT6lkiKf57T6SePXQothfdNjcsNtMI00GZT10ZnguAGeiMjABuizbdIULIvMwh8zqLkicmYSh5qmTMN9L6po/MzNLTl2totWdFWSXFXJiCS4XcnJcUN9M4spw8To7UXDuYvzhhAyUDNe0Hx8wnL3twldUBVFRqW3Wzq2m9pQRjae5kDNNRdbzc1w32C4S8kw+EMIBqhzbdwYjMNzQZg6pp0ZdWAQ9qN9kTKSEaTo5Z8BJ95l5q6toXr6Ls0pHTA45bJw6RaUHIqUwhOyXNq0qQjI3XBqTXENQi1jYog2S0p7r1iKQWLTRio6oehxy04sw1geBuM99dAtGMDSLoaeIN3upRecg0gDtLoW2LRoqdSvT+k49Hf/QBnd6R0BSODpVNl9I27ybeQ2yTDrwtKLlyxlILFAP/UOkMMVUG0sxz4514F0O8qQByEFt6iXjkFJd8Lii/NuQonNjoCwJk6iIZLbQhTR2ZWAJIm1WFSLSn5QDB8Ph0A69gaZ4Cz22MA4VIQ7Q9Z2QdozV8sgniXpPhYuhWwjpSkBRDtLgPo89+ZdYg4zI8r7rEYedJqKfnWOuoDq7UEZPMKkC0lyX1w1klCtZcBwqVg9aw7Pm8AcZBQQIdQAOI+XAfRzlVTAIhzE5+uTgCI9pTLXAB0JQAM1UC0qwysX1fayVvtPmeAvzcmAnSVQS4ARhMAIpthPFIZT2o8UukIED2xNhEgvOoqAOiqjI3HnnLb1WfHOyAheTVOV+cCwN+ZAKB8oGqGybMDYGQ7RE+UJwN0r8lJBfYnAXRW2EmCk/YjDycnr7xv/aX5Bwiv35YEoLwnxQ08sj2hP6ae/PjgowAnq/bMP0CbbyGEAt0pISKP2JfV5Mwf711nN6rSup30XxUwPrgFYGSHGr8SBrYsmncAG6Jj/daUAKEAQO+mGeUU9/6q13KS/GWIwNuOEJ0VscYecUh+qOannCZvA4BnAXQE3nKECE2ARDYDDNYADNfGKnOq+miqP8hyZvCn/zHHnggleDeEA9Weq9Hsxg7766DDvw86AqGJy27U/qy+C/lr1W9ynec1+1/Yf6ftl2xQC79oAAAAAElFTkSuQmCC') 8 8, auto;
  font-family: 'EB Garamond', sans-serif;
  background-color: black;
">
</body>
<?php
    session_start();
    require '../../views/layouts/nav.view.php';
    
?>
<!-- body -->
<div class="container bg-white p-4">
    <h1>Add Course</h1>
    <form action="../../controllers/courses/add" method="post">
        <div class="form-group">
            <label for="name">Course Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="Description">Description</label>
            <input type="text" class="form-control" id="Description" name="Description" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Add Course">
    </form>
<?php require '../layouts/footer.view.php'; ?>