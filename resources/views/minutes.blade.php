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

        <title>회의록</title>

        <style>
            body {
                padding: 3%;
            }

            .card {
                margin-top: 3%;
            }

            .form-check{
                margin: auto;
            }

            .btn{
                margin: 1%;
            }

        </style>
    </head>
    <body>
        <!-- 회의록이 있을 경우 -->
        <div class="card">
            회의록은 다 리스트로 뜨게 한 다음에 특별한 역할을 가지고 있는 사용자만 수정, 또는 작성 가능하게 하기
            <br>작성은 새 탭으로 열어서 작성할 수 있게
            <br>수정은 모달창으로 할 수 있게
            <br>삭제는 삭제하기 전에 얼럴트 창으로 한번 묻기
            
            <br>CSS는 나중에 한번에 만들어서 합칠게요
            <br>아 날짜 추가해야되네 
        
        </div>

        <div class="card">
            <!-- 회의록을 수정 할 수 있는 유저만 볼 수 있는 버튼 -->
            {프로젝트 이름}의 회의내용을 기록하러 가봐요!
            <button class="btn btn-outline-success" type="button">작성</button>
        </div>

        
        <div class="card">
            <div class="card-body">

                <div class="d-grid gap-2 d-md-flex justify-content-md-end" id="special">
                    <!-- 회의록을 수정 할 수 있는 유저만 볼 수 있는 버튼 -->
                    <button class="btn btn-outline-warning" type="button">수정</button>
                    <button class="btn btn-outline-danger" type="button">삭제</button>
                </div>

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
                    <h5 class="card-title">프로젝트 제목 + 회의록</h5>
                </a>

           
                <p class="card-text">진행 상황 체크리스트</p>
            
                <div class="card">
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckDisabled"
                            disabled="disabled">
                        <label class="form-check-label" for="flexCheckDisabled">
                           체크 되지 않은 항목일 경우
                        </label>
                    </div>
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckCheckedDisabled"
                            checked="checked"
                            disabled="disabled">
                        <label class="form-check-label" for="flexCheckCheckedDisabled">
                            체크된 항목일 경우
                        </label>
                    </div>
                </div>

            </div>
        </div>

</div>
    </body>
</html>