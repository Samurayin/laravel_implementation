<!DOCTYPE html>
<html>
<head>
    <title>Resume - Gabriel Nicholas Roxas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f9;
        }

        h1 {
            color: #2c3e50;
            font-size: 36px;
            margin-bottom: 10px;
        }

        h2 {
            color: #34495e;
            border-bottom: 2px solid #2c3e50;
            padding-bottom: 5px;
            margin-top: 20px;
        }

        p {
            color: #555;
            font-size: 18px;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-info, .education, .experience, .skills, .projects {
            margin-bottom: 30px;
        }

        .skills ul, .projects ul {
            list-style-type: none;
            padding: 0;
        }

        .skills li, .projects li {
            background-color: #e0e0e0;
            margin: 5px 0;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{$data['name']}}</h1>
        <div class="contact-info">
            <p>Email: {{$data['email']}}</p>
            <p>Phone: {{$data['contact']}}</p>
            <p>Address: {{$data['address']}}</p>
            <p>LinkedIn: {{$data['email']}} (https://www.linkedin.com/in/gabie-roxas-12458b1a2/)</p>
        </div>
        <div class="summary">
            <h2>Summary</h2>
            <p>{{$data['objective']}}</p>
        </div>
        <div class="education">
            <h2>Education</h2>
            <p>Senior High School ICT, STI College Baliuag (2020-2021)</p>
            <p>Bachelor of Science in Information Technology (BSIT), Baliwag Polytechnic College (Expected Graduation: 2024-2025)</p>
        </div>
        <div class="experience">
            <h2>Experience</h2>
            <p>Non-voice Data Annotator at Telework PH Outsourcing Solutions Inc. (Duration: December 1, 2021-July 2024)</p>
            <p>Telework Coding Session (Duration: 2 months of training)</p>
        </div>
        <div class="skills">
            <h2>Skills</h2>
            <ul>
                <li>Programming Languages: C++, Java, HTML/CSS</li>
                <li>Database Management: SQL</li>
                <li>Tools: Git, Visual Studio Code</li>
                <li>Soft Skills: Teamwork, Communication, Problem Solving</li>
            </ul>
        </div>
    </div>
</body>
</html>