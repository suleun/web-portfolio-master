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

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <style>
            body {

                text-align: center;
                background-color: #E6E6FA;
                width: 60%;
                margin: auto;
            }

            /* 로고이미지 */
            .logo {
                width: 300px;
                height: 300px;
            }

            .checkList {
                padding: 1%;
                border: 4px #a99dee;
                border-style: outset;
            }

            #img_btn {
                border: 0;
                background-color: #E6E6FA;
            }

            #plusDiv {
                padding: 1%;
                border: 4px #e2a3f59d;
                border-style: inset;
            }

            .add_people {
                padding: 1%;
                border: 4px #a99dee;
                border-style: inset;
            }
        </style>

        <title>회의록 작성 페이지</title>
    </head>
    <body>

        <img
            class="logo"
            alt="사진없어여"
            src="/image/HatchfulExport-All/logo_transparent.png">
        <form
            action="/projectStore"
            method="post"
            enctype="multipart/form-data"
            onkeydown="return event.key !='Enter';">
            @csrf

            <div class="form-group">
                <label for="exampleFormControlSelect1">프로젝트 명을 선택해 주세요.</label>
                <select class="form-control" name="people" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </select>
            </div>

            <br>

            <div>
                <!-- 프로젝트 개요 -->
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">오늘 회의 할 내용</label>
                    <textarea
                        class="form-control"
                        name="outline"
                        id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>
                <br>
                   <!-- 회의내용 -->
                   <div class="form-group">
                    <label for="exampleFormControlTextarea1">회의 내용</label>
                    <textarea
                        class="form-control"
                        name="outline"
                        id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>


                <!-- 다음 회의할 =내용 -->
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">다음 회의 내용</label>
                    <textarea
                        class="form-control"
                        name="outline"
                        id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>

                <!-- 첨부파일 -->
                <div class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input
                        type="file"
                        name="files[]"
                        class="form-control-file"
                        id="exampleFormControlFile1">
                </div>

            </div>

            <button type="submit" class="btn btn-primary">저장 후 팀원들에게 회의록 보내기</button>
        </form>

    </body>
</html>