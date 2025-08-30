<?php
$students = [
    [
        'stdNo' => '20003',
        'stdName' => 'Ahmed Ali',
        'stdEmail' => 'ahmed@gmail.com',
        'stdGAP' => 88.7
    ],
    [
        'stdNo' => '30304',
        'stdName' => 'Mona Khalid',
        'stdEmail' => 'mona@gmail.com',
        'stdGAP' => 78.5
    ],
    [
        'stdNo' => '10002',
        'stdName' => 'Bilal Hmaza',
        'stdEmail' => 'bilal@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '10005',
        'stdName' => 'Said Ali',
        'stdEmail' => 'said@gmail.com',
        'stdGAP' => 98.7
    ],
    [
        'stdNo' => '10007',
        'stdName' => 'Mohammed ahmed',
        'stdEmail' => 'mohamed@gmail.com',
        'stdGAP' => 98.7
    ]
];
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جدول الطلاب - تصميم فريد</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Tajawal', sans-serif;
            background-color: #e0f2f7; /* Light blue background */
            color: #333;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
            box-sizing: border-box;
        }
        .card-container {
            background-color: #ffffff;
            border-radius: 0; /* حواف حادة */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 1200px;
            width: 100%;
            text-align: center;
        }
        h1 {
            color: #00796b; /* Dark teal */
            margin-bottom: 30px;
            font-size: 2.8em;
            position: relative;
            display: inline-block;
        }
        h1::after {
            content: '';
            display: block;
            width: 60px;
            height: 4px;
            background-color: #00796b;
            margin: 10px auto 0;
            border-radius: 2px;
        }
        .student-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 10px; /* Space between rows */
            margin-top: 30px;
        }
        .student-table thead th {
            background-color: #00bcd4; /* Cyan */
            color: white;
            padding: 15px 20px;
            text-align: right;
            font-weight: 700;
            font-size: 1.1em;
            border-bottom: none;
        }
        .student-table thead th:first-child {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        .student-table thead th:last-child {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        .student-table tbody td {
            background-color: #f5f5f5; /* Light grey for rows */
            padding: 15px 20px;
            text-align: right;
            border-bottom: none;
            transition: background-color 0.3s ease;
        }
        .student-table tbody tr {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            border-radius: 0;
            overflow: hidden;
        }
        .student-table tbody tr:hover td {
            background-color: #e0f7fa; /* Lighter cyan on hover */
        }
        .student-table tbody td:first-child {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        .student-table tbody td:last-child {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        .student-table a {
            color: #00796b;
            text-decoration: none;
            font-weight: 600;
        }
        .student-table a:hover {
            text-decoration: underline;
        }
        .student-count {
            margin-top: 40px;
            font-size: 1.3em;
            font-weight: 700;
            color: #00796b;
        }
        @media (max-width: 768px) {
            .card-container {
                padding: 20px;
            }
            h1 {
                font-size: 2.2em;
            }
            .student-table thead th,
            .student-table tbody td {
                padding: 10px 15px;
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>
    <div class="card-container">
        <h1>قائمة الطلاب</h1>

        <div class="table-responsive">
            <table class="student-table">
                <thead>
                    <tr>
                        <th>رقم الطالب</th>
                        <th>اسم الطالب</th>
                        <th>البريد الإلكتروني</th>
                        <th>المعدل التراكمي</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($students as $student): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($student['stdNo']); ?></td>
                            <td><?php echo htmlspecialchars($student['stdName']); ?></td>
                            <td><a href="mailto:<?php echo htmlspecialchars($student['stdEmail']); ?>"><?php echo htmlspecialchars($student['stdEmail']); ?></a></td>
                            <td><?php echo htmlspecialchars($student['stdGAP']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="student-count">
            إجمالي عدد الطلاب: <?php echo count($students); ?>
        </div>
    </div>
</body>
</html>