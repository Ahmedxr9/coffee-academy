<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Remix icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="dashboard ">
        <div class="sidebar place-items-center ">
            <div class="logo"><i class="ri-english-input"></i></div>
            <div class="sidebar-items">
                <div class="sidebar-item s-iten-1  place-items-center ">
                    <i class="ri-layout-grid-line "></i>
                </div>
                <div class="sidebar-item s-iten-2 place-items-center">
                    <i class="ri-sound-module-line"></i>
                </div>
                <div class="sidebar-item s-iten-3 place-items-center">
                    <i class="ri-user-line"></i>
                </div>
                <div class="sidebar-item s-iten-4 place-items-center">
                    <i class="ri-line-chart-line"></i>
                </div>
            </div>
        </div>
        <div class="container d-grid">
            <section class="main-container">
                <div class="top-bar margin-b">
                    <h1 class="title ">Dashboard</h1>
                    <button class="btn place-items-center">
                        <i class="ri-menu-3-line open-menu-icon"></i>
                    </button>
                </div>

                <div class="task-container d-grid margin-b">
                    <div class="exam card-1">
                        <p class="deadline">deadline 12:00</p>
                        <h2 class="exam">Exam - Unit 5</h2>
                        <p>Trainee</p>
                        <div class="start-testing-container d-flex">
                            <p>Are you ready?</p>
                            <a href="course.php">Continue Your Courses</a>
                        </div>
                    </div>

                    <div class="task-container d-grid margin-b">
                        <div class="exam card-1">
                            <div class="start-testing-container d-flex">
                                <a href="index.php">HOME</a>
                            </div>
                        </div>
                    <div class="task-container-2 d-grid">
                        <div class="homework card-1">
                            <i class="ri-checkbox-circle-line check-mark"></i>
                            <h4>Homework</h4>
                            <p>For today's lesson</p>
                        </div>
                        <div class="reading card-1">
                            <i class="ri-checkbox-circle-line check-mark"></i>
                            <h4>Your achievements</h4>
                            <p>20 lesson per week</p>
                        </div>
                    </div>
                </div>
                <div class="group-task-container d-grid margin-b">

                    <div class="language-progress card-2">
                        <i class="ri-notification-3-fill bell-icon"></i>
                        <h2 class="margin-b">Trainee for beginners</h2>
                        <p>75%</p>
                        <div class="progress-cover">
                            <div class="progress"></div>
                        </div>
                    </div>
                    <div class="group-info card-2">
                        <h3>Group Info</h3>
                        <p>24 Interns. in the Course</p>
                        <div class="group-homework card-1 d-flex">
                            <div>
                                <h4 class="group-homework-title">Group homework</h4>
                                <p>6 Interns. from your group online now</p>
                            </div>

                            <i class="ri-arrow-right-s-line"></i>

                        </div>
                        <div class="today-lesson d-flex ">
                            <div>
                                <h3>Today's lesson</h3>
                                <p>Unit 6 - Barista</p>
                            </div>
                            <h3>12.00</h3>
                        </div>
                    </div>
                </div>
                <div class="grammer-course d-grid ">
                    <div class="course card-1 d-flex">
                        <div class="grammer d-flex">
                            <i class="ri-pencil-fill grammer-icon"></i>
                            <div>
                                <h3>Barista</h3>
                                <p>+ 20 grammer rules </p>
                            </div>

                        </div>
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                    <div class="course card-1 d-flex">
                        <div class="dictionary d-flex">
                            <i class="ri-book-2-line dictionary-icon"></i>
                            <div>
                                <h3> </h3>
                                <p>+ 10 new tips in your career</p>
                            </div>

                        </div>
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                </div>
            </section>
            <section class="secondary-container ">
                <div class="profile d-flex">
                    <div class="profile-img-box">
                        <img src="assets/images/pexels-ali-pazani-2613260.jpg" alt="">
                    </div>
                    <h2 class="name">Madonna Miks</h2>
                    <p>Barista</p>
                    <div class="course discount card-1 d-flex">
                        <div>
                            <h4>ٍInterns. registered in the course</h4>
                            <p>for Trainee course</p>
                        </div>
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                </div>
                <div class="courses-progress">
                    <h2 class="progress-title">Courses Progress</h2>
                    <div class="course card-1 d-flex">
                        <p class="progress-text-1">63%</p>
                        <div class="progress-icon progress-bg-1 place-items-center">
                            <i class="ri-pencil-fill"></i>
                        </div>
                        <div>
                            <h3>HR</h3>
                            <p>Learn new rules </p>
                        </div>
                    </div>
                    <div class="course card-1 d-flex">
                        <p class="progress-text-2">75%</p>
                        <div class="progress-icon progress-bg-2 place-items-center">
                            <i class="ri-book-2-line"></i>
                        </div>
                        <div>
                            <h3>Manager</h3>
                            <p>Keep Learning</p>
                        </div>
                    </div>
                    <div class="course card-1 d-flex">
                        <p class="progress-text-3">84%</p>
                        <div class="progress-icon progress-bg-3 place-items-center">
                            <i class="ri-book-open-line"></i>
                        </div>
                        <div>
                            <h3>Barista</h3>
                            <p>Train your skill </p>
                        </div>
                    </div>

                </div>
            </section>
        </div>

    </div>
</body>

</html>