#!"C:\xampp\perl\bin\perl.exe"

print "Content-type:text/html\n\n";
print "<html>";
print "<head>
    <meta charset='UTF-8'>
    <meta name='description' content=''>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv='x-ua-compatible' content='ie=edge'>
    <title>Resume Builder </title>
    <link rel='icon' href='images/favicon.png'>
    <link rel='stylesheet' href='css/animate.css' />
    <link rel='stylesheet' href='css/owl.theme.default.min.css' />
    <link rel='stylesheet' href='css/owl.carousel.min.css' />
    <link rel='stylesheet' href='font-awesome/css/font-awesome.min.css' />
    <link rel='stylesheet' href='css/themify-icons.css' />
    <link rel='stylesheet' href='css/flaticon.css' />
    <link rel='stylesheet' href='css/venobox.css' />
    <link rel='stylesheet' href='bootstrap/css/bootstrap.min.css' />
    <link rel='stylesheet' href='css/style1.css' />
    <link rel='stylesheet' href='css/responsive.css' />
</head>";
print "<title>Hello - Second CGI Program</title>";
print "</head>";

print "<body>
    
<div class='container-fluid pb-video-container'>
    <div class='col-md-10 col-md-offset-1'>
        <center><h2> Guidance  <span style='color:#ffae2f'> Videos </span></h2></center><hr style='border-top: 1px solid #000;' size='10'>
        <div class='row pb-row'>
            <div class='col-md-5 pb-video'>
                <iframe class='pb-video-frame' width='100%' height='230' src='https://www.youtube.com/embed/MG5ZhaFWat0' frameborder='0' allowfullscreen></iframe>
                <label class='form-control label-warning text-center'>All About Internships </label>
            </div>
            <div class='col-md-5 col-md-offset-2 pb-video'>
                <iframe class='pb-video-frame' width='100%' height='230' src='https://www.youtube.com/embed/kLAMI4r6asg' frameborder='0' allowfullscreen></iframe>
                <label class='form-control label-warning text-center'>Best Resume</label>
            </div>
        </div>   
            <div class='row pb-row'>
            <div class='col-md-5 pb-video'>
                <iframe class='pb-video-frame ' width='100%' height='230' src='https://www.youtube.com/embed/r_Wf532f5X4' frameborder='0' allowfullscreen></iframe>
                <label class='form-control label-warning text-center'>Best Resume</label>
            </div>
            <div class='col-md-5 col-md-offset-2  pb-video'>
                <iframe class='pb-video-frame' width='100%' height='230' src='https://www.youtube.com/embed/dQ7Q8ZdnuN0' frameborder='0' allowfullscreen></iframe>
                <label class='form-control label-warning text-center'>Best Resume</label>
            </div>
        </div>
        <div class='row pb-row'>
            <div class='col-md-5 pb-video'>
                <iframe class='pb-video-frame' width='100%' height='230' src='https://www.youtube.com/embed/UP-S9rvAYYo' frameborder='0' allowfullscreen></iframe>
                <label class='form-control label-warning text-center'>Best Resume</label>
            </div>
            <div class='col-md-5 col-md-offset-2  pb-video'>
                <iframe class='pb-video-frame' width='100%' height='230' src='https://www.youtube.com/embed/A22wPijWmvw' frameborder='0' allowfullscreen></iframe>
                <label class='form-control label-warning text-center'>Projects</label>
            </div>
        </div>
        <div class='row pb-row'>
            <div class='col-md-5 pb-video'>
                <iframe class='pb-video-frame' width='100%' height='230' src='https://www.youtube.com/embed/WZ6ZhiCg2_Q' frameborder='0' allowfullscreen></iframe>
                <label class='form-control label-warning text-center'>Resume Secrates </label>
            </div>
            <div class='col-md-5 col-md-offset-2  pb-video'>
                <iframe class='pb-video-frame' width='100%' height='230' src='https://www.youtube.com/embed/y8YH0Qbu5h4' frameborder='0' allowfullscreen></iframe>
                <label class='form-control label-warning text-center'>Freshers and Exprienced </label>
            </div>
        </div>

        
        <div class='row pb-row'>
        
            <div class='col-md-6 '>
                <div class='link-btn' style='text-align:right;'><a class='animated btn main_bg_btn' href='index.html'>Back to Home</a></div>
            </div>

            <div class='col-md-6 '>
                <div class='link-btn' ><a class='animated btn main_bg_btn' href='form.html'>Create Resume</a></div>
            </div>
        </div>
        
        
        </div>
    </div>
    
</div>";
print "<style>
    .pb-video-container {
        padding-top: 20px;
        background: #ffffff;
        font-family: Lato;
    }

    .pb-video {
        border: 1px solid #201e1e;
        padding: 5px;
    }

        .pb-video:hover {
            background: rgb(196, 185, 185);
        }

    .pb-video-frame {
        transition: width 2s, height 2s;
    }



    .pb-row {
        margin-bottom: 60px;
    }
    .label-warning {
    background-color: #ffae2f;
}
";
print "</style> ";
print "</body>";
print "</html>";