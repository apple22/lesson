<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Password Reset</title>
    <link rel="stylesheet" href="./css/login_pw_reset.css" />
    <link rel="stylesheet" href="./css/reset.css" />
</head>

<body>
    <main class="rectangle">
        <div class="info-board">
            <div class="title-panel">
                <div class="aviss">
                    AVISS
                    <div class="admin">admin</div>
                </div>
            </div>
            <div class="id-info-panel">
                <div class="change-password">
                    CHANGE PASSWORD
                </div>
                <div class="id">
                    hank05@seadronix.com
                </div>
            </div>
            <div class="pw-form">
                <form action="#">
                    <input type="password" name="password" id="password" placeholder="NEW PASSWORD" required />
                    <input type="password" name="password-confirm" id="password-confirm" placeholder="CONFIRM" required />
                </form>
            </div>
            <div class="password-validation">
                <div class="condition">
                    <div class="checkbox on">🟦</div>
                    <div class="at-least-8-character">
                        At least 8 characters-the more charaters
                    </div>
                </div>
                <div class="condition off">
                    <div class="checkbox off">🟦</div>
                    <div class="a-mixture-of-both-up">
                        A mixture of both uppercase and lowercase letters
                    </div>
                </div>
                <div class="condition">
                    <div class="checkbox off">🟦</div>
                    <div class="a-mixture-of-letters">
                        A mixture of letters and numbers
                    </div>
                </div>
                <div class="condition">
                    <div class="checkbox off">🟦</div>
                    <div class="inclusion-of-at-leas">
                        Inclusion of at least one spectial charater ex)!@#?]
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-board"></div>
    </main>
</body>

</html>
