<!DOCTYPE html>
<html>
    {{ $job->title  }}
<head>
    <title>Job Posted</title>
</head>
<body>
    <h1>A new job has been posted!</h1>
    <a href="{{ url('/jobs/' . $job->id) }}">{{ $job->title }}</a>
</body>
</html>
