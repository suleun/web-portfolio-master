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
                width: 70%;
                margin:auto;
            }

            .card{
                padding: 4%;
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

            #emailInput{
                margin: 1%;
            }
        </style>

        <script>

            function checkPlus() {
                let temp_html = `  <div class="form-check">
                                  
                                    <input
                                    type="text"
                                    class="form-control"
                                    id="rewrite"
                                    name="rewrite[]"
                                    onkeyup="enterkey()"
                                    placeholder="추가할 항목의 이름을 적어주세요">                                                    
                                </div>
                                `;
                $('#check_plus').append(temp_html)
            }

            function peopleDiv() {
                let num = $("select[name=people]").val();

                $('#add_people').empty();

                for (i = 0 ; i < num ; i ++) {

                    let temp_html = `
                                <input
                                    type="email"
                                    class="form-control"
                                    id="emailInput"
                                    placeholder="팀원의 이메일 주소를 적어 주세요">
                
                                `;
                    $('#add_people').append(temp_html)

                }

            }
        </script>

        <title>ProJect Form Create</title>
    </head>

    <body>
        <img
            class="logo"
            alt="WEGO"
            src="/image/HatchfulExport-All/logo_transparent.png">

        <form
            class="card"
            action="/projectStore"
            method="post"
            enctype="multipart/form-data"
            onkeydown="return event.key !='Enter';">
            @csrf
            <div>
                <!-- 프로젝트 명 -->
                <div class="form-group">
                    <label for="exampleFormControlInput1">프로젝트 명</label>
                    <input
                        type="text"
                        class="form-control"
                        name="projectTitle"
                        id="exampleFormControlInput1"
                        placeholder="프로젝트 명을 입력해 주세요.">
                </div>
            </div>

            <div>
                <div class="form-group">
                    <label for="peopleid">최대 참여 인원 선택</label>
                    <select class="form-control" name="people" id="peopleid" onchange="peopleDiv()">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
            </div>

            <div class="add_people">
                <!-- 팀원추가 -->
                <label for="exampleFormControlInput1" onclick="team_email_Plus()">
                    팀원추가
                </label>

                <div class="form-group" id="add_people">
              
                </div>

            </div>
            <br>

            <div>
                <!-- 프로젝트 개요 -->
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">프로젝트 개요</label>
                    <textarea
                        class="form-control"
                        name="outline"
                        id="exampleFormControlTextarea1"
                        rows="5"></textarea>
                </div>
                <br>
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

            <div>
                <!-- 기대 효과 -->
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">기대효과</label>
                    <textarea
                        class="form-control"
                        name="expectation"
                        id="exampleFormControlTextarea1"
                        rows="3"></textarea>
                </div>
            </div>
            <br>

        </body>
    </html>