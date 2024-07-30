<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <title>To do List</title>
    <style>
        :root {
            --bg-color: #1A202C;
            --surface-color: #2D3748;
            --primary-color: #6B46C1;
            --secondary-color: #4FD1C5;
            --accent-color: #F6AD55;
            --text-light: #E2E8F0;
            --text-muted: #A0AEC0;
            --success-color: #48BB78;
            --delete-color: #F56565;
        }

        body, html {
            height: 100%;
            justify-content: center;
            align-items: center;
            text-align: center;
            display: flex;
            background-color: var(--bg-color);
            color: var(--text-light);
        }

        ul {
            padding: 0;
            list-style-type: none;
        }

        h1 {
            font-size: 4rem;
            margin-bottom: 50px;
            font-family: "DM Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 700;
            font-style: normal;
            color: #fff;
        }

        .box {
            padding: 20px;
            border: 0px solid black;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            position: relative;
            min-width: 650px;
            min-height: 600px;
            background-color: var(--surface-color);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3), 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .input-container {
            margin-bottom: 25px;
        }

        input[type="text"] {
            border-radius: 20px;
            font-family: "DM Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 700;
            font-style: normal;
            font-size: 1.5rem;
            max-width: 450px;
            margin-left: 80px;
            padding: 10px;
            background-color: var(--bg-color);
            color: var(--text-light);
            border: 1px solid var(--text-muted);
            box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.2);
        }

        li {
            font-size: 2rem;
            font-family: "DM Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 2px solid var(--text-muted);
            border-radius: 30px;
            margin: 15px;
            transition: transform 0.3s ease, background-color 0.3s ease;
            background-color: var(--surface-color);
        }

        li:hover {
            background-color: var(--bg-color);
            transform: scale(1.01);
        }

        span {
            margin-left: 20px;
            margin-right: auto;
        }

        .check:checked + span {
            text-decoration: line-through;
            color: var(--text-muted);
        }

        .check {
            appearance: none;
            -webkit-appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid var(--text-muted);
            border-radius: 50%;
            outline: none;
            cursor: pointer;
            margin-right: 10px;
            margin-left: 20px;
        }

        .check:checked {
            background-color: var(--success-color);
            border-color: var(--success-color);
        }

        .btn {
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            font-weight: 400;
            padding: 10px;
            font-size: 1.5rem;
            cursor: pointer;
            color: rgb(242 242 242);
            background-color: rgb(79 70 229);
            background: linear-gradient(144deg, #af40ff, #5b42f3 50%, #6e54d8);
            transition: ease 0.35s linear;
            box-shadow: rgba(0, 0, 0, 0.3) 6px 2px 16px 0px, rgba(255, 255, 255, 0.1) -6px -2px 16px 0px;
        }

        .btn span {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-weight: 600;
        }

        .btn:hover {
            box-shadow: inset 0 5px 25px 0 #af40ff, inset 0 10px 15px 0px #5b42f3,
            inset 0 5px 25px 0px #00ddeb;
        }

        .bin-button {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background-color: #692ec8;
            color: #6B46C1;
            cursor: pointer;
            border: 2px solid rgb(255, 201, 201);
            transition-duration: 0.3s;
            position: relative;
            overflow: hidden;
        }

        .bin-bottom {
            width: 15px;
            z-index: 2;
        }

        .bin-top {
            width: 17px;
            transform-origin: right;
            transition-duration: 0.3s;
            z-index: 2;
        }

        .bin-button:hover .bin-top {
            transform: rotate(45deg);
        }

        .bin-button:hover {
            background-color: rgb(255, 0, 0);
        }

        .bin-button:active {
            transform: scale(0.9);
        }

        .garbage {
            position: absolute;
            width: 14px;
            height: auto;
            z-index: 1;
            opacity: 0;
            transition: all 0.3s;
        }

        .bin-button:hover .garbage {
            animation: throw 0.4s linear;
        }

        @keyframes throw {
            from {
                transform: translate(-400%, -700%);
                opacity: 0;
            }
            to {
                transform: translate(0%, 0%);
                opacity: 1;
            }
        }

        .input-container {
            display: flex;
            align-items: center;
            position: relative;
            width: 100%;
        }

        .text-input {
            flex: 1;
            padding-right: 60px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn {
            position: absolute;
            margin-right: 99px;
            right: 0;
            top: 0;
            bottom: 0;
            border: none;
            padding: 0 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .btn .sign, .btn .text {
            display: none; /* Show one or the other, or adjust styling */
        }

        .btn .sign {
            display: inline-block;
            font-size: 20px;
        }

        .btn .text {
            display: inline-block;
            font-size: 16px;
            margin-left: 5px;
            font-family: "DM Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 700;
            font-style: normal;
        }
    </style>
</head>
<body>
    <div class="box">
        <h1>To Do List</h1>
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf
            <div class="input-container">
                <input type="text" placeholder="Add a Task.." class="text-input" name="task"/>
                <button class="btn" type="submit">
                    <div class="sign">+</div>
                    <div class="text">Create</div>
                </button>
            </div>
        </form>

        <div class="tasks">
            <ul>
                @foreach($tasks as $task)
                    <li>
                        <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="completed" value="0">
                            <input type="checkbox" class="check" name="completed" value="1" {{ $task->completed ? 'checked' : '' }} onchange="this.form.submit()"/>
                            

                            <span>{{ $task->task }}</span>
                        </form>
                        <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="bin-button" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 39 7" class="bin-top">
                                    <line stroke-width="4" stroke="white" y2="5" x2="39" y1="5"></line>
                                    <line stroke-width="3" stroke="white" y2="1.5" x2="26.0357" y1="1.5" x1="12"></line>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 33 39" class="bin-bottom">
                                    <mask fill="white" id="path-1-inside-1_8_19">
                                        <path d="M0 0H33V35C33 37.2091 31.2091 39 29 39H4C1.79086 39 0 37.2091 0 35V0Z"></path>
                                    </mask>
                                    <path mask="url(#path-1-inside-1_8_19)" fill="white" d="M0 0H33H0ZM37 35C37 39.4183 33.4183 43 29 43H4C-0.418278 43 -4 39.4183 -4 35H4H29H37ZM4 43C-0.418278 43 -4 39.4183 -4 35V0H4V35V43ZM37 0V35C37 39.4183 33.4183 43 29 43V35V0H37Z"></path>
                                    <path stroke-width="4" stroke="white" d="M12 6L12 29"></path>
                                    <path stroke-width="4" stroke="white" d="M21 6V29"></path>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 89 80" class="garbage"></svg>
                            </button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
