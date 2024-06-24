<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="public/images/android-chrome-512x512.png">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/form.css">
    <title>Mobile Shop</title>
</head>

<body>
        <div class="form-container">
            <h2>Sign up</h2>

            <form action="signUpAction.php" method="POST">
                <div class="iconPositionBox">
                    <label for="name"><b>Name</b></label>
                    <input type="text" placeholder="Enter your name and last name" name="name" required>
                    <svg width="14" height="18" viewBox="0 0 14 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 0C4.56586 0 2.59259 1.95716 2.59259 4.37143C2.59259 6.7857 4.56586 8.74286 7 8.74286C9.43414 8.74286 11.4074 6.7857 11.4074 4.37143C11.4074 1.95716 9.43414 0 7 0Z" fill="#023047" fill-opacity="0.6"/>
                        <path d="M9.60096 10.6877C7.87789 10.4149 6.12211 10.4149 4.39904 10.6877L4.21435 10.7169C1.78647 11.1012 0 13.1783 0 15.6168C0 16.933 1.07576 18 2.40278 18H11.5972C12.9242 18 14 16.933 14 15.6168C14 13.1783 12.2135 11.1012 9.78565 10.7169L9.60096 10.6877Z" fill="#023047" fill-opacity="0.6"/>
                    </svg>
                </div>

                <div class="iconPositionBox">
                    <label for="email"><b>E-mail</b></label>
                    <input type="text" placeholder="Enter your Email" name="email" required>
                    <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.80965 0.3303C8.91108 -0.1101 11.0889 -0.1101 13.1904 0.330301L13.6299 0.422426C15.4434 0.802479 17.0198 1.76242 18.1306 3.09162C18.3119 3.30858 18.2509 3.62141 18.0114 3.78002L11.3743 8.1751C10.5491 8.72151 9.45086 8.72151 8.62572 8.1751L1.98859 3.78002C1.74908 3.62142 1.68812 3.30859 1.86944 3.09162C2.98024 1.76243 4.55658 0.802481 6.37005 0.422427L6.80965 0.3303ZM1.32486 5.18534C1.04693 5.0013 0.659508 5.10681 0.55429 5.41192C0.495527 5.58232 0.442955 5.75548 0.396824 5.93119C-0.132275 7.94645 -0.132275 10.0536 0.396824 12.0688C1.12141 14.8286 3.43518 16.9625 6.37005 17.5776L6.80965 17.6697C8.91108 18.1101 11.0889 18.1101 13.1904 17.6697L13.6299 17.5776C16.5648 16.9625 18.8786 14.8286 19.6032 12.0688C20.1323 10.0535 20.1323 7.94645 19.6032 5.9312C19.557 5.75548 19.5045 5.58231 19.4457 5.4119C19.3405 5.1068 18.9531 5.00129 18.6751 5.18533L12.2904 9.41325C10.9152 10.3239 9.08477 10.3239 7.70953 9.41324L1.32486 5.18534Z" fill="#023047" fill-opacity="0.6"/>
                    </svg>
                </div>

                <div class="iconPositionBox">
                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.13743 1.51386C7.70303 1.37049 8.29692 1.37049 8.86251 1.51386C10.1819 1.84832 11.1258 2.96028 11.2306 4.26587L11.1915 4.25782C9.08716 3.82413 6.91285 3.82413 4.8085 4.25782L4.76936 4.26589C4.87413 2.96028 5.81803 1.84832 7.13743 1.51386ZM12.685 4.50839V4.7184C14.1592 5.40029 15.2768 6.68843 15.6983 8.26735C16.1955 10.1297 16.0758 12.0973 15.3563 13.8896L15.2718 14.1C14.5 16.0225 12.7426 17.4054 10.6498 17.7371L9.96865 17.845C8.66479 18.0517 7.33518 18.0517 6.03132 17.845L5.35019 17.7371C3.25734 17.4054 1.49999 16.0225 0.728178 14.1L0.643677 13.8895C-0.0758338 12.0973 -0.195525 10.1297 0.301677 8.26736C0.723206 6.68846 1.84078 5.40033 3.31494 4.71843V4.50838C3.31494 2.45953 4.7365 0.669243 6.77335 0.152919C7.57769 -0.050973 8.42226 -0.050973 9.22659 0.152919C11.2634 0.669243 12.685 2.45954 12.685 4.50839ZM8.00001 9.85038C8.31917 9.85038 8.5779 10.1022 8.5779 10.4129V12.288C8.5779 12.5987 8.31917 12.8506 8.00001 12.8506C7.68085 12.8506 7.42212 12.5987 7.42212 12.288V10.4129C7.42212 10.1022 7.68085 9.85038 8.00001 9.85038Z" fill="#023047" fill-opacity="0.6"/>
                    </svg>
                </div>

                <button class="singUpBtn formBtn" type="submit">SIGN UP</button>

            </form>

            <span>ALREADY HAVE AN ACCOUNT? <a href="login.php">LOG IN</a></a></span>
    </div>
</body>
</html>