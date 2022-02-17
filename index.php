<?php

if($_POST["message"]) {

mail("levi.leachg@gmail.com", "Here is the subject line",

$_POST["insert your message here"]. "From: levi.leachg@gmail.com");

}

?>

<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SBL Therapy</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mr+Dafoe&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://kit.fontawesome.com/4daa4635cd.js" crossorigin="anonymous"></script>
</head>

<body>

<!-- create a link for the top of the page -->
<a id="page-top" class="link-to"></a>


<!-- the page heading and navigation menu -->
    <table id="header-table">
        <tr>
            <td id="title-container">
                <a class="section-link" href="#page-top"><h2>Susan Bloch Leach, Therapist</h2></a>
            </td>
            <td id="nav-container">
                <a class="section-link" href="#about-section"><div class="nav-button">About</div></a>
                <a class="section-link" href="#specialties-section"><div class="nav-button">Specialties</div></a>
                <a class="section-link" href="#finances-section"><div class="nav-button">Finances</div></a>
                <a class="section-link" href="#contact-section"><div class="nav-button">Contact</div></a>
            </td>
        </tr>
    </table>


<!-- the welcome container on the page -->
    <div id="welcome-container">
        <img src="Images/WATER%202.jpeg" alt="None">
        <div id="welcome-text-container">
            <h1 id="welcome-text" class="ml16">Welcome</h1>
            <h2 id="welcome-subtitle">I'm a therapist and social worker located in Long Island, NY.
                Welcome to my site.</h2>
        </div>
    </div>


<!-- the about section of the page -->
    <a id="about-section" class="link-to"></a>
    <div id="about" class="site-section">
            <h1 class="section-header">About</h1>
        <div class="about-row body-text">
            <div><img id="headshot" src="Images/HEADSHOT.jpeg" alt="None"></div>
            <div>
                Change and transformation are a constant, inevitable and ongoing part of life. At times, we need
                support. We will focus on helping you identify and understand your triggers to develop healthy
                coping skills and new ways of thinking. We will work on finding new ways for you to manage such
                feelings as being overwhelmed, anxious, depressed, stuck, afraid, stagnant, traumatized, in
                pain, reactive, angry, and/or resentful- as these feelings result in dysfunction and negatively
                impact relationships and wellness. Therapy is a process of discovery, growth and healing,
                developing your strengths, and releasing that which no longer serves you.
            </div>
            <div>
                Through deep weekly conversations we will identify your current issues, your triggers, and help
                you develop ways to deal with life in a better way- to help you live with more ease,
                contentment, joy and peace.
                <br><br><br>
                I invite you to let me share my multi-faceted individualized approach with you to help you
                heal, work through your “stuff”, and find new comfort in your skin. In 2016, I completed my
                200-hour yoga teacher training and have been seasonal service-corps at Omega institute for
                holistic studies in Rhinebeck NY 2015-2019. EMDR trained.
            </div>
        </div>
    </div>


<!-- the specialties/issues section of the page -->
    <a id="specialties-section" class="link-to"></a>
    <div id="specialties" class="site-section">
        <h1 class="section-header">Specialties, Issues, and Qualifications</h1>
        <table id="specialties-table">
            <tr>
                <th colspan="2" class="two-thirds-width"><h3 class="column-header">Issues</h3></th>
                <th class="gray-back third-width"><h3 class="column-header">Specialties</h3></th>
            </tr>
            <tr>
                <td colspan="2">
                    <ul style="columns: 2">
                        <li>ADHD</li>
                        <li>Alcohol Use</li>
                        <li>Behavioral Issues</li>
                        <li>Borderline Personality</li>
                        <li>Career Counseling</li>
                        <li>Child</li>
                        <li>Chronic Impulsivity</li>
                        <li>Codependency</li>
                        <li>Coping Skills</li>
                        <li>Depression</li>
                        <li>Divorce</li>
                        <li>Dual Diagnosis</li>
                        <li>Emotional Disturbance</li>
                        <li>Family Conflict</li>
                        <li>Gambling</li>
                        <li>Hoarding</li>
                        <li>Infidelity</li>
                        <li>Internet Addiction</li>
                        <li>Learning Disabilities</li>
                        <li>Life Coaching</li>
                        <li>Life Transitions</li>
                        <li>Narcissistic Personality</li>
                        <li>Obsessive-Compulsive (OCD)</li>
                        <li>Oppositional Defiance</li>
                        <li>Parenting</li>
                        <li>Peer Relationships</li>
                        <li>Pregnancy, Prenatal, Postpartum</li>
                        <li>Relationship Issues</li>
                        <li>School Issues</li>
                        <li>Self Esteem</li>
                        <li>Self-Harming</li>
                        <li>Sleep or Insomnia</li>
                        <li>Spirituality</li>
                        <li>Stress</li>
                        <li>Substance Use</li>
                        <li>Suicidal Ideation</li>
                        <li>Trauma and PTSD</li>
                        <li>Women's Issues</li>
                    </ul>
                </td>
                <td id="specialties-list" class="gray-back">
                    <ul>
                       <li>Marital and Premarital</li>
                       <li>Anger Management</li>
                       <li>Anxiety</li>
                    </ul>

                    <h3 id="qualifications-header" class="column-header">Qualifications</h3>
                    <ul>
                        <li>License: New York / 089939</li>
                        <li>MSW from Stony Brook University</li>
                        <li>Earned LMSW in 2016</li>
                        <li>Earned LCSW in 2018</li>
                        <li>Certified Yoga Instructor</li>
                        <li>EMDR Certified</li>
                    </ul>
                </td>

            </tr>
        </table>
    </div>


<!-- the welcome container on the page -->
    <div id="hire-me-container">
        <img src="Images/ZEN%20GARDEN.jpg" alt="None">
        <h1 id="hire-me-text">I offer teletherapy and am accepting new clients. Contact me below.</h1>
    </div>


<!-- the finances section of the page -->
    <a id="finances-section" class="link-to"></a>
    <div id="finances" class="site-section">
        <h2 class="section-header">Finances</h2>
    </div>

<!-- the contact section of the page -->
    <a id="contact-section" class="link-to"></a>
    <div id="contact" class="site-section">
        <h2 class="section-header">Contact</h2>
        <table id="contact-table">
            <tr>
                <td class="third-width">
                    <div>
                        <h3><span><i class="fa-solid fa-phone icon"></i></span>1-(516)-819-9940</h3>
                        <h3><span><i class="fa-solid fa-envelope icon"></i></span>susyb3@gmail.com</h3>
                        <h3><span><i class="fa-solid fa-location-pin icon"></i></span>Huntington, NY 11743</h3>
                    </div>
                </td>
                <td id="contact-form-div" colspan="2" class="two-thirds-width">
                    <form id="contact-form" name="contact-form" method="post" action="index.php">
                        <table id="contact-me-table">
                            <tr>
                                <td><p>First Name <span class="required">*</span></p></td>
                                <td><p>Last Name <span class="required">*</span></p></td>
                            </tr>
                            <tr>
                                <td><input id="contact-first-name" type="text"></td>
                                <td><input id="contact-last-name" type="text"></td>
                            </tr>
                            <tr class="form-spacer"></tr>
                            <tr>
                                <td><p>Email <span class="required">*</span></p></td>
                                <td><p>Phone</p></td>
                            </tr>
                            <tr>
                                <td><input id="contact-email" type="text"></td>
                                <td><input id="contact-phone" type="text"></td>
                            </tr>
                            <tr class="form-spacer"></tr>

                            <tr><td colspan="2"><p>Subject <span class="required">*</span></p></td></tr>
                            <tr><td colspan="2"><input id="contact-subject" type="text"></td></tr>
                            <tr class="form-spacer"></tr>
                            <tr><td colspan="2"><p>Message <span class="required">*</span></p></td></tr>
                            <tr>
                                <td colspan="2"><textarea name="contact-first-name" cols="2" rows="4"></textarea></td>
                            </tr>
                            <tr class="form-spacer"></tr>
                            <tr class="align-center"><td colspan="2"><button id="submit-contact" type="submit">Submit</button></td></tr>

                        </table>
                    </form>
                </td>
            </tr>
        </table>
    </div>

    <div id="page-footer"></div>
</body>

<script>
    // Wrap every letter in a span
    let textWrapper = document.querySelector('.ml16');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({loop: false})
        .add({
            targets: '.ml16 .letter',
            translateY: [-200,0],
            easing: "easeOutExpo",
            duration: 1400,
            delay: (el, i) => 70 * i
        });


</script>
</html>