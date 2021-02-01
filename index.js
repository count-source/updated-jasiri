$(document).ready(function() {
    // technology owl carousel
    $('.banner  .owl-carousel').owlCarousel({
        nav: false,
        loop: true,
        autoplay: true,
        dots: true,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    // technology owl carousel
    $('.paterns .owl-carousel').owlCarousel({
        nav: false,
        loop: true,
        autoplay: true,
        dots: true,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
    // technology owl carousel
    $('#featured-services .owl-carousel').owlCarousel({
        nav: false,
        dots: true,
        loop: true,
        autoplay: true,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

});
/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
})

/*SCROLL HOME*/


sr.reveal('.sub-body-image-expl', { delay: 200 })
sr.reveal('.banner', { origin: 'right', delay: 300 })


/*SCROLL ABOUT*/
sr.reveal('.paterns', { delay: 500 })
sr.reveal('.paterns-title', { delay: 300 })
sr.reveal('.partners', { delay: 500 })

/*SCROLL HOME*/
sr.reveal('.engage', {})
sr.reveal('.engage-intro"', { delay: 200 })
sr.reveal('.engage-title', { delay: 300 })
sr.reveal('.engage-text1', { delay: 350 })
sr.reveal('.engage-text2', { delay: 400 })
sr.reveal('.engage-btn', { delay: 450 })
sr.reveal('.engage-img', { origin: 'left', delay: 500 })


/*SCROLL ABOUT*/
sr.reveal('.about-us', { delay: 200 })
sr.reveal('.into-abt', { delay: 250 })
sr.reveal('.about-us-info', { delay: 300 })
sr.reveal('.about-us-img', { delay: 500 })
sr.reveal('.abouts', { origin: 'left', delay: 400 })
sr.reveal('.read-more', { delay: 450 })

/*SCROLL SKILLS*/
sr.reveal('.featured-services', { delay: 200 })
sr.reveal('.service-intro', { delay: 300 })
sr.reveal('.services-title', { delay: 400 })
sr.reveal('.services-text', { delay: 400 })
sr.reveal('.services-carousel', { delay: 400 })

/*SCROLL SKILLS*/
sr.reveal('.why-choose-us', { delay: 200 })
sr.reveal('.choose-reason-intro', { delay: 300 })
sr.reveal('.why-choose-us-title', { delay: 350 })
sr.reveal('.check1', { delay: 400 })
sr.reveal('.check2', { delay: 450 })
sr.reveal('.check3', { delay: 500 })
sr.reveal('.check4', { delay: 500 })

sr.reveal('.choose-us-img', { origin: 'right', delay: 600 })


/*SCROLL PORTFOLIO*/
sr.reveal('.portfolio__img', { interval: 200 })

/*SCROLL CONTACT*/

sr.reveal('.contact-us', { interval: 200 })
sr.reveal('.contact-us-intro', { delay: 300 })
sr.reveal('.contact-us-title', { delay: 400 })
sr.reveal('.contact-us-text', { interval: 500 })
sr.reveal('.fa-facebook', { interval: 600 })
sr.reveal('.fa-twitter', { interval: 650 })
sr.reveal('.fa-instagram', { interval: 700 })
sr.reveal('.contact-us-form', { interval: 600 })
sr.reveal('.input1', { interval: 600 })
sr.reveal('.input2', { interval: 700 })
sr.reveal('.input3', { interval: 800 })
sr.reveal('.input4', { interval: 900 })
sr.reveal('.input5', { interval: 1000 })
sr.reveal('.input6', { interval: 1100 })

/*SCROLL Customer Review*/
sr.reveal('.review-title', { interval: 200 })
sr.reveal('.review-1', { delay: 400 })
sr.reveal('.review-2', { delay: 600 })
sr.reveal('.review-3', { delay: 700 })


/*SCROLL Footer*/
sr.reveal('.footer', { interval: 200 })
sr.reveal('.footer-logo', { origin: 'left', delay: 600 })
sr.reveal('.links-area', { delay: 600 })
sr.reveal('.links-title', { delay: 700 })
sr.reveal('.footer-home1', { delay: 700 })
sr.reveal('.footer-home2', { delay: 800 })
sr.reveal('.footer-home3', { delay: 900 })
sr.reveal('.copyright', { delay: 1000 })
sr.reveal('.img-text', { delay: 700 })

const names = document.getElementsByClassName('name');
const email = document.getElementsByClassName('email');
const subject = document.getElementsByClassName('subject');
const phonenumber = document.getElementsByClassName('phonenumber');
const message = document.getElementsByClassName('meesage');

function display() {

    //if statements
    alert('Your Email have been sent Jasiri will respond immediately')

}
