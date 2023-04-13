<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Proresearchers</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <!-- 
    <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

        @csrf

        <input type="text" name="name" placeholder="Product Name">

        <input type="text" name="description" placeholder="Product description">

        <input type="text" name="subject" placeholder="subject">

        <input type="text" name="level" placeholder="level">

        <input type="file" name="file">

        <input type="submit">

    </form> -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>
<br><br><br><br>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>proresearchers</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />


</head>

<body>
    <!--Main layout-->
    <main class="mt-5">
        <div class="">

            <!--Section: Content-->
            <section class="mb-5 pt-5" id="reservations">
                <h4 class="text-center"><strong>Post Assignment</strong></h4>
                <p class="text-center">Please fill in the form below<br>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">

                        <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" name="firstname" id="form3Example1" class="form-control"
                                            required />
                                        <label class="form-label" for="form3Example1">First name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" name="lastname" id="form3Example2" class="form-control"
                                            required />
                                        <label class="form-label" for="form3Example2">Last name</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="email" name="email" id="form3Example1" class="form-control" />
                                        <label class="form-label" for="form3Example1">Email address</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="number" name="phone" id="form3Example2" class="form-control"
                                            placeholder="+254 721 584 219" />
                                        <label class="form-label" for="form3Example2">Phone Number</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" name="topic" id="form3Example1" class="form-control" />
                                        <label class="form-label" for="form3Example1">Topic</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <select class="form-select mb-2" name="subject" aria-label="Default select example">
                                        <option>Subject</option>
                                        <option value="Accounting">Accounting</option>
                                        <option value="2">Agriculture</option>
                                        <option value="3">Biology</option>
                                        <option value="4">E-commerce</option>
                                        <option value="5">Education</option>
                                        <option value="6">Economics</option>
                                        <option value="7">English</option>
                                        <option value="8">Finance</option>
                                        <option value="9">Geography</option>
                                        <option value="10">Human Resource</option>
                                        <option value="11">Information Technology</option>
                                        <option value="12">Law</option>
                                        <option value="13">Logistics</option>
                                        <option value="14">Management</option>
                                        <option value="15">Marketing</option>
                                        <option value="16">Mathematics</option>
                                        <option value="17">Medicine</option>
                                        <option value="18">Music</option>
                                        <option value="1">Political Science</option>
                                        <option value="2">Psychology</option>
                                        <option value="3">Public Relations</option>
                                        <option value="1">Religion</option>
                                        <option value="2">Statistics</option>
                                        <option value="3">Others</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col">
                                    <select class="form-select mb-2" name="type" aria-label="Default select example">
                                        <option selected>Paper Type</option>
                                        <option value="Easy">Easy</option>
                                        <option value="Term Paper">Term Paper</option>
                                        <option value="Research">Research</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select mb-2" name="level" aria-label="Default select example">
                                        <option selected>Academic Level</option>
                                        <option value="High School">High School</option>
                                        <option value="2">Undergraduate</option>
                                        <option value="3">Masters</option>
                                        <option value="4">Ph.D</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-1">
                                <div class="col">
                                    <select class="form-select mb-2" name="style" aria-label="Default select example">
                                        <option selected>Referencing Style</option>
                                        <option value="APA">APA</option>
                                        <option value="MLA">MLA</option>
                                        <option value="Turabian">Turabian</option>
                                        <option value="Chicago">Chicago</option>
                                        <option value="Havard">Havard</option>
                                        <option value="Oxford">Oxford</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="number" name="reference" id="" class="form-control" min="0" />
                                        <label class="form-label" for="form6Example2">Number of References</label>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="row mb-4">
                                <label class="form-label" for="form6Example1">Deadline Date & Time</label>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="date" name="date" id="form3Example1" class="form-control" />
                                        <label class="form-label" for="form3Example1"></label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="time" name="time" id="form3Example2" class="form-control"
                                            placeholder="time" />
                                        <label class="form-label" for="form3Example2"></label>
                                    </div>
                                </div>
                            </div> -->

                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="number" name="pages" id="form3Example1" class="form-control"
                                            min="0" />
                                        <label class="form-label" for="form3Example1">Number of Pages</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <a href="" id="upload_link">
                                            <input id="upload" name="file" id="form3Example1" type="file" download>
                                            <label for="form3Example1" class="form-label">Attach a file</label>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="form-outline mb-4">
                                <textarea class="form-control" name="description" id="textAreaExample"
                                    rows="4"></textarea>
                                <label class="form-label" for="textAreaExample">Description</label>
                            </div>

                            <input type="text" name="name" placeholder="Full Name">


                            <button type="submit" class="btn btn-success btn-block mb-4">
                                Submit
                            </button>

                        </form>
                    </div>
                </div>
            </section>


            <script src="./js.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js">
            </script>
</body>

</html>