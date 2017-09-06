<ul>
    @foreach($newestCourses as $course)
        <li>{{ $course->name }}</li>
    @endforeach
</ul>

<ul>
    @foreach($students as $student)
        <li>{{ $student->name }}</li>
    @endforeach
</ul>
