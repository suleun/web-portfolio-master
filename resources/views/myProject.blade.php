<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">

        <style>
            body {
                padding: 3%;
            }

            .progress {
                margin-bottom: 3%;
            }

            .progress-bar {
                min-width: 2em;
                width: 20%;
            }

            #noProject{
                margin-top: 2%;
                padding: 3%;
                text-align: center;
            }
        </style>

        <title>참여한 프로젝트</title>
    </head>
    <body>

        <!-- 참여중인 프로젝트가 있을 경우 보여줄 카드 -->
        <div class="card">
            <div class="card-body">

                <div class="progress">
                    <div
                        class="progress-bar"
                        role="progressbar"
                        aria-valuenow="2"
                        aria-valuemin="0"
                        aria-valuemax="100">
                        20%
                    </div>
                </div>

                <a href="#" class="card-link">
                    <h5 class="card-title">프로젝트 제목</h5>
                </a>

                <p class="card-text">프로젝트의 간단한 개요</p>

            </div>
        </div>

        <!-- 참여중인 프로젝트가 없을 경우 -->
        <div class="card" id="noProject">
            <h3>
                참여중인 프로젝트가 없습니다. 
                <br>
                친구를 초대해 같이 뭔가 만들어 볼까요?
                <br>
                -WEGO-
            </h3>
        </div>
        <button>뭔가 만들러 가기</button>
    </body>
</html>