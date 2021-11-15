<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ASSETS ?>css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?= ASSETS ?>js/main.js"></script>
    <title><?= $data['title'] ?></title>
</head>

<body>
    <header class="panel">
        <p class="logo">
            <?= WEBSITE_NAME ?>
        </p>
        <div class="menu">
            <div class="menu-line"></div>
            <div class="menu-line"></div>
            <div class="menu-line"></div>
        </div>
        <div class="sidebar">
            <div class="categories">
                <div class="category">
                    <div class="current-list-indicator"></div>
                    <a href="#all">All</a>
                </div>
                <div class="category">
                    <div class="current-list-indicator"></div>
                    <a href="#work">Work</a>
                    <div class="remove editing-btn">
                        <a href="">
                            <svg height="13.222" viewBox="0 0 12 13.222" width="12" xmlns="http://www.w3.org/2000/svg">
                                <path d="M.5 2.944h11m-1.223 0V11.5a1.222 1.222 0 01-1.222 1.222H2.94A1.222 1.222 0 011.718 11.5V2.944m1.833 0V1.722A1.222 1.222 0 014.777.5h2.444A1.222 1.222 0 018.44 1.722v1.222M4.778 6v3.667M7.222 6v3.667" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <a href="#new">&#43; Create New List</a>
                </div>
            </div>
            <div>
                <a href="<?=ROOT?>settings">Settings</a>
                <a href="<?=ROOT?>logout">Logout</a>
                <footer class="ftr"><span>&#169;</span>2021 Redwan Jamous. All rights reserved.</footer>
            </div>
        </div>
    </header>
    <div class="main-section">
        <div class="container">
            <p class="title">CREATE NEW TASK</p>
            <main class="main">
                <form class="form" action="" method="post">
                    <div class="form-fields">
                        <div class="form-item">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" placeholder="e.g. Complete the proposal">
                        </div>

                        <div class="form-item">
                            <label for="date">Due Date</label>
                            <input type="date" name="date" id="date">
                        </div>
                    </div>
                    <div class="form-item btn">
                        <input type="submit" value="ADD" class="submit">
                    </div>

                </form>
            </main>
        </div>
        <div class="secondary">
            <div class="container">
                <p class="title">TO DO</p>
                <div>
                    <div class="small-container">
                        <div class="task">
                            <div class="buttons">
                                <div class="complete editing-btn">
                                    <a href="">
                                        <svg height="8.828" viewBox="0 0 11.828 8.828" width="11.828" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.414 4.414l3 3m0 0l6-6" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="delete editing-btn">
                                    <a href="">
                                        <svg height="8.828" viewBox="0 0 8.828 8.828" width="8.828" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.414 1.414l6 6m-6 0l6-6" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="edit editing-btn">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M497.9 142.1l-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8L21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="remove editing-btn">
                                    <a href="">
                                        <svg height="13.222" viewBox="0 0 12 13.222" width="12" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M.5 2.944h11m-1.223 0V11.5a1.222 1.222 0 01-1.222 1.222H2.94A1.222 1.222 0 011.718 11.5V2.944m1.833 0V1.722A1.222 1.222 0 014.777.5h2.444A1.222 1.222 0 018.44 1.722v1.222M4.778 6v3.667M7.222 6v3.667" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="task-main-info">
                                <div class="task-title">Meet with the manager</div>
                                <div class="task-list">Work</div>
                            </div>
                            <div class="task-date">Tuesday 31st August</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <p class="title">COMPLETE</p>
                <div>
                    <div class="small-container">
                        <div class="task">
                            <div class="buttons">
                                <div class="complete editing-btn">
                                    <a href="">
                                        <svg height="8.828" viewBox="0 0 11.828 8.828" width="11.828" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.414 4.414l3 3m0 0l6-6" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="delete editing-btn">
                                    <a href="">
                                        <svg height="8.828" viewBox="0 0 8.828 8.828" width="8.828" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.414 1.414l6 6m-6 0l6-6" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="edit editing-btn">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M497.9 142.1l-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8L21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="remove editing-btn">
                                    <a href="">
                                        <svg height="13.222" viewBox="0 0 12 13.222" width="12" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M.5 2.944h11m-1.223 0V11.5a1.222 1.222 0 01-1.222 1.222H2.94A1.222 1.222 0 011.718 11.5V2.944m1.833 0V1.722A1.222 1.222 0 014.777.5h2.444A1.222 1.222 0 018.44 1.722v1.222M4.778 6v3.667M7.222 6v3.667" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="task-main-info">
                                <div class="task-title">Meet with the manager</div>
                                <div class="task-list">Work</div>
                            </div>
                            <div class="task-date">Tuesday 31st August</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <p class="title">INCOMPLETE</p>
                <div>
                    <div class="small-container">
                        <div class="task">
                            <div class="buttons">
                                <div class="complete editing-btn">
                                    <a href="">
                                        <svg height="8.828" viewBox="0 0 11.828 8.828" width="11.828" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.414 4.414l3 3m0 0l6-6" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="delete editing-btn">
                                    <a href="">
                                        <svg height="8.828" viewBox="0 0 8.828 8.828" width="8.828" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.414 1.414l6 6m-6 0l6-6" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="edit editing-btn">
                                    <a href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M497.9 142.1l-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8L21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="remove editing-btn">
                                    <a href="">
                                        <svg height="13.222" viewBox="0 0 12 13.222" width="12" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M.5 2.944h11m-1.223 0V11.5a1.222 1.222 0 01-1.222 1.222H2.94A1.222 1.222 0 011.718 11.5V2.944m1.833 0V1.722A1.222 1.222 0 014.777.5h2.444A1.222 1.222 0 018.44 1.722v1.222M4.778 6v3.667M7.222 6v3.667" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="task-main-info">
                                <div class="task-title">Meet with the manager</div>
                                <div class="task-list">Work</div>
                            </div>
                            <div class="task-date">Tuesday 31st August</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</body>

</html>