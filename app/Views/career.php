<style>
    .form-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="file"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: 150px;
        padding: 20px;
        border: none;
        border-radius: 10px;
        background-color: #28a745;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #218838;
    }
    .footer-widget-form input {
    width: 100%;
    height: 60px;
    border-radius: 5px;
    border: 0px;
    padding: 0 60px 0 15px;
    color: #717788;
         margin-bottom: 0px;
    font-family: "Inter", sans-serif;
    font-size: 16px;
}
</style>
<br /><br />
<div class="speciality ">
    <div class="container">
        <div class="row align-items-center mb-n60">
            <div class="col-lg-6 mb-60 wow fadeIn" fadeIndata-wow-duration=".1s" data-wow-delay=".1s" style="visibility: visible; animation-duration: .5s; animation-delay: 0.01s; animation-name: fadeIn;">
                <div class="speciality-image">
                    <div class="speciality-image-inner" >
                        <img class="js-tilt" src="images/speciality/speciality1.png" alt="speciliity" style="will-change: transform; transform: perspective(3000px) rotateX(0deg) rotateY(0deg); transition: 4000ms cubic-bezier(0.03, 0.98, 0.52, 0.99);">
                    </div>

                </div>
            </div>
            <div class="col-lg-6 mb-60 wow fadeIn" fadeIndata-wow-duration=".01s" data-wow-delay=".1s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: fadeIn;">
                <!-- Heading Start -->
                <div class="heading-one">
                    <span class="heading-one-subtitle">Work Culture</span>
                    <h2 style="font-size: 2.5em;" class="heading-one-title">Innovative, Collaborative & Culturally Diverse Team
                    </h2>
                    <p>At Green Gold, we value teamwork and the pursuit of continuous improvement. Our collaborative culture fuels innovation, empowering every team member to share ideas and drive our collective success. <br /><br /> Our diverse team is one of our greatest strengths, with fluency in languages such as French, Spanish, Russian, Polish, Mandarin, and Ukrainian. This multilingual expertise enhances our global operations, enabling seamless communication and stronger relationships across international markets. </p>
                </div>
                <!-- Heading End -->

            </div>
        </div>
    </div>

</div>
<br /><br />
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm-12">
            <div class="heading-one">
                <span class="heading-one-subtitle">Apply Now</span>
                <h2 class="heading-one-title">Join Our Team!</h2>
            </div>
        </div>
    </div> <br /><br />
    <div class="row">

        <div class="col-md-6 sm-12">
            <form action="/submit_application" method="post" enctype="multipart/form-data">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required><br><br>

                <label for="mobile">Mobile Number:</label><br>
                <input type="tel" id="mobile" name="mobile" required><br><br>

                <label for="current_ctc">Current CTC (Salary):</label><br>
                <input type="text" id="current_ctc" name="current_ctc" required><br><br>

              


                <label for="resume">Upload Resume/CV (PDF only):</label><br>
                <input type="file" id="resume" name="resume" accept="application/pdf" required><br><br>
        </div>

        <div class="col-md-6 sm-12">
            <label for="email">Email Address:</label><br>
            <input type="email" id="email" name="email" required><br><br>



            <label for="current_company">Current Company:</label><br>
            <input type="text" id="current_company" name="current_company" required><br><br>



            <label for="expected_ctc">Expected CTC (Salary):</label><br>
            <input type="text" id="expected_ctc" name="expected_ctc" required><br><br>


            <label for="position">Position:</label><br>
            <input type="text" id="position" name="position" required><br><br>
        </div>
        <div class="row justify-content-end">
            <div class="col-md-3 justify-content-end d-flex"><button type="submit" class="btn btn-style-one">
            Apply Now
        </button></div>
        </div>
        

        </form>
    </div>
</div>